<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        //login userの投稿データ取得
        $menus = Menu::where('users_id', $id)->get();

        return view('dashboard', compact('menus'));
    }
}
