<?php

namespace App\Traits;
use Storage;
trait StorageImageTrait{
    public function storageTraitUpload($request,$fielName,$foderName)
    {
        if ($request->hasFile($fielName)){
            $file = $request->fielName;
            $fileNameOrigin = $file->getClientOriginalName();
            $fileNameHash = date('yymmDDhhss') . '.' . $file->getClientOriginalExtension();
            $filePath = $request->file($fielName)->storeAs('public/'.$foderName . auth()->id(),$fileNameHash);
            $dataUploadTrait = [
                'file_name'=>$fileNameOrigin,
                'file_path'=>Storage::url($filePath)
            ];
            return $dataUploadTrait;
        }
        return null;
    }
}
