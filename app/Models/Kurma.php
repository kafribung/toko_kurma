<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Import yg login
use Auth;

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

   // Author
   public function author()
   {
      $user = Auth::user();
      if (Auth::check()) {
         if ($user->id == $this->user_id) 
            return true;
          else return abort('403', 'Anda Bukan Ownernya');
      } else return false;
   }
}
