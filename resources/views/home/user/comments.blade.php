@extends('layouts.frontbase')

@section('title','User Comments & Reviews')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>User Panel</h2>
                </div>
                <div class="col-12">
                    <a href="{{route('home')}}">Home</a>
                    <a href="{{route('userpanel.reviews')}}">User Comments</a>
                </div>
            </div>
        </div>
    </div>

    <div class="single">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <h2 class="widget-title">User Menu</h2>
                            @include('home.user.usermenu')
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">

                        <h5 class="card-header">Comment List</h5>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Content</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Review</th>
                                <th scope="col">Rate</th>
                                <th scope="col">Status</th>
                                <th scope="col" style="width: 40px">Delete</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($comments as $rs)
                                <tr role="row" class="odd">
                                    <th>{{$rs->id}}</th>
                                    <td>
                                        <a href="{{route("content",['id'=>$rs->content_id])}}">{{$rs->content->title}}</a>
                                    </td>
                                    <td>{{$rs->subject}}</td>
                                    <td>{{$rs->review}}</td>
                                    <td>{{$rs->rate}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('userpanel.reviewdestroy',['id'=>$rs->id])}}"
                                           class="btn btn-danger btn-sm"
                                           onclick="return confirm('Deleting {{$rs->title}}!! Are you sure?')">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                </div>
            </div>
        </div>
    </div>



@endsection
