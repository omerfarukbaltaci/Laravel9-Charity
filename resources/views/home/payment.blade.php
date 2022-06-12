@extends('layouts.frontbase')

@section('title','Payment Page')


@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Payment</h2>
                </div>
                <div class="col-12">
                    <a href="{{route('home')}}">Home</a>
                    <a href="{{route('contact')}}">Payment</a>
                </div>
            </div>
        </div>
    </div>
    <div class="single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-content">
                    <div class="contact-img">
                        <img src="{{{asset('assets')}}}/img/volunteer.jpg" alt="Image" style="height: 300px">
                    </div>
                    @include('home.messages')
                    <div class="contact-form">
                        <form id="checkout-form" action="{{route("payment.storedonate")}}" method="post" class="clearfix">
                            @csrf
                            <div class="sidebar">
                                <div class="sidebar-widget">
                                    <h2 class="widget-title">Payment Information</h2>
                                </div>
                                <div class="control-group">
                                    <h5>Donate Quantity ($)</h5>
                                    <input type="number" class="form-control" name="payment"
                                           placeholder="Donate Quantity"
                                           required="required"
                                           data-validation-required-message="Donate Quantity">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <h5>Card Holder</h5>
                                    <input type="text" class="form-control" name="holder" placeholder="Card Holder"
                                           required="required"
                                           data-validation-required-message="Phone Number">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <h5>Card Number</h5>
                                    <input type="text" class="form-control" name="number" placeholder="Card Number"
                                           required="required"
                                           data-validation-required-message="Card Number">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <h5>Exp. Date</h5>
                                    <input type="date" class="form-control" name="year" placeholder="Exp. Date"
                                           required="required"
                                           data-validation-required-message="Date">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <h5>Security Code</h5>
                                    <input type="number" class="form-control" name="code" placeholder="Security Code"
                                           required="required"
                                           data-validation-required-message="Security Code">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <h5>Your Note</h5>
                                    <textarea class="input-group" name="note" type="text" placeholder="Your Note"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit" value="Send Message">Donate !
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>

@endsection
