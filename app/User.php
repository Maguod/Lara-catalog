<?php

namespace App;
use App\Http\Controllers\Auth\VerificationController;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


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
        'name', 'email',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
  
  public function id()
  {
      return $this->id;
  }
  
  public function cards()
  {
      return $this->hasMany(Card::class);
  }
  
  public function comments()
  {
    return $this->hasMany(Comment::class);
  }
  
  public static function addUser($fields)
  {
     $user = new self();
     $user->fill($fields);
    if($fields['password'] != null) {
      $user->password = Hash::make($fields['password']);
    }
    $user->remember_token = str_random(20);

     $user->save();

    return $user;
  }
  
  public function edit($fields)
  {
     $this->fill($fields);
     if($fields['password'] != null) {
       $this->password = Hash::make($fields['password']);
     }
     
     $this->save();
  }
  public function uploadAvatar($image)
  {
    if($image === null) {return;}
    Storage::delete('upload/avatar/' . $this->avatar);
    $name = str_random(10) . '.' . $image->extension();
    $image->storeAs('upload/avatar', $name );
    $this->avatar = $name;
    $this->save();
    return $name;
  }
  
  public function getAvatar()
  {
    if($this->avatar == null) {
      return '/image/default.png';
    }
    return '/upload/avatar/' . $this->avatar;
  }
  
  public function deleteAvatar()
  {
    Storage::delete('upload/avatar/' . $this->avatar);
  }
  public function removeUser()
  {
    $this->deleteAvatar();
    $this->delete();
  }
  
  public function makeAdmin()
  {
     $this->is_admin = 1;
  }
  
  public function remakeAdmin()
  {
    $this->is_admin = 0;
  }
  
  public function isAdmin()
  {
     if(1 == $this->is_admin) {
       return true;
     }
     return false;
  }

}
