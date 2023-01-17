<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use App\Models\GeneratedTraits\CarOwnerTrait;

class CarOwner extends EloquentModel
{
    use CarOwnerTrait;
}
