@extends('student.layout')

   

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit Student</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('student.index') }}"> Back</a>

            </div>

        </div>

    </div>

   

    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

  

    <form action="{{ route('student.update',$student->student_name) }}" method="POST">

        @csrf

        @method('PUT')

   

         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Name:</strong>

                    <input type="text" name="student_name" value="{{ $student->student_name }}" class="form-control" placeholder="Name">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Age:</strong>

                    <input type="text" name="age" value="{{ $student->age }}" class="form-control" placeholder="age">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>gender:</strong>

                    <input type="text" name="gender" value="{{ $student->gender }}" class="form-control" placeholder="gender">

                </div>

            </div>

           <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>teacher name:</strong>

                    <input type="text" name="gender" value="{{ $student->teacher_id }}" class="form-control" placeholder="teacher_name">
                   

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>

   

    </form>

@endsection