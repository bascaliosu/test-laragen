<?php

namespace App\Http\Livewire\GeneratedTraits\User;

use App\Models\User;

trait IndexTrait
{
    public int $perPage = 10;

    public User $user;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.user.index', compact('items'));
    }
}
