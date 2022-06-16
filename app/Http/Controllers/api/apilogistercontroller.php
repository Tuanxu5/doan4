<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\bill;
use App\Models\billdetail;
use Illuminate\Http\Request;
use App\Models\users;
use DateTime;

class apilogistercontroller extends Controller
{
    public function index(Request $request)
    {
        $users = users::orderBy('id', 'DESC')
            ->get();
        return ($users);
    }
    public function store(Request $request)
    {
        $db = new users();
        $db->users_fullname = $request->users_fullname;
        $db->users_username = $request->users_username;
        $db->users_password = $request->users_password;
        $db->users_image = '1.jpg';
        $db->position_id = 2;
        $db->created_at = new DateTime();
        $db->save();
    }
}
