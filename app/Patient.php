<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    Protected $table ="patients";
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'user_id',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
