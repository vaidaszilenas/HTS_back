<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\VilniusPhoto;

class Vilnius extends Model
{
  public function photo() {
    return $this->hasMany('App\VilniusPhoto'); //  or whatever your namespace is
  }

 protected $fillable = ['pond', 'small-describe', 'describe', 'district', 'file_name'];
 protected $table = 'vilnius';

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
