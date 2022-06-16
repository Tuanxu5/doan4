<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Datetime;

class apisizecontroller extends Controller
{
    public function index()
    {
        return size::all();
    }
    public function create()
    {
    }

}
