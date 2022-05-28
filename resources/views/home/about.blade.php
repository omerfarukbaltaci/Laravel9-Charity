@extends('layouts.frontbase')

@section('title','About Us | '.$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>About Us</h2>
                </div>
                <div class="col-12">
                    <a href="{{route('home')}}">Home</a>
                    <a href="{{route('about')}}">About Us</a>
                </div>
            </div>
        </div>
    </div>
    <div class="team">
        <div class="container">
            <div class="row">
                    {!! $setting->aboutus !!}
            </div>
        </div>
    </div>
@endsection
