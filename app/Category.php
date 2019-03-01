<?php

namespace App;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  use Sluggable;
  protected $fillable = ['title'];
  public function cards()
  {
    return $this->hasMany(Card::class);
  }
  public function sluggable()
  {
    return [
      'slug' => [
        'source' => 'title'
      ]
    ];
  }
  
  public static function addCat($fields)
  {
      $cat = new self();
      $cat->fill($fields);
      $cat->save();
      return $cat;
  }
  
  public function addAuth($id)
  {
      $this->user_id= $id;
  }
  public function getCatId()
  {
    return  $this->id;
  }
  public function deleteCat()
  {
      $this->delete();
  }
  
}
