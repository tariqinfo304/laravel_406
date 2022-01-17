<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;


    protected $table= "user_address";
    public $timestamps  = false;



    function user()
    {
        return $this->belongsTo(User::class,"user_id","id");
    }
}
