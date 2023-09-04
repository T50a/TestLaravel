<x-layout.main title="Trashed Cars">
    <h1>Trashed Cars</h1>
    <a href="{{ route('cars.index') }}">Car List</a>
    <hr>
    <div class="row">
        @foreach ($cars as $car)
            <div class="col-md-3">
                <h3>{{ $car->brand }} {{ $car->model }}</h3>
                <x-form method="put" :action="route('cars.restore', [$car->id])">
                    <button class="btn btn-success">Restore</button>
                </x-form>
            </div>
        @endforeach
    </div>
    <hr>
    <a href="/">Main</a>
</x-layout.main>
