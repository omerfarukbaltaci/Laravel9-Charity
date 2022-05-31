@extends('layouts.adminbase')

@section('title','Comment & Review List')


@section('content')
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-header">Comment List</h5>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">User Name</th>
                                    <th scope="col">Content</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Review</th>
                                    <th scope="col">Rate</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" style="width: 40px">Show</th>
                                    <th scope="col" style="width: 40px">Delete</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $rs)
                                    <tr role="row" class="odd">
                                        <th>{{$rs->id}}</th>
                                        <td>
                                            <a href="{{route("admin.content.show",['id'=>$rs->content_id])}}">{{$rs->user->name}}</a>
                                        </td>
                                        <td>{{$rs->content->title}}</td>
                                        <td>{{$rs->subject}}</td>
                                        <td>{{$rs->review}}</td>
                                        <td>{{$rs->rate}}</td>
                                        <td>{{$rs->status}}</td>

                                        <td>
                                            <a href="{{route('admin.comment.show',['id'=>$rs->id])}}"
                                               onclick="return !window.open(this.href, '','top=50 left=100 width=700,height=620')"
                                               class="btn btn-primary btn-sm">
                                                Show
                                            </a>
                                        </td>
                                        <td><a href="{{route('admin.comment.destroy',['id'=>$rs->id])}}"
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
        </div>
@endsection
