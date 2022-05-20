@extends('layouts.frontbase')

@section('title',$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))


@section('slider')
    @include('home._slider')
@endsection

@section('content')


    <!-- Video Modal Start-->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                                allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img" data-parallax="scroll"
                         data-image-src="{{asset('assets')}}/img/about.jpg"></div>
                </div>
                <div class="col-lg-6">
                    <div class="section-header">
                        <p>Learn About Us</p>
                        <h2>Worldwide non-profit charity organization</h2>
                    </div>
                    <div class="about-tab">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#tab-content-1">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#tab-content-2">Mission</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#tab-content-3">Vision</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="tab-content-1" class="container tab-pane active">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae pellentesque turpis.
                                Donec in hendrerit dui, vel blandit massa. Ut vestibulum suscipit cursus. Cras quis
                                porta nulla, ut placerat risus. Aliquam nec magna eget velit luctus dictum. Phasellus et
                                felis sed purus tristique dignissim. Morbi sit amet leo at purus accumsan pellentesque.
                                Vivamus fermentum nisi vel dapibus blandit. Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit.
                            </div>
                            <div id="tab-content-2" class="container tab-pane fade">
                                Sed tincidunt, magna ut vehicula volutpat, turpis diam condimentum justo, posuere congue
                                turpis massa in mi. Proin ornare at massa at fermentum. Nunc aliquet sed nisi iaculis
                                ornare. Nam semper tortor eget est egestas, eu sagittis nunc sodales. Interdum et
                                malesuada fames ac ante ipsum primis in faucibus. Praesent bibendum sapien sed purus
                                molestie malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </div>
                            <div id="tab-content-3" class="container tab-pane fade">
                                Aliquam dolor odio, mollis sed feugiat sit amet, feugiat ut sapien. Nunc eu dignissim
                                lorem. Suspendisse at hendrerit enim. Interdum et malesuada fames ac ante ipsum primis
                                in faucibus. Sed condimentum semper turpis vel facilisis. Nunc vel faucibus orci. Mauris
                                ut mauris rhoncus, efficitur nisi at, venenatis quam. Praesent egestas pretium enim sit
                                amet finibus. Curabitur at erat molestie, tincidunt lorem eget, consequat ligula.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <p>What We Do?</p>
                <h2>We believe that we can save more lifes with you</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-diet"></i>
                        </div>
                        <div class="service-text">
                            <h3>Healthy Food</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-water"></i>
                        </div>
                        <div class="service-text">
                            <h3>Pure Water</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-healthcare"></i>
                        </div>
                        <div class="service-text">
                            <h3>Health Care</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-education"></i>
                        </div>
                        <div class="service-text">
                            <h3>Primary Education</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-home"></i>
                        </div>
                        <div class="service-text">
                            <h3>Residence Facilities</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-social-care"></i>
                        </div>
                        <div class="service-text">
                            <h3>Social Care</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Facts Start -->
    <div class="facts" data-parallax="scroll" data-image-src="{{asset('assets')}}/img/facts.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="flaticon-home"></i>
                        <div class="facts-text">
                            <h3 class="facts-plus" data-toggle="counter-up">150</h3>
                            <p>Countries</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="flaticon-charity"></i>
                        <div class="facts-text">
                            <h3 class="facts-plus" data-toggle="counter-up">400</h3>
                            <p>Volunteers</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="flaticon-kindness"></i>
                        <div class="facts-text">
                            <h3 class="facts-dollar" data-toggle="counter-up">10000</h3>
                            <p>Our Goal</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="flaticon-donation"></i>
                        <div class="facts-text">
                            <h3 class="facts-dollar" data-toggle="counter-up">5000</h3>
                            <p>Raised</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Causes Start -->
    <div class="causes">
        <div class="container">
            <div class="section-header text-center">
                <p>Popular Causes</p>
                <h2>Let's know about charity causes around the world</h2>
            </div>
            <div class="owl-carousel causes-carousel">
                <div class="causes-item">
                    <div class="causes-img">
                        <img src="{{asset('assets')}}/img/causes-1.jpg" alt="Image">
                    </div>
                    <div class="causes-progress">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                 aria-valuemax="100">
                                <span>85%</span>
                            </div>
                        </div>
                        <div class="progress-text">
                            <p><strong>Raised:</strong> $100000</p>
                            <p><strong>Goal:</strong> $50000</p>
                        </div>
                    </div>
                    <div class="causes-text">
                        <h3>Lorem ipsum dolor sit</h3>
                        <p>Lorem ipsum dolor sit amet elit. Phasell nec pretium mi. Curabit facilis ornare velit non
                            vulputa</p>
                    </div>
                    <div class="causes-btn">
                        <a class="btn btn-custom">Learn More</a>
                        <a class="btn btn-custom">Donate Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Causes End -->


    <!-- Donate Start -->
    <div class="donate" data-parallax="scroll" data-image-src="{{asset('assets')}}/img/donate.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="donate-content">
                        <div class="section-header">
                            <p>Donate Now</p>
                            <h2>Let's donate to needy people for better lives</h2>
                        </div>
                        <div class="donate-text">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare
                                velit non. Aliquam metus tortor, auctor id gravida, viverra quis sem. Curabitur non nisl
                                nec nisi maximus. Aenean convallis porttitor. Aliquam interdum at lacus non blandit.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="donate-form">
                        <form>
                            <div class="control-group">
                                <input type="text" class="form-control" placeholder="Name" required="required"/>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" placeholder="Email" required="required"/>
                            </div>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-custom active">
                                    <input type="radio" name="options" checked> $10
                                </label>
                                <label class="btn btn-custom">
                                    <input type="radio" name="options"> $20
                                </label>
                                <label class="btn btn-custom">
                                    <input type="radio" name="options"> $30
                                </label>
                            </div>
                            <div>
                                <button class="btn btn-custom" type="submit">Donate Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Donate End -->


    <!-- Event Start -->
    <div class="event">
        <div class="container">
            <div class="section-header text-center">
                <p>Upcoming Events</p>
                <h2>Be ready for our upcoming charity events</h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    @foreach($contentlist1 as $rs)
                        <div class="event-item">
                            <img src="{{Storage::url($rs->image)}}">
                            <div class="event-content">
                                <div class="event-meta">
                                    <p><i class="fa fa-calendar-alt"></i>{{$rs->date}}</p>
                                    <p><i class="far fa-clock"></i>{{$rs->hour}}</p>
                                    <p><i class="fa fa-map-marker-alt"></i>{{$rs->location}}</p>
                                </div>
                                <div class="event-text">
                                    <h3>{{$rs->title}}</h3>
                                    <p>
                                        {{$rs->description}}
                                    </p>
                                    <a class="btn btn-custom" href="{{route('content',['id'=>$rs->id])}}">Learn More</a>
                                </div>
                            </div>
                        </div>
                </div>
            @endforeach

            <!-- Event End -->


                <!-- Team Start -->
                <div class="team">
                    <div class="container">
                        <div class="section-header text-center">
                            <p>Meet Our Team</p>
                            <h2>Awesome guys behind our charity activities</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img src="{{asset('assets')}}/img/team-1.jpg" alt="Team Image">
                                    </div>
                                    <div class="team-text">
                                        <h2>Donald John</h2>
                                        <p>Founder & CEO</p>
                                        <div class="team-social">
                                            <a href=""><i class="fab fa-twitter"></i></a>
                                            <a href=""><i class="fab fa-facebook-f"></i></a>
                                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                                            <a href=""><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img src="{{asset('assets')}}/img/team-2.jpg" alt="Team Image">
                                    </div>
                                    <div class="team-text">
                                        <h2>Adam Phillips</h2>
                                        <p>Chef Executive</p>
                                        <div class="team-social">
                                            <a href=""><i class="fab fa-twitter"></i></a>
                                            <a href=""><i class="fab fa-facebook-f"></i></a>
                                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                                            <a href=""><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img src="{{asset('assets')}}/img/team-3.jpg" alt="Team Image">
                                    </div>
                                    <div class="team-text">
                                        <h2>Thomas Olsen</h2>
                                        <p>Chef Advisor</p>
                                        <div class="team-social">
                                            <a href=""><i class="fab fa-twitter"></i></a>
                                            <a href=""><i class="fab fa-facebook-f"></i></a>
                                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                                            <a href=""><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img src="{{asset('assets')}}/img/team-4.jpg" alt="Team Image">
                                    </div>
                                    <div class="team-text">
                                        <h2>James Alien</h2>
                                        <p>Advisor</p>
                                        <div class="team-social">
                                            <a href=""><i class="fab fa-twitter"></i></a>
                                            <a href=""><i class="fab fa-facebook-f"></i></a>
                                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                                            <a href=""><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Team End -->





                <!-- Blog Start -->
                <div class="blog">
                    <div class="container">
                        <div class="section-header text-center">
                            <p>Our Blog</p>
                            <h2>Latest news & articles directly from our blog</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="blog-item">
                                    <div class="blog-img">
                                        <img src="{{asset('assets')}}/img/blog-1.jpg" alt="Image">
                                    </div>
                                    <div class="blog-text">
                                        <h3><a href="#">Lorem ipsum dolor sit</a></h3>
                                        <p>
                                            Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit
                                            non vulpte
                                            liqum metus tortor
                                        </p>
                                    </div>
                                    <div class="blog-meta">
                                        <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                        <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="blog-item">
                                    <div class="blog-img">
                                        <img src="{{asset('assets')}}/img/blog-2.jpg" alt="Image">
                                    </div>
                                    <div class="blog-text">
                                        <h3><a href="#">Lorem ipsum dolor sit</a></h3>
                                        <p>
                                            Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit
                                            non vulpte
                                            liqum metus tortor
                                        </p>
                                    </div>
                                    <div class="blog-meta">
                                        <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                        <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="blog-item">
                                    <div class="blog-img">
                                        <img src="{{asset('assets')}}/img/blog-3.jpg" alt="Image">
                                    </div>
                                    <div class="blog-text">
                                        <h3><a href="#">Lorem ipsum dolor sit</a></h3>
                                        <p>
                                            Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit
                                            non vulpte
                                            liqum metus tortor
                                        </p>
                                    </div>
                                    <div class="blog-meta">
                                        <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                        <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog End -->
@endsection
