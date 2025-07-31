<?php

namespace App\Http\Controllers;

use App\Repository\EquipmentRepository;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
public static function ShowAllEquipment()
{
    $equipment = EquipmentRepository::getallEquipment();
    return view('page2',compact('equipment'));
}
}
