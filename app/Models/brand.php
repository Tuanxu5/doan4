<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    use HasFactory;
    protected $table = 'brand';
    public function parent()
    {
        return $this->belongsTo('App\Models\brand', 'brand_parentid');
    }
    public function children()
    {
        return $this->hasMany('App\Models\brand', 'brand_parentid');
    }
}
