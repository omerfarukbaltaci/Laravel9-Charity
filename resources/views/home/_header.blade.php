<body>
<!-- Top Bar Start -->
<div class="top-bar d-none d-md-block">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="top-bar-left">
                    <div class="text">
                        <i class="fa fa-phone-alt"></i>
                        <p>{{$setting->phone}}</p>
                    </div>
                    <div class="text">
                        <i class="fa fa-envelope"></i>
                        <p>{{$setting->smtpemail}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="top-bar-right">
                    <form action="{{route('getcontent')}}" method="post">
                        @csrf
                        @livewire('search')
                    </form>
                    @livewireScripts
                    <div class="social">
                        <a href="{{$setting->twitter}}"><i class="fab fa-twitter"></i></a>
                        <a href="{{$setting->facebook}}"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{$setting->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                        <a href="{{$setting->instagram}}"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Bar End -->
