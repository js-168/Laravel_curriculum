<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content_title'>
                <h2>タイトル</h2>
                <input type='text' name='post[title]' placeholder="タイトル" value="{{ $post->title }}"/>
            </div>
            <div class='content_body'>
                <h2>本文</h2>
                <input type='text' name='post[body]' placeholder="今日も１日お疲れ様でした。" value="{{ $post->body }}"/>
            </div>
            <input type="submit" value="保存">
            <div class="footer">[<a href="/posts">戻る</a>]</div>
        </form>
    </body>
</html>
