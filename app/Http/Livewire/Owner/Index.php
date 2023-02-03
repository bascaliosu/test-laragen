<?php
namespace App\Http\Livewire\Owner;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\GeneratedTraits\Owner\IndexTrait;

class Index extends Component
{
    use WithPagination;
    use IndexTrait;
}
