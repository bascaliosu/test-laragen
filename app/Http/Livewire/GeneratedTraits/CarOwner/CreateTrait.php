<?php

namespace App\Http\Livewire\GeneratedTraits\CarOwner;

use App\Models\CarOwner;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public CarOwner $carOwner;

                
    public function mount(CarOwner $carOwner)
    {
        $this->carOwner = $carOwner;
                                            }

    public function submit()
    {
        $this->validate();

        $this->carOwner->save();

        return redirect()->route('laragencarOwners.index');
    }

    public function rules(): array
    {
        return [
                                                'carOwner.nume' => [
                                                                                                                                    ],
                    ];
    }
}
