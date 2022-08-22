<?php

namespace App\Http\Controllers\Admin\Product;

use App\Helpers\StorageUpload;
use App\Http\Controllers\Controller;
use App\Models\Admin\ProductBrand;
use App\Models\Admin\ProductCategory;
use App\Models\ProductSubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductCategoryController extends Controller
{
    public function getCategory(){
        $category = ProductCategory::paginate(20);
        return response()->json($category);
    }

    public function getAllCategory(){
        $category = ProductCategory::get();
        return response()->json($category);
    }

    public function addCategory(Request $request){
        \Log::info($request->all());
        $categorys = ProductCategory::latest()->first();
        \Log::info($request->all());

        if($request->category_id){
            $sub_category = new ProductSubCategory();
            $sub_category->id =$categorys ? $categorys->id+1 : 1;
            $sub_category->name = $request->name;
            $sub_category->category_id = $request->category_id;
            $sub_category->slug = Str::slug($request->name);
            $sub_category->description = $request->description;
            $sub_category->status = 1;


            if ($request->hasFile('image')) {
                $sub_category->image = StorageUpload::upload($request->file('image'), 'category_sub');
            }

            $sub_category->save();
        }else{
            $category = new ProductCategory();
            $category->id =$categorys ? $categorys->id+1 : 1;
            $category->name = $request->name;
            $category->slug = Str::slug($request->name);
            $category->description = $request->description;
            $category->status = 1;


            if ($request->hasFile('image')) {
                $category->image = StorageUpload::upload($request->file('image'), 'category');
            }

            $category->save();
        }

        return response()->json(['success'=> 'Product brand add successfully done']);
    }

    public function getCategoryInfo($id){
        $category = ProductCategory::where('_id', $id)->first();
        return response()->json(['data' => $category]);
    }

    public function updateCategory(Request $request, $id){
        $category= ProductCategory::where('_id', $id)->first();
        if($request->hasFile('image')){
            $image = StorageUpload::upload($request->file('image'));
        }else{
            $image =  $category->image;
        }
        ProductCategory::where('_id', $id)->update(['name' => $request->name, 'description' => $request->description, 'image'=> $image]);
        return response()->json(['success'=> 'Product brand updated successfully done']);
    }


    public function delete($id){
        $brand = ProductCategory::where('_id', $id)->first();
        $brand->delete();
        return response()->json(['data' => 'Brand delete successfully', 'type'=> 'failure']);

    }


    public function getAllSubCategory($id){
        \Log::info($id);
        $sub_category = ProductSubCategory::where('category_id', $id)->get();
        return response()->json($sub_category);
    }



}
