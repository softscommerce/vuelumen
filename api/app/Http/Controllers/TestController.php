<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        \Log::info($request->phone);
        $firstStringCharacter = substr($request->phone,  -12);
        \Log::info($firstStringCharacter);
        $explode = explode("-", $firstStringCharacter);
        \Log::info($explode);
        $data = "+88".$explode[0].$explode[1];

        $data = User::where("mobile", $data)->count();

        return response()->json($data) ;
    }
}
