<?php
namespace App\Http\Livewire\GeneratedTraits\CarType;

use App\Models\CarType;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public CarType $carType;

                        
    public function mount(CarType $carType)
    {
        $this->carType = $carType;
                                }

    public function submit()
    {
        $this->validate();

        $this->carType->save();

        return redirect()->route('laragen.admin.car_types.index');
    }

    public function rules(): array
    {
        return [
                                                                    'carType.name' => [
                                                                                                                ],
                    ];
    }
}
