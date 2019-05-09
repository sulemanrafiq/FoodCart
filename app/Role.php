<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Users;
class Role extends Model
{
    protected $fillable = [
        'name',

    ];


    public function users(){
        return $this->hasMany('App\Users');
    }
}
