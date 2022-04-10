@extends('layouts.adminbase')

@section('title','Show Menu')


@section('content')
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <!-- ============================================================== -->
            <!-- pageheader -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- end pageheader -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">{{$data->title}}</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">

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
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-header">Details</h5>
                            <table class="table">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">{{$data->id}}</th>
                                </tr>
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">{{$data->title}}</th>
                                </tr>
                                <tr>
                                    <th scope="col">Keywords</th>
                                    <th scope="col">{{$data->keywords}}</th>
                                </tr>
                                <tr>
                                    <th scope="col">Description</th>
                                    <th scope="col">{{$data->description}}</th>
                                </tr>
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col"></th>
                                </tr>
                                <tr>
                                    <th scope="col">Status</th>
                                    <th scope="col">{{$data->status}}</th>
                                </tr>
                                <tr>
                                    <th scope="col">Created Date</th>
                                    <th scope="col">{{$data->created_at}}</th>
                                </tr>
                                <tr>
                                    <th scope="col">Updated Date</th>
                                    <th scope="col">{{$data->updated_at}}</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <a href="{{route('admin.menu.edit',['id'=>$data->id])}}" class="btn btn-success btn-lg"
                                   style="width: 100px">Edit</a>
                                <a href="{{route('admin.menu.destroy',['id'=>$data->id])}}"
                                   onclick="return confirm('Deleting! Are you sure?')"
                                   class="btn btn-danger btn-lg" style="width: 100px">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
