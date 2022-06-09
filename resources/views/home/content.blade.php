@extends('layouts.frontbase')

@section('title',$data->title)

@section('icon',Storage::url($setting->icon))
@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Content Detail</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">Content</a>
                    <a href="">{{$data->menu->title}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Single Post Start-->
    <div class="single">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="carousel">
                        <div class="container-fluid">
                            <div class="owl-carousel">
                                @foreach($images as $rs)
                                    <div class="carousel-item">
                                        <div class="carousel-img">
                                            <img src="{{Storage::url($rs->image)}}"
                                                 style="height: 600px">
                                        </div>
                                        <div class="carousel-text">
                                            <h1>{{$rs->title}}</h1>
                                            <div class="carousel-btn">
                                                <a class="btn btn-custom" href="">Donate Now</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <h2>{{$data->title}}</h2>
                    <p>{{$data->description}}</p>
                    @php
                        $average = $data->comment->average('rate')
                    @endphp
                    <div class="single-comment">
                        <h5><a class="fas fa-star">{{number_format($average,1)}} / {{$data->comment->count('id')}} Comment(s)</a><h5>

                        <ul class="comment-list">
                            @include('home.messages')
                            @foreach($reviews as $rs)
                                <li class="comment-item">
                                    <div class="comment-body">
                                        <div class="comment-img">
                                            <img src="{{asset('assets')}}/img/usericon2.jpg" style="height: 50px">
                                        </div>
                                        <div class="comment-text">
                                            <h3><a>{{$rs->user->name}}</a></h3>
                                            <span>{{$rs->created_at}}</span>
                                            <a class="fas fa-star"> {{$rs->rate}}</a><br>
                                            <strong>{{$rs->subject}}</strong>
                                            <p>{{$rs->review}}</p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="comment-form">
                        <h2>Leave a comment</h2>
                        <form class="review-text" action="{{route('storecomment')}}" method="post">
                            @csrf
                            <input type="hidden" class="form-group" name="content_id" value="{{$data->id}}">
                            <div class="form-group">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" name="subject" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <label for="review">Message *</label>
                                <textarea name="review" cols="30" rows="5" class="form-control"
                                          placeholder="Your Message"></textarea>
                            </div>
                            <div class="form-group">
                                <strong class="text-uppercase">Your Rating:</strong>
                                <li class="fas fa-star"></li>
                                <select name="rate">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>

                            @auth
                                <div class="form-group">
                                    <button class="btn btn-custom">Submit</button>
                                </div>
                            @else
                                <a href="/login" class="btn btn-custom">Please login your account</a>
                            @endauth
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Post End-->

@endsection
