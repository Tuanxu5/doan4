<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    public function brand(){
        return $this->belongsTo(brand::class,'brand_id','id');
    }
    //public function tags(){
        //return $this->belongsTo(tags::class,'product_tags','id');
    //}
    public function producttags(){
        return $this->hasMany(producttags::class);
    }
    public function tags(){
        return $this->belongsToMany(tags::class,'producttags','product_id','tags_id')
                    ->withTimeStamps();
    }
    public function size()
    {
        return $this->hasMany(size::class);
    }
}
