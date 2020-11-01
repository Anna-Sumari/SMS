<!-- This is the page that appears when the add new student button is clicked -->
@extends('layouts.app')
@section('content')
<div class = "row"> 
    <div class="col-md-6 offset-md-3">
    <h1>Enter Student Details</h1>
        <!-- alert messages when there's an error when inserting new student data -->
        @if($message = Session::get('fail'))
            <div class="alert alert-danger">
                <strong>{{ $message }}</strong>
            </div>
        @endif

        <!--Inserting Values form  -->
        <form action="/students" method="POST">
        @csrf 
        <div class="form-group">
        <!-- user shouldnt be responsible for putting this, its for testing purposes -->
                <label>School ID:</label>
                <input class="form-control" type="text" name="schoolID" >
            </div>
            <div class="form-group">
                <label>Student ID:</label>
                <input class="form-control" type="text" name="studentID">
            </div>
            <div class="form-group">
                <label>Stream Name:</label>
                <input class="form-control" type="text" name="streamName" placeholder="Form 1A">
            </div>
            <div class="form-group">
                <label>First Name:</label>
                <input class="form-control" type="text" name="studentFName" placeholder="John">
            </div>
            <div class="form-group">
                <label>Middle Name:</label>
                <input class="form-control" type="text" name="studentMName" placeholder="S">
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input class="form-control" type="text" name="studentLName" placeholder="Doe">
            </div>
            <div class="form-group">
                <label>Gender</label>
                <input class="form-control"type="text" name="studentGender" placeholder="Gender(M/F)">
            </div>
            

            <button class="btn btn-primary float-right" type="submit">SUBMIT</button>
        </form>
    </div>
</div>
@endsection