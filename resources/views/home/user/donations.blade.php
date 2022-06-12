@extends('layouts.frontbase')

@section('title','User Donations')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>User Panel</h2>
                </div>
                <div class="col-12">
                    <a href="{{route('home')}}">Home</a>
                    <a href="{{route('userpanel.reviews')}}">User Donations</a>
                </div>
            </div>
        </div>
    </div>

    <div class="single">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <h2 class="widget-title">User Menu</h2>
                            @include('home.user.usermenu')
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">

                        <h5 class="card-header">Donation List</h5>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Date</th>
                                <th scope="col">Payment</th>
                                <th scope="col">Note</th>
                                <th scope="col">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                                <tr role="row" class="odd">

                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->year}}</td>
                                    <td>{{$rs->payment}}</td>
                                    <td>{{$rs->note}}</td>
                                    <td>{{$rs->status}}</td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                </div>
            </div>
        </div>
    </div>



@endsection
