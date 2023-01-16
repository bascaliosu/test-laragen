<?php

namespace App\Http\Livewire\GeneratedTraits\Car;

use App\Models\Car;
                use App\Models\User;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public Car $car;

                                    public Collection $users;
            
    public function mount(Car $car)
    {
        $this->car = $car;
                                                                                $this->users = $this->car->users;
                        }

    public function submit()
    {
        $this->validate();

        $this->car->save();

        return redirect()->route('laragencars.index');
    }

    public function rules(): array
    {
        return [
                                                'car.name' => [
                                                                                                                                    ],
                                                'users' => [
                                                                                                                                    ],
                    ];
    }
}
