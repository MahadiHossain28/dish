<html>

<head>
    <meta charset="utf-8">
    <title>Registration form</title>
    <!-- <link rel="stylesheet" href="CSS/style.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
    body {
        /* background:#D2B48C; */
        color: #FFFFFF;

    }
    </style>
    <style>
    .container {
        padding: 2rem 0rem;
    }

    h4 {
        margin: 2rem 0rem 1rem;
    }
    </style>

</head>

<body>
    <!-- <nav class="navbar navbar-expand-lg navbar-light" style=" background-color:#555b57c4">
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
                <li>
                    <form class="form-inline my-2 my-lg-0">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </li>
                <a class="nav-link" href="{{route('cart')}}"><img src="FrontendImage/menu.png" class="menu_icon"></a>
            </ul>


        </div>

    </nav> -->
    @include('backend.include.header');
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <!-- <th scope="col">Select </th> -->
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Food Items</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Preserveable Duration</th>

                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($wastedfooditem as $key=>$wfi)
                        <tr>
                            <!-- <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                    <label class="custom-control-label" for="customCheck1">1</label>
                                </div>
                            </td> -->
                            <td>{{$key+1}}</td>
                            <td> @if($wfi->image !=null)
                                <div class="img_container mx-auto">
                                    <img src="{{asset('/uploads/WastedFoodImage/'.$wfi->image)}}" class="img-fluid"
                                        alt="..." height="70" width="70">
                                </div>
                                @endif
                            </td>
                            <td>{{$wfi->name}}</td>
                            <td>{{$wfi->amount}}</td>
                            <td>{{$wfi->duration}}</td>

                            <td><span class="btn btn-success">Email it</span></td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

</body>
@include('backend.include.footer')
</div>
</div>




</html>