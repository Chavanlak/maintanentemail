<?php

namespace App\Http\Controllers;

use App\Repository\EquipmentRepository;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
// public static function ShowAllEquipment()
// {
//     $equipment = EquipmentRepository::getallEquipment();
//     return view('/repair2',compact('equipment'));
// }

// แสดงรายการอุปกรณ์ทั้งหมดในหน้า repair2
public static function ShowAllEquipment(Request $req)
{
    // dd($req->category); //oject category
    // ตรวจสอบว่ามีการส่งค่า category มาหรือไม่
    $equipment = EquipmentRepository::getequipmentById($req->category);
    //ส่งค่าพารามิเตอร์ไปยัง view
    return view('/repair2',compact('equipment'));
}
}
