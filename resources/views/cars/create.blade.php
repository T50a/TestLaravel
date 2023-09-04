<x-layout.main title="Create Car">
    <h1>Create a new car</h1>
    <hr>
    <x-form method="post" action="{{ route('cars.store') }}">
        @csrf
        @include('cars.form')
        <hr>
        <button class="btn btn-success">Create</button>
    </x-form>
    <hr>
    <button class="btn btn-outline-dark"><a href="/cars">Back</a></button>
</x-layout.main>
