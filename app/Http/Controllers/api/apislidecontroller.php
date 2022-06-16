<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\slide;
use Illuminate\Http\Request;
use \DateTime;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use \Input;

class apislidecontroller extends Controller
{
    public function index()
    {
        return slide::all();
    }
    public function create()
    {

    }
    public function store(Request $request)
    {
        $db = new slide();
        $fileName = $request->slide_image->getClientOriginalName();
        $filePath = $request->file('slide_image')->storeAs('/public/slide',$fileName);
        $request->slide_image =$filePath;
        $db->slide_name = $request->slide_name;
        $db->slide_image = $request->slide_image;
        $db->slide_sale	 = $request->slide_sale	;
        $db->slide_descoration = $request->slide_descoration;$db->slide_descoration = $request->slide_descoration;
        if($request->slide_token){
            $db->slide_token = 'eye';
        }
        else{
            $db->slide_token = 'eye-slash';
        }
        $db->created_at = new DateTime();
        $db->save();
        return Redirect::to('admin/slide');
    }
    public function show($id)
    {
        return slide::findOrFail($id);
    }
    public function edit($id)
    {
    }
    public function update(Request $request, $id)
    {
        $db = slide::find($id);
        $id = $db->id;
        $db->slide_name = $request->slide_name;
        $db->slide_sale = $request->slide_sale;
        if ($request->hasFile('slide_image')){

            $fileName = $request->slide_image->getClientOriginalName();
            $fileNameHash = date('yymmDDhhss') . '.' . $fileName;
            $filePath = $request->file('slide_image')->storeAs('public/slide/'. auth()->id(),$fileNameHash);
            $request->slide_image = Storage::url($filePath);
            $request->slide_imagename = $fileName;
            $db->slide_imagename = $request->slide_imagename;
        }
        $db->slide_descoration= $request->slide_descoration;
        $db->slide_image = $request->slide_image;
        $db->slide_imagename = $request->slide_imagename;
        $db->slide_descoration = $request->slide_descoration;
        if($request->slide_token){
            $db->slide_token = 'eye';
        }
        else{
            $db->slide_token = 'eye-slash';
        }
        $db->updated_at = new Datetime();
        $db->save();
        return $db;
    }
    public function destroy($id)
    {
        slide::findOrFail($id)->delete();
        return "DELETED";
    }
}
