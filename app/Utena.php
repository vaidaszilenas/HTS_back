<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utena extends Model
{
 protected $fillable = ['pond', 'small-describe', 'describe', 'district', 'file_name'];
 protected $table = 'hts_structures_utena';

 public function getUrlAttribute()
{
  // return str_replace('public', 'storage', $this->file_name);
  $photoUrl = explode('/', $this->file_name);
  $photoUrl[0] = 'storage';
  $photoUrl = implode('/', $photoUrl);

  return $photoUrl;
}
}
