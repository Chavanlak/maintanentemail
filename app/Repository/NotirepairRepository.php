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
}
?>