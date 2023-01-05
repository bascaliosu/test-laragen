<?php

namespace App\Http\Livewire\GeneratedTraits\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public User $user;

    
    public function mount()
    {
            }

    public function submit()
    {
        $this->validate();

        $this->user->save();

        return redirect()->route('admin.user.index');
    }

    public function validation(): array
    {
        return [
                    ];
    }
}
