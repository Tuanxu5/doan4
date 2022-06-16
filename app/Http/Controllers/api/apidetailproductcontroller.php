<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\brand;
use App\Models\home;
use App\Models\Product;
use App\Models\producttags;
use App\Models\tags;
use Illuminate\Http\Request;

class apidetailproductcontroller extends Controller
{
    public function index($id)
    {
        $product = product::with('brand','size','tags')
            ->where('id',$id)
            ->get();
        foreach ($product as $key=>$value){
            $brand_id = $value->brand_id;
        }
        $product_splq = product::where('brand_id',$brand_id)->take(4)->get();
        return with(compact('product','product_splq'));
    }
}
