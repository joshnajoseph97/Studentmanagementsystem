<?php

namespace App\Http\Controllers;

use App\StudentMark;
use App\Student;
use Illuminate\Http\Request;

class StudentMarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentMark = new StudentMark;
        $studentMarks = $studentMark->getStudent();
          return view('studentMark.index',['studentMark'=>$studentMarks]);
        // $studentMark = StudentMark::latest()->paginate(5);
        // return view('studentMark.index',compact('studentMark'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $student = new Student;
      $students=$student->getStudentDetails();
        return view('studentMark.create',['student'=>$students]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([

        //     'student_name' => 'required',

            
        // ]);
        // Student::create($request->all());
        $studentMark = new StudentMark;
        $studentMark->student_id = $request->student_name;
        $studentMark->maths = $request->maths;
        $studentMark->science = $request->science;
        $studentMark->history=$request->history;
        $studentMark->term=$request->term;
         $studentMark->total_mark=$request->total_mark;
        // dd($studentMark);
        $studentMark->save();
        return redirect()->route('studentMark.index')

                        ->with('success','studentMark created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StudentMark  $studentMark
     * @return \Illuminate\Http\Response
     */
    public function show(StudentMark $studentMark)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudentMark  $studentMark
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentMark $studentMark)
    {
        return view('studentMark.edit',compact('studentMark'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudentMark  $studentMark
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentMark $studentMark)
    {
         $request->validate([

            'student_name' => 'required',

        ]);
          $studentMark->update($request->all());
        return redirect()->route('studentMark.index')

                        ->with('success','student updated successfully');
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudentMark  $studentMark
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentMark $studentMark)
    {
        $studentMark->delete();
        return redirect()->route('studentMark.index')

                        ->with('success','studentMark deleted successfully');
    }
}
