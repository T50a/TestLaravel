<x-layout.main title="Post List">
    <h1>Posts</h1>
    <hr>
    <a href="/posts/create">Create new post</a>
    <hr>
    <ol>
        @foreach ($posts as $post)
            <li><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></li>
        @endforeach
    </ol>

    <a href="/">Main</a>
</x-layout.main>
