<?php

namespace App\Http\Livewire\Car;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\GeneratedTraits\Car\IndexTrait;

class Index extends Component
{
    use WithPagination;
    use IndexTrait;
}
