<?php
namespace App\Repository;
use App\Models\Equipment;
use Illuminate\Support\Facades\DB;

class EquipmentRepository{
    public static function getallEquipment(){
        return Equipment::all();
    }
    
}
?>