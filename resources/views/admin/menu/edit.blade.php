@extends('layouts.adminbase')

@section('title','Edit Menu')


@section('content')
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <!-- ============================================================== -->
            <!-- pageheader -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Add Menu</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('admin.menu.index')}}" class="breadcrumb-link">Menu</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Menu</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h5 class="card-header">Edit</h5>
                    <div class="card-body">
                        <form role="form" action="{{route('admin.menu.update',['id'=>$data->id])}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="inputUserName">Title</label>
                                <input type="text" name="title" value="{{$data->title}}" data-parsley-trigger="change"
                                       autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Keywords</label>
                                <input id="inputEmail" type="text" name="keywords" data-parsley-trigger="change"
                                       value="{{$data->keywords}}" autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Description</label>
                                <input name="description" type="text" value="{{$data->description}}"
                                       class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option selected>{{$data->status}}"</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                            <br>
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
@endsection
