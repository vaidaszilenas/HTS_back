<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Photo extends Model
{
  public function utena() {
    return $this->belongsTo('App\Utena'); //  or whatever your namespace is
  }
  protected $fillable = ['photo', 'hts_structure_id'];
  protected $table = 'photo';
}
