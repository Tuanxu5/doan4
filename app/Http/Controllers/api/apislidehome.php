<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use App\Models\slide;
use Illuminate\Http\Request;
use \DateTime;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class apislidehome extends Controller
{
    public function index()
    {
        return slide::where('slide_token','eye')->get();
    }
}
