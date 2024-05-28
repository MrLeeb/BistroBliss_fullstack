<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\JWTAuth;
use Symfony\Component\HttpFoundation\Cookie;
use Laravel\Sanctum\Http\Controllers\SanctumController;
class UserController extends Controller
{
public function index(){
    $users =User::all();
    $context =[
        'users'=> $users
    ];
    // return view('./adminscontrol/Category/category-api', $context);   
    return response()->json($context);
}



public function log(Request $request){ 
// return $request; 
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('dashboard');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');


    
//     $loginUserData = $request->validate([
//     'email'=>'required|string|email',
//     'password'=>'required'
// ]);
// $user = User::where('email',$loginUserData['email'])->first();
// if(!$user || !Hash::check($loginUserData['password'],$user->password)){
//     return response()->json([
//         'message' => 'Invalid Credentials'
//     ],401);
// }
// $token = $user->createToken($user->name.'-AuthToken')->plainTextToken;
// return response()->json([
//     'token' => $token,
// ]);

// if($user->isadmin){
// $auth = new AuthenticatedSessionController;
// $auth->store($user);
// }else{

// }

// AuthenticatedSessionController::class, 'store
}


public function test(){

    return response()->json("you have entered an Authenticated area!");

}
}