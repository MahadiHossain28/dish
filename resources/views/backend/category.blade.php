<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('CSS/dashboard.css')}}" type="text/css" />


    <title>Admin Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        @include('backend.include.sidebar')
        <div id="page-content-wrapper">
            @include('backend.include.backend_header')
            <form action="{{route('postcategory')}}" method="POST">
                @csrf
                <div class="form">
                    <div class="cardform">
                        <div class="w3-card-4 w3-light-grey  top ">
                            <p class="title">
                                Select Category
                            </p>
                        </div>
                        <center>
                            <div class="login-form">
                                <br><br>
                                <label><b>Category<b></label>
                                <input for="category" type="category" id="username" name="name" placeholder="Enter Category Name">
                                <br><br>
                            </div>
                            </p>
                            <button type="submit" class="btn btn-outline-dark" data-mdb-ripple-color="dark">
                                Submit
                            </button>
                        </center>
                        <div class=" w3-card-4 w3-light-grey top ">
                            <div class="ordertable">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Category ID</th>
                                            <th scope="col">Customer Name </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($category as $category_id)
                                        <tr>
                                            <td>{{$category_id->id}}</td>
                                            <td>{{$category_id->name}}</td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>


</html>
