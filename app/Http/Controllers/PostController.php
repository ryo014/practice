<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class PostController extends Controller
{
    public function posts()
    {
        // ページネーションを使って投稿データを取得
        $posts = Menu::orderBy('updated_at', 'DESC')->paginate(10);

        return view('posts.home', compact('posts'));
    }

    public function create()
    {
        // 新規作成ページのビューを返す
        return view('posts.create');
    }

    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        return view('posts.edit', compact('menu'));
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);
        $menu->update($request->all());
        return redirect()->route('posts.home');
    }
}
