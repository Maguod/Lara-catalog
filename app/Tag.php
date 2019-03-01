<?php

namespace App;


use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  use Sluggable;
  
  public function card()
  {
    return $this->belongsToMany([
         Card::class,
      'cards_tags',
        'tag_id',
      'card_id' ,
    ]) ;
  }
  
  
  public function sluggable()
  {
    return [
      'slug' => [
        'source' => 'title'
      ]
    ];
  }
}
