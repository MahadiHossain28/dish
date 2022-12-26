<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Log-in form</title>
    <link rel="stylesheet" href="CSS/dc.css">
    <link rel="stylesheet" href="CSS/header.css">


    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <link rel="stylesheet" href="CSS/style.css">

    <style>
        .test {
            height: 75vh;
            overflow: hidden;
            background: url('FrontendImage/RegBackground.jpg') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            display: flex;
        }
    </style>


</head>

<body>
<header class="p-3 bg-dark text-white">
    <div class="d-flex flex-wrap align-items-center justify-content-between">
        <ul class="nav mb-md-0 align-items-center">
            <li>
                <a href="{{route('index')}}" class="nav-link px-2 text-secondary logo p-0 me-5">
                    <h1 class=""><b>Ⓓⓘⓢⓗ Ⓒⓐⓣⓔⓡⓘⓝⓖ</b></h1>
                </a>
            </li>
            <li><a href="{{route('index')}}" class="nav-link px-2 text-secondary">Home</a></li>
        </ul>
        <div class="text-end d-flex">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 ">
                {{--                        <li><a href="{{route('user_registration')}}" class="nav-link px-2 text-white">Registration</a></li>--}}
                <li>
                    <a href="{{route('cart')}}" class="nav-link px-2 d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none menu_icon">
                        <img src="FrontendImage/menu.png" alt="image" width="30" height="30" class="img img-responsive">
                        {{count(Cart::content())}}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>

@if(session()->has('message'))
    <div class="alert alert-danger">
        {{ session()->get('message') }}
    </div>
@endif

    <form action="{{route('login')}}" method="post" class="test">
        @csrf

        <div class="registration">
            <h2>Log-in form</h2><br>
            <input class="text-white" type="text" name="email" id="name" placeholder="Type your Email.."><br><br>



            <input class="text-white" type="password" name="password" id="name" placeholder="Type your password.."><br><br>

            <button type="submit" name="submit" id="sub" value="submit"
                class="btn btn-primary btn-block ">Submit</button>


            <br><br>

            <br>
            Not a member yet?<a href="{{route('user_registration')}}"><b>REGISTRATION</b></a>

            <br>
        </div>
    </form>

    <footer class=" bg-white text-white">
        <div class="py-2 my-2">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item">
                    <div class="nav-link px-2 text-muted">Catering Service</div>
                </li>

            </ul>
            <p class="text-center text-muted">&copy; 2022,Dish_Catering</p>
        </div>
    </footer>
</body>

</html>
