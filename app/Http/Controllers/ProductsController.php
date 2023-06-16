<?php

namespace App\Http\Controllers;

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


    public function productsview(){
        $users = DB::select('select * from products');
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
        // $name = $request->file('image')->getClientOriginalName();
        // $request->file('image')->store('public/assets/images/');
        $product->image = $request->image;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->mrp = $request->mrp;
        // if ($request->hasFile('profile_photo')) {
        //     $file = $request->file('profile_photo');
        //     $name = Str::uuid() . "." . $file->getClientOriginalExtension();
        //     $profile_photo = "league/$name";
        //     Storage::disk('public')->put($profile_photo, file_get_contents($file->getRealPath()));
        // }
        $product->save();
        return response()->json($product);
    }
    

}
