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
    public static function showallBranch(){
        $branches = MastbranchRepository::getallBranch();
        return view('testbranch', ['branches' => $branches]);
    }
    // public static function pullBranch(){
    //     return view('repair');
    // }
    public static function getselectBranch(){
        $branch= MastbranchRepository::selectbranch();
        return view('branch', compact('branch'));
    }
}
