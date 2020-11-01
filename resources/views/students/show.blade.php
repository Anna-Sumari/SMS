<!-- This is the page that appears when user clicks the Details button -->

@extends('layouts.app')

@section('content')
<div class="container">
<!-- Fetches info from db based on student ID selected -->
    <h1>Details of {{$studentID->studentFName}} {{$studentID->studentMName}} {{$studentID->studentLName}} </h1>

    <p>Student ID - {{ $studentID->studentID }}</p>
    <p>Student First Name - {{ $studentID->studentFName  }}</p>
    <p>Student Middle Name - {{ $studentID->studentMName  }}</p>
    <p>Student Last Name - {{ $studentID->studentLName  }}</p>
    <p>Student Gender - {{ $studentID->studentGender  }}</p>
    <p>Stream Name - {{ $studentID->streamName  }}</p>

    <a href="/students" class="btn btn-primary text-right">BACK</a>

</div>
@endsection







 




