<!-- <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Sign out</a>
    </div>
  </div>
</header> -->

<!-- <div class="navbar">

    <nav>
        <ul>


            <li>

                <h3><b>Ⓓⓘⓢⓗ<br>Ⓒⓐⓣⓔⓡⓘⓝⓖ</b></h3>

            </li>



            <li> <a href="#">Food Menu</a></li>
            <li><a href="#">Wasted Fooditems</a></li>
            @if(Auth::user())
            <li><a href=" {{route('user_dashboard')}}">
                    <b> User_Dashboard</b></a></li>

            {{--<li><a href="{{route('logout')}}">Logout</a></li>--}}
            @else
            <li><a href="{{route('user_login')}}">Login</a></li>
            @endif
            <li><a href="{{route('cart')}}">
                    <img src="FrontendImage/menu.png" class="menu_icon">{{count(Cart::content())}}</a></li>
        </ul>
    </nav>
</div> -->
<!-- <div class="navbar">
    <div class="logo">
        <h4 class=""><b>Ⓓⓘⓢⓗ Ⓒⓐⓣⓔⓡⓘⓝⓖ</b></h4>
    </div>
    <a href="{{('home')}}">Home</a>
    <a href="{{('foodmenu')}}">Food Menu</a>

    <a href="{{('wasted_fooditems')}}">Wasted FoodItems</a>
    @if(Auth::user())
    <a href=" {{route('user_dashboard')}}">
        <b> UserDashboard</b></a><br>
    <a href=" {{route('logout')}}">
        <b> Logout</b></a>
    @else
    <a href="{{route('user_login')}}">Login</a>

    @endif
    <a href="{{route('cart')}}">
        <img src="FrontendImage/menu.png" class="menu_icon">{{count(Cart::content())}}</a>
</div> -->
<header class="p-3 bg-dark text-white">
    <div class="d-flex flex-wrap align-items-center justify-content-between">
        <ul class="nav mb-md-0 align-items-center">
            <li>
                <a href="{{route('index')}}" class="nav-link px-2 text-secondary logo p-0 me-5">
                    <h1 class=""><b>Ⓓⓘⓢⓗ Ⓒⓐⓣⓔⓡⓘⓝⓖ</b></h1>
                </a>
            </li>
            <li><a href="{{route('index')}}" class="nav-link px-2 text-secondary">Home</a></li>
            @if(Auth::user())

                @if(Auth::user()->role_id==2)
                    <a href=" {{route('user_dashboard')}}" class="nav-link px-2 text-white">
                        UserDashboard
                    </a>
                @else
                    <a href="{{route('user_dashboard')}}" class="nav-link px-2 text-white">Dashboard</a>
                @endif
                    <a href="{{route('logout')}}" class="nav-link px-2 text-white">Logout</a>
            @else
                <li> <a href="{{route('user_login')}}" class="nav-link px-2 text-white">Log-in</a></li>
            @endif

        </ul>


        <form class="row mb-0" role="search" method="GET" action="{{route('foodmenu')}}">
            <div class="col-12 d-flex">
                <input type="search" name="search" class="form-control form-control-dark"
                    placeholder="Search by Category..." value="">
                <button class="btn btn-light">Search</button>
            </div>
        </form>



        <div class="text-end d-flex">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 ">
                <li>
                    @if(auth()->user())
                    <a href="{{route('cart')}}" class="nav-link px-2 d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none menu_icon">
                        <img src="{{asset('FrontendImage/menu.png')}}" alt="image" width="30" height="30" class="img img-responsive">
                        {{count(Cart::content())}}
                    </a>
                    @else
                    <a href="{{route('index')}}" class="nav-link px-2 d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none menu_icon">
                        <img src="{{asset('FrontendImage/menu.png')}}" alt="image" width="30" height="30" class="img img-responsive">
                        {{count(Cart::content())}}
                    </a>
                    @endif

                </li>
            </ul>
        </div>
    </div>
</header>
