<?php
namespace App\Http\Livewire\GeneratedTraits\Car;

use App\Models\Car;
                use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public Car $car;

                                            
    public function mount(Car $car)
    {
        $this->car = $car;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->car->save();

        return redirect()->route('laragen.admin.cars.index');
    }

    public function rules(): array
    {
        return [
                                                                    'car.name' => [
                                                                                                                ],
                                                                    'car.prenume' => [
                                                                                                                ],
                    ];
    }
}
