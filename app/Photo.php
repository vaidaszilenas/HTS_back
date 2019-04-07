<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Utena;

class Photo extends Model
{
  public function utena() {
    return $this->belongsTo('App\Utena'); //  or whatever your namespace is
  }
  protected $fillable = ['photo', 'utena_id'];
  protected $table = 'photos';
}
