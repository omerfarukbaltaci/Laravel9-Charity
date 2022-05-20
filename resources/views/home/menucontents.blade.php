@extends('layouts.frontbase')

@section('title',$menu->title .' Events')



@section('content')
    <div class="top-bar d-none d-md-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="top-bar-left">
                        <div class="text">
                            <i class="fa fa-phone-alt"></i>
                            <p>+123 456 7890</p>
                        </div>
                        <div class="text">
                            <i class="fa fa-envelope"></i>
                            <p>info@example.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="top-bar-right">
                        <div class="social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Upcoming Events</h2>
                </div>
                <div class="col-12">
                    <a href="{{route('home')}}">Home</a>
                    <a href="">{{$menu->title}}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="event">
        <div class="container">
            <div class="section-header text-center">
                <p>Upcoming Events</p>
                <h2>Be ready for our upcoming charity events</h2>
            </div>
            <div class="row">
                @foreach($contents as $rs)
                    <div class="col-lg-6">
                        <div class="event-item">
                            <img src="{{Storage::url($rs->image)}}">
                            <div class="event-content">
                                <div class="event-meta">
                                    <p><i class="fa fa-calendar-alt"></i>{{$rs->date}}</p>
                                    <p><i class="far fa-clock"></i>{{$rs->hour}}</p>
                                    <p><i class="fa fa-map-marker-alt"></i>{{$rs->location}}</p>
                                </div>
                                <div class="event-text">
                                    <h3>{{$rs->title}}</h3>
                                    <p>
                                        {{$rs->description}}
                                    </p>
                                    <a class="btn btn-custom" href="{{route('content',['id'=>$rs->id])}}">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
