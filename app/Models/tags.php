<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tags extends Model
{
    use HasFactory;
    protected $table = 'tags';
    protected $fillable = ['id','tags_name','created_at','updated_at'];
    public function product(){
        return $this->belongsToMany(Product::class, 'producttags','tags_id','product_id');
    }
}
