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
    public static function getSelectZoneEmail(){
        return Zone::whereNotNull('email')->get();
    }
    // public static function save($branch){
    //     $notirepair = new Notirepair();
    //     $notirepair->branch = $branch;
    // }
    public static function saveNotiRepair($equipmentId,$DeatailNotirepair,$Zone){
        $noti = new Notirepair();
        $noti->equipmentId = $equipmentId;
        $noti->DeatailNotirepair = $DeatailNotirepair;
        $noti->Zone = $Zone;
        $noti->save();
        return $noti;
    }
<<<<<<< HEAD

=======
 
>>>>>>> fc77caaccfd55f4c6f22c2a081658aa7f0f0999c
}

?>
