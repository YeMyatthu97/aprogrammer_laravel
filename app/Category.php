<?php

namespace App;

use App\Receipe;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   
   public function receipe()
   {
   	 return $this->hasMany(Receipe::class);
   }
}
