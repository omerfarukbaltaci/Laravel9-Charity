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
                            <th scope="col">Name</th>
                            <th scope="col">{{$data->name}}</th>
                        </tr>
                        <tr>
                            <th scope="col">Phone Number</th>
                            <th scope="col">{{$data->phone}}</th>
                        </tr>
                        <tr>
                            <th scope="col">E-mail</th>
                            <th scope="col">{{$data->email}}</th>
                        </tr>
                        <tr>
                            <th scope="col">Subject</th>
                            <td scope="col">{{$data->subject}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Message</th>
                            <td scope="col">{{$data->message}}</td>
                        </tr>
                        <tr>
                            <th scope="col">IP Number</th>
                            <td scope="col">{{$data->ip}}</td>
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
                                <form role="form" action="{{route('admin.message.update',['id'=>$data->id])}}"
                                      method="post">
                                    @csrf
                                    <div class="form-group">
                                                <textarea cols="100" id="note" name="note">
                                        {{$data->note}}
                                        </textarea>
                                        <div class="row">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                                <p class="text-left">
                                                    <button type="submit" class="btn btn-space btn-primary">Save
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
