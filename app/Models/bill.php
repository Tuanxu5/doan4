<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    use HasFactory;
    protected $table = 'bill';
    public function users(){
        return $this->belongsTo(users::class,'users_id','id');
    }
}
