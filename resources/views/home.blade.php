<!-- This is the page that appears after user logs in -->

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in! Click here to proceed') }}
                    <a href="/students" class="btn btn-info">STUDENTS</a></button>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection
