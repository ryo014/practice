<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Blog</title>
</head>

<body>
    <h1>編集</h1>
    <div class="content">
        <form action="{{ route('posts.update', $menu->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="date">
                <h2>日付</h2>
                <input type="text" name="menu[title]" placeholder="" value="{{ old('menu.title') }}" />
            </div>
            <div class="category">
                <h2>主食カテゴリー</h2>
                <input type="text" name="category" value="{{ $menu->category }}">
            </div>
            <div class="staple">
                <h2>主食</h2>
                <input type="text" name="staple" value="{{ $menu->staple }}">
            </div>
            <div class="main_dish">
                <h2>主菜</h2>
                <input type="text" name="main_dish" value="{{ $menu->main_dish }}">
            </div>
            <div class="side_dish1">
                <h2>副菜1</h2>
                <input type="text" name="side_dish1" value="{{ $menu->side_dish1 }}">
            </div>
            <div class="side_dish2">
                <h2>副菜2</h2>
                <input type="text" name="side_dish2" value="{{ $menu->side_dish2 }}">
            </div>
            <div class="etc1">
                <h2>その他1</h2>
                <input type="text" name="etc1" value="{{ $menu->etc1 }}">
            </div>
            <div class="etc2">
                <h2>その他2</h2>
                <input type="text" name="etc2" value="{{ $menu->etc2 }}">
            </div>
            <div class="comment">
                <h2>コメント</h2>
                <input type="text" name="comment" value="{{ $menu->comment }}">
            </div>
            <input type="submit" value="更新" />
        </form>
        <div class="footer">
            <a href="/">一覧に戻る</a>
            <a href="/dashboard">戻る</a>
        </div>
</body>

</html>