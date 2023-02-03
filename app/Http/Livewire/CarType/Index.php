<?php
namespace App\Http\Livewire\CarType;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\GeneratedTraits\CarType\IndexTrait;

class Index extends Component
{
    use WithPagination;
    use IndexTrait;
}
