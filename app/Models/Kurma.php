<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kurma extends Model
{
   protected $touches = ['user'];
   protected $guarded = ['created_at', 'updated_at'];
   
   // Relation Many To One (Kurma)
   public function user()
   {
      return $this->belongsTo('App\Models\User');
   }

   // Mutator
   public function getImgAttribute($value)
   {
      return url('kurma', $value);
   }
}
