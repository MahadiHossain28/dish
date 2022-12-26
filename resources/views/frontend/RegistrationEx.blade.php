<!-- <html>

<head>
    <meta charset="utf-8">
    <title>Registration form</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
    <form action="{{route('registration')}}" method="post">
        @csrf

        <div class="container">
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="name"><b>Name</b></label>
            <input type="text" for="name" name="name" id="name" placeholder="Enter your name..">
            <label for="email"><b>Email</b></label>
            <input type="text" for="email" name="email" id="email" placeholder="Enter Email">

            <label for="password"><b>Password</b></label>
            <input type="text" for="password" name="password" id="password" placeholder="Enter Password">

            <label for="address"><b>Address</b></label>
            <input type="text" for="address" name="address" id="address" placeholder="Enter Address">
            <hr>


            <button type="submit" class="registerbtn">Register</button>
        </div>

        <div class="container signin">

            <p>Already have an account? <a href="{{route('user_login')}}">Log-in Here</a>.</p>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
</body>

</html> -->