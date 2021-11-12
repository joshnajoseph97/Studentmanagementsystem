<?php

namespace App\Http\Controllers;

use App\Student;
use App\Teacher;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = new Student;
        $students = $student->getteacher();
       
        return view('student.index',['student'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
         $teacher = new Teacher;
        $teachers = $teacher->getTeacher();
        // dd($teachers);
        return view('student.create',['teachers'=>$teachers]);
        

      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student;
        $student->student_name = $request->student_name;
        $student->age = $request->age;
        $student->gender = $request->gender;
        $student->teacher_id=$request->teacher_name;
        $student->save();
        return redirect()->route('student.index')
        ->with('success','student has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        // dd($student);
         $teacher = new Teacher;
        $teachers = $teacher->getTeacher();
        return view('student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
                $request->validate([

            'student_name' => 'required',

        ]);
        $student->update($request->all());
        return redirect()->route('student.index')

                        ->with('success','student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('student.index')

                        ->with('success','student deleted successfully');
    }
}
