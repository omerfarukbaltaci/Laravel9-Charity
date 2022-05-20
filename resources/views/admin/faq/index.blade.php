@extends('layouts.adminbase')

@section('title','FAQ List')


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
                        <a href="{{route('admin.faq.create')}}" class="btn btn-success btn-lg">Add Question</a>
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
                            <h5 class="card-header">FAQ List</h5>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col" style="width: 10px">ID</th>
                                    <th scope="col">Question</th>
                                    <th scope="col">Answer</th>
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
                                        <td>{{$rs->question}}</td>
                                        <td>{!! $rs->answer !!}</td>
                                        <td>{{$rs->status}}</td>
                                        <td><a href="{{route('admin.faq.edit',['id'=>$rs->id])}}"
                                               class="btn btn-success btn-sm">Edit</a>
                                        </td>
                                        <td><a href="{{route('admin.faq.destroy',['id'=>$rs->id])}}"
                                               class="btn btn-danger btn-sm"
                                               onclick="return confirm('Deleting {{$rs->title}}!! Are you sure?')">Delete</a>
                                        </td>
                                        <td><a href="{{route('admin.faq.show',['id'=>$rs->id])}}"
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
