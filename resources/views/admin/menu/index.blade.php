@extends('layouts.adminbase')

@section('title','Menu List')


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
                        <a href="{{route('admin.menu.create')}}" class="btn btn-success btn-lg">Add Menu</a>
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
                            <h5 class="card-header">Menu List</h5>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Keywords</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                    <th scope="col">Show</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $rs)
                                    <tr role="row" class="odd">
                                        <th>{{$rs->id}}</th>
                                        <td>{{$rs->title}}</td>
                                        <td>{{$rs->keywords}}</td>
                                        <td>{{$rs->description}}</td>
                                        <th>{{$rs->image}}</th>
                                        <td>{{$rs->status}}</td>
                                        <td><a href="{{route('admin.menu.edit',['id'=>$rs->id])}}"
                                               class="btn btn-success btn-sm">Edit</a>
                                        </td>
                                        <td><a href="{{route('admin.menu.destroy',['id'=>$rs->id])}}"
                                               class="btn btn-danger btn-sm"
                                               onclick="return confirm('Deleting! Are you sure?')">Delete</a></td>
                                        <td><a href="{{route('admin.menu.show',['id'=>$rs->id])}}"
                                               class="btn btn-primary btn-sm">Show</a>
                                        </td>
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
