<!-- This is the page that appears when user clicks the edit button on the students list-->
@extends ('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <h1>Update Student Details</h1>

        <!-- alert messages when there's an error when updating -->
        @if($message = Session::get('fail'))
            <div class="alert alert-danger">
                <strong>{{ $message }}</strong>
            </div>
        @endif
        
        <!--Updating Values form  -->
        @foreach($students as $student)
        <!-- second argument for the action method,the id MUST BE PASSED AS AN ARRAY -->
            <form action="{{ action('App\Http\Controllers\StudentController@update',[$student->studentID])}}" method="post">
            {{csrf_field()}}
                <input type="hidden" name="_method" value="PATCH" />
                @method('POST')
                <div class="form-group">
                    <label>School ID</label>
                    <input class="form-control" type="text" name="schoolID" value="{{ $student->schoolID }}">
                </div>
                <div class="form-group">
                    <label>Student ID</label>
                    <input class="form-control" type="text" name="studentID" value="{{ $student->studentID }}">
                </div><div class="form-group">
                    <label>First Name</label>
                    <input class="form-control" type="text" name="studentFName" value="{{ $student->studentFName }}">
                </div>
                <div class="form-group">
                    <label>Middle Name</label>
                    <input class="form-control" type="text" name="studentMName" value="{{ $student->studentMName }}">
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input class="form-control" type="text" name="studentLName" value="{{ $student->studentLName }}">
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <input class="form-control" type="text" name="studentGender" value="{{ $student->studentGender }}">
                </div>
                <div class="form-group">
                    <label>Stream Name</label>
                    <input class="form-control" type="text" name="streamName" value="{{ $student->streamName }}">
                </div>

                <!-- Update and back buttons -->
                <div class="float-right">
                    <button  type="submit" class="btn btn-warning">Update</button>
                    <a href="/students" class="btn btn-primary">Back</a>
                </div>   
            </form>
        @endforeach
    </div>
</div>
@endsection