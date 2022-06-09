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
                    <a href="{{route('userpanel.index')}}">User Comments</a>
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
                    <div class="single-content">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-header">Content Image List</h5>
                                <form role="form" action="{{route('userpanel.image.store',['cid'=>$content->id])}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf

                                    <div class="card">
                                        <div class="card-body">
                                            <form id="form" data-parsley-validate="" novalidate="">
                                                <div class="form-group">
                                                    <label for="inputUserName">Title</label>
                                                    <input type="text" name="title" data-parsley-trigger="change"
                                                           placeholder="Title" autocomplete="off" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="formFile" class="form-label">Image</label>
                                                    <input class="form-control" type="file" name="image">
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                                        <p class="text-left">
                                                            <button type="submit" class="btn btn-space btn-primary">Save</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </form>
                                <h5 class="card-header">Content Image List</h5>
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Update</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($images as $rs)
                                        <tr role="row" class="odd">
                                            <th>{{$rs->id}}</th>
                                            <td>{{$rs->title}}</td>
                                            <td>
                                                @if ($rs->image)
                                                    <img src="{{Storage::url($rs->image)}}" style="height: 100px ">
                                                @endif
                                            </td>
                                            <td><a href="{{route('userpanel.image.destroy',['cid'=>$content->id,'id'=>$rs->id])}}"
                                                   class="btn btn-danger btn-sm"
                                                   onclick="return confirm('Deleting! Are you sure?')">Delete</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
