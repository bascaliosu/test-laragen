<?php
namespace App\Http\Livewire\App\Cars\Car;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Generated\Cars\Car\IndexTrait;

class Index extends Component
{
    use WithPagination;
    use IndexTrait;
}
