<x-layout.main title="Create Car">
    <h1>Create a new car</h1>
    <hr>
    <form method="post" action="/cars">
        @csrf
        <x-input name="brand"/>
        <x-input name="model"/>
        <x-input name="price"/>
        <hr>
        <button>Create</button>
    </form>
    <hr>
    <a href="/cars">Back</a>
</x-layout.main>
