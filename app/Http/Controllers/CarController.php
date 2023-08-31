<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();

        return view('car.index', compact('cars'));
    }

    public function create()
    {
        return view('car.create');
    }

    public function store(CarRequest $request)
    {
        $car = Car::create($request->validated());
        return redirect("/cars/{$car->id}");
    }

    public function show(string $id)
    {
        $car = Car::findOrFail($id);

        return view('car.show', compact('car'));
    }

    public function edit(string $id)
    {
        $car = Car::findOrFail($id);

        return view('car.edit', compact('car'));
    }

    public function update(CarRequest $request, string $id)
    {
        $car = Car::findOrFail($id);
        $car->update($request->validated());
        return view('car.show', compact('car'));
    }

    public function destroy(string $id)
    {
        $car = Car::findOrFail($id);
        $car->delete();

        return redirect()->route('cars.index')->with('success', 'Car deleted successfully');
    }
}
