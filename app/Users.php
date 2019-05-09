<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Role;
class Users extends Model
{
    protected $fillable = [
        'name', 'email', 'password','role_id'
    ];
    protected $table = 'usertype';


    public function role(){
        return $this->belongsTo('App\Role');
    }
}
