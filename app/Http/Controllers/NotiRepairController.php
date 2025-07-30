<?php

namespace App\Http\Controllers;

use App\Repository\NotirepairRepository;
use Illuminate\Http\Request;

class NotiRepairController extends Controller
{
    // public static function getallManegers(){
    //     $manegers = NotirepairRepository::getAllNotirepair();
    //     return view('notirepair',compact('manegers'));
    // }
    public static function getallManegers(){
        $manegers = NotirepairRepository::getAllNames();
        return view('/branch',compact('manegers'));
    }
   
    public static function showallManegers()
    {
        $manegers = NotirepairRepository::getAllNotirepair();
        return view('zone', ['manegers' => $manegers]);
    }
    // app/Http/Controllers/RepairController.php


public function handleForm(Request $request)
{
    $request->validate([
        'branch' => 'required|string|exists:mastbranchinfo,MBranchInfo_Code',
        'zone' => 'required|string',
        'category' => 'required|string',
    ]);

    // เก็บลง session หรือส่งต่อ
    session([
        'selected_branch' => $request->branch,
        'selected_zone' => $request->zone,
        'selected_category' => $request->category,
    ]);

    return redirect('/repair/form'); // หรือแสดงหน้าถัดไป
}

   
}
