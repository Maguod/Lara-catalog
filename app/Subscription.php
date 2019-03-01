<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
  private $table = 'subscriptions';
  
  
  public static function add($email)
  {
    $sub = new self();
    $sub->email = $email;
    $sub->token = str_random(50);
    $sub->save();
    return $sub;
   }
  
  public function remove()
  {
      $this->delete();
   }
}
