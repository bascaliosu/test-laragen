<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\Car;

trait CarControllerTrait
{
    public function index()
    {
        return view('admin.car.index');
    }

    public function create()
    {
        return view('admin.car.create');
    }

    public function edit(Car $car)
    {
        return view('admin.car.edit', compact('car'));
    }

    public function show(Car $car)
    {
        return view('admin.car.show', compact('car'));
    }
}
