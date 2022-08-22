<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ServiceProfile;
use App\Models\ServiceProfileProduct;
use Illuminate\Http\Request;

class SearchFilterController extends Controller
{
//    public function getSearch_item(){
//
//    }


    public function searchFilter(Request $request){
        $keyword = $request->search;
        if($keyword != ''){
            \Log::info($request->search);

            $data = ServiceProfileProduct::where('name','LIKE',$keyword.'%')->where('status', 'approved')->where('active', true)->limit(5)->get();
            $data1 = ServiceProfile::where('name','LIKE',$keyword.'%')
                ->where('status', "1")
                ->limit(5)->get();
        }else{
            $data = ServiceProfileProduct::where('status', 'approved')->where('active', true)->limit(5)->get();
            $data1 = ServiceProfile::where('status', "1")->where('service_profiles', 'business')
                ->limit(5)->get();

        }


        return response()->json(['data' => $data, 'data1' => $data1]);


    }
}
