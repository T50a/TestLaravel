<x-layout.main title="Create Post">
    <h1>Create new post</h1>
    <hr>
    <form method="post" action="/posts">
        @csrf
        <div>
            Title: <input name="title" value="{{ old('title') }}">
            @error('title')
            <div style='color:red'>{{ $message }}</div>
            @enderror
        </div>
        <div>Content:<textarea name="content">{{ old('content') }}</textarea>
            @error('content')
            <div style='color:red'>{{ $message }}</div>
            @enderror
        </div><br>
        <hr>
        <button>Create</button>
    </form>
    <hr>
    <a href="/posts">Back</a>
</x-layout.main>
