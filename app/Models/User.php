<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    public $timestamps=false;
    protected $guarded=[];
    protected $hidden=[
        'password','remembar_token',
    ];
    protected function casts():array{
        return[
          'password'=>'hashed',
        ];
    }
   
}
