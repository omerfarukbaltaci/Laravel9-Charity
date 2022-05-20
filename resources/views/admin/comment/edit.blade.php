@extends('layouts.adminbase')

@section('title','Edit Content')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
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
                        <h2 class="pageheader-title">Edit Content</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}"
                                                                   class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('admin.content.index')}}"
                                                                   class="breadcrumb-link">Content</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Content</li>
                                </ol>
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
                    <div class="card-body">
                        <form role="form" action="{{route('admin.content.update',['id'=>$data->id])}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Parent Menu</label>

                                <select class="form-control select2" name="menu_id" style="">
                                    @foreach($datalist as $rs)
                                        <option value="{{$rs->id}}"
                                                @if ($rs->id == $data->menu_id) selected="selected" @endif>
                                            {{\App\Http\Controllers\AdminPanel\MenuController::getParentsTree($rs,$rs->title)}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName">Title</label>
                                <input type="text" name="title" value="{{$data->title}}" data-parsley-trigger="change"
                                       autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Keywords</label>
                                <input id="inputEmail" type="text" name="keywords" data-parsley-trigger="change"
                                       value="{{$data->keywords}}" autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Description</label>
                                <input name="description" type="text" value="{{$data->description}}"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Type</label>
                                <input name="type" type="text" placeholder="Type"
                                       class="form-control" value="{{$data->type}}">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Date</label>
                                <input name="date" type="date" placeholder="Date"
                                       class="form-control" value="{{$data->date}}">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Location</label>
                                <input name="location" type="text" placeholder="Location"
                                       class="form-control" value="{{$data->location}}">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Hour</label>
                                <input name="hour" type="time" placeholder="Hour"
                                       class="form-control" value="{{$data->hour}}">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Donate Quantity</label>
                                <input name="donateQuantity" type="number" value="{{$data->donateQuantity}}"
                                       class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" type="file" name="image">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option selected>{{$data->status}}"</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="inputPassword">Detail</label>
                                <textarea class="form-control" name="detail" id="detail">
                                    {{$data->detail}}
                                </textarea>
                                <script>
                                    ClassicEditor
                                        .create(document.querySelector('#detail'))
                                        .then(editor => {
                                            console.log(editor);
                                        })
                                        .catch(error => {
                                            console.error(error);
                                        });
                                </script>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                    <p class="text-left">
                                        <button type="submit" class="btn btn-space btn-primary">Update Data</button>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection


