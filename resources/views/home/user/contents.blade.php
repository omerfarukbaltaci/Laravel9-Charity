@extends('layouts.frontbase')

@section('title','User Contents')
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
                    <a href="{{route('userpanel.contents')}}">User Contents</a>
                </div>
            </div>
        </div>
    </div>

    <div class="single">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <h2 class="widget-title">User Menu</h2>
                            @include('home.user.usermenu')
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">

                    <a href="{{route('userpanel.contentcreate')}}" class="btn btn-success btn-lg">Add Content</a>
                    <h5 class="card-header">Content List</h5>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Menu</th>
                            <th scope="col">Title</th>
                            <th scope="col">Location</th>
                            <th scope="col">Date</th>
                            <th scope="col">Hour</th>
                            <th scope="col">Image</th>
                            <th scope="col">Image Gallery</th>
                            <th scope="col">Status</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contents as $rs)
                            <tr role="row" class="odd">
                                <th>{{$rs->id}}</th>
                                <th>{{\App\Http\Controllers\AdminPanel\MenuController::getParentsTree($rs,$rs->title)}}</th>
                                <td>{{$rs->title}}</td>
                                <td>{{$rs->location}}</td>
                                <td>{{$rs->date}}</td>
                                <td>{{$rs->hour}}</td>
                                <td>
                                    @if ($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" style="height: 40px ">
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('admin.image.index',['cid'=>$rs->id])}}"
                                       onclick="return !window.open(this.href, '','top=50 left=100 width=700,height=620')">
                                        <img src="{{asset('assets')}}/admin/assets/images/gallery.png"
                                             style="height: 60px; width: 60px">
                                    </a>
                                </td>
                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('userpanel.contentedit',['id'=>$rs->id])}}"
                                       class="btn btn-success btn-sm">Edit</a>
                                </td>
                                <td><a href="{{route('userpanel.contentdestroy',['id'=>$rs->id])}}"
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
