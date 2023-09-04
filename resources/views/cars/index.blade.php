<x-layout.main title="Car List">
    <h1>Cars</h1>
    <a href="{{ route('cars.create') }}">Create new car</a> | <a href="{{ route('cars.trash') }}">Trashed Cars</a>
    <hr>
    <div class="row">
        @foreach ($cars as $car)
            <div class="col-md-3">
                <h3>{{ $car->brand }} {{ $car->model }}</h3>
                <a href="{{ route('cars.edit', [$car->id]) }}">Edit</a>
            </div>
        @endforeach
    </div>
    <hr>
    <a href="/">Main</a>
</x-layout.main>
