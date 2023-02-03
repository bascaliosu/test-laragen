<?php
namespace App\Http\Livewire\Dealer;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\GeneratedTraits\Dealer\IndexTrait;

class Index extends Component
{
    use WithPagination;
    use IndexTrait;
}
