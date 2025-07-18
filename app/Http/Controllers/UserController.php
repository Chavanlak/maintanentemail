<?php

// namespace App\Http\Controllers;
// use Illuminate\Support\Facades\Auth;
// use App\Models\User;
// use App\Repository\UserRepository;
// use Illuminate\Http\Request;

// class UserController extends Controller
// {
//    public static function login(){
//     return view('login');
//    } 
  
//    public static function loginPost(){
//     $credentials = [
//         'staffname'=>request('staffname'),
//         'staffpassword'=>request('staffpassword')
//     ];
//     if(Auth::attempt($credentials)){
//         return redirect('/repair')->with('success','Login Successful');
    
//    }
//     else{
//         return redirect('/loginerror')->with('error','Login Failed');
//     }
//    }
//    public static function logineror(){
//     return "error";
//    }
//    public static function checklogin(){
//     return "Hello i can see this";
//    }
//    public static function page(){
//     return view('repair');
//    }
// }
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        return view('login'); 
    }

    public function loginPost(Request $request)
    {
        $staffname = $request->input('staffname');
        $staffpassword = $request->input('staffpassword');

       
        $user = DB::table('user')
            ->where('staffname', $staffname)
            ->where('staffpassword', $staffpassword)
            ->first();

        if ($user) {
        
            Session::put('logged_in', true);
            Session::put('staffname', $user->staffname);

            return redirect('/repair')->with('success', 'Login Successful');
        } else {
            return redirect('/loginerror')->with('error', 'Login Failed');
        }
    }

    public function loginerror()
    {
        return view('loginerror'); 
    }

    public function logout()
    {
        Session::flush();
        return redirect('/login');
    }

    public function showrepair()
    {
        return view('repair'); 
    }
}

?>


