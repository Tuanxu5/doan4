<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Datetime;

class apitagscontroller extends Controller
{
    public function index()
    {
        return tags::all();
    }
    public function create()
    {
    }

}
