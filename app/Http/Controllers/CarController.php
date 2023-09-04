<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::orderByDesc('created_at')->get();

        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        $color = config('app-cars.color');

        return view('cars.create', compact('color'));
    }

    public function store(CarRequest $request)
    {
        $car = Car::create($request->validated());

        return redirect()->route('cars.show', [$car->id])->with('notification', config('notifications.cars.create'));
    }

    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }

    public function edit(Car $car)
    {
        $color = config('app-cars.color');

        return view('cars.edit', compact('car', 'color'));

    }

    public function update(CarRequest $request, Car $car)
    {
        $car->update($request->validated());

        return redirect()->route('cars.show', compact('car'))->with('notification', config('notifications.cars.update'));
    }

    public function destroy(Car $car)
    {
        $car->delete();

        return redirect()->route('cars.index')->with('notification', config('notifications.cars.destroy'));
    }

    public function trash()
    {
        $cars = Car::onlyTrashed()->orderByDesc('created_at')->get();

        return view('cars.trash', compact('cars'));
    }

    public function restore(string $id) {
        $car = Car::onlyTrashed()->findOrFail($id);
        $car->restore();

        return redirect()->route('cars.index')->with('notification', config('notifications.cars.restore'));
    }
}
