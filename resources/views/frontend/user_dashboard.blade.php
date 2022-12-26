<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <title>Customer_Dashboard</title>
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
    .container {
        padding: 2rem 0rem;
    }

    h4 {
        margin: 2rem 0rem 1rem;
    }

    .cardform {

        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 70rem;
        margin-left: 17rem;
        margin: auto;
        text-align: center;




    }

    .title {
        color: black;
        font-size: 18px;
    }

    .form {
        margin-top: 3rem;
        padding-left: 23rem;
        padding-right: 23rem;

    }
    </style>

</head>


<body>
    @include('backend.include.header');
    <div class="form">
        <div class="cardform">
            <div class="w3-card-4 w3-light-grey  top ">

                <p class="title">
                    Your Informations
                </p>

            </div>



            @if($users)
            <div class="col-md-12 border-right">
                <div class="d-flex flex-column align-items-center text-center">

                    <span class="font-weight-bold"><b>Name: </b></strong> {{$users->name}}
                    </span>
                    <span class="font-weight-bold"><b>Email: </b></strong> {{$users->email}}</span>
                    <span class="font-weight-bold"><b>Address: </b></strong> {{$users->address}}</span>
                    <span class="font-weight-bold"><b>Phone: </b></strong> {{$users->phone}}</span>
                    <span class="font-weight-bold"><b>Password: </b></strong> {{$users->password}}</span>
                </div>
                <!-- <div class="d-flex  aligh-items-center text-center"> -->
                <a class="btn btn-primary" href="{{route('update_user', $users->id)}}" role="button"><i
                        class="fa-solid fa-pen-nib"></i>Edit User Profile</a>
                <!-- </div> -->

            </div><br><br>
            @endif










            <div class=" w3-card-4 w3-light-grey top ">

                <p class="title">
                <h5>.....</h5>
                </p>

            </div>
        </div>
    </div>
    <div class="container rounded bg-transparent py-3">
        <!-- <div class="row">
          
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center">

                </div>
                <div class="d-flex flex-column aligh-items-center text-center">
                    
                            class="fa-solid fa-pen-nib"></i>Edit User Profile</a>
                </div>

            </div><br><br>
            
        </div> -->
        @if(Auth::user())
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Total Amount</th>
                                <th scope="col">Food Items</th>
                                <th scope="col">Invoice</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $key=>$order)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$order->name}}</td>
                                <td>{{$order->phone}}</td>
                                <td>{{$order->total}}</td>
                                <td><a href="{{route('platteritems',$order->id)}}" class="btn btn-success">View</a></td>
                                <td><a href="{{route('customer_invoice',$order->id)}}"> <span
                                            class="btn btn-success">Invoice</span></a>
                                </td>
                                <td>
                                    @if(Carbon\Carbon::now()->diffInDays($order->date) < 3 ) <span
                                        class="btn btn-success">Order Placed</span>
                                        @else
                                        <a href="{{route('restorecart',$order->id)}}">
                                            <span class="btn btn-success">Update Quantity</span></a>
                                        <a href="{{route('cancel_order',$order->id)}}"> <span
                                                class="btn btn-danger">Cancel order</span></a>
                                        @endif
                                </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>

</body>

</html>