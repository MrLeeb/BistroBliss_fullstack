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
    return view('./adminscontrol/users-view', $context);  
}



public function log(Request $request){ 
// return $request;
// dd('aaaaaaaaaaaa');
    $credentials = $request->validate([
        'email' => ['required'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        //  dd($user);
        if($user->IsAdmin){
        $request->session()->regenerate();
        return redirect()->intended('dashboard');
    }
}
// dd($credentials);
    // return back()->withErrors([
    //     'email' => 'The provided credentials do not match our records.',
    // ])->onlyInput('email');
    // $message ='The provided credentials do not match our records.';
return  view('./LoginAndReg/log')->with('message', 'The provided credentials do not match our records.');
// return $message;
    


// if($user->isadmin){
// $auth = new AuthenticatedSessionController;
// $auth->store($user);
// }else{

// }

// AuthenticatedSessionController::class, 'store
}
public function logguest(Request $request){
         $loginUserData = $request->validate([
    'email'=>'required|string|email',
    'password'=>'required'
]);
$user = User::where('email',$loginUserData['email'])->first();
if(!$user || !Hash::check($loginUserData['password'],$user->password)){
    return response()->json([
        'message' => 'Email and/or Password entered are incorrect'
    ],401);
}
$token = $user->createToken($user->name.'-AuthToken')->plainTextToken;
return response()->json([
    'token' => $token,
]);
}
public function regguest(Request $request){
    // $user = User::create([
    //     'email'=>$request->email,
    //     'username'=>$request->username,
    //     'password'=>$request->password
    // ]);
    // // dd($category);
    // $user->save();
    return response()->json("Account successfully created");
    
}

public function validatetoken (Request $request){
    $token = $request('token');

    if (!$token->isValid()) {
    return response()->json(['error'], 401);
    }
    
    return response()->json(['valid']);
    
    }

    public function destroy(Request $request)
    {
        
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }
    public function update(Request $request){
        // return $request;
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
        ]);       
        $user=$request->user();
        $id=$user->id;
        $edited = User::find($id);

        $edited->name=$request->username;
        $edited->email=$request->email;
$edited->save();

        $success = 'Profile successfully edited!';
        return $success;
// return $edited;
    }


public function test(){

    return response()->json("you have entered an Authenticated area!");
}
public function test2(){

    return response()->json("You got me!");
}
}