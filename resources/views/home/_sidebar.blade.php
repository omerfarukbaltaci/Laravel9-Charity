<!-- ---------DÜZGÜN GİBİ-------------------- -->
<style>
    @media (min-width: 992px) {
        .dropdown-menu .dropdown-toggle:after {
            border-top: .3em solid transparent;
            border-right: 0;
            border-bottom: .3em solid transparent;
            border-left: .3em solid;
        }

        .dropdown-menu .dropdown-menu {
            margin-left: 0;
            margin-right: 0;
        }

        .dropdown-menu li {
            position: relative;
        }

        .nav-item .submenu {
            display: none;
            position: absolute;
            left: 100%;
            top: -7px;
        }

        .nav-item .submenu-left {
            right: 100%;
            left: auto;
        }

        .dropdown-menu > li:hover {
            background-color: #f1f1f1
        }

        .dropdown-menu > li:hover > .submenu {
            display: block;
        }
    }
</style>

<!-- ----------------------------- -->

<!-- Nav Bar Start -->
<div class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <a href="{{route('home')}}" class="navbar-brand">Helpz</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        @php
            $mainMenus = \App\Http\Controllers\HomeController::mainMenuList();
        @endphp
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ">

                <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                <!--deneme alanı -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Events</a>

                            <ul class="dropdown-menu">
                                @foreach($mainMenus as $rs)
                                    <li><a class="dropdown-item" href="#"> {{$rs->title}} &raquo </a>
                                        <ul class="submenu dropdown-menu">
                                            @if(count($rs->children))
                                                @include('home.menutree',['children'=>$rs->children])
                                            @endif
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </div> <!-- navbar-collapse.// -->

                <!--deneme alanı -->
                <a href="{{route('about')}}" class="nav-item nav-link">About Us</a>
                <a href="{{route('references')}}" class="nav-item nav-link">References</a>
                <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                <a href="{{route('faq')}}" class="nav-item nav-link">FAQ</a>


                <div class="navbar-nav ml-auto">
                    <li class="nav-item dropdown nav-user">

                        <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">User Operations  <i class="fas fa-user"></i></a>
                        <div class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                             aria-labelledby="navbarDropdownMenuLink2">
                            @auth
                                <div class="nav-user-info">

                                    <h6 class="mb-0 text-black nav-user-name">
                                        {{Auth::user()->name}} </h6>
                                </div>
                                <a class="dropdown-item" href="/logoutuser"><i class="fas fa-user mr-2"></i>Logout</a>
                            @endauth
                            @guest
                                <a class="dropdown-item" href="/loginuser"><i class="fas fa-user mr-2"></i>Login</a>
                                <a class="dropdown-item" href="/registeruser"><i class="fas fa-edit "></i>Register</a>
                            @endguest
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Prevent closing from click inside dropdown
    $(document).on('click', '.dropdown-menu', function (e) {
        e.stopPropagation();
    });

    // make it as accordion for smaller screens
    if ($(window).width() < 992) {
        $('.dropdown-menu a').click(function (e) {
            e.preventDefault();
            if ($(this).next('.submenu').length) {
                $(this).next('.submenu').toggle();
            }
            $('.dropdown').on('hide.bs.dropdown', function () {
                $(this).find('.submenu').hide();
            })
        });
    }
</script>
<!-- Nav Bar End -->

