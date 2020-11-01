@extends('layouts.layout')
@section('content')

<!--Navigation bar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">School Management System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

<!-- Register and Login Buttons in Navigation bar -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto float-right">
            <li class="nav-item active">
              @if (Route::has('login'))
                @auth
                  <a class="nav-link" href="{{ url('/home') }}">Home</a>
                @else
                  <a class="nav-link" href="{{ route('login') }}">Login <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                @if (Route::has('register'))
                  <a class="nav-link" href="{{ route('register') }}">Register</a>
                @endif  
            </li>
                @endif  
              @endif
        </ul>
            
    </div>
</nav>

<!--Welcome image(image in css file) and text -->
<header class="masthead">
  <div class="container">
      <div class="masthead-subheading">Welcome To Our Student Management System!</div>
      <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
  </div>
</header>
@endsection



