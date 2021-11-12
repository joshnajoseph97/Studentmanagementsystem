<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table ='student';
    protected $primaryKey = 'id';
    protected $fillable = [

        'student_name', 'age','gender','teacher_id','created_at','updated_at'

    ];
    public static function getteacher()
    {
        return static::select('student.id','student.student_name','student.age','student.gender','teacher.teacher_name')
        ->join('teacher','student.teacher_id','=','teacher.id')->get()->toArray();
        
    }
    public static function getStudentDetails()
    {
        return static::select('student.student_name','student.id')->get()->toArray();
    }
     

}
 
