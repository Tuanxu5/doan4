<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\brand;
use App\Models\home;
use App\Models\Product;
use Illuminate\Http\Request;

class apihomecontroller extends Controller
{
    public function index(){
        $product = product::orderBy('id','DESC')
            ->where('product_token','eye')
            ->take(4)
            ->get();
        return ($product);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $db = new product();
        $db->product_name = $request->product_name;
        $db->product_image = $request->product_image;
        $db->product_quantily = $request->product_quantily;
        $db->product_description = $request->product_description;
        $db->product_promotion = $request->product_promotion;
        $db->product_price = $request->product_price;
        $db->brand_id = $request->brand_id;
        $db->created_at = new Datetime();
        $db->save();
        return $db;
    }

    public function show($id)
    {
        return product::findOrFail($id);
    }

    public function edit(home $home)
    {
        //
    }

    public function update(Request $request, home $home)
    {
        //
    }

    public function destroy(home $home)
    {
    }
}
