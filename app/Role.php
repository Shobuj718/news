<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
     protected $fillable=['name','permission'];

     public function users()
     {
         return $this->hasMany(User::class);
     }
}
