<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\GeneratedTraits\User\IndexTrait;

class Index extends Component
{
    use WithPagination;
    use IndexTrait;
}
