<?php
namespace App\Repository;
use App\Models\Notirepair;
use Illuminate\Support\Facades\DB;
use App\Models\Zone;
class NotirepairRepository{
    public static function getAllNotirepair(){
        return Zone::all();
    }
    public static function getAllNames(){
        return Zone::where('FirstName','LastName')->first();
    }
    // public static function save($branch){
    //     $notirepair = new Notirepair();
    //     $notirepair->branch = $branch;
    // }
    public static function saveNotiRepair($equipmentId,$DeatailNotirepair){
        $noti = new Notirepair();
        $noti->equipmentId = $equipmentId;
        $noti->DeatailNotirepair = $DeatailNotirepair;
        $noti->save();
        return $noti;
    }
  public static function getNotiRepair(){

  }
}
?>
