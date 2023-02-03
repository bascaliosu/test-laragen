<?php
namespace App\Http\Livewire\GeneratedTraits\Car;

use App\Models\Car;
                    use App\Models\Owner;
                    use App\Models\CarType;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public Car $car;

                                            public Collection $owners;
                                        public Collection $carTypes;
                    
    public function mount(Car $car)
    {
        $this->car = $car;
                                                        $this->owners = Owner::all();
                                                $this->carTypes = CarType::all();
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
                                                                    'car.car_owner_id' => [
                                                                                                                ],
                                                                    'car.type_id' => [
                                                                                                                ],
                    ];
    }
}
