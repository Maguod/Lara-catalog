<?php

namespace App\Http\Controllers;

use App\Card;
use App\Category;
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
    $mainCat = $this->category->find($id);
    $cards = $this->card->where('category_id', $id)->paginate(4);
    return view('category', ['cats' => $cats, 'cards' => $cards, 'mainCat' => $mainCat]);
  }
  public function singleCard($id)
  {
    $cats = $this->category::all();
    $card = $this->card->find($id);
    return view('single', ['cats' => $cats, 'card' => $card]);
  }
  
  public function loginForm()
  {
    return view('login');
  }
  public function registerForm()
  {
    return view('register');
  }

}
