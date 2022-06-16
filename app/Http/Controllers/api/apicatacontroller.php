<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\brand;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class apicatacontroller extends Controller
{
    public function index()
    {
        return brand::with('children')->where('brand_parentid','=',0)->get();
    }
}
