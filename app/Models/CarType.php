<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use App\Models\GeneratedTraits\CarTypeTrait;

class CarType extends EloquentModel
{
    use CarTypeTrait;
}
