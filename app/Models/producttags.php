<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producttags extends Model
{
    use HasFactory;
    protected $table = 'producttags';
    protected $fillable = ['id','product_id ','tags_id ','created_at','updated_at'];
    public function product(){
        return $this->belongsTo(Product::class,'product_id','id')->withTimeStamps();
    }
}
