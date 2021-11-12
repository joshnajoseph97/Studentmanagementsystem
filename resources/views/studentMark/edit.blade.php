@extends('studentMark.layout')

   

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit Student Mark</h2>

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

  

    <form action="{{ route('studentMark.update',$studentMark->id) }}" method="POST">

        @csrf

        @method('PUT')

   

         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Name:</strong>

                    <input type="text" name="student_name" value="{{ $studentMark->student_id }}" class="form-control" placeholder="Name">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Maths:</strong>

                    <input type="text" name="maths" value="{{ $studentMark->maths }}" class="form-control" placeholder="Maths">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>science:</strong>

                    <input type="text" name="science" value="{{ $studentMark->science }}" class="form-control" placeholder="science">

                </div>

            </div>
             <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>history:</strong>

                    <input type="text" name="history" value="{{ $studentMark->history }}" class="form-control" placeholder="history">

                </div>

            </div>
              <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">
                <strong>term:</strong>
                <select class="form-control" id="term" name="term">
                <option value="first">first </option>
                <option value="second">second </option>
              </select>

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>total_mark:</strong>

                    <input type="text" name="total_mark" value="{{ $studentMark->total_mark }}" class="form-control" placeholder="total_mark">

                </div>

            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>

   

    </form>

@endsection