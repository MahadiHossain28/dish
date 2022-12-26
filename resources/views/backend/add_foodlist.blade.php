<!-- <html>

<head>
    <meta charset="utf-8">
    <title>Registration form</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    @if (session('status'))
    <h6 class="alert alert-success"> {{session ('status')}}</h6>
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
        /* background:#D2B48C; */
        color: #FFFFFF;

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
                <li><a href="">Registration</a></li>


            </ul>
        </nav>
        <img src="FrontendImage/menu.png" class="menu_icon">
    </div>

    <div>
        <a href="{{url('foodlist')}}" class="btn  btn-success btn-sm">
            <i class="fa fa-plus" aria-hidden="true">Add New Item</i>
        </a>
        <div class="registration"> -->
<!-- <form route="{{route('store_foodlist')}}" method="post" enctype="multipart/form-data">
                @csrf
                @if (session('status'))
                <h6 class="alert alert-success"> {{session ('status')}}</h6>
                @endif

                <center>
                    <h2>Add New Food Iteams</h2>
                </center><br>




        


                <input type="text" for="name" name="name" id="name" placeholder="Enter Food Item.."><br><br>

                <input type="text" for="name" name="price" id="name" placeholder="Enter Price"><br><br>


                <input type="text" for="name" name="category" id="name"
                    placeholder="Bangladeshi..Indian..Korean..Japanese"><br><br>

                <input type="file" for="image" name="image" id="image" class="form-control image"><br><br>
              
                <hr>


                <button type="submit" class="registerbtn">Submit</button>


                <div class="container signin">


                    <p>Go Back to DashBoard<a href="{{route('dashboard')}}">DashBoard</a>.</p>
                </div>
            </form> -->
<!-- <div class="container foodtable">
                <div class="row">
                    <div class="col-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Day</th>
                                    <th scope="col">Article Name</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Shares</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Bootstrap 4 CDN and Starter Template</td>
                                    <td>Cristina</td>
                                    <td>2.846</td>
                                    <td>
                                        <button type="button" class="btn btn-primary"><i
                                                class="far fa-eye"></i></button>
                                        <button type="button" class="btn btn-success"><i
                                                class="fas fa-edit"></i></button>
                                        <button type="button" class="btn btn-danger"><i
                                                class="far fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Bootstrap Grid 4 Tutorial and Examples</td>
                                    <td>Cristina</td>
                                    <td>3.417</td>
                                    <td>
                                        <button type="button" class="btn btn-primary"><i
                                                class="far fa-eye"></i></button>
                                        <button type="button" class="btn btn-success"><i
                                                class="fas fa-edit"></i></button>
                                        <button type="button" class="btn btn-danger"><i
                                                class="far fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Bootstrap Flexbox Tutorial and Examples</td>
                                    <td>Cristina</td>
                                    <td>1.234</td>
                                    <td>
                                        <button type="button" class="btn btn-primary"><i
                                                class="far fa-eye"></i></button>
                                        <button type="button" class="btn btn-success"><i
                                                class="fas fa-edit"></i></button>
                                        <button type="button" class="btn btn-danger"><i
                                                class="far fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> -->
<!-- <div class="my-4">
                <h4>Food_Items</h4>
                <table class="table bg-light mt-4">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Category</th>
                            <th scope="col">Add Image </th>
                            <th scope="col">Action</th>



                        </tr>
                    </thead>
                    <tbody>
                        @foreach($foodlist as $key => $foodlist)
                        <tr>
                            <th scope="row">{{$key+1}}</th>
                            <td>{{$foodlist->name}}</td>
                            <td>{{$foodlist->price}}</td>
                            <td>{{$foodlist->category}}</td>
                            <td>{{$foodlist->image}}</td>
                            <td> <a href= "{{route('add_medicine', $foodlist->id)}}" class="btn btn-success">Edit</a></td>
                            <td> <a href= "" class="btn btn-success">Uptade</a></td>

                                @if($foodlist->image !=null)
                                <img src="{{asset('/ImageFood/foodlist'.$foodlist->image)}}" alt="image" width="200"
                                    height="200" class="img img-responsive" />
                                @endif
                            </td> -->
<!-- <td>
                                {{$foodlist->action}}
                                <div class="row">
                                    <div class="col">
                                        <a class="btn btn-primary" href="{{route('editmed',$foodlist->id)}}"
                                            role="button"><i class="fa-solid fa-pen-nib"></i></a>
                                    </div>
                                    <div class="col">
                                        <a class="btn btn-danger" href="{{route('deletemed',$foodlist->id)}}"
                                            role="button"><i class="fa-solid fa-trash"></i></a>
                                    </div>
                                </div>

                            </td> -->
<!-- </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
            integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
        </script>
</body>

</html> -->