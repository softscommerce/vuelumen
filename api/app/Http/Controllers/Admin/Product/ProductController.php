<?php

namespace App\Http\Controllers\Admin\Product;

use App\Helpers\StorageUpload;
use App\Http\Controllers\Controller;
use App\Models\Admin\ArcriveProduct;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProduct(){
        $brand = ArcriveProduct::paginate(20);
        return response()->json($brand);
    }

    public function getAllProduct(){
        $brand = ArcriveProduct::get();
        return response()->json($brand);
    }

    public function addProduct(Request $request){
        $brands = ArcriveProduct::latest()->first();
        \Log::info($request->all());

        return response()->json(['success'=> 'Product brand add successfully done']);
    }

    public function getProductInfo($id){
        $brand = ArcriveProduct::where('_id', $id)->first();
        return response()->json(['data' => $brand]);
    }

    public function updateProduct(Request $request, $id){
        $brand= ArcriveProduct::where('_id', $id)->first();
        if($request->hasFile('image')){
            $image = StorageUpload::upload($request->file('image'));
        }else{
            $image =  $brand->image;
        }
        ArcriveProduct::where('_id', $id)->update(['name' => $request->name, 'description' => $request->description, 'image'=> $image]);
        return response()->json(['success'=> 'Product brand updated successfully done']);
    }


    public function delete($id){

        $brand = ArcriveProduct::where('_id', $id)->first();
        $brand->delete();
        return response()->json(['data' => 'Brand delete successfully', 'type'=> 'failure']);

    }
}
