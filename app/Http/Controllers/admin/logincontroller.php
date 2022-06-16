<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\brand;
use App\Models\billdetail;
use App\Models\bill;
use App\Models\users;
use App\Models\producttags;
use App\Models\slide;
use App\Models\tags;
use App\Models\Product;
use App\Models\size;
use Carbon\Carbon;
use Cron\MonthField;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Session;
use Illuminate\Http\Request;
use DateTime;
use App\Http\Requests;
use Barryvdh\DomPDF\Facade\PDF;
use App\Models\visitor;
use function GuzzleHttp\Promise\all;

session_start();

class logincontroller extends Controller
{
    //brand
    private $htmlSelect;
    public function _construct(){
        $this->htmlSelect ='';
    }

    public function showindex(Request $request)
    {
        $this->AuthLogin();
        $ip_address = $request->ip();
        $visitor_current = visitor::where('ip_addres',$ip_address)->get();
        $visitor_count = $visitor_current->count();
        if($visitor_count<1) {
            $visitor = new visitor();
            $visitor->ip_addres = $ip_address;
            $visitor->date_visitor = new DateTime();
            $visitor->save();
        }
        $thongkedonhang = Bill::where('bill_status',3)->count();
        $thongkenguoidung = users::where('position_id',2)->count();
        $thongkesanpham = Product::count();
        return view('admin.index',compact('thongkedonhang','thongkenguoidung','visitor_count','thongkesanpham'));
    }
    public function filter_by_date(Request $request)
    {
        $data = $request->all();
        $from_date = $data['from_date'];
        $to_date = $data['to_date'];

        $get = bill::whereBetween('bill_datesend',[$from_date,$to_date])
            ->orderBy('bill_datesend', 'ASC')->get();
        if($get->whereIn('bill_datesend', function ( $query ) {
            $query->select('bill_datesend')->from('bill')->groupBy('bill_datesend')->havingRaw('count(*) < 1');
        }))
        {
            $haha = $get;
        }
        else if($get->whereIn('bill_datesend', function ( $query ) {
            $query->select('bill_datesend')->from('bill')->groupBy('bill_datesend')->havingRaw('count(*) > 1');
        })){
            $haha = $get->sum('bill_doanhthu');
        }
        foreach($haha as $key => $val)
        {
                $chart_data[] = array(
                    'haha'=>$val->bill_datesend,
                    'bill_doanhthu'=>$val->bill_doanhthu
                );
        }
        echo $data = json_encode($chart_data);
    }
    public function addslide(Request $request)
    {
        $db = new slide();
        if($request->file('slide_image')) {
            $fileName = $request->slide_image->getClientOriginalName();
            $fileNameHash = date('yymmDDhhss') . '.' . $fileName;
            $filePath = $request->file('slide_image')->storeAs('public/slide/' . auth()->id(), $fileNameHash);
            $request->slide_image = Storage::url($filePath);
            $request->slide_imagename = $fileName;
        }
        $db->slide_imagename = $request->slide_imagename;
        $db->slide_name = $request->slide_name;
        $db->slide_image = $request->slide_image;
        $db->slide_sale	 = $request->slide_sale	;
        $db->slide_descoration = $request->slide_descoration;
        if($request->slide_token){
            $db->slide_token = 'eye';
        }
        else{
            $db->slide_token = 'eye-slash';
        }
        $db->created_at = new DateTime();
        $db->save();
        return Redirect::to('admin/slide');
    }
    public function addproduct(Request $request)
    {
        $db = new product();
        if($request->file('product_image1')){
            $fileName = $request->product_image1->getClientOriginalName();
            $fileNameHash = date('yymmDDhhss') . '.' . $fileName;
            $filePath = $request->file('product_image1')->storeAs('public/product/'. auth()->id(),$fileNameHash);
            $request->product_image1 = Storage::url($filePath);
            $request->product_imagename1 = $fileName;
            $db->product_imagename1 = $request->product_imagename1;
            $db->product_image1 = $request->product_image1;
        }
        if($request->file('product_image2')){
            $fileName = $request->product_image2->getClientOriginalName();
            $fileNameHash = date('yymmDDhhss') . '.' . $fileName;
            $filePath = $request->file('product_image2')->storeAs('public/product/'. auth()->id(),$fileNameHash);
            $request->product_image2 = Storage::url($filePath);
            $request->product_imagename2 = $fileName;
            $db->product_imagename2 = $request->product_imagename2;
            $db->product_image2 = $request->product_image2;
        }
        if($request->file('product_image3')){
            $fileName = $request->product_image3->getClientOriginalName();
            $fileNameHash = date('yymmDDhhss') . '.' . $fileName;
            $filePath = $request->file('product_image3')->storeAs('public/product/'. auth()->id(),$fileNameHash);
            $request->product_image3 = Storage::url($filePath);
            $request->product_imagename3 = $fileName;
            $db->product_imagename3 = $request->product_imagename3;
            $db->product_image3 = $request->product_image3;
        }
        $db->product_name = $request->product_name;
        if($request->product_token){
            $db->product_token = 'eye';
        }
        else{
            $db->product_token = 'eye-slash';
        }
        $db->product_price = $request->product_price;
        $db->product_pricesale= $request->product_pricesale;
        $db->product_quantilysale = $request->product_quantilysale;
        $db->product_description = $request->product_description;
        $db->brand_id = $request->brand_id;

        $db->created_at = new DateTime();

        $db->save();
        if($request->product_tags){
            foreach ($request->product_tags as $tags_name)
            {
                $tagsinstence = tags::firstOrCreate(['tags_name'=>$tags_name]);
                $dbprt = new producttags();
                $dbprt->product_id = $db->id;
                $dbprt->tags_id = $tagsinstence->id;
                $dbprt->save();
            }
        }
        foreach ($request->size_name as $key=>$size_name) {
            $dbsize = new size();
            $dbsize->product_id = $db->id;
            $dbsize->size_name = $size_name;
            $dbsize->size_productprice = $request->size_productprice[$key];
            $dbsize->size_productsale = $request->size_productsale[$key];
            $dbsize->save();
        }
        return Redirect::to('admin/product');
    }

    public function showbrand(){
        $this->AuthLogin();
        $htmlOption = $this->brandrecusive(0);
        return view('admin.brand',compact('htmlOption'));
    }
    public function showusers(){
        $this->AuthLogin();
        return view('admin.users');
    }
    public function brandrecusive($id,$text='')
    {
        $data =brand::all();
        foreach ($data as $value)
        {
            if($value['brand_parentid']==$id){
                $this->htmlSelect .= "<option value='" . $value['id'] . "'>" .$text. $value['brand_name'] . "</option>";
                $this->brandrecusive($value['id'],$text.'--');
            }
        }
        return $this->htmlSelect;
    }
    //Slide
    public function showslide(){
        $this->AuthLogin();
        $htmlOption = $this->brandrecusive(0);
        return view('admin.slide',compact('htmlOption'));}
    //-slide
    public function showorder(){
        $this->AuthLogin();
        $htmlOption = $this->brandrecusive(0);
        return view('admin.order',compact('htmlOption'));}
    //-slide
    public function printorder($checkout_code)
    {
        $pdf = \App::make('dompdf.wrapper');
        $pdf ->loadHTML($this->print_order_convert($checkout_code));
        return $pdf->stream();
    }
    public function showpdforder () {
        return view('admin.pdforder');
    }
    public function print_order_convert()
    {
        $pdff = PDF::loadView('admin.pdforder');
        return $pdff->download('datapdf.pdf');
    }
    public function showdetailorder(){
        $this->AuthLogin();
        $htmlOption = $this->brandrecusive(0);
        return view('admin.detailorder',compact('htmlOption'));}
    //-slide
    public function store(Request $request)
    {
        $path = $request->file('upload')->store('public');
    }
    //Login
    public function AuthLogin()
    {
        $id =Session::get('id');
        if($id)
        {
            return Redirect::to('admin/dashbord');
        }
        else{
            return Redirect::to('admin/login')->send();
        }
    }

    public function showlogin()
    {
        return view('admin.login');
    }
    //show product
    public function showproduct(){
        $this->AuthLogin();
        $htmlOption = $this->brandrecusive(0);
        return view('admin.product',compact('htmlOption'));
    }
    public function loginadmin(Request $request)
    {
        $users_username = $request->users_username;
        $users_password =$request->users_password;
        $result = DB::table('users')
        ->where('users_username',$users_username)
        ->where('users_password',$users_password)
            ->where('position_id',1)
        ->first();
        if($result)
        {
            Session::put('users_fullname',$result->users_fullname);
            Session::put('id',$result->id);
            return Redirect::to('/admin/');
        }
        else{
            Session::put('message','Tài khoản hoặc mật khẩu không đúng');
            return Redirect::to('admin/login');
        }
    }
    public function logout()
    {
        Session::put('users_fullname',null);
        Session::put('id',null);
        return Redirect::to('admin/login');
    }
    public function updatechoxacnhan($id)
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
        $db->bill_status = 2;
        $db->save();
        return Redirect('admin/order') ->with(compact('choxacnhan','danggiao','dagiao','dahuy','hoantra'));;
    }



}
