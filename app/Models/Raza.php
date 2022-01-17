<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Raza extends Model
{
    use HasFactory;

    //deleted_at should be exist in table
    use SoftDeletes;


    protected $primaryKey = "tariq_id";
    protected $table = "raza_tables";


    public $timestamps = false;


    protected $fillable = ['name',"user_id"];

}
