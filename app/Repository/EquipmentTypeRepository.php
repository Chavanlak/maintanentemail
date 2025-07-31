<?php
namespace App\Repository;
use App\Models\Equipmenttype;
use App\Models\Equipment;
use Illuminate\Support\Facades\DB;

class EquipmentTypeRepository{
    public static function getallEquipmentType(){
        return Equipmenttype::all();
    }

}
?>
