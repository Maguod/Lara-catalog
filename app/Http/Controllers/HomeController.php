<?php

namespace App\Http\Controllers;

use App\Card;
use App\Category;
use App\Comment;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers;

class HomeController extends Controller
{
  public $category;
  public $card;
  public function __construct(Category $category, Card $card)
  {
    $this->category = $category;
    $this->card = $card;
  }
  
  public function index()
  {
    $cats = Category::all();
    $cards = Card::paginate(8);

     return view('pages.index', ['cards' => $cards, 'cats' => $cats]);
   }
  public function category($id)
  {
    $cats = Category::all();
    $mainCat = Category::find($id);
    $cards = Card::where('category_id', $id)->paginate(4);
    return view('pages.categories', ['cats' => $cats, 'cards' => $cards, 'mainCat' => $mainCat]);
  }
  public function singleCard($id)
  {
    $comments = Comment::where('card_id', $id )->where('status', 1)->get();
    $cats = Category::all();
    $card = Card::find($id);
    return view('pages.single', ['cats' => $cats, 'card' => $card, 'comments' => $comments]);
  }
  
  public function loginForm()
  {
    return view('pages.login');
  }
  public function registerForm()
  {
    return view('pages.register');
  }

}
