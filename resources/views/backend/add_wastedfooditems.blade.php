<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">


    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('CSS/dashboard.css')}}" type="text/css"/>
    <link href="https://getbootstrap.com/docs/5.0/examples/dashboard/dashboard.css" rel="stylesheet">
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">

    <title>Wasted Foods</title>
</head>

<body>
<div class="d-flex" id="wrapper">
    @include('backend.include.sidebar')
<div class="container">
    <div class="row justify-content-center">
        <center>
        <form action="{{route('store_wastedfoods')}}" method="POST" enctype="multipart/form-data" class="col-12">
            @csrf
            <div class="form">
                <div class="cardform">
                    <div class="w3-card-4 w3-light-grey  top mb-3">
                        <h4 class="title">
                            Add Wasted Food Items
                        </h4>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Food Item</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="ammount" class="form-label">Amount</label>
                        <input type="text" name="amount" id="ammount" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="duration" class="form-label">Average preservable Duration</label>
                        <input type="text" name="duration" id="duration" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" id="image" class="form-control" required>
                    </div>



                    <button type="submit" class="btn btn-dark"> Submit</button>

                </div>

            </div>
        </form>
        </center>

        <div class="cardtable col-12 mx-3">
            <div class="w3-card-4 w3-light-grey toptable">
                <!-- <header class="w3-container w3-light-grey top">
            <h3>John Doe</h3>
        </header> -->
                <p class="title">
                <h5>Wasted Items<h5>
                        </p>

            </div>
            <div class="ordertable">

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>

                        <th scope="col">Food Item</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Preservable Duration</th>
                        <th scope="col">Image</th>
                        <!-- <th scope="col">Status</th> -->
                        <th scope="col">Action</th>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach($wastedfooditems as $key => $wastedfooditem)
                        <tr class="text-center">
                            <td scope="col" class="">{{$key+1}}</td>
                            <td>{{$wastedfooditem->name}}</td>
                            <td>{{$wastedfooditem->amount}}</td>
                            <td>{{$wastedfooditem->duration}}</td>
                            <td>
                                @if($wastedfooditem->image !=null)
                                    <img src="{{asset('/uploads/WastedFoodImage/'.$wastedfooditem->image)}}" alt="image"
                                         width="70" height="70" class="img img-responsive"/>
                                @endif
                            </td>
                            <td>
                                {{$wastedfooditem->action}}
                                <div class="row">
                                    <div class="col">
                                        <a href="{{route('edit_wastedfooditems',$wastedfooditem->id)}}"><i
                                                style="font-size: 10px;" class="fas fa-pencil-alt"></i></a>
                                    </div>
                                    <div class="col">
                                        <a href="{{route('delete_wastedfooditems',$wastedfooditem->id)}}"><i
                                                style="font-size: 10px;" class="fa fa-trash text-danger"></i></a>
                                    </div>
                                </div>
                            </td>

                        </tr>

                    @endforeach
                    </tbody>

                    </tbody>
                </table>
            </div>

        </div>
    </div>

</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>


</html>
