<?php

namespace App\Http\Controllers;

use App\Repository\NotirepairRepository;
use Illuminate\Http\Request;

class NotiRepairController extends Controller
{
    public static function getallManegers(){
        $manegers = NotirepairRepository::getAllNotirepair();
        return view('notirepair',compact('manegers'));
    }
   
}
