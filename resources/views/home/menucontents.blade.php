@extends('layouts.frontbase')

@section('title',$menu->title .' Events')
@section('icon',Storage::url($setting->icon))
@section('content')
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
                            <img src="{{Storage::url($rs->image)}}" style="height: 300px">
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
                                    <a class="btn btn-custom" href="{{route('content',['id'=>$rs->id])}}">Learn More</a>
                                    <a class="btn btn-custom" href="{{route('content',['id'=>$rs->id])}}">Donate Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
