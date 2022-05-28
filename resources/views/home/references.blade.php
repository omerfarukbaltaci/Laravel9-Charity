@extends('layouts.frontbase')

@section('title','References | '.$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>From Blog</h2>
                </div>
                <div class="col-12">
                    <a href="{{route('home')}}">Home</a>
                    <a href="{{route('references')}}">References</a>
                </div>
            </div>
        </div>
    </div>
    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <p>References</p>
            </div>
            <div class="row">
                    {!! $setting->references !!}
            </div>
        </div>
    </div>
@endsection
