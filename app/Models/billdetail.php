<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class billdetail extends Model
{
    use HasFactory;
    protected $table = 'billdetail';
    public function bill(){
        return $this->belongsTo(bill::class,'bill_id','id');
    }
    public function product(){
        return $this->belongsTo(product::class,'product_id','id');
    }
}
