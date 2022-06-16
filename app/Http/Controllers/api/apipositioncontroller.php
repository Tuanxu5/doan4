<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Datetime;

class apipositioncontroller extends Controller
{
    public function index()
    {
        return position::all();
    }
}
