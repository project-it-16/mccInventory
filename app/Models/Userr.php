<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userr extends Model
{
   // use HasFactory;
    protected $table = 'userrs';
    protected $primaryKey = 'id';
    protected $fillable =  ['name','email','password'];
    // public function setPasswordAttribute($value){

    //      $this->attributes['password'] = bcrypt($value);
    // }

}

