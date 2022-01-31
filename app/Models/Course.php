<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table="course";



    function stduent_list()
    {
        return $this->belongsToMany(Student::class,"student_course","student_id","course_id");
    }
}
