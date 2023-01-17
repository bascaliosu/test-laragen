<?php

namespace App\Http\Livewire\CarOwner;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\GeneratedTraits\CarOwner\IndexTrait;

class Index extends Component
{
    use WithPagination;
    use IndexTrait;
}
