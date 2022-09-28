<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\Cart;
use Session;

class ProductController extends Controller
{
    //
    function index(){
        $data = ProductModel::all();
        return view('products',['products'=>$data]);
    }
    function detail($id){
        $data = ProductModel::find($id);
        return view('detail',['product'=>$data]);
    }
    function addToCart(Request $request){
        if($request->session()->has('loginId')){
            $cart = new Cart();
            $cart -> user_id = $request->session()->get('loginId');
            $cart -> product_id = $request-> product_id;
            $cart->save();
            return redirect('/');
        }else{
            return redirect('/login ');
        }
 
    }
    static function cartItem(){
        $userId = Session::get('loginId');
        return Cart::where('user_id',$userId)->count();
    }
}
