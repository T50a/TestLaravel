<x-layout.main title="Car List">
    <h1>Cars</h1>
    <hr>
    <a href="/cars/create">Create new car</a>
    <hr>
    <ol>
        @foreach ($cars as $car)
            <ul><a href="/cars/{{ $car->id }}">{{ $car->brand }} {{ $car->model }}</a></ul>
        @endforeach
    </ol>

    <a href="/">Main</a>
</x-layout.main>
