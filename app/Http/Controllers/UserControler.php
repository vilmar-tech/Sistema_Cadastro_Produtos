<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product;

class UserControler extends Controller
{
    public function get()
    {
        return "Olá controller";
    }
    public function index(){
        $products = Product::all();
        return view('welcome',['products'=> $products]);
    }
}

