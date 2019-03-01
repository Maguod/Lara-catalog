<?php

namespace App\Http\Controllers\User;

use App\Card;
use App\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  protected $id;
  public function __construct()
  {

  }
  
  public function login(Request $request)
  {
     if($this->validate($request, [
          'email' => 'required | email',
          'password' => 'required',
       ])) {
  
       $res = Auth::attempt([
         'email'    => $request->get('email'),
         'password' => $request->get('password'),
       ]);
  
       if (!$res) {
         return redirect()->back()->with('error_login', 'Неверный логин или пароль');
       }
       
     }else {
       return redirect()->back();
     }
    return redirect('/');

  }

  public function logout()
  {
    Auth::logout();
    return redirect('/');
  }
  
  public function register(Request $request)
  {
//    $credentials = $request->only('name', 'email', 'password');
    if( $this->validate($request, [
      'name' => 'required | min:4| max:250',
      'email' => 'required | email | unique:users',
      'password' => 'required | min:4| max:50',
    ]))
    
    $user = User::addUser(['name' => $request['name'], 'email' => $request['email'], 'password' => $request['password']]);
      Auth::login($user, true);
//      Auth::routes(['verify' => true]);
      return redirect('/');
  }
  public function deleteUser()
  {
    $id = Auth::id();
    User::find($id)->removeUser();
    return redirect('/');
  }
  
  public function dashboardUser()
  {
    $id = Auth::id();
    $user = User::find($id);
    
    $cards = Card::where('user_id', $id)->paginate(8);

    return view('user.dashboad', ['cards' => $cards, 'user' => $user]);
  }
  
  public function showProfile()
  {
    $id = Auth::id();
    $user = User::find($id);
    return view('user.profile.profile', ['user' => $user]);
  }
  
  public function editProfile(Request $request)
  {
    $this->validate($request, [
      'name' => "required | min:4",
      'email' => [
         "required ",
        "email",
        Rule::unique('users')->ignore(Auth::id()),
      ],

      'password' => "nullable | min:5 | max:191",
      'image' => "nullable | image",
    ]);
     $user = User::find(Auth::id());
     $user->edit($request->all());
     $user->uploadAvatar($request->file('avatar'));
      return redirect()->route('user.home');
   }
  

}
