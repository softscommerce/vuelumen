<?php

namespace App\Http\Controllers\Admin\Product;

use App\Helpers\StorageUpload;
use App\Http\Controllers\Controller;
use App\Models\Admin\ProductBrand;
use Illuminate\Http\Request;
use function response;

class ProductBrandController extends Controller
{

    public function getBrand(){
        $brand = ProductBrand::paginate(20);
        return response()->json($brand);
    }

    public function getAllBrand(){
        $brand = ProductBrand::get();
        return response()->json($brand);
    }

    public function addBrand(Request $request){
        $brands = ProductBrand::latest()->first();
        \Log::info($request->all());
        $brand = new ProductBrand();
        $brand->id =$brands ? $brands->id+1 : 1;
        $brand->name = $request->name;
        $brand->slug = $request->name;
        $brand->description = $request->description;
        $brand->status = 1;


        if ($request->hasFile('image')) {
            $brand->image = StorageUpload::upload($request->file('image'), 'brand');
        }

        $brand->save();
        return response()->json(['success'=> 'Product brand add successfully done']);
    }

    public function getBrandInfo($id){
        $brand = ProductBrand::where('_id', $id)->first();
        return response()->json(['data' => $brand]);
    }

    public function updateBrand(Request $request, $id){
       $brand= ProductBrand::where('_id', $id)->first();
        if($request->hasFile('image')){
            $image = StorageUpload::upload($request->file('image'));
        }else{
           $image =  $brand->image;
        }
        ProductBrand::where('_id', $id)->update(['name' => $request->name, 'description' => $request->description, 'image'=> $image]);
        return response()->json(['success'=> 'Product brand updated successfully done']);
    }


    public function delete($id){
        $brand = ProductBrand::where('_id', $id)->first();
        $brand->delete();
        return response()->json(['data' => 'Brand delete successfully', 'type'=> 'failure']);

    }

}
