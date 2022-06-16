<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\billdetail;
use App\Models\bill;
use App\Models\brand;
use App\Models\users;
use \DateTime;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Str;

class apicheckoutcontroller extends Controller
{
    public function index()
    {
        $bill = bill::orderBy('id', 'DESC')
            ->get();
        return ($bill);
    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $db = new bill();
        $db->bill_orderid = Str::random(12);
        $db->bill_fullname = $request->bill_fullname;
        $db->bill_address = $request->bill_address;
        $db->users_id = $request->users_id;
        $db->bill_status = 0;
        $db->bill_phonenumber = $request->bill_phonenumber;
        $db->bill_payment = $request->bill_payment;
        $db->bill_datesend = new Datetime();
        $db->bill_doanhthu = $request->bill_doanhthu;
        $db->created_at = new Datetime();
        $db->save();
        if(count($request->billdetail)>0){
            foreach ($request->billdetail as $item)
            {
                $db1 = new billdetail();
                $db1->bill_id = $db->id;
                $db1->bill_orderid = $db->bill_orderid;
                $db1->product_id = $item['id'];
                $db1->product_name = $item['product_name'];
                $db1->dongia = $item['dongia'];
                $db1->quatily = $item['quantity'];
                $db1->tongtien = $item['tongtiensanpham'];
                $db1->save($item);
            }
        }
        return $db;
    }
    public function payment(){

    }
    public function show($id)
    {
        return bill::findOrFail($id);
    }
    public function edit($id)
    {
    }
    public function update(Request $request, $id)
    {

    }
    public function destroy($id)
    {

    }
}
