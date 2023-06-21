<?php

namespace App\Http\Controllers;

use App\Models\Addtocart;
use App\Models\Products;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function index(){
        $id = auth()->user()->id;
        $cartItems = Addtocart::orderBy('id', 'desc')->where('userid', $id)->get();
        $productIds = $cartItems->pluck('productId');
        $products = Products::whereIn('id', $productIds)->get();
        // $cartItems = Addtocart::orderBy('id','desc')->where('userid', $id)->get();
        // $products = Products::where($cartItems->productId)->get();
        if(request()->ajax()){
            return view('cart_list',['products'=>$products , "cartItems"=>$cartItems]);
        }
        else{
            return view('cart_list',['products'=>$products]);
        }
    }
    public function countCart(){
        $id = auth()->user()->id;
        $count = Addtocart::where('userId', $id)->count();
        return response()->json(['count'=>$count]);
    }
    public function addCart(Request $request ,$userId , $productId ){
        $product = new Addtocart;
        $product->userId = $userId; 
        $product->productId = $productId;
        $product->save(); 
        return response()->json(['status'=>true]);
    }

    public function deleteCart(Request $request , $id){
        $product = Addtocart::where('id', $id)->delete();
        return response()->json(['status'=>true]);
        
    }
}
