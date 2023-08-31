<x-layout.main title="Edit car">
    <h1>{{ $car->brand }}</h1>
    <h2>{{ $car->model }}</h2>
    <h3>{{ $car->price }}$</h3>
    <hr>
    <form action="{{ route('cars.update', $car->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            Brand: <input name="brand" value="{{ $errors->any() ? old('brand') : $car->brand }}">
            @error('brand')
                <div style='color:red'>{{ $message }}</div>
            @enderror
        </div>
        <div>Model: <input name="model" value="{{ $errors->any() ? old('model') : $car->model }}"></div>
        @error('model')
            <div style='color:red'>{{ $message }}</div>
        @enderror
        <div>Price: <input name="price" value="{{ $errors->any() ? old('price') : $car->price }}"></div>
        @error('price')
            <div style='color:red'>{{ $message }}</div>
        @enderror
        <hr>
        <button>Update</button>
    </form>
    <form action="{{ route('cars.destroy', $car->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button>Remove</button>
    </form>
    <hr>
    <a href="/cars/{{ $car->id }}">Back</a>
</x-layout.main>
