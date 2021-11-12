<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table ='teacher';
    protected $primaryKey = 'id';
    protected $fillable = [

        'teacher_name', 

    ];
    public static function getTeacher()
    {
        
       // $tech = $this->hasOne(Teacher::className(), ['id' => 'teacher_id']);
        return static::select('id','teacher_name')->get()->toArray();
      
    }
}
