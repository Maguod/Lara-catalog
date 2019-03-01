<?php

namespace App\Http\Controllers\User;

use App\Category;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index()
    {
        $cats = Category::all();
        $user = \Auth::user();
        return view('user.categories.categories' , ['cats' => $cats, 'user' => $user]);
    }
  
    public function store(Request $request)
    {
      $this->validate($request, [
        'title' => "required | min:5 | max:255 | unique:categories"
      ]);
      $cat = Category::addCat($request->all());
      $cat->addAuth(Auth::id());
      return redirect('/');
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
       Category::find($id)->deleteCat();
       redirect()->back();
    }
}
