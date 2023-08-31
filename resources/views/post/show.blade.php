<x-layout.main title="Shop Post">
    <h1>{{ $post->title }}</h1>
    <div>
        <p>{{ $post->content }}</p>
    </div>
    <a href="/posts/{{ $post->id }}/edit">Edit</a><br>
    <a href="/posts">Back</a><br>

    <a href="/">Main</a>
</x-layout.main>
