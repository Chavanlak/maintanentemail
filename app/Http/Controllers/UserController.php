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

        $user = DB::table('staff_rc')->where('staffname', $staffname)->first();
        // $user = DB::table('user')
        //     ->where('staffname', $staffname)
        //     ->where('staffpassword', $staffpassword)
        //     ->first();

        // if ($user) {

        //     Session::put('logged_in', true);
        //     Session::put('staffname', $user->staffname);

        //     return redirect('/repair')->with('success', 'Login Successful');
        // } else {
        //     return redirect('/loginerror')->with('error', 'Login Failed');
        // }
        if(!$user){
            return redirect('/login')->with('error', 'ไม่พบชื่อผู้ใช้นี้');
        }
        if($user->staffpassword !== $staffpassword){
            return redirect('/login')->with('error', 'รหัสผ่านไม่ถูกต้อง');
        }

        Session::put('logged_in', true);
        Session::put('staffname', $user->staffname);
        // return view('/branch');
        // return redirect('/branch')->with('success', 'เข้าสู่ระบบสำเร็จ');
        return redirect('/repair')->with('success', 'เข้าสู่ระบบสำเร็จ');
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


