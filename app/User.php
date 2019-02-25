<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
  
  public function cards()
  {
      return $this->hasMany(Card::class);
  }
  
  public static function addUser($fields)
  {
     $user = new self;
     $user->fill($fields);
     $user->password = bcrypt($fields['password']);
     $user->save();
     return $user;

  }
  
  public function removeUser()
  {
    $this->delete();
   
  }
  
  public function makeAdmin()
  {
//     $this->is_admin = 1;
  }

}
