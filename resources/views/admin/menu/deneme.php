<!-- ---------yedek çalışan sidebar------------------- -->
<style>
    .dropdown-menu li {
        position: relative;
    }

    .dropdown-menu .dropdown-submenu {
        display: none;
        position: absolute;
        left: 100%;
        top: -7px;
    }

    .dropdown-menu .dropdown-submenu-left {
        right: 100%;
        left: auto;
    }

    .dropdown-menu>li:hover>.dropdown-submenu {
        display: block;
    }
</style>
<!-- ----------------------------- -->

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
                    @include('home.menutree',['children'=>$rs->children])
                </div>
                @else
                <a href="#" class="nav-item nav-link">{{$rs->title}}</a>
                @endif


                @endforeach
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.dropdown-submenu a.test').on("click", function(e) {
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- Nav Bar End -->
<li><a class="dropdown-item" href=""> Third level 1</a></li>
<li><a class="dropdown-item" href=""> Third level 2</a></li>
<li><a class="dropdown-item" href=""> Third level 3 &raquo </a>
    <ul class="submenu dropdown-menu">
        <li><a class="dropdown-item" href=""> Fourth level 1</a></li>
        <li><a class="dropdown-item" href=""> Fourth level 2</a></li>
    </ul>
</li>
<li><a class="dropdown-item" href=""> Second level 4</a></li>
<li><a class="dropdown-item" href=""> Second level 5</a></li>
