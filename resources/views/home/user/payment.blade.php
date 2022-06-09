@extends('layouts.frontbase')

@section('title','Payment | '.$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Contact Form</h2>
                </div>
                <div class="col-12">
                    <a href="{{route('home')}}">Home</a>
                    <a href="{{route('contact')}}">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <div class="single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-content">
                        <div class="contact-img">
                            <img src="{{{asset('assets')}}}/img/contact.jpg" alt="Image">
                        </div>
                        @include('home.messages')
                        <div class="contact-form">
                            <form id="checkout-form" action="{{route("storemessage")}}" method="post" class="clearfix">
                                @csrf
                                <div class="control-group">
                                    <input type="text" class="form-control" name="name" placeholder="Name & Surname"
                                           required="required"
                                           data-validation-required-message="Name & Surname">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="tel" class="form-control" name="phone" placeholder="Phone Number"
                                           required="required"
                                           data-validation-required-message="Phone Number">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" name="email" placeholder="E-mail"
                                           required="required"
                                           data-validation-required-message="E-mail">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                           required="required"
                                           data-validation-required-message="Subject">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="input-group" name="message" type="text" placeholder="Your Message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit" value="Send Message">Send Message
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <h2 class="widget-title">Contact Information</h2>
                            {!! $setting->contact !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
