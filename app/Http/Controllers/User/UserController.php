<?php

namespace App\Http\Controllers\User;

use App\Card;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  protected $user;
  public function __construct(User $user)
  {
    $this->user = $user;
  }
  
  public function login(Request $request)
  {
     $this->validate($request, [
          'email' => 'required | email',
          'password' => 'required',
       ]);
     
    $res =  Auth::attempt([
       'email' => $request->get('email'),
       'password' => $request->get('password'),
     ]);

    if($res) {
      return redirect('/');
    }
    return redirect()->back()->with('error_login', 'Неверный логин или пароль');

  }

  public function logout()
  {
    Auth::logout();
    return redirect('/');
  }
  
  public function register(Request $request)
  {
    if( $this->validate($request, [
      'name' => 'required | min:4| max:250',
      'email' => 'required | email | unique:users',
      'password' => 'required | min:4| max:50',
    ]))
    
    $user = User::addUser(['name' => $request['name'], 'email' => $request['email'], 'password' => $request['password']]);
  
      return redirect('/');
  }
  public function deleteUser($id)
  {
    User::find($id)->removeUser();
    return redirect('/');
  }
  
  public function dashboardUser($id)
  {
    $user = User::find($id);
    $cards = Card::where('user_id', $id)->paginate(8);

    return view('user.dashboad', ['cards' => $cards, 'user' => $user]);
  }

}
