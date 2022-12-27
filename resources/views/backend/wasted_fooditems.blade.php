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
            <table class="table table-bordered mx-3">
                <thead>
                    <tr>
                        <!-- <th scope="col">Select </th> -->
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Food Items</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Preserveable Duration</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($wastedfooditem as $key=>$wfi)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td> @if($wfi->image !=null)
                            <div class="img_container mx-auto">
                                <img src="{{asset('/uploads/WastedFoodImage/'.$wfi->image)}}" class="img-fluid" alt="..." height="70" width="70">
                            </div>
                            @endif
                        </td>
                        <td>{{$wfi->name}}</td>
                        <td>{{$wfi->amount}}</td>
                        <td>{{$wfi->duration}}</td>

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
