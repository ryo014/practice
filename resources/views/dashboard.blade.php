<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
            <br></br>
        </h2>
        <div class='menus'>
            <!-- <a href='/create'>create</a> -->
            <button type="button" onclick="location.href='{{ route('posts.create') }}'">新規作成</button><br>
            <a href="/">一覧に戻る</a>
            <br></br>
            @foreach ($menus as $menu)
            <div class='menu'>
                <h2>{{$menu->date}}</h2>
                <ul>
                    <li>主食；{{$menu->staple}}</li>
                    <li>主菜；{{$menu->main_dish}}</li>
                    <li>副菜１；{{$menu->side_dish1}}</li>
                    <li>副菜２；{{$menu->side_dish2}}</li>
                    <li>その他；{{$menu->etc1}}</li>
                    <li>その他２；{{$menu->etc2}}</li>
                    <li>コメント；{{$menu->comment}}</li>
                </ul>
                <div class="edit"><a href="/posts/{{ $menu->id }}/edit">更新</a></div>
                <a href='/delete'>削除</a>
                <br></br>
            </div>
            @endforeach
        </div>
    </x-slot>
    <!-- ここから -->

    <!-- <head></head>

    <body> -->

    <!-- </body> -->
</x-app-layout>