<?php

namespace App\Http\Livewire\GeneratedTraits\Car;

use App\Models\Car;

trait IndexTrait
{
    public int $perPage = 10;

    public Car $car;

    public function render()
    {
        $items = Car::paginate($this->perPage);

        return view('livewire.car.index', compact('items'));
    }
}
