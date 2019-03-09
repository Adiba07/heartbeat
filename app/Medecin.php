<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Medecin extends Model
{Protected $table ="medecins";
    use SoftDeletes;

    protected $dates = ['deleted_at'];
}
