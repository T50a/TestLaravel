<x-layout.main title="Show Car">
    <h1>{{ $car->brand }}</h1>
    <h2>{{ $car->model }}</h2>
    <h3>{{ $car->price }}$</h3>
    <a href="/cars/{{ $car->id }}/edit">Edit</a><br>
    <a href="/cars">Back</a><br>

    <a href="/">Main</a>
</x-layout.main>
