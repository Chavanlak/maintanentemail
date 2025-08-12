<?php
namespace App\Repository;
use App\Models\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class FileUploadRepository{
   public static function gaetallFile(){
    return File::all();
   }
   public static function getFileById($FileUploadId ){
    return File::where('FileUploadId', $FileUploadId)->first();
   }
//    public static function UploadeFile($FileUploadId,$Name,$Size,$Location){
//     $FileUploadId = new File();
//     $FileUploadId->FileUploadId = $FileUploadId;
//     $FileUploadId->Name = $Name;
//     $FileUploadId->Size = $Size;
//     $FileUploadId->Location = $Location;
//     // $FileUploadId->save();
//    }

public static function getPicturebyNotiRepairId($NotirepairId){
    // $noti = Notirepair::find($NotirepairId);
    // if ($noti && $noti->picture) {
    //     return Storage::get($noti->picture);
    // }
    // return null;
}
}


?>
