@extends('layouts.frontbase')

@section('title','User Registration')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>User Login</h2>
                </div>
                <div class="col-12">
                    <a href="{{route('home')}}">Home</a>
                    <a href="{{route('register')}}">User Registration</a>
                </div>
            </div>
            <div class="container">

                @include('auth.register')

            </div>
        </div>
    </div>



@endsection
