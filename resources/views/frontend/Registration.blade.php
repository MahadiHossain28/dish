<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Registration form</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/header.css">




    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
    <form action="{{route('registration')}}" method="post" class="test">
        @csrf

        <div class="registration1">


            <center>
                <h2>Registration form</h2>
            </center><br>

            <!-- <input type="text" for="firstname" name="firstname" id="name" placeholder="Enter your first name.."><br><br>


            <input type="text" for="lastname" name="lastname" id="name" placeholder="Enter your last name.."><br><br> -->
            <input class="text-white" type="text" for="name" name="name" id="name" placeholder="name.." required><br><br>



            <input class="text-white" type="text" for="phone" name="phone" id="name" placeholder="Enter your phone number.."><br><br>
            <input class="text-white" type="text" for="email" name="email" id="name" placeholder="Enter your email.."><br><br>
            <input class="text-white" type="text" for="address" name="address" id="name" placeholder="Enter your address .."><br><br>

            <input class="text-white" type="password" for="password" name="password" id="name"
                placeholder="Put three to five unique numbers"><br><br>


            <!-- <select name="gender" id="name">
                <option><b>Choose Gender:</b></option>
                <option>Female</option>
                <option>Male</option>
            </select> -->
            <br><br>

            <button type="submit" name="submit" id="sub" value="submit"
                class="btn btn-primary btn-block ">Submit</button>
            <br>
            <center><b> Already a member?<a href="{{route('user_login')}}">LOG-IN</a></b></a></center>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>

</body>

</html>
