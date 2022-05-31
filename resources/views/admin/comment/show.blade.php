@extends('layouts.adminwindow')

@section('title','Show Message : '.$data->title)


@section('content')
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-header">Detail Message Data</h5>
                    <table class="table">
                        <tr>
                            <th scope="col" style="width: 200px">ID</th>
                            <th scope="col">{{$data->id}}</th>
                        </tr>
                        <tr>
                            <th scope="col">Content</th>
                            <th scope="col">{{$data->content->title}}</th>
                        </tr>
                        <tr>
                            <th scope="col">User Name</th>
                            <th scope="col">{{$data->user->name}}</th>
                        </tr>
                        <tr>
                            <th scope="col">Subject</th>
                            <td scope="col">{{$data->subject}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Message</th>
                            <td scope="col">{{$data->review}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Rate</th>
                            <td scope="col">{{$data->rate}}</td>
                        </tr>
                        <tr>
                            <th scope="col">IP Number</th>
                            <td scope="col">{{$data->IP}}</td>
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
                        <tr>
                            <th scope="col">Admin Note</th>
                            <td>
                                <form role="form" action="{{route('admin.comment.update',['id'=>$data->id])}}"
                                      method="post">
                                    @csrf
                                    <div class="form-group">
                                        <select name="status">
                                            <option selected>{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>

                                        </select>
                                        <div class="row">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                                <p class="text-left">
                                                    <button type="submit" class="btn btn-space btn-primary">Update Comment
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
