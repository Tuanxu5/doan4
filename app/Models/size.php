<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class size extends Model
{
    use HasFactory;
    protected $table = 'size';
    protected $fillable = ['id','product_id','size_name','size_productprice','size_productsale','created_at','updated_at'];
    public function product()
    {
        return $this->belongsTo(product::class,'product_id','id')->withTimeStamps();
    }
}
