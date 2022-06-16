<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\bill;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class apichoxacnhancontroller extends Controller
{

    public function index()
    {
        return bill::all();
    }
    public function create()
    {

    }
    public function store(Request $request)
    {
        $db = new bill();
        $db->brand_name = $request->brand_name;
        $db->brand_parentid = $request->brand_parentid;
        $db->save();
        return $db;
    }
    public function show($id)
    {
        return bill::findOrFail($id);
    }
    public function edit(brand $brand)
    {
    }
    public function update(Request $request, $id)
    {
        $db = bill::find($id);
        $db->bill_status = 2;
        $db->save();
        return $db;
    }
    public function destroy($id)
    {
        bill::findOrFail($id)->delete();
        return "DELETED";
    }
}
