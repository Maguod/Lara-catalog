<?php

namespace App\Http\Controllers\User;

use App\Card;
use Auth;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CardsController extends Controller
{
  public function showCreate()
  {
    $cats = Category::all();
    $user = Auth::user();

    return view('user.cards.create', ['cats' => $cats, 'user' => $user]);
  }
  public function store(Request $request)
  {
    $this->validate($request, [
      'title' => 'required | max:191',
      'content' => 'required | min:10',
      'image'  => 'image',
      'category_id' => 'integer',
    ]);
      $cards = Card::add($request->all());
      $cards->uploadImage($request->file('image'));
      $cards->setCategory($request->get('category_id'));

      return redirect('user/dashboard');
  }
  
  public function showEditForm($id)
  {
    $user = Auth::user();
     $card = Card::find($id);
     return view('user.cards.edit', ['card' => $card, 'user' => $user]);
  }
  public function editCard(Request $request, $id)
  {
   
    if($this->validate($request, [
       'title' => "required | min:5 | max:255",
        'content' => "required | min:5",
      'image' => "image",
    ])) {
      $card = Card::find($id);
      $card->edit($request->all());

      $card->uploadImage($request->file('image'));
    }
  
  
    return redirect()->back();
  }
  
 
  public function delete($id)
  {
     Card::find($id)->deleteCard();
     return redirect()->back();
  }
}
