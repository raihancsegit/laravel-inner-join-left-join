<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
   public function course(){
       return $this->hasManyThrough(Course::class, Learner::class);
   }
}
