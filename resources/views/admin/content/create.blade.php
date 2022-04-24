@extends('layouts.adminbase')

@section('title','Add Content')


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
                        <h2 class="pageheader-title">Add Content</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}"
                                                                   class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('admin.content.index')}}"
                                                                   class="breadcrumb-link">Menu</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Menu</li>
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
                        <form role="form" action="{{route('admin.content.store')}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Parent Menu</label>

                                <select class="form-control select2" name="menu_id" style="">
                                    @foreach($data as $rs)
                                        <option
                                            value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\MenuController::getParentsTree($rs,$rs->title)}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName">Title</label>
                                <input type="text" name="title" data-parsley-trigger="change"
                                       placeholder="Title" autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Keywords</label>
                                <input id="inputEmail" type="text" name="keywords" data-parsley-trigger="change"
                                       placeholder="Keywords" autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Description</label>
                                <input name="description" type="text" placeholder="Description"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Type</label>
                                <input name="type" type="text" placeholder="Type"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Testimonial</label>
                                <input name="testimonial" type="text" placeholder="Testimonial"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Event</label>
                                <input name="event" type="text" placeholder="Event"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Donate</label>
                                <input name="donate" type="text" placeholder="Donate"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Quantity</label>
                                <input name="quantity" type="number" value="0"
                                       class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" type="file" name="image">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Detail</label>
                                <textarea class="form-control" name="detail">
                                </textarea>

                            </div>

                            <div class="row">
                                <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                    <p class="text-left">
                                        <button type="submit" class="btn btn-space btn-primary">Save</button>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
