<x-layout.main title="Edit car">
    <h1>{{ $car->brand }}</h1>
    <h2>{{ $car->model }}</h2>
    <h3>{{ $car->price }}$</h3>
    <hr>
    <x-form action="{{ route('cars.update', $car->id) }}" method="put">
        @csrf
        @bind($car)
        @include('cars.form')
        @endbind
        <hr>
        <button class="btn btn-primary">Update</button>
    </x-form>
    <x-form :action="route('cars.destroy', $car->id) " method="delete">
        @csrf
        <br>
        <button class="btn btn-danger">Remove</button>
    </x-form>

    <hr>

    <button class="btn btn-outline-dark"><a href="/cars/{{ $car->id }}">Back</a></button>
</x-layout.main>
