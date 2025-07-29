<?php

namespace App\Http\Controllers;

use App\Repository\MastbranchRepository;
use App\Models\Mastbranchinfo;
use Illuminate\Http\Request;

class MastbranchinfoController extends Controller
{
    // public static function getBranchInfo()
    // {
    //    $branches = MastbranchRepository::selectbranch();
    //    return view('repair', ['branches' => $branches]);
    // }
    public static function showallBranch()
    {
        $branches = MastbranchRepository::getallBranch();
        return view('testbranch', ['branches' => $branches]);
    }
    // public static function pullBranch(){
    //     return view('repair');
    // }
    public static function getselectBranch()
    {
        $branch = MastbranchRepository::selectbranch();
        return view('branch', compact('branch'));
    }
    // public static function saveBranch(Request $request){
    //     $branch = new Mastbranchinfo();
    //     // $branch->MBranchInfo_Code = $request->input('MBranchInfo_Code');
    //     $branch = $request->MBranchInfo_Code;
    //     $branch = $request->Location;
    //     $branch->save();


    //     return redirect()->back()->with('success', 'Branch saved successfully!');
    // }
    public function saveBranch(Request $request)
    {
        $request->validate([
            'MBranchInfo_Code' => 'required|string',
            'Location' => 'required|string',
        ]);

        $branch = new Mastbranchinfo();
        $branch->MBranchInfo_Code = $request->input('MBranchInfo_Code');
        $branch->Location = $request->input('Location');
        $branch->branch_active = 1; // กำหนดค่าอื่น ๆ ถ้ามี column นี้
        $branch->save();
        dd($branch);
        return redirect()->back()->with('success', 'Branch saved successfully!');
    }



    //     public function storeBranch(Request $request)
    // {
    // $validated = $request->validate([
    //  'branch' => 'required|string'
    // ]);

    //     // เก็บไว้ใน session หรือฐานข้อมูล แล้วแต่ต้องการ
    //  Session::put('selected_branch', $validated['branch']);

    // return redirect()->back()->with('success', 'บันทึกสาขาเรียบร้อยแล้ว');
    // }


}
