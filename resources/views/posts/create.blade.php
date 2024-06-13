<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Blog</title>
</head>

<body>
    <h1>Blog Name</h1>
    <form action="/posts" method="POST">
        @csrf
        <div class="date">
            <h2>日付</h2>
            <input type="text" name="post[title]" placeholder="" value="{{ old('post.title') }}" />
        </div>
        <div class="category">
            <h2>主食カテゴリー</h2>
            <input name="post[category]" placeholder="">{{ old('post.category') }}
        </div>
        <div class="staple">
            <h2>主食</h2>
            <input name="post[staple]" placeholder="">{{ old('post.staple') }}
        </div>
        <div class="main_dish">
            <h2>主菜</h2>
            <input name="post[main_dish]" placeholder="">{{ old('post.main_dish') }}
        </div>
        <div class="side_dish1">
            <h2>副菜1</h2>
            <input name="post[side_dish1]" placeholder="">{{ old('post.side_dish1') }}
        </div>
        <div class="side_dish2">
            <h2>副菜2</h2>
            <input name="post[side_dish2]" placeholder="">{{ old('post.side_dish2') }}
        </div>
        <div class="etc1">
            <h2>その他1</h2>
            <input name="post[etc1]" placeholder="">{{ old('post.etc1') }}
        </div>
        <div class="etc2">
            <h2>その他2</h2>
            <input name="post[etc2]" placeholder="">{{ old('post.etc2') }}
        </div>
        <div class="comment">
            <h2>コメント</h2>
            <textarea name="post[comment]" placeholder="">{{ old('post.comment') }}</textarea>
        </div>
        <input type="submit" value="更新" />
    </form>
    <div class="footer">
        <a href="/">一覧に戻る</a>
        <a href="/dashboard">戻る</a>
    </div>
</body>

</html>