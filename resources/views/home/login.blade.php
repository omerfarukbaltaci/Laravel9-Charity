@extends('layouts.frontbase')

@section('title','User Login')
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
                    <a href="{{route('about')}}">User Login</a>
                </div>
            </div>
            <div class="container">

                @include('auth.login')

            </div>
        </div>
    </div>



@endsection
