<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('welcome');

    }



    public function index()
    {
         $categories= Category::all('name') ;
         $products=Product::all();

        return view('home',compact('categories','products'));
    }
}
