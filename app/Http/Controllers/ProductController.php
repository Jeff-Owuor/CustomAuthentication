<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

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
            return "Hello";
        }else{
            return redirect('/login ');
        }
 
    }
}
