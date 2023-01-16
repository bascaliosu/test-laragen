<?php

namespace App\Http\Livewire\GeneratedTraits\User;

use App\Models\User;
                    use App\Models\Car;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                                public Collection $cars;
            
    public User $user;

    public function mount(User $user)
    {
        $this->user = $user;
                                                                                                                $this->cars = $this->user->cars;
                        }

    public function submit()
    {
        $this->validate();

        $this->user->save();

        return redirect()->route('laragenusers.index');
    }

    public function rules(): array
    {
        return [
                                                'user.name' => [
                                                                                                                ],
                                                'user.email' => [
                                                                                                                ],
                                                'cars' => [
                                                                                                                ],
                    ];
    }
}
