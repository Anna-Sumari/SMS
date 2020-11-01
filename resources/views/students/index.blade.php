<!-- This is the page that when the students page is clicked -->
@extends('layouts.app')
@section('content')

<div class="container">

<!-- search box -->
<form class="form-inline float-right" method="get" action="/students/search">
    @csrf
    <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>

<!-- Update and Delete success messages(these appear after successful deletion and updation) -->
@if ($message = Session::get('msg'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
@if ($message = Session::get('delmsg'))
    <div class="alert alert-danger">
        <p>{{ $message }}</p>
    </div>
@endif 

<!-- Row that displays the table title and add new student button -->
<div class="row">
    <div class="col-md-6">
        <h1>STUDENT LIST</h1>
    </div>

<!-- Add new student button -->
    <div class="col-md-6 text-right">
        <a href="{{ action('App\Http\Controllers\StudentController@create')}}" class="btn btn-primary">Add New Student</a>
    </div>
</div>

<!-- Beginning of table -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Serial No.</th>
                <th>Student First Name</th>
                <th>Student Middle Name</th>
                <th>Student Last Name</th>
                <th>Student Gender</th>
                <th>Stream Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr> 
                <td>{{$loop->iteration}}</td>
                <td>{{ $student->studentFName }}</td>
                <td>{{ $student->studentMName }}</td>
                <td>{{ $student->studentLName }}</td>
                <td>{{ $student->studentGender }}</td>
                <td>{{ $student->streamName }}</td>
                <td>

                <!-- Details, Edit and Delete Buttons -->
                <form action="/students/{{ $student->studentID }}" method="POST">
                @method('DELETE')
                    @csrf
                        <a href="/students/{{ $student->studentID }}" class="btn btn-info">Details</a>
                        <a href="/studentsedit/{{ $student->studentID }}" class="btn btn-success">Edit</a>
                        <button type="submit"  class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach 
        </tbody>
       
    </table>
    <!-- pagination buttons -->
    {{ $students->links('pagination::bootstrap-4') }}
</div>
@endsection