@extends('layouts.adminwindow')

@section('title','User Detail : '.$data->title)


@section('content')
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-header">Detail User Data</h5>
                    <table class="table">
                        <tr>
                            <th scope="col" style="width: 200px">ID</th>
                            <th scope="col">{{$data->id}}</th>
                        </tr>


                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">{{$data->name}}</th>
                        </tr>
                        <tr>
                            <th scope="col">E-mail</th>
                            <th scope="col">{{$data->email}}</th>
                        </tr>
                        <tr>
                            <th scope="col">Roles</th>
                            <td scope="col">
                                @foreach($data->roles as $role)
                                    {{$role->name}}
                                    <a href="{{route('admin.user.destroyrole',['uid'=>$data->id,'rid'=>$role->id])}}"
                                       onclick="return confirm('Deleting {{$role->title}}!! Are you sure?')">[×]</a>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th scope="col">Created Date</th>
                            <th scope="col">{{$data->created_at}}</th>
                        </tr>
                        <tr>
                            <th scope="col">Updated Date</th>
                            <th scope="col">{{$data->updated_at}}</th>
                        </tr>
                        <tr>
                            <th scope="col">Add Role to User</th>
                            <td>
                                <form role="form" action="{{route('admin.user.addrole',['id'=>$data->id])}}"
                                      method="post">
                                    @csrf
                                    <select name="role_id">
                                        @foreach($roles as $role)
                                            <option value="{{$role->id}}">{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                                <p class="text-left">
                                                    <button type="submit" class="btn btn-space btn-primary">Add Role
                                                    </button>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
