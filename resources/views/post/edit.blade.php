<x-layout.main title="Edit Post">
    <h1>Edit {{ $post->title }} post</h1>
    <hr>
    <form action="{{ route('posts.update', $post->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            Title: <input name="title" value="{{ $errors->any() ? old('title') : $post->title }}">
            @error('title')
                <div style='color:red'>{{ $message }}</div>
            @enderror
        </div>
        <div>
            Content:
            <textarea name="content">{{ $errors->any() ? old('content') : $post->content }}</textarea>
            @error('content')
                <div style='color:red'>{{ $message }}</div>
            @enderror
        </div><br>
        <hr>
        <button>Update</button>
    </form>
    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button>Remove</button>
    </form>
    <hr>
    <a href="/posts/{{ $post->id }}">Back</a>
</x-layout.main>
