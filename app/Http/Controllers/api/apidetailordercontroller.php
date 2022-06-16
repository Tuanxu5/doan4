<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\billdetail;
use App\Models\bill;
use Illuminate\Http\Request;

class apidetailordercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($bill_orderid)
    {
        $billdetail = billdetail::orderBy('id', 'DESC')
            ->where('bill_orderid',$bill_orderid)
            ->get();
        $bill = bill::where('bill_orderid',$bill_orderid)->get();
        return with(compact('billdetail','bill'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\danhmuc  $danhmuc
     * @return \Illuminate\Http\Response
     */
    public function show(danhmuc $danhmuc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\danhmuc  $danhmuc
     * @return \Illuminate\Http\Response
     */
    public function edit(danhmuc $danhmuc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\danhmuc  $danhmuc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, danhmuc $danhmuc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\danhmuc  $danhmuc
     * @return \Illuminate\Http\Response
     */
    public function destroy(danhmuc $danhmuc)
    {
        //
    }
}
