<?php
namespace App\Http\Livewire\GeneratedTraits\CarType;

use App\Models\CarType;

trait IndexTrait
{
    public int $perPage = 10;

    public CarType $carType;

    public function render()
    {
        $items = CarType::paginate($this->perPage);

        return view('livewire.car-type.index', compact('items'));
    }

            public function delete(CarType $carType): void
        {
                                                if ($carType->cars()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                                                                if ($carType->cars()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $carType->delete();
        }
    }
