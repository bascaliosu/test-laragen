<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use App\Models\GeneratedTraits\OwnerTrait;

class Owner extends EloquentModel
{
    use OwnerTrait;
}
