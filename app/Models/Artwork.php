<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
  use HasFactory;
  
  public function events()
  {
    return $this->belongsToMany(Event::class)->withPivot('role');
  }
  public function collectives()
  {
    return $this->belongsToMany(Collective::class)->withPivot('role');
  }
  public function artworks()
  {
    return $this->belongsToMany(Artwork::class)->withPivot('role');
  }
}
