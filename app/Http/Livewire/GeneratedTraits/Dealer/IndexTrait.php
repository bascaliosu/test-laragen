<?php
namespace App\Http\Livewire\GeneratedTraits\Dealer;

use App\Models\Dealer;

trait IndexTrait
{
    public int $perPage = 10;

    public Dealer $dealer;

    public function render()
    {
        $items = Dealer::paginate($this->perPage);

        return view('livewire.dealer.index', compact('items'));
    }

            public function delete(Dealer $dealer): void
        {
            
            $dealer->delete();
        }
    }
