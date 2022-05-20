@extends('layouts.frontbase')

@section('title',$data->title)



@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Content Detail</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">Content</a>
                    <a href="">{{$data->menu->title}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Single Post Start-->
    <div class="single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="carousel">
                        <div class="container-fluid">
                            <div class="owl-carousel">
                                @foreach($images as $rs)
                                    <div class="carousel-item">
                                        <div class="carousel-img">
                                            <img src="{{Storage::url($rs->image)}}"
                                                 style="height: 450px">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <h2>{{$data->title}}</h2>
                    <p>{{$data->description}}</p>


                    <div class="single-comment">
                        <h2>Comments</h2>
                        <ul class="comment-list">
                            @include('home.messages')
                            @foreach($reviews as $rs)
                                <li class="comment-item">
                                    <div class="comment-body">
                                        <div class="comment-img">
                                            <img src="{{asset('assets')}}/img/usericon2.jpg" style="height: 50px">
                                        </div>
                                        <div class="comment-text">
                                            <h3><a>{{$rs->user->name}}</a></h3>
                                            <span>{{$rs->created_at}}</span>
                                            <strong>{{$rs->subject}}</strong>
                                            <p>{{$rs->review}}</p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="comment-form">
                        <h2>Leave a comment</h2>
                        <form class="review-text" action="{{route('storecomment')}}" method="post">
                            @csrf
                            <input type="hidden" class="form-group" name="content_id" value="{{$data->id}}">
                            <div class="form-group">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" name="subject" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <label for="review">Message *</label>
                                <textarea name="review" cols="30" rows="5" class="form-control" placeholder="Your Message"></textarea>
                            </div>
                            @auth
                                <div class="form-group">
                                    <button class="btn btn-custom">Submit</button>
                                </div>
                            @else
                                <a href="/login" class="btn btn-custom">Please login your account</a>
                            @endauth
                        </form>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <div class="search-widget">
                                <form>
                                    <input class="form-control" type="text" placeholder="Search Keyword">
                                    <button class="btn"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <h2 class="widget-title">Recent Post</h2>
                            <div class="recent-post">
                                <div class="post-item">
                                    <div class="post-img">
                                        <img src="{{asset('assets')}}/img/post-1.jpg"/>
                                    </div>
                                    <div class="post-text">
                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                        <div class="post-meta">
                                            <p>By<a href="">Admin</a></p>
                                            <p>In<a href="">Web Design</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-item">
                                    <div class="post-img">
                                        <img src="{{asset('assets')}}/img/post-2.jpg"/>
                                    </div>
                                    <div class="post-text">
                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                        <div class="post-meta">
                                            <p>By<a href="">Admin</a></p>
                                            <p>In<a href="">Web Design</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-item">
                                    <div class="post-img">
                                        <img src="{{asset('assets')}}/img/post-3.jpg"/>
                                    </div>
                                    <div class="post-text">
                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                        <div class="post-meta">
                                            <p>By<a href="">Admin</a></p>
                                            <p>In<a href="">Web Design</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-item">
                                    <div class="post-img">
                                        <img src="{{asset('assets')}}/img/post-4.jpg"/>
                                    </div>
                                    <div class="post-text">
                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                        <div class="post-meta">
                                            <p>By<a href="">Admin</a></p>
                                            <p>In<a href="">Web Design</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-item">
                                    <div class="post-img">
                                        <img src="{{asset('assets')}}/img/post-5.jpg"/>
                                    </div>
                                    <div class="post-text">
                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                        <div class="post-meta">
                                            <p>By<a href="">Admin</a></p>
                                            <p>In<a href="">Web Design</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <div class="image-widget">
                                <a href="#"><img src="{{asset('assets')}}/img/blog-1.jpg" alt="Image"></a>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <div class="tab-post">
                                <ul class="nav nav-pills nav-justified">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#featured">Featured</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#popular">Popular</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#latest">Latest</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div id="featured" class="container tab-pane active">
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="{{asset('assets')}}/img/post-1.jpg"/>
                                            </div>
                                            <div class="post-text">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                <div class="post-meta">
                                                    <p>By<a href="">Admin</a></p>
                                                    <p>In<a href="">Web Design</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="{{asset('assets')}}/img/post-2.jpg"/>
                                            </div>
                                            <div class="post-text">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                <div class="post-meta">
                                                    <p>By<a href="">Admin</a></p>
                                                    <p>In<a href="">Web Design</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="{{asset('assets')}}/img/post-3.jpg"/>
                                            </div>
                                            <div class="post-text">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                <div class="post-meta">
                                                    <p>By<a href="">Admin</a></p>
                                                    <p>In<a href="">Web Design</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="{{asset('assets')}}/img/post-4.jpg"/>
                                            </div>
                                            <div class="post-text">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                <div class="post-meta">
                                                    <p>By<a href="">Admin</a></p>
                                                    <p>In<a href="">Web Design</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="{{asset('assets')}}/img/post-5.jpg"/>
                                            </div>
                                            <div class="post-text">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                <div class="post-meta">
                                                    <p>By<a href="">Admin</a></p>
                                                    <p>In<a href="">Web Design</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="popular" class="container tab-pane fade">
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="{{asset('assets')}}/img/post-1.jpg"/>
                                            </div>
                                            <div class="post-text">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                <div class="post-meta">
                                                    <p>By<a href="">Admin</a></p>
                                                    <p>In<a href="">Web Design</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="{{asset('assets')}}/img/post-2.jpg"/>
                                            </div>
                                            <div class="post-text">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                <div class="post-meta">
                                                    <p>By<a href="">Admin</a></p>
                                                    <p>In<a href="">Web Design</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="{{asset('assets')}}/img/post-3.jpg"/>
                                            </div>
                                            <div class="post-text">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                <div class="post-meta">
                                                    <p>By<a href="">Admin</a></p>
                                                    <p>In<a href="">Web Design</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="{{asset('assets')}}/img/post-4.jpg"/>
                                            </div>
                                            <div class="post-text">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                <div class="post-meta">
                                                    <p>By<a href="">Admin</a></p>
                                                    <p>In<a href="">Web Design</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="{{asset('assets')}}/img/post-5.jpg"/>
                                            </div>
                                            <div class="post-text">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                <div class="post-meta">
                                                    <p>By<a href="">Admin</a></p>
                                                    <p>In<a href="">Web Design</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="latest" class="container tab-pane fade">
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="{{asset('assets')}}/img/post-1.jpg"/>
                                            </div>
                                            <div class="post-text">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                <div class="post-meta">
                                                    <p>By<a href="">Admin</a></p>
                                                    <p>In<a href="">Web Design</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="{{asset('assets')}}/img/post-2.jpg"/>
                                            </div>
                                            <div class="post-text">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                <div class="post-meta">
                                                    <p>By<a href="">Admin</a></p>
                                                    <p>In<a href="">Web Design</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="{{asset('assets')}}/img/post-3.jpg"/>
                                            </div>
                                            <div class="post-text">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                <div class="post-meta">
                                                    <p>By<a href="">Admin</a></p>
                                                    <p>In<a href="">Web Design</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="{{asset('assets')}}/img/post-4.jpg"/>
                                            </div>
                                            <div class="post-text">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                <div class="post-meta">
                                                    <p>By<a href="">Admin</a></p>
                                                    <p>In<a href="">Web Design</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="{{asset('assets')}}/img/post-5.jpg"/>
                                            </div>
                                            <div class="post-text">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                <div class="post-meta">
                                                    <p>By<a href="">Admin</a></p>
                                                    <p>In<a href="">Web Design</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <div class="image-widget">
                                <a href="#"><img src="{{asset('assets')}}/img/blog-2.jpg" alt="Image"></a>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <h2 class="widget-title">Categories</h2>
                            <div class="category-widget">
                                <ul>
                                    <li><a href="">National</a><span>(98)</span></li>
                                    <li><a href="">International</a><span>(87)</span></li>
                                    <li><a href="">Economics</a><span>(76)</span></li>
                                    <li><a href="">Politics</a><span>(65)</span></li>
                                    <li><a href="">Lifestyle</a><span>(54)</span></li>
                                    <li><a href="">Technology</a><span>(43)</span></li>
                                    <li><a href="">Trades</a><span>(32)</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <div class="image-widget">
                                <a href="#"><img src="{{asset('assets')}}/img/blog-3.jpg" alt="Image"></a>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <h2 class="widget-title">Tags Cloud</h2>
                            <div class="tag-widget">
                                <a href="">National</a>
                                <a href="">International</a>
                                <a href="">Economics</a>
                                <a href="">Politics</a>
                                <a href="">Lifestyle</a>
                                <a href="">Technology</a>
                                <a href="">Trades</a>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <h2 class="widget-title">Text Widget</h2>
                            <div class="text-widget">
                                <p>
                                    Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non eros
                                    leo in nunc. Donec a nulla vel turpis tempor ac vel justo. In hac platea nec eros.
                                    Nunc eu enim non turpis id augue.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Post End-->

@endsection
