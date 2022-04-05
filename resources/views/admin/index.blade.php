@extends('layouts.adminbase')

@section('title','Admin Panel')



@section('content')
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                    <ul class="collapse dropdown-header-top">
                                        <li><a href="{{asset('assets')}}/admin/index.html">Dashboard v.1</a></li>
                                        <li><a href="{{asset('assets')}}/admin/index-1.html">Dashboard v.2</a></li>
                                        <li><a href="{{asset('assets')}}/admin/index-3.html">Dashboard v.3</a></li>
                                        <li><a href="{{asset('assets')}}/admin/product-list.html">Product List</a></li>
                                        <li><a href="{{asset('assets')}}/admin/product-edit.html">Product Edit</a></li>
                                        <li><a href="{{asset('assets')}}/admin/product-detail.html">Product Detail</a></li>
                                        <li><a href="{{asset('assets')}}/admin/product-cart.html">Product Cart</a></li>
                                        <li><a href="{{asset('assets')}}/admin/product-payment.html">Product Payment</a></li>
                                        <li><a href="{{asset('assets')}}/admin/analytics.html">Analytics</a></li>
                                        <li><a href="{{asset('assets')}}/admin/widgets.html">Widgets</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                    <ul id="demo" class="collapse dropdown-header-top">
                                        <li><a href="{{asset('assets')}}/admin/mailbox.html">Inbox</a>
                                        </li>
                                        <li><a href="{{asset('assets')}}/admin/mailbox-view.html">View Mail</a>
                                        </li>
                                        <li><a href="{{asset('assets')}}/admin/mailbox-compose.html">Compose Mail</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#others" href="#">Miscellaneous <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                    <ul id="others" class="collapse dropdown-header-top">
                                        <li><a href="{{asset('assets')}}/admin/file-manager.html">File Manager</a></li>
                                        <li><a href="{{asset('assets')}}/admin/contacts.html">Contacts Client</a></li>
                                        <li><a href="{{asset('assets')}}/admin/projects.html">Project</a></li>
                                        <li><a href="{{asset('assets')}}/admin/project-details.html">Project Details</a></li>
                                        <li><a href="{{asset('assets')}}/admin/blog.html">Blog</a></li>
                                        <li><a href="{{asset('assets')}}/admin/blog-details.html">Blog Details</a></li>
                                        <li><a href="{{asset('assets')}}/admin/404.html">404 Page</a></li>
                                        <li><a href="{{asset('assets')}}/admin/500.html">500 Page</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                    <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                        <li><a href="{{asset('assets')}}/admin/google-map.html">Google Map</a>
                                        </li>
                                        <li><a href="{{asset('assets')}}/admin/data-maps.html">Data Maps</a>
                                        </li>
                                        <li><a href="{{asset('assets')}}/admin/pdf-viewer.html">Pdf Viewer</a>
                                        </li>
                                        <li><a href="{{asset('assets')}}/admin/x-editable.html">X-Editable</a>
                                        </li>
                                        <li><a href="{{asset('assets')}}/admin/code-editor.html">Code Editor</a>
                                        </li>
                                        <li><a href="{{asset('assets')}}/admin/tree-view.html">Tree View</a>
                                        </li>
                                        <li><a href="{{asset('assets')}}/admin/preloader.html">Preloader</a>
                                        </li>
                                        <li><a href="{{asset('assets')}}/admin/images-cropper.html">Images Cropper</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                    <ul id="Chartsmob" class="collapse dropdown-header-top">
                                        <li><a href="{{asset('assets')}}/admin/bar-charts.html">Bar Charts</a>
                                        </li>
                                        <li><a href="{{asset('assets')}}/admin/line-charts.html">Line Charts</a>
                                        </li>
                                        <li><a href="{{asset('assets')}}/admin/area-charts.html">Area Charts</a>
                                        </li>
                                        <li><a href="{{asset('assets')}}/admin/rounded-chart.html">Rounded Charts</a>
                                        </li>
                                        <li><a href="{{asset('assets')}}/admin/c3.html">C3 Charts</a>
                                        </li>
                                        <li><a href="{{asset('assets')}}/admin/sparkline.html">Sparkline Charts</a>
                                        </li>
                                        <li><a href="{{asset('assets')}}/admin/peity.html">Peity Charts</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                    <ul id="Tablesmob" class="collapse dropdown-header-top">
                                        <li><a href="{{asset('assets')}}/admin/static-table.html">Static Table</a>
                                        </li>
                                        <li><a href="{{asset('assets')}}/admin/data-table.html">Data Table</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                    <ul id="formsmob" class="collapse dropdown-header-top">
                                        <li><a href="{{asset('assets')}}/admin/basic-form-element.html">Basic Form Elements</a>
                                        </li>
                                        <li><a href="{{asset('assets')}}/admin/advance-form-element.html">Advanced Form Elements</a>
                                        </li>
                                        <li><a href="{{asset('assets')}}/admin/password-meter.html">Password Meter</a>
                                        </li>
                                        <li><a href="{{asset('assets')}}/admin/multi-upload.html">Multi Upload</a>
                                        </li>
                                        <li><a href="{{asset('assets')}}/admin/tinymc.html">Text Editor</a>
                                        </li>
                                        <li><a href="{{asset('assets')}}/admin/dual-list-box.html">Dual List Box</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                    <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                        <li><a href="{{asset('assets')}}/admin/basic-form-element.html">Basic Form Elements</a>
                                        </li>
                                        <li><a href="{{asset('assets')}}/admin/advance-form-element.html">Advanced Form Elements</a>
                                        </li>
                                        <li><a href="{{asset('assets')}}/admin/password-meter.html">Password Meter</a>
                                        </li>
                                        <li><a href="{{asset('assets')}}/admin/multi-upload.html">Multi Upload</a>
                                        </li>
                                        <li><a href="{{asset('assets')}}/admin/tinymc.html">Text Editor</a>
                                        </li>
                                        <li><a href="{{asset('assets')}}/admin/dual-list-box.html">Dual List Box</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                    <ul id="Pagemob" class="collapse dropdown-header-top">
                                        <li><a href="{{asset('assets')}}/admin/login.html">Login</a>
                                        </li>
                                        <li><a href="{{asset('assets')}}/admin/register.html">Register</a>
                                        </li>
                                        <li><a href="{{asset('assets')}}/admin/lock.html">Lock</a>
                                        </li>
                                        <li><a href="{{asset('assets')}}/admin/password-recovery.html">Password Recovery</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="icon nalika-home"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Dashboard Three</h2>
                                        <p>Welcome to Nalika <span class="bread-ntd">Admin Template</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="breadcomb-report">
                                    <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="section-admin container-fluid">
        <div class="row admin text-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                            <h4 class="text-left text-uppercase"><b>Orders</b></h4>
                            <div class="row vertical-center-box vertical-center-box-tablet">
                                <div class="col-xs-3 mar-bot-15 text-left">
                                    <label class="label bg-green">30% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                </div>
                                <div class="col-xs-9 cus-gh-hd-pro">
                                    <h2 class="text-right no-margin">10,000</h2>
                                </div>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width: 78%;" class="progress-bar bg-green"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                            <h4 class="text-left text-uppercase"><b>Tax Deduction</b></h4>
                            <div class="row vertical-center-box vertical-center-box-tablet">
                                <div class="text-left col-xs-3 mar-bot-15">
                                    <label class="label bg-red">15% <i class="fa fa-level-down" aria-hidden="true"></i></label>
                                </div>
                                <div class="col-xs-9 cus-gh-hd-pro">
                                    <h2 class="text-right no-margin">5,000</h2>
                                </div>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width: 38%;" class="progress-bar progress-bar-danger bg-red"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                            <h4 class="text-left text-uppercase"><b>Revenue</b></h4>
                            <div class="row vertical-center-box vertical-center-box-tablet">
                                <div class="text-left col-xs-3 mar-bot-15">
                                    <label class="label bg-blue">50% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                </div>
                                <div class="col-xs-9 cus-gh-hd-pro">
                                    <h2 class="text-right no-margin">$70,000</h2>
                                </div>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width: 60%;" class="progress-bar bg-blue"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                            <h4 class="text-left text-uppercase"><b>Yearly Sales</b></h4>
                            <div class="row vertical-center-box vertical-center-box-tablet">
                                <div class="text-left col-xs-3 mar-bot-15">
                                    <label class="label bg-purple">80% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                </div>
                                <div class="col-xs-9 cus-gh-hd-pro">
                                    <h2 class="text-right no-margin">$100,000</h2>
                                </div>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width: 60%;" class="progress-bar bg-purple"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-sales-area mg-tb-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="product-sales-chart">
                        <div class="portlet-title">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="caption pro-sl-hd">
                                        <span class="caption-subject text-uppercase"><b>Product Sales</b></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="actions graph-rp">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-grey active">
                                                <input type="radio" name="options" class="toggle" id="option1" checked="">Today</label>
                                            <label class="btn btn-grey">
                                                <input type="radio" name="options" class="toggle" id="option2">Week</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="sparklinehome" class="sparkline-container">Loading..</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="white-box analytics-info-cs mg-b-30 res-mg-t-30">
                        <h3 class="box-title">Total Visit</h3>
                        <ul class="list-inline two-part-sp">
                            <li>
                                <div id="sparklinedash"></div>
                            </li>
                            <li class="text-right sp-cn-r"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter sales-sts-ctn">8659</span></li>
                        </ul>
                    </div>
                    <div class="white-box analytics-info-cs mg-b-30">
                        <h3 class="box-title">Total Page Views</h3>
                        <ul class="list-inline two-part-sp">
                            <li>
                                <div id="sparklinedash2"></div>
                            </li>
                            <li class="text-right"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter sales-sts-ctn">7469</span></li>
                        </ul>
                    </div>
                    <div class="white-box analytics-info-cs mg-b-30">
                        <h3 class="box-title">Unique Visitor</h3>
                        <ul class="list-inline two-part-sp">
                            <li>
                                <div id="sparklinedash3"></div>
                            </li>
                            <li class="text-right"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter sales-sts-ctn">6011</span></li>
                        </ul>
                    </div>
                    <div class="white-box analytics-info-cs">
                        <h3 class="box-title">Bounce Rate</h3>
                        <ul class="list-inline two-part-sp">
                            <li>
                                <div id="sparklinedash4"></div>
                            </li>
                            <li class="text-right"><i class="fa fa-level-down" aria-hidden="true"></i> <span class="sales-sts-ctn">18%</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="traffic-analysis-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="white-box tranffic-als-inner">
                        <h3 class="box-title"><small class="pull-right m-t-10 last-month-sc cl-one"><i class="fa fa-sort-asc"></i> 18% last month</small> Site Traffic</h3>
                        <div class="stats-row">
                            <div class="stat-item">
                                <h6>Overall Growth</h6>
                                <b>80.40%</b></div>
                            <div class="stat-item">
                                <h6>Montly</h6>
                                <b>15.40%</b></div>
                            <div class="stat-item">
                                <h6>Day</h6>
                                <b>5.50%</b></div>
                        </div>
                        <div id="sparkline8"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="white-box tranffic-als-inner res-mg-t-30">
                        <h3 class="box-title"><small class="pull-right m-t-10 last-month-sc cl-two"><i class="fa fa-sort-desc"></i> 18% last month</small>Site Traffic</h3>
                        <div class="stats-row">
                            <div class="stat-item">
                                <h6>Overall Growth</h6>
                                <b>80.40%</b></div>
                            <div class="stat-item">
                                <h6>Montly</h6>
                                <b>15.40%</b></div>
                            <div class="stat-item">
                                <h6>Day</h6>
                                <b>5.50%</b></div>
                        </div>
                        <div id="sparkline9"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="white-box tranffic-als-inner res-mg-t-30">
                        <h3 class="box-title"><small class="pull-right m-t-10 last-month-sc cl-three"><i class="fa fa-sort-asc"></i> 18% last month</small>Site Traffic</h3>
                        <div class="stats-row">
                            <div class="stat-item">
                                <h6>Overall Growth</h6>
                                <b>80.40%</b></div>
                            <div class="stat-item">
                                <h6>Montly</h6>
                                <b>15.40%</b></div>
                            <div class="stat-item">
                                <h6>Day</h6>
                                <b>5.50%</b></div>
                        </div>
                        <div id="sparkline10"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-new-list-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="single-new-trend mg-t-30">
                        <a href="#"><img src="{{asset('assets')}}/admin/img/new-product/5.png" alt=""></a>
                        <div class="overlay-content">
                            <a href="#">
                                <h2>$280</h2>
                            </a>
                            <a href="#" class="btn-small">Now</a>
                            <div class="product-action">
                                <ul>
                                    <li>
                                        <a data-toggle="tooltip" title="Shopping" href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a data-toggle="tooltip" title="Quick view" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <a href="#">
                                <h4>Princes Diamond</h4>
                            </a>
                            <div class="pro-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="single-new-trend mg-t-30">
                        <a href="#"><img src="{{asset('assets')}}/admin/img/new-product/5.png" alt=""></a>
                        <div class="overlay-content">
                            <a href="#">
                                <h2>$280</h2>
                            </a>
                            <a href="#" class="btn-small">Now</a>
                            <div class="product-action">
                                <ul>
                                    <li>
                                        <a data-toggle="tooltip" title="Shopping" href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a data-toggle="tooltip" title="Quick view" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <a href="#">
                                <h4>Princes Diamond</h4>
                            </a>
                            <div class="pro-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="single-new-trend mg-t-30">
                        <a href="#"><img src="{{asset('assets')}}/admin/img/new-product/5.png" alt=""></a>
                        <div class="overlay-content">
                            <a href="#">
                                <h2>$280</h2>
                            </a>
                            <a href="#" class="btn-small">Now</a>
                            <div class="product-action">
                                <ul>
                                    <li>
                                        <a data-toggle="tooltip" title="Shopping" href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a data-toggle="tooltip" title="Quick view" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <a href="#">
                                <h4>Princes Diamond</h4>
                            </a>
                            <div class="pro-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="single-new-trend mg-t-30">
                        <a href="#"><img src="{{asset('assets')}}/admin/img/new-product/5.png" alt=""></a>
                        <div class="overlay-content">
                            <a href="#">
                                <h2>$280</h2>
                            </a>
                            <a href="#" class="btn-small">Now</a>
                            <div class="product-action">
                                <ul>
                                    <li>
                                        <a data-toggle="tooltip" title="Shopping" href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a data-toggle="tooltip" title="Quick view" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <a href="#">
                                <h4>Princes Diamond</h4>
                            </a>
                            <div class="pro-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-sales-area mg-tb-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="product-sales-chart">
                        <div class="portlet-title">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="caption pro-sl-hd">
                                        <span class="caption-subject text-uppercase"><b>Order Statistic</b></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="actions graph-rp">
                                        <a href="#" class="btn btn-dark-blue btn-circle active tip-top" data-toggle="tooltip" title="Upload">
                                            <i class="fa fa-cloud-download" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="btn btn-dark btn-circle active tip-top" data-toggle="tooltip" title="Refresh">
                                            <i class="fa fa-reply" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="btn btn-blue-grey btn-circle active tip-top" data-toggle="tooltip" title="Delete">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="line-chart" class="flot-chart flot-chart-sts line-chart-statistic"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="analytics-rounded mg-b-30 res-mg-t-30">
                        <div class="analytics-rounded-content">
                            <h5>Percentage distribution</h5>
                            <h2><span class="counter">60</span>/20</h2>
                            <div class="text-center">
                                <div id="sparkline51"></div>
                            </div>
                        </div>
                    </div>
                    <div class="analytics-rounded">
                        <div class="analytics-rounded-content">
                            <h5>Percentage division</h5>
                            <h2><span class="counter">150</span>/<span class="counter">54</span></h2>
                            <div class="text-center">
                                <div id="sparkline52"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="author-area-pro">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="personal-info-wrap">
                        <div class="widget-head-info-box">
                            <div class="persoanl-widget-hd">
                                <h2>Jon Royita</h2>
                                <p>Founder of Uttara It Park</p>
                            </div>
                            <img src="{{asset('assets')}}/admin/img/notification/5.jpg" class="img-circle circle-border m-b-md" alt="profile">
                            <div class="social-widget-result">
                                <span>100 Tweets</span> |
                                <span>350 Following</span> |
                                <span>610 Followers</span>
                            </div>
                        </div>
                        <div class="widget-text-box">
                            <h4>Jhon Royita</h4>
                            <p>To all the athaists attacking me right now, I can't make you believe in God, you have to have faith.</p>
                            <div class="text-right like-love-list">
                                <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                <a class="btn btn-xs btn-primary"><i class="fa fa-heart"></i> Love</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="author-widgets-single res-mg-t-30">
                        <div class="author-wiget-inner">
                            <div class="perso-img">
                                <img src="{{asset('assets')}}/admin/img/notification/6.jpg" class="img-circle circle-border m-b-md" alt="profile">
                            </div>
                            <div class="persoanl-widget-hd persoanl1-widget-hd">
                                <h2>Fire Foxy</h2>
                                <p>Founder of Uttara It House</p>
                            </div>
                            <div class="social-widget-result social-widget1-result">
                                <span>100 Tweets</span> |
                                <span>350 Following</span> |
                                <span>610 Followers</span>
                            </div>
                        </div>
                        <div class="widget-text-box">
                            <h4>Fire Foxy</h4>
                            <p>To all the athaists attacking me right now, I can't make you believe in God, you have to have faith.</p>
                            <div class="text-right like-love-list">
                                <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                <a class="btn btn-xs btn-primary"><i class="fa fa-heart"></i> Love</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="personal-info-wrap personal-info-ano res-mg-t-30">
                        <div class="widget-head-info-box">
                            <div class="persoanl-widget-hd">
                                <h2>Jon Royita</h2>
                                <p>Founder of Uttara It Park</p>
                            </div>
                            <img src="{{asset('assets')}}/admin/img/contact/2.jpg" class="img-circle circle-border m-b-md" alt="profile">
                            <div class="social-widget-result">
                                <span>100 Tweets</span> |
                                <span>350 Following</span> |
                                <span>610 Followers</span>
                            </div>
                        </div>
                        <div class="widget-text-box">
                            <h4>Jhon Royita</h4>
                            <p>To all the athaists attacking me right now, I can't make you believe in God, you have to have faith.</p>
                            <div class="text-right like-love-list">
                                <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                <a class="btn btn-xs btn-primary"><i class="fa fa-heart"></i> Love</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="calender-area mg-tb-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="calender-inner">
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
