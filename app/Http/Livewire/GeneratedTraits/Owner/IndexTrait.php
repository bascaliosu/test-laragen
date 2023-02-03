<?php
namespace App\Http\Livewire\GeneratedTraits\Owner;

use App\Models\Owner;

trait IndexTrait
{
    public int $perPage = 10;

    public Owner $owner;

    public function render()
    {
        $items = Owner::paginate($this->perPage);

        return view('livewire.owner.index', compact('items'));
    }

            public function delete(Owner $owner): void
        {
            
            $owner->delete();
        }
    }
