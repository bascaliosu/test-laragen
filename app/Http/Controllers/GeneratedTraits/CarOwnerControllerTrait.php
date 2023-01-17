<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\CarOwner;

trait CarOwnerControllerTrait
{
    public function index()
    {
        return view('admin.carowner.index');
    }

    public function create()
    {
        return view('admin.carowner.create');
    }

    public function edit(CarOwner $carowner)
    {
        return view('admin.carowner.edit', compact('carowner'));
    }

    public function show(CarOwner $carowner)
    {
        return view('admin.carowner.show', compact('carowner'));
    }
}
