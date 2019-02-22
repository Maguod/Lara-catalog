<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
  public function caregory()
  {
    return $this->hasOne(Category::class);
  }
  public function author()
  {
    return $this->hasOne(User::class);
  }
}
