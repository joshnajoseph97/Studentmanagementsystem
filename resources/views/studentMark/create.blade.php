@extends('studentMark.layout')

  

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Add New Student</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('studentMark.index') }}"> Back</a>

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

   

<form action="{{ route('studentMark.store') }}" method="POST">

    @csrf

  

     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Student Name:</strong>

                  <select class="form-control" id="student_name" name="student_name">
                  @foreach($student as $students)
                    <option value="{{$students['id']}}">{{$students['student_name']}}</option>
                  @endforeach
                </select>
              

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Maths:</strong>

                <input type="text" class="form-control" name="maths" placeholder="enter mark"></textarea>

            </div>

        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>science:</strong>

                <input type="text" class="form-control" name="science" placeholder="enter mark"></textarea>

            </div>

        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>history:</strong>

                <input type="text" name="history" class="form-control" placeholder="enter mark">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Term:</strong>
                <select id="term" name="term">
                <option value="first">first </option>
                <option value="second">second </option>
              </select>
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>total_mark:</strong>

                <input type="text" name="total_mark" class="form-control" placeholder="total mark">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>

   

</form>

@endsection