@extends('layouts.adminbase')

@section('title','Settings')
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
                        <h2 class="pageheader-title">Settings</h2>
                        <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit
                            amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}"
                                                                   class="breadcrumb-link">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Settings</li>
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
                    <div class="card">
                        <form role="form" action="{{route('admin.setting.update')}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="card-header pills-regular">
                                <ul class="nav nav-pills card-header-pills" id="custom-tabs-one-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active show" id="custom-tabs-one-general-tab"
                                           data-toggle="tab"
                                           href="#custom-tabs-one-general" role="tab"
                                           aria-controls="custom-tabs-one-general"
                                           aria-selected="true">General</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-smtp-tab" data-toggle="tab"
                                           href="#custom-tabs-one-smtp"
                                           role="tab" aria-controls="custom-tabs-one-smtp" aria-selected="false">Smtp
                                            Email</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-social-tab" data-toggle="tab"
                                           href="#custom-tabs-one-social"
                                           role="tab" aria-controls="custom-tabs-one-social" aria-selected="false">Social
                                            Media</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-about-tab" data-toggle="tab"
                                           href="#custom-tabs-one-about"
                                           role="tab" aria-controls="custom-tabs-one-about" aria-selected="false">About
                                            Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-contact-tab" data-toggle="tab"
                                           href="#custom-tabs-one-contact"
                                           role="tab" aria-controls="custom-tabs-one-contact" aria-selected="false">Contact
                                            Page</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-references-tab" data-toggle="tab"
                                           href="#custom-tabs-one-references"
                                           role="tab" aria-controls="custom-tabs-one-references" aria-selected="false">References</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-services-tab" data-toggle="tab"
                                           href="#custom-tabs-one-services"
                                           role="tab" aria-controls="custom-tabs-one-services" aria-selected="false">Services
                                            </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-one-tabContent">
                                    <div class="tab-pane fade active show" id="custom-tabs-one-general" role="tabpanel"
                                         aria-labelledby="custom-tabs-one-general">
                                        <div class="card-body">
                                            <input type="hidden" id="id" name="id"
                                                   value="{{$data->id}}" class="form-control">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" name="title"
                                                       value="{{$data->title}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Keywords</label>
                                                <input type="text" name="keywords"
                                                       value="{{$data->keywords}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" name="description"
                                                       value="{{$data->description}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Company</label>
                                                <input type="text" name="company"
                                                       value="{{$data->company}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="address"
                                                       value="{{$data->address}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" name="phone"
                                                       value="{{$data->phone}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>E-mail</label>
                                                <input type="text" name="email"
                                                       value="{{$data->email}}" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control" name="status">
                                                    <option selected="selected">{{$data->status}}</option>
                                                    <option>True</option>
                                                    <option>False</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Icon</label>
                                                <input class="form-control" type="file" name="icon">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-smtp" role="tabpanel"
                                         aria-labelledby="custom-tabs-one-smtp-tab">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Smtp Server</label>
                                                <input type="text" name="smtpserver"
                                                       value="{{$data->smtpserver}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Smtp E-mail</label>
                                                <input type="text" name="smtpemail"
                                                       value="{{$data->smtpemail}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Smtp Password</label>
                                                <input type="password" name="smtppassword"
                                                       value="{{$data->smtppassword}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Smtp Port</label>
                                                <input type="text" name="smtpport"
                                                       value="{{$data->smtpport}}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-social" role="tabpanel"
                                         aria-labelledby="custom-tabs-one-social-tab">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Fax</label>
                                                <input type="text" name="fax"
                                                       value="{{$data->fax}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Facebook</label>
                                                <input type="text" name="facebook"
                                                       value="{{$data->facebook}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Twitter</label>
                                                <input type="text" name="twitter"
                                                       value="{{$data->twitter}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Instagram</label>
                                                <input type="text" name="instagram"
                                                       value="{{$data->instagram}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Linkedin</label>
                                                <input type="text" name="linkedin"
                                                       value="{{$data->linkedin}}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-about" role="tabpanel"
                                         aria-labelledby="custom-tabs-one-about-tab">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>About Us</label>
                                                <textarea id="aboutus" name="aboutus">
                                                    {{$data->aboutus}}
                                                </textarea>
                                                <script>
                                                    ClassicEditor
                                                        .create(document.querySelector('#aboutus'))
                                                        .then(editor => {
                                                            console.log(editor);
                                                        })
                                                        .catch(error => {
                                                            console.error(error);
                                                        });
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-contact" role="tabpanel"
                                         aria-labelledby="custom-tabs-one-contact-tab">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Contact</label>
                                                <textarea id="contact" name="contact">
                                                    {{$data->contact}}
                                                </textarea>
                                                <script>
                                                    ClassicEditor
                                                        .create(document.querySelector('#contact'))
                                                        .then(editor => {
                                                            console.log(editor);
                                                        })
                                                        .catch(error => {
                                                            console.error(error);
                                                        });
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-references" role="tabpanel"
                                         aria-labelledby="custom-tabs-one-references-tab">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>References</label>
                                                <textarea id="references" name="references">
                                                    {{$data->references}}
                                                </textarea>
                                                <script>
                                                    ClassicEditor
                                                        .create(document.querySelector('#references'))
                                                        .then(editor => {
                                                            console.log(editor);
                                                        })
                                                        .catch(error => {
                                                            console.error(error);
                                                        });
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-services" role="tabpanel"
                                         aria-labelledby="custom-tabs-one-services-tab">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Countries</label>
                                                <input type="text" name="countries"
                                                       value="{{$data->countries}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Volunteers</label>
                                                <input type="text" name="volunteers"
                                                       value="{{$data->volunteers}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Goal</label>
                                                <input type="text" name="goal"
                                                       value="{{$data->goal}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Raised</label>
                                                <input type="text" name="raised"
                                                       value="{{$data->raised}}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                            <p class="text-left">
                                                <button type="submit" class="btn btn-space btn-primary">Update Setting
                                                </button>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
@endsection
