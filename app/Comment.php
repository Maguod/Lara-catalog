<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $fillable = ['text'];
  protected $table = 'comments';
  
  public function card()
  {
    return $this->hasOne(Card::class);
  }
  
  public function author()
  {
    return $this->hasOne(User::class);
  }
  
  public static function add($fields,$cardId)
  {
    $comment = new self();
    $comment->fill($fields) ;
    $comment->user_id = \Auth::id();
    $comment->card_id = $cardId;
    $comment->status = 0;
    $comment->date = date("Y-m-d");

    $comment->save();
  }
  public function remove()
  {
   $this->delete();
  }
  
  public function getAuthor()
  {
    $id = $this->user_id;
     return  User::find($id)->name;
  }
  public function public()
  {
    $this->status = 1;
    $this->save();
  }
  
  public function hidden()
  {
    $this->status = 0;
    $this->save();
  }
}
