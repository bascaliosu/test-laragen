<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\CarType;

trait CarTypeControllerTrait
{
    public function index()
    {
        return view('admin.cartype.index');
    }

    public function create()
    {
        return view('admin.cartype.create');
    }

    public function edit(CarType $carType)
    {
        return view('admin.cartype.edit', compact('carType'));
    }

    public function show(CarType $carType)
    {
        return view('admin.cartype.show', compact('carType'));
    }
}
