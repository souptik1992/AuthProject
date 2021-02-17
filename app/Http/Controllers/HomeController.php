<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome(){
        $products = Product::get();
        if(!empty($products)){
            return view('welcome', compact('products'));
        }
    }
    public function index()
    {
        return view('home');
    }
    public function getProducts(){

       $products = Product::get();
       if(!empty($products)){
           return view('section.products', compact('products'));
       }

    }
    public function getProductDetails($flag){

        $products = Product::with('getImages')->where('proname', $flag)->get();
        if(!empty($products)){
            $products = $products[0];
            $images = $products->getImages;
            // dd($images);
            return view('section.productdetails', compact('products','images'));
        }
 
     }
}
