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
    body {
        background: url('FrontendImage/RegBackground.jpg') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;

        color: #FFFFFF;

    }
    </style>
    <style>
    .menu_icon {
        width: 5rem;
        cursor: pointer;
        margin-left: -80px;
        padding: 2%;

    }

    h1 {
        text-align: center;
        color: white;
        background: rgba(0, 0, 0, 0.4);
        padding: 15px;
    }
    </style>

</head>

<body>
    @include('backend.include.header');


    <!-- <div class="navbar">
        <div class="logo">
            <h1 class=""><b>Ⓓⓘⓢⓗ Ⓒⓐⓣⓔⓡⓘⓝⓖ</b></h1>
        </div>
        <nav>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Platters</a></li>
                <li><a href="">Registration</a></li>


            </ul>
        </nav>
        <img src="FrontendImage/menu.png" class="menu_icon">
    </div> -->


    <form action="{{route('registration')}}" method="post">
        @csrf

        <div class="registration">


            <center>
                <h2>Registration form</h2>
            </center><br>

            <!-- <input type="text" for="firstname" name="firstname" id="name" placeholder="Enter your first name.."><br><br>


            <input type="text" for="lastname" name="lastname" id="name" placeholder="Enter your last name.."><br><br> -->
            <input type="text" for="name" name="name" id="name" placeholder="name.." required><br><br>



            <input type="text" for="phone" name="phone" id="name" placeholder="Enter your phone number.."><br><br>
            <input type="text" for="email" name="email" id="name" placeholder="Enter your email.."><br><br>
            <input type="text" for="address" name="address" id="name" placeholder="Enter your address .."><br><br>

            <input type="text" for="password" name="password" id="name"
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>

</body>

</html>