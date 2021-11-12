@extends('teacher.layout')

 

@section('content')

    <div class="row"><br><br>

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Teacher</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('teacher.create') }}"> Create New Teacher</a>

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

            <th>No</th>
            <th>Teacher Name</th>
        </tr>

        @foreach ($teacher as $teachers)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $teachers->teacher_name }}</td>
            

        </tr>

        @endforeach

    </table>

  

    {!! $teacher->links() !!}

      

@endsection