<!-- <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Order form</title>
    <link rel="stylesheet" href="CSS/style.css">



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
    h1 {
        text-align: center;
        color: white;
        background: rgba(0, 0, 0, 0.5);
        padding: 20px;

    }
    </style>


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
                <li><a href="">Platters</a></li>
                <li><a href="{{route('user_dashboard')}}">User_Dashboard</a></li>


            </ul>
        </nav>
        <a href="{{route('cart')}}"> <img src="FrontendImage/menu.png" class="menu_icon">{{count(Cart::content())}}</a>
    </div>
    <br>
    <br>

    <form action="{{route('login')}}" method="post">
        @csrf

        <div class="registration">


            <h2>Order form</h2><br>
            <input type="text" for="name" name="name" id="name" placeholder="name.."><br><br>
            <input type="text" for="number" name="number" id="name" placeholder="Enter your phone number.."><br><br>
            <input type="text" for="email" name="email" id="name" placeholder="Enter your email.."><br><br> 
            <input type="text" for="address" name="address" id="name" placeholder="Enter your address .."><br><br>
            <input type="text" for="price" name="price" id="price" value="{{$food->price}}"
                ><br><br>
            <input type="date" for="date" name="date" id="date" placeholder="Order Delivery Date .."><br><br> 





            <button type="submit" name="submit" id="sub" value="submit"
                class="btn btn-primary btn-block ">Submit</button>


            <br><br>

            <br>
            <a href="{{('index')}}"><b>Go to Home-Page</b></a>

            <br>
            <a href="{{route('cart')}}"><b>
                    Go Back</b></a>


        </div>
    </form>
</body>

</html> -->