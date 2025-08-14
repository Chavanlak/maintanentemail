<?php
namespace App\Repository;

use App\Models\Mastbranchinfo;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class MastbranchRepository{
    public static function getallBranch(){
        return Mastbranchinfo::all();
    }
    public static function selectbranch(){
        $branches = Mastbranchinfo::select(['MBranchInfo_Code','Location'])
        ->whereNotIn('MBranchInfo_Code',['HO'])
        ->where('branch_active',1)
        ->where(function($query){
            $query->whereNull('closed')
            ->orWhere('closed', 0);
        })->get();
        return $branches;
    }
    // public static function getallBranchEmail(){
    //     return Mastbranchinfo::whereNotNull('email')
    //     ->select('email')->get();
    // }
    public static function getallBranchEmail(){
        return Mastbranchinfo::whereNotNull('email')
        ->get();
    }
    public static function getEmailByCode($branchCode)
    {
        return Mastbranchinfo::where('MBranchInfo_Code', $branchCode)
            ->value('email'); // ดึง email ของ branch
    }
    
    }

?>