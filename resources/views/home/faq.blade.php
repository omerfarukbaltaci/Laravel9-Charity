<style>
    .main{
        width: 55vw;
        background: inherit;
        margin: auto;
        position: relative;
        top: 8vh;
        height: auto;
        padding: 2vw;
        padding-top: 5vw;
        padding-bottom: 10vw;
    }
    body{
        background-color: grey;
        font-family: 'Titillium Web', sans-serif;
    }
    .sec{
        font-size: 1.5vw;
        width: 100%;
        background-color: orange;
        padding: 1.5vw;
        cursor: pointer;
        margin-top: 0.5vw;
        background-color: #eeeeee;
        text-align: left;
        color: #9e9e9e;
    }
    .sec:hover{
        width: 110%;
        padding: 2vw;
        animation-name: rotate;
        animation-duration: 1s;
        animation-fill-mode: forwards;
        animation-iteration-count: 1;
    }



    .fa{
        float: right;
    }
    .collapsable{
        width: 100%;
        background-color: pink;
        padding: 2vw;
        font-size: 1.2vw;
        display: none;
        color: #757575;
        background-color: white;
    }
    .sec i{
        font-size: 2vw;
        color: #616161;
    }
    @media only screen and (max-width: 425px){
        .main{
            width: 90vw;
        }
        .sec{
            font-size: 4.5vw;
            width: 100%;
            padding: 4.5vw;
            margin-top: 1.5vw;
        }
        .sec:hover{
            width: 110%;
            padding: 6vw;
        }
        .collapsable{
            width: 100%;
            padding: 6vw;
            font-size: 3.6vw;
            display: none;
        }
        .sec i{
            font-size: 6vw;
        }
    }
</style>
@extends('layouts.frontbase')
@section('title','Frequently Asked Questions | '.$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))
@section('head')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".sec").click(function(){
                $(this).next(".collapsable").slideToggle();


            });

            $(".sec").mouseenter(function(){
                $(this).addClass("z-depth-4");
                $(this).next(".collapsable").css({"width":"110%"});
            });
            $(".sec").mouseleave(function(){
                $(this).removeClass("z-depth-4");
                $(this).next(".collapsable").css({"width":"100%"});
            });

        });
</script>

@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Frequently Asked Questions</h2>
                </div>
                <div class="col-12">
                    <a href="{{route('home')}}">Home</a>
                    <a href="{{route('about')}}">FAQ</a>
                </div>
            </div>
        </div>
    </div>
    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <p>Frequently Asked Questions</p>
            </div>
            <div class = "accordian">
                @foreach($datalist as $rs)
                    <div class = "sec">
                        <span class = "section">{{$rs->question}}</span>
                    </div>
                    <div id="colp1" class="collapsable">
                        {!! $rs->answer !!}
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
