@extends('layouts.adminbase')

@section('title','Contact Form Messages List')


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
                            <h5 class="card-header">Message List</h5>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" style="width: 40px">Show</th>
                                    <th scope="col" style="width: 40px">Delete</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $rs)
                                    <tr role="row" class="odd">
                                        <th>{{$rs->id}}</th>
                                        <td>{{$rs->name}}</td>
                                        <td>{{$rs->phone}}</td>
                                        <td>{{$rs->email}}</td>
                                        <td>{{$rs->subject}}</td>
                                        <td>{{$rs->status}}</td>

                                        <td>
                                            <a href="{{route('admin.message.show',['id'=>$rs->id])}}"
                                               onclick="return !window.open(this.href, '','top=50 left=100 width=700,height=620')"
                                               class="btn btn-primary btn-sm">
                                                Show
                                            </a>
                                        </td>
                                        <td><a href="{{route('admin.message.destroy',['id'=>$rs->id])}}"
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
