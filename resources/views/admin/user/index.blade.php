@extends('layouts.adminbase')

@section('title','User List')


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
                            <h5 class="card-header">User List</h5>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Role</th>
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
                                        <td>{{$rs->email}}</td>
                                        <td>
                                            @foreach($rs->roles as $role)
                                                {{$role->name}}
                                            @endforeach
                                        </td>
                                        <td></td>

                                        <td>
                                            <a href="{{route('admin.user.show',['id'=>$rs->id])}}"
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
