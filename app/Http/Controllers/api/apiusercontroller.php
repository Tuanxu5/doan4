<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Datetime;
use Nette\Utils\Random;
use Illuminate\Support\Str;


class apiusercontroller extends Controller
{
    public function index()
    {
        return users::with('position')
            ->where('position_id','2')
            ->get();
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $db = new users();
        $db->users_usersid = Str::random(10);
        $db->users_username = $request->users_username;
        $matkhau = $request->users_password;
        $db->users_password	 = ($matkhau);
        $db->users_numberphone	 = $request->users_numberphone;;
        $db->user_email = $request->user_email;;
        $db->users_fullname = $request->users_fullname;
        $db->users_status = 1;
        $db->users_adress = $request->users_adress;;
        $db->position_id  = 2;
        $db->created_at= new Datetime();
        $db->save();
        return $db;
    }
    public function show($id)
    {
        return users::findOrFail($id);
    }
    public function edit($id)
    {
    }
    public function update(Request $request, $id)
    {
        $db = users::find($id);
        $db->users_username = $request->users_username;
        $db->users_password	 = 12345678;
        $db->users_numberphone	 = $request->users_numberphone;
        $db->user_email = $request->user_email;
        $db->users_fullname = $request->users_fullname;
        $db->users_status = 1;
        $db->users_adress = $request->users_adress;
        $db->position_id  = 2;
        $db->updated_at = new DateTime();
        $db->save();
        return $db;
    }
    public function destroy($id)
    {
        users::findOrFail($id)->delete();
        return "DELETED";
    }
}
