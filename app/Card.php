<?php

namespace App;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Card extends Model
{
  use Sluggable;
  protected $fillable = ['title', 'content', 'category_id'];
  public function caregory()
  {
    return $this->hasOne(Category::class);
  }
  public function author()
  {
    return $this->hasOne(User::class);
  }
  public function sluggable()
  {
    return [
      'slug' => [
        'source' => 'title'
      ]
    ];
  }
  
  public static function add($fields)
  {
      $cards = new self();
      $cards->fill($fields);
      $cards->user_id = \Auth::id();
      $cards->save();
      return $cards;
  }
  public function edit($fields)
  {
    $this->fill($fields);
    $this->save();
  }
  
  public function deleteCard()
  {
    $this->deleteImage();
    $this->delete();
  }
  
  public function uploadImage($image)
  {
    if($image === null) {return;}
    Storage::delete('upload/' . $this->image);
     $name = str_random(10) . '.' . $image->extension();
     $image->storeAs('upload', $name );
     $this->image = $name;
     $this->save();
     return $name;
  }
  
  public function getImage()
  {
    if($this->image == null) {
      return '/image/default.png';
    }
     return '/upload/' . $this->image;
  }
  
  public function deleteImage()
  {
      Storage::delete('upload/' . $this->image);
  }
  
  public function setCategory($id)
  {
    $this->category_id = $id;
    $this->save();
    redirect()->back();
  }
  public function setStatus($status = 0)
  {
    if($status === 0 && $status != 1 ) {
      return;
    }
     $this->status = $status;
  }
  
  public function setCategoty($id = null)
  {
    if(!$id) {
      return;
    }
     $this->category = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  
}
