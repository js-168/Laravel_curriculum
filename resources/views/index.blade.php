<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">


    </head>
    <body>
        <h1>Blog Name</h1>
        <a href='/posts/create'>create</a>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    // <h2 class='title'>{{ $post->title }}</h2>
                    <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                    <p class='body'>{{ $post->body }}</p>
                </div>   
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button> 
        </form>
    </body>
</html>
