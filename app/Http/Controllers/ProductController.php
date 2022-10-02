<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;

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
    public function productList(){
        $userId = Session::get('loginId');
        $products = DB::table('cart')
        -> join('product_models','cart.product_id','=','product_models.id')
        -> where('cart.user_id',$userId)
        -> select('product_models.*','cart.id as cart_id')
        ->get();

        return view('productList',['products'=>$products]);
    }
    function removeCart($id){
        Cart::destroy($id);
        return redirect('/productList');
    }
    function orderNow(){
        $userId = Session::get('loginId');
        $total =  $products = DB::table('cart')
        ->join('product_models','cart.product_id','=','product_models.id')
        ->where('cart.user_id',$userId)
        ->sum('product_models.price');
        return view('orderNow',['total'=>$total]);
    }
    function orderPlace(Request $req){
        $userId = Session::get('loginId');
        $allCart = Cart::where('user_id',$userId)-> get();

        foreach($allCart as $cart){
            $order= new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status="pending";
            $order->address=$req->address;
            $order->save();
            Cart::where('user_id',$userId)-> delete();
        }

       $req->input();
       return redirect('/');
    } 
}
