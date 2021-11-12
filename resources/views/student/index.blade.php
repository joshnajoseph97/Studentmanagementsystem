@extends('student.layout')

 

@section('content')

    <div class="row"><br><br>

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Student</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('student.create') }}"> Create New Student</a>

            </div>

        </div>

    </div>

   

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

   

    <table class="table table-bordered">

        <tr>

           
            <th>Student Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Teacher Name</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($student as $students)
        <tr>


            <td>{{ $students['student_name'] }}</td>
            <td>{{ $students['age'] }}</td>
            <td>{{ $students['gender']}}</td>
            <td>{{ $students['teacher_name']}}</td>

            <td>

                <form action="{{ route('student.destroy',$students['id']) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('student.edit',$students['id']) }}">Edit</a>   

                    @csrf

                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>
      

@endsection