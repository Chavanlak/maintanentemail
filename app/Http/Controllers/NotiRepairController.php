<?php

namespace App\Http\Controllers;

use App\Repository\MastbranchRepository;
use App\Repository\NotirepairRepository;
use App\Repository\EquipmentRepository;
use App\Repository\EquipmentTypeRepository;
use App\Models\Notirepair;
use App\Models\FileUpload;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFileRequest;
use Illuminate\Support\Facades\Storage;

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
        'branch' => 'required|string',
        'zone' => 'required|string',
        'equipment' => 'required|string',
    ]);

    // เก็บลง session หรือส่งต่อ
    session([
        'selected_branch' => $request->branch,
        'selected_zone' => $request->zone,
        'selected_equipment' => $request->category,
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
        $equipmenttype = EquipmentTypeRepository::getallEquipmentType();
        return view('repair',compact('branch', 'manegers','equipmenttype'));
    }
    public static function saveNotiRepair(Request $req){
        $noti = NotirepairRepository::saveNotiRepair($req->category,$req->detail);


        foreach($req->file('filepic') as $file){
            $file->getClientOriginalName();
            $filename = explode('.', $file->getClientOriginalName());
            $fileName = $filename[0]."_upload_".date("Y-m-d").".".$file->getClientOriginalExtension();
            // $fileName = $req->filepic."_upload_".date("Y-m-d").".".$file->getClientOriginalExtension();
            $path = Storage::putFileAs('public/',$file,$fileName);

            $fileup = new FileUpload();
            $fileup->filename = $fileName;
            $fileup->filepath = $path;
            $fileup->NotirepairId = $noti->NotirepairId;
            $fileup->save();
        }
        // $file = $req->file('filepic');
        // $file->getClientOriginalName();
        // $filename = explode('.', $file->getClientOriginalName());
        // $fileName = $filename[0]."_upload_".date("Y-m-d").".".$file->getClientOriginalExtension();
        // // $fileName = $req->filepic."_upload_".date("Y-m-d").".".$file->getClientOriginalExtension();
        // $path = Storage::putFileAs('public/',$file,$fileName);

        // $fileup = new FileUpload();
        // $fileup->filename = $fileName;
        // $fileup->filepath = $path;
        // $fileup->NotirepairId = $noti->NotirepairId;
        // $fileup->save();

        return redirect('/repair');
        // dd($filename[0]."_upload_".date("Y-m-d").".".$file->getClientOriginalExtension());

    }
}
