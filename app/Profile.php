<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profile';
    protected $guarded = [] ;
    public function users()
    {
        return $this->belongsTo('App\User', 'id_user');
    }
}
