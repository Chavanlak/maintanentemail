<?php

namespace App\Http\Controllers;

use App\Repository\MastbranchRepository;
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
  
    return redirect('repair/form'); // หรือแสดงหน้าถัดไป
}

// public function showForm()
// {
//     // ตรวจสอบว่ามี session ครบไหมด้วยก็ได้
//     if (!session()->has('selected_branch')) {
//         return redirect('/branch')->with('error', 'กรุณาเลือกสาขาก่อน');
//     }

//     return view('repairform');
// }
// public function showRepairForm()
// {
//     // ดึงข้อมูลสาขา และ manegers มาใส่ view
//     $branch = Mastbranchinfo::where('branch_active', 1)->get();
//     $manegers = Maneger::all(); // หรือ query ข้อมูลโซน/คนจัดการ ตามที่มีจริง

//     return view('repair', compact('branch', 'manegers'));
// }
    public static function ShowRepairForm(){
        $branch = MastbranchRepository::selectbranch();
        $manegers = NotirepairRepository::getAllNotirepair();
        return view('repair',compact('branch', 'manegers'));
    }
}
