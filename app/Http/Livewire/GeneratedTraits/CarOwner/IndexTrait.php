<?php

namespace App\Http\Livewire\GeneratedTraits\CarOwner;

use App\Models\CarOwner;

trait IndexTrait
{
    public int $perPage = 10;

    public CarOwner $carowner;

    public function render()
    {
        $items = CarOwner::paginate($this->perPage);

        return view('livewire.car-owner.index', compact('items'));
    }
}
