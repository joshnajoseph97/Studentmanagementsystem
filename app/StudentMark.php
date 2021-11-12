<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentMark extends Model
{
    protected $table ='student_mark';
    protected $primaryKey = 'id';
    protected $fillable = [

        'student_id', 'maths','science','history','term','total_mark','created_at','updated_at'

    ];
    public static function getStudent()
    {
        
       return static::select('student.student_name','student_mark.id','student_mark.student_id','student_mark.maths','student_mark.science','student_mark.history','student_mark.term','student_mark.total_mark','student_mark.created_at')
        ->join('student','student_mark.student_id','=','student.id')->get()->toArray();
       
      
    }
}
