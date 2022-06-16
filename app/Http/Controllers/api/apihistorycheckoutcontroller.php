<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\bill;
use App\Models\billdetail;
use App\Models\brand;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Session;

class apihistorycheckoutcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users_id = Session::all();
        dd ($users_id);
    }
    public function create()
    {

    }
    public function store(Request $request)
    {
        $db = new brand();
        $db->brand_name = $request->brand_name;
        $db->brand_parentid = $request->brand_parentid;
        $db->save();
        return $db;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return brand::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $db = brand::find($id);
        $db->brand_name = $request->brand_name;
        $db->brand_parentid = $request->brand_parentid;
        $db->save();
        return $db;
    }
    public function destroy($id)
    {
        brand::findOrFail($id)->delete();
        return "DELETED";
    }
}
