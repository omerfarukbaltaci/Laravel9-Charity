@extends('layouts.frontbase')

@section('title','User Menus')
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
                    <a href="{{route('userpanel.menus')}}">User Menus</a>
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
                    <a href="{{route('userpanel.menucreate')}}" class="btn btn-success btn-lg">Add Menu</a>
                    <div class="single-content">
                        <h5 class="card-header">Menu List</h5>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Parent</th>
                                <th scope="col">Title</th>
                                <th scope="col">Image</th>
                                <th scope="col">Status</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                                <tr role="row" class="odd">
                                    <th>{{$rs->id}}</th>
                                    <th>{{\App\Http\Controllers\MenuController::getParentsTree($rs,$rs->title)}}</th>
                                    <td>{{$rs->title}}</td>

                                    <td>
                                        @if ($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" style="height: 100px; width: 200px ">
                                        @endif
                                    </td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('userpanel.menuedit',['id'=>$rs->id])}}"
                                           class="btn btn-success btn-sm">Edit</a>
                                    </td>
                                    <td><a href="{{route('userpanel.menudestroy',['id'=>$rs->id])}}"
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



@endsection
