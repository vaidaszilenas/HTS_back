<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PanevezysPhoto;

class PanevezysPhoto extends Model
{
  // public function utena() {
  //   return $this->belongsTo('App\Utena'); //  or whatever your namespace is
  // }
  protected $fillable = ['photo', 'panevezys_id'];
  protected $table = 'panevezys_photos';

  public function getUrlAttribute()
 {
   // return str_replace('public', 'storage', $this->file_name);
   $photoUrl = explode('/', $this->file_name);
   $photoUrl[0] = 'storage';
   $photoUrl = implode('/', $photoUrl);

   return $photoUrl;
 }

 public function nextGetUrlAttribute()
 {
  // return str_replace('public', 'storage', $this->file_name);
  $photoUrl = explode('/', $this->file_name);
  $photoUrl[0] = '/storage';
  $photoUrl = implode('/', $photoUrl);

  return $photoUrl;
 }
}
