<?php

namespace App\Http\Controllers;

use App\Models\Addtocart;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    public function index(){
        return view('welcome');
    }
    //


    // public function productListView(){
    //     $users = Products::orderBy('id','DESC')->get();
    //     return view('product_list',['users'=>$users]);
    // }
    
    public function productsview(){
        $users = Products::orderBy('id','DESC')->get();
        return view('products',['users'=>$users]);
    }
    
    public function productsAdd(Request $request){
        $product = new Products();
        $product->name = $request->name;
        $product->title = $request->title;
        $product->sku = $request->sku;
        $product->description = $request->description;
        $product->summary = $request->summary;
        $product->categories = $request->categories;
        $file = $request->file('image');
        $fileName = time().''.$file->getClientOriginalName();
        $filePath = $file->storeAs('image' , $fileName , 'public');
        $product->image = $filePath;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->mrp = $request->mrp;
        $product->status = $request->status;
        $product->save();
        $users = Products::orderBy('id','DESC')->get();
        return view('product_list',['users'=>$users]);
    }

    // public function changeStatus(Request $request){
    //     $product = Products::find($request->id);
    //     if ($product) {
    //         $product->status = $request->status; 
    //         $product->save();
    //         $users = Products::orderBy('id','DESC')->get();
    //         return view('product_list',['users'=>$users]);
    //         // return response()->json(['success' => true]);
    //     }
        
    // }
    public function updateProductView(Request $request){
        $product = Products::find($request->id);
        if ($product) {
            // return response()->json($product);
            return view('product_update',['product'=>$product]);
            // return response()->json(['success' => true]);
        }
        
    }
    public function updateProduct(Request $request){
        $product = Products::find($request->id);
        $product->name = $request->name;
        $product->title = $request->title;
        $product->sku = $request->sku;
        $product->description = $request->description;
        $product->categories = $request->categories;
        $file = $request->file('image');
        if ($file) {
            // Delete the previous file if it exists
            if ($product->image) {
                $filePath = 'public/' . $product->image;
                Storage::delete($filePath);
            }
        
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('image', $fileName, 'public');
            $product->image = $filePath;
        }
        
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->mrp = $request->mrp;
        $product->save();
        $users = Products::orderBy('id','DESC')->get();
        return view('product_list',['users'=>$users]);        
    }
    // public function deleteProduct(Request $request){
    //     $product = Products::where('id', $request->id)->delete();
        
    //     if ($product) {
    //         $users = Products::orderBy('id','DESC')->get();
    //         return view('product_list',['users'=>$users]);
    //     }
        
    // }


    // Using the new Ajax Method

    public function product2(){
        $products = Products::orderBy('id','desc')->get();
        if(request()->ajax()){
            return view('product2_list',['products'=>$products]);
        }
        else{
            return view('products2', ['products'=>$products]);
        }
    }
    public function addEdit(Request $request){
        $product = new Products();
        $product->name = $request->name;
        $product->title = $request->title;
        $product->sku = $request->sku;
        $product->description = $request->description;
        $product->summary = $request->summary;
        $product->categories = $request->categories;
        $file = $request->file('image');
        $fileName = time().''.$file->getClientOriginalName();
        $filePath = $file->storeAs('image' , $fileName , 'public');
        $product->image = $filePath;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->mrp = $request->mrp;
        $product->status = $request->status;
        $product->save();
        return response()->json(['status'=>true]);
        
    }
    
    public function deleteProduct(Request $request , $id){

        $product = Products::find($id);
        $cartItem = Addtocart::where('productId',$product->id)->delete();

        // Check if the product exists
        if ($product) {
            // Delete the associated image file
            if ($product->image) {
                $filePath = 'public/' . $product->image;
                Storage::delete($filePath);
            }
            // Delete the product from the database
            $product->delete();
            return response()->json(['status'=>true]);
        }
        
    }

    public function changeStatus(Request $request , $id , $status){
        $product = Products::find($id);
        if ($product) {
            $product->status = $status; 
            $product->save();
            return response()->json(['status' => true]);
        }
        
    }


}
