<?php

namespace App\Http\Controllers;

use App\Models\slide;
use App\Traits\StorageImageTrait;
use Illuminate\Http\Request;
use Storage;

class UploadController extends Controller
{
    public function index(Request $request)
    {
        $db = new slide();
        $fileName = $request->slide_image->getClientOriginalName();
        $filePath = $request->file('slide_image')->storeAs('public/slide',$fileName);
        $request->slide_image =$filePath;
        $db->slide_image = $request->slide_image;
        $db->slide_name = $request->slide_name;
        $db->save();
        dd ($db);
    }
}
