<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<body>
    @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
        @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
        @endif
        @endauth
    </div>
    @endif
    <h1>Blog Name</h1>
    <div class='posts'>
        @foreach ($posts as $post)
        <ul>
            <li>主食；{{$post->staple}}</li>
            <li>主菜；{{$post->main_dish}}</li>
            <li>副菜１；{{$post->side_dish1}}</li>
            <li>副菜２；{{$post->side_dish2}}</li>
            <li>その他；{{$post->etc1}}</li>
            <li>その他２；{{$post->etc2}}</li>
            <li>コメント；{{$post->comment}}</li>
            <li>{{ $post->updated_at }}</li>
        </ul>
        @endforeach
    </div>

    <!-- ページネーションリンクの表示 -->
    {{ $posts->links() }}

    <div class="bg-white shadow-md rounded-lg p-6 mb-4">
        <h2 class="text-xl font-bold mb-2">投稿タイトル</h2>
        <p class="text-gray-700 text-base">投稿本文のテキストがここに入ります。投稿の内容を簡潔に表現し、読者を引き付けるような文章を心がけましょう。</p>
        <div class="flex justify-between items-center mt-4">
            <span class="text-gray-600 text-sm">投稿日: 2024-06-01</span>
            <a href="#" class="text-blue-500 hover:text-blue-700 font-semibold">続きを読む</a>
        </div>
    </div>
</body>

</html>