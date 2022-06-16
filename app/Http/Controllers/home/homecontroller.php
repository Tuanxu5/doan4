<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\producttags;
use App\Models\size;
use App\Models\slide;
use App\Models\tags;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Models\brand;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Models\billdetail;
use App\Models\bill;
use DB;
use Session;
use DateTime;
use App\Http\Requests;
use function GuzzleHttp\Promise\all;


class homecontroller extends Controller
{
    public function showcheckout(){
        $this->AuthLogin();
        return view('glammy.checkout');
    }
    public function save_bill(Request $request){
        $data = array();
        $data['bill_fullname'] = $request->bill_fullname;
        $data['bill_address'] = $request->bill_address;
        $data['bill_status'] = 1;
        $data['bill_phonenumber'] = $request->bill_phonenumber;
        $data['bill_revenue'] = 5000;
        $data['bill_datesend'] = new DateTime();
        $data['created_at'] = new DateTime();
        $id = db::table('bill')->insertGetId($data);
        Session::put('id',$id);
        $data1 =array();
        $data1['bill_id'] = db::table('bill')->$request->id;
        $data1['quatily'] = 5000;
        $id1 = db::table('billdetail')->insertGetId($data1);
        Session::put('id',$id1);
        return Redirect('/payment');
    }
    public function index(Request $request){
        $brands = brand::where('brand_parentid','=',0)->get();
        return view('glammy.home',compact('brands'));
    }
    public function brandpro(){
        return view('glammy.brandpro');
    }
    public function showlogin(){
        return view('glammy.login');
    }
    public function showcart(){
        return view('glammy.cart');
    }
    public function showdeetailproduct(){
        return view('glammy.detailproduct');
    }
    public function AuthLogin()
    {
        $id =Session::get('idhome');
        if($id)
        {
            return Redirect::to('glammy/');
        }
        else{
            return Redirect::to('glammy/login')->send();
        }
    }
    public function loginhome(Request $request)
    {
        $users_username = $request->users_username;
        $users_password =($request->users_password);
        $resulthome = DB::table('users')
            ->where('users_username',$users_username)
            ->where('users_password',($users_password))
            ->where('position_id',2)
            ->first();
        if($resulthome)
        {
            Session::put('users_fullnamehome',$resulthome->users_fullname);
            Session::put('idhome',$resulthome->id);
            return Redirect::to('/glammy/');
        }
        else{
            Session::put('message','Tài khoản hoặc mật khẩu không đúng');
            return Redirect::to('glammy/login');
        }
    }
    public function logout()
    {
        Session::put('users_fullnamehome',null);
        Session::put('idhome',null);
        return Redirect::to('glammy/login');
    }
    public function showhistorycheckout()
    {
        $choxacnhan = bill::where('users_id',Session::get('idhome'))
            ->where('bill_status',0)
            ->get();
        $danggiao = bill::where('users_id',Session::get('idhome'))
            ->where('bill_status',2)
            ->get();
        $dagiao = bill::where('users_id',Session::get('idhome'))
            ->where('bill_status',3)
            ->get();
        $dahuy = bill::where('users_id',Session::get('idhome'))
            ->where('bill_status',4)
            ->get();
        $hoantra = bill::where('users_id',Session::get('idhome'))
            ->where('bill_status',5)
            ->get();
        return view('glammy/historycheckout')
            ->with(compact('choxacnhan','danggiao','dagiao','dahuy','hoantra'));
    }
    public function showsignin()
    {
        return view('glammy.register');
    }
    public function updatedahuy($id)
    {
        $choxacnhan = bill::where('users_id',Session::get('idhome'))
            ->where('bill_status',0)
            ->get();
        $danggiao = bill::where('users_id',Session::get('idhome'))
            ->where('bill_status',2)
            ->get();
        $dagiao = bill::where('users_id',Session::get('idhome'))
            ->where('bill_status',3)
            ->get();
        $dahuy = bill::where('users_id',Session::get('idhome'))
            ->where('bill_status',4)
            ->get();
        $hoantra = bill::where('users_id',Session::get('idhome'))
            ->where('bill_status',5)
            ->get();
        $db = bill::find($id);
        $db->bill_status = 4;
        $db->save();
        return Redirect('glammy/historycheckout')->with(compact('choxacnhan','danggiao','dagiao','dahuy','hoantra'));;
    }
    public function updatexacnhannhanhang($id)
    {
        $choxacnhan = bill::where('users_id',Session::get('idhome'))
            ->where('bill_status',0)
            ->get();
        $danggiao = bill::where('users_id',Session::get('idhome'))
            ->where('bill_status',2)
            ->get();
        $dagiao = bill::where('users_id',Session::get('idhome'))
            ->where('bill_status',3)
            ->get();
        $dahuy = bill::where('users_id',Session::get('idhome'))
            ->where('bill_status',4)
            ->get();
        $hoantra = bill::where('users_id',Session::get('idhome'))
            ->where('bill_status',5)
            ->get();
        $db = bill::find($id);
        $db->bill_status = 3;
        $db->bill_datesend = new DateTime();
        $db->save();
        return Redirect('glammy/historycheckout')->with(compact('choxacnhan','danggiao','dagiao','dahuy','hoantra'));;
    }
    public function updatehoantra($id)
    {
        $choxacnhan = bill::where('users_id',Session::get('idhome'))
            ->where('bill_status',0)
            ->get();
        $danggiao = bill::where('users_id',Session::get('idhome'))
            ->where('bill_status',2)
            ->get();
        $dagiao = bill::where('users_id',Session::get('idhome'))
            ->where('bill_status',3)
            ->get();
        $dahuy = bill::where('users_id',Session::get('idhome'))
            ->where('bill_status',4)
            ->get();
        $hoantra = bill::where('users_id',Session::get('idhome'))
            ->where('bill_status',5)
            ->get();
        $db = bill::find($id);
        $db->bill_status = 5;
        $db->save();
        return Redirect('glammy/historycheckout')->with(compact('choxacnhan','danggiao','dagiao','dahuy','hoantra'));;
    }
    public function showthanhtoanthanhcong()
    {
        return view('glammy/thanhtoanthanhcong');
    }

}
