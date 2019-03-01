<?php

namespace App\Http\Controllers\User;
use App\Card;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentsController extends Controller
{
  public function add(Request $request, $idCard)
  {
 
     $this->validate($request, [
         'text' => "required | min:2"
     ]);
     $com = Comment::add($request->all(), $idCard);
     
     return redirect()->back();
     
  }
}
