<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Log-in form</title>
    <link rel="stylesheet" href="CSS/style.css">

    @if(session()->has('message'))
    <div class="alert alert-danger">
        {{ session()->get('message') }}
    </div>
    @endif
    <style>
    html {
        background: url('FrontendImage/RegBackground.jpg') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    body {
        color: #FFFFFF;
    }
    </style>
    <style>
    /* h1 {
        text-align: center;
        color: white;
        background: rgba(0, 0, 0, 0.5);
        padding: 20px;

    }
    </style> */


</head>

<body>
    <div class="navbar">
        <div class="logo">
            <h1 class=""><b>Ⓓⓘⓢⓗ Ⓒⓐⓣⓔⓡⓘⓝⓖ</b></h1>
        </div>
        <nav>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Registration</a></li>
                <li><a href="">Foodmenu</a></li>
                {{--<a href="{{route('user_dashboard')}}">User_Dashboard</a></li>--}} <li>


            </ul>
        </nav>
        <a href="{{route('cart')}}"> <img src="FrontendImage/menu.png" class="menu_icon">{{count(Cart::content())}}</a>
    </div>
    <br>
    <br>

    <form action="{{route('login')}}" method="post">
        @csrf

        <div class="registration">


            <h2>Log-in form</h2><br>
            <input type="text" name="email" id="name" placeholder="Type your Email.."><br><br>



            <input type="password" name="password" id="name" placeholder="Type your password.."><br><br>

            <button type="submit" name="submit" id="sub" value="submit"
                class="btn btn-primary btn-block ">Submit</button>


            <br><br>

            <br>
            Not a member yet?<a href="{{('user_registration')}}"><b>REGISTRATION</b></a>

            <br>
            <a href="{{route('index')}}"><b>Go to Home-Page</b></a>


        </div>
    </form>
</body>

</html>