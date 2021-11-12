@extends('studentMark.layout')

 

@section('content')

    <div class="row"><br><br>

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Student</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('studentMark.create') }}"> Create New StudentMark</a>

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
            <th>Maths</th>
            <th>Science</th>
            <th>History</th>
            <th>term</th>
            <th>Total Marks</th>
            <th>Created On</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($studentMark as $studentMarks)

        <tr>

          

            <td>{{ $studentMarks['student_name'] }}</td>
            <td>{{ $studentMarks['maths'] }}</td>
            <td>{{ $studentMarks['science']}}</td>
            <td>{{ $studentMarks['history']}}</td>
            <td>{{ $studentMarks['term']}}</td>
            <td>{{ $studentMarks['total_mark']}}</td>
            <td>{{ $studentMarks['created_at']}}</td>

            <td>

                <form action="{{ route('studentMark.destroy',$studentMarks['id']) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('studentMark.edit',$studentMarks['id']) }}">Edit</a>   

                    @csrf

                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    

      

@endsection