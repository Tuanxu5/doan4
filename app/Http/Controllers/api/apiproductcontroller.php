<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;
use \DateTime;

class apiproductcontroller extends Controller
{
    public function index()
    {
        return Product::with('brand','tags','size')->get();

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
    public function edit($id)
    {
    }
    public function update(Request $request, $id)
    {
        $db = product::find($id);
        $db->product_name = $request->product_name;
        $db->product_image = $request->product_image;
        $db->product_price = $request->product_price;
        $db->product_quantily = $request->product_quantily;
        $db->product_description = $request->product_description;
        $db->product_promotion = $request->product_promotion;
        $db->brand_id = $request->brand_id;
        $db->updated_at = new Datetime();
        $db->save();
        return $db;
    }
    public function destroy($id)
    {
        product::findOrFail($id)->delete();
        return "DELETED";
    }
}
