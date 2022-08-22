<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  App\Models\User;

class AuthController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'refresh', 'logout', 'register']]);
    }
    /**
     * Get a JWT via given credentials.
     *
     * @param  Request  $request
     * @return Response
     */
    public function login(Request $request)
    {

        $this->validate($request, [
            'mobile' => 'required',
            'password' => 'required|string',
        ]);

        $firstStringCharacter = substr($request->mobile,  -12);
        $explode = explode("-", $firstStringCharacter);
        $data = "+88".$explode[0].$explode[1];

//        $credentials = $request->only(['mobile', 'password']);
        \Log::info($request->all());

        if (! $token = Auth::attempt(['mobile' => $data, 'password' => $request->password])) {

            return response()->json(['message' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    public  function register(Request $request){
        \Log::info($request->all());
        $this->validate($request, [
            'mobile' => 'required',
            'name' => 'required',
            'password' => 'required|string',

        ]);
        $firstStringCharacter = substr($request->mobile,  -12);
        $explode = explode("-", $firstStringCharacter);
        $data = "+88".$explode[0].$explode[1];

//        $credentials = $request->only(['mobile', 'password']);

        $userLast = User::latest()->first();

        $datas = [
            'uid' => $userLast->uid+1,
            'mobile' => $data,
            'name' => $request->name,
            'password' =>  password_hash($request->password, PASSWORD_BCRYPT)
        ];

        $user = User::forceCreate($datas);

        if (! $token = Auth::attempt(['mobile' => $data, 'password' => $request->password])) {

            return response()->json(['message' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }





    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();
        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'user' => auth()->user(),
            'expires_in' =>  (new DateTime)->getTimestamp()  + 60 * 60 * 60 * 24
        ]);
    }



//    public function getUsers($mobile){
//        $mobile = '+880'+$mobile; auth()->factory()->getTTL() * 60 * 60 * 60 * 60 * 24
//        return response()->json(['data' => User::where('mobile', $mobile)->first()]);
//    }
}
