<!-- Nav Bar Start -->
<div class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <a href="{{asset('assets')}}/index.html" class="navbar-brand">Helpz</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        @php
            $mainMenus = \App\Http\Controllers\HomeController::mainMenuList();
        @endphp
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto">

                <a href="{{asset('assets')}}/index.html" class="nav-item nav-link active">Home</a>
                <a href="{{asset('assets')}}/about.html" class="nav-item nav-link">About</a>
                <a href="{{asset('assets')}}/causes.html" class="nav-item nav-link">Causes</a>
                <a href="{{asset('assets')}}/event.html" class="nav-item nav-link">Events</a>
                <a href="{{asset('assets')}}/blog.html" class="nav-item nav-link">Blog</a>

                @foreach($mainMenus as $rs)

                    @if(count($rs->children))
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{$rs->title}}</a>
                            @include('home.menutree',['children'=> $rs->children])
                        </div>
                    @else
                        <a href="" class="nav-item nav-link">{{$rs->title}}</a>
                    @endif
                @endforeach
                <a href="{{asset('assets')}}/mail/contact.html" class="nav-item nav-link">Contact</a>

            </div>
        </div>
    </div>
</div>
<!-- Nav Bar End -->
