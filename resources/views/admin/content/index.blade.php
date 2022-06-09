@extends('layouts.adminbase')

@section('title','Content List')


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
                        <a href="{{route('admin.content.create')}}" class="btn btn-success btn-lg">Add Content</a>
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
                                    <th scope="col">Show</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $rs)
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
                                                     style="height: 40px;">
                                            </a>
                                        </td>
                                        <td>{{$rs->status}}</td>
                                        <td><a href="{{route('admin.content.edit',['id'=>$rs->id])}}"
                                               class="btn btn-success btn-sm">Edit</a>
                                        </td>
                                        <td><a href="{{route('admin.content.destroy',['id'=>$rs->id])}}"
                                               class="btn btn-danger btn-sm"
                                               onclick="return confirm('Deleting {{$rs->title}}!! Are you sure?')">Delete</a>
                                        </td>
                                        <td><a href="{{route('admin.content.show',['id'=>$rs->id])}}"
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
