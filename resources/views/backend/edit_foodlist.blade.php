<html>

<head>
    <meta charset="utf-8">
    <title>Registration form</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
    html {
        background: url('FrontendImage/RegBackground.jpg') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    </style>
    <style>
    h1 {
        text-align: center;
        color: white;
        background: rgba(0, 0, 0, 0.4);
        padding: 15px;
    }

    .image {
        width: 20rem;
        border: 4px solid white;
        padding: 5px;
        margin: auto;

    }

    .menu_icon {
        width: 2rem;
        cursor: pointer;
        margin-left: -80px;
        padding: 2%;

    }

    .img_container {
        height: 100px;
        width: 200px;
    }

    .img_container img {
        height: 100%;
        width: 100%;
        object-fit: cover;
    }

    a {
        text-decoration-color: white;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;

    }

    * {
        box-sizing: border-box;
    }

    /* Add padding to containers */
    .container {
        padding: 16px;

        max-width: 500px;
    }

    /* Full-width input fields */
    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    /* Overwrite default styles of hr */
    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    /* Set a style for the submit button */
    .registerbtn {

        color: black;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    .registerbtn:hover {
        opacity: 1;
    }

    /* Add a blue text color to links */
    a {
        color: white;
    }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style=" background-color:#555b57c4">
        <a class="navbar-brand" href="#"><b>Ⓓⓘⓢⓗ Ⓒⓐⓣⓔⓡⓘⓝⓖ</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Platter</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Login</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>

        </div>
        <a class="nav-link" href="{{route('cart')}}"><img src="FrontendImage/menu.png" class="menu_icon"></a>
    </nav>
    <form method="POST" action="{{route('update_foodlist')}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container">
            <h1>Edit Food Details</h1>
            <hr>
            <input type="hidden" name="foodlist_id" value="{{$food->id}}">
            <label for="name"><b>Food Item</b></label>
            <input type="text" for="name" name="name" id="name" value="{{$food->name}}" placeholder="Enter Food Item..">

            <label for="price"><b>Password</b></label>
            <input type="text" for="price" name="price" id="price" value="{{$food->price}}"
                placeholder="Enter Price"><br><br>

            <label><b>Category</b></label>
            <select for="category" id="name" name="category" required>
                <option value="" selected><b>Select Category:</b></option>
                @foreach($category as $cat)
                <option value="{{$cat-> id}}" {{$cat->id == $food->category_id ? 'selected' : ''}}>{{$cat-> name}}
                </option>
                @endforeach


            </select>


            <!-- <select for="category" id="category" name="category" value="{{$food->category}}">

               
                <option value="Rich Food">Rich Food</option>
                <option value="Fast Food">Fast Food</option>
                <option value="Drinks">Drinks</option>
                <option value="Dessert">Dessert</option>
                <option value="Salad">Salad</option>
            </select><br><br> -->
            <div class="col-lg-8">

                <input type="file" for="image" name="image" id="image" class="form-control image"
                    value="{{$food->image}}"><br><br>
                <div class="form-control image"><img src="{{'/uploads/ImageFood/'.$food->image}}" alt="" width="100">
                </div>

            </div>
            <hr>
            <button type="submit" class="registerbtn">Submit</button>

        </div>




    </form>
    <h1>Go Back to DashBoard<a href="{{route('dashboard')}}">DashBoard</a></h1>








    <!-- <center>
        <input type="hidden" name="foodlist_id" value="{{$food->id}}">
        <h2>Update Food Iteams</h2>
    </center><br>




    

    <hr>


    <input type="text" for="name" name="name" id="name" value="{{$food->name}}" placeholder="Enter Food Item.."><br><br>

    <input type="text" for="price" name="price" id="price" value="{{$food->price}}" placeholder="Enter Price"><br><br>


    <input type="text" for="category" name="category" id="category" value="{{$food->category}}"
        placeholder="Rich Food..Fast Food..Drinks..Deserts"><br><br>
    <input type="file" for="image" name="image" id="image" class="form-control image" value="{{$food->image}}"><br><br>
    <div class="form-control image"><img src="{{'/uploads/ImageFood/'.$food->image}}" alt="" width="100">
    </div>

    <hr>


    <button type=" submit" class="registerbtn">Submit</button>

    <div class="container signin">

        <p>Go Back to DashBoard<a href="{{route('dashboard')}}">DashBoard</a>.</p>
    </div>
    </form> -->
    <!-- </form> -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
</body>

</html>