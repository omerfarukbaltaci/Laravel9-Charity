@extends('layouts.frontbase')

@section('title','User Content Create')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
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
                    <a href="#">User Content Edit</a>
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
                        <h5 class="card-header">Create Content</h5>
                        <form role="form" action="{{route('userpanel.contentstore')}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Parent Menu</label>

                                <select class="form-control select2" name="menu_id" style="">
                                    @foreach($data as $rs)
                                        <option
                                            value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\MenuController::getParentsTree($rs,$rs->title)}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName">Title</label>
                                <input type="text" name="title" data-parsley-trigger="change"
                                       placeholder="Title" autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Keywords</label>
                                <input id="inputEmail" type="text" name="keywords" data-parsley-trigger="change"
                                       placeholder="Keywords" autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Description</label>
                                <input name="description" type="text" placeholder="Description"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Type</label>
                                <input name="type" type="text" placeholder="Type"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Location</label>
                                <input name="location" type="text" placeholder="Location"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Date</label>
                                <input name="date" type="date" placeholder="Date"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Hour</label>
                                <input name="hour" type="time" placeholder="Hour"
                                       class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" type="file" name="image">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Detail</label>
                                <textarea class="form-control" id="detail" name="detail">

                                </textarea>
                                <script>
                                    ClassicEditor
                                        .create( document.querySelector( '#detail' ) )
                                        .then( editor => {
                                            console.log( editor );
                                        } )
                                        .catch( error => {
                                            console.error( error );
                                        } );
                                </script>
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
            </div>
        </div>
    </div>



@endsection
