<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use App\Models\GeneratedTraits\DealerTrait;

class Dealer extends EloquentModel
{
    use DealerTrait;
}
