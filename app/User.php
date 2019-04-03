<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
       'name', 'email', 'password'
     ];
     protected $attributes = [ //jei ne adminas registruojasi reik kad is admin 0 butu
       'is_admin' => 0
     ];

     /**
      * The attributes that should be hidden for arrays.
      *
      * @var array
      */
     protected $hidden = [
         'password', 'remember_token',
     ];
     public function isAdmin(){
       if ($this->is_admin == 1) {
         return true;
       }else{
         return false;
       }
     }
}
