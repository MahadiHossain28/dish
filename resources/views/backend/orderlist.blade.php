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
            <div class="ordertable">
                <div class="input-group">
                    <form action="{{route('orderlist')}}" method="GET">
                        <label for="start">Starting Date: </label>

                        <input type="date" name="begin" placeholder="dd-mm-yyyy " value="" min="1997-01-01" max="2030-12-31">
                        <label for="end">Ending Date: </label>
                        <input type="date" name="end" placeholder="dd-mm-yyyy " value="" min="1997-01-01" max="2030-12-31">

                        <button type="submit" class="btn btn-black">
                            <i class="fas fa-search"></i>submit
                        </button>
                    </form>
                </div>
                <table class="table table-striped mx-3">
                    <thead>
                        <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Invoicec</th>
                            <th scope="col">Customer Name </th>
                            <th scope="col">Address </th>
                            <th scope="col">Phone </th>
                            <th scope="col">Date </th>
                            <th scope="col">Time </th>
                            <th scope="col">Total Amount</th>
                            <th scope="col">Profit</th>
                            <th scope="col">Calculate Profit</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orderlists as $key=>$orderlist)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>
                                <a href="{{route('invoice',$orderlist->id)}}" class="btn btn-success">Invoice</a>
                            </td>
                            <td>{{$orderlist->name}}</td>
                            <td>{{$orderlist->address}}</td>
                            <td>{{$orderlist->phone}}</td>
                            <td>{{$orderlist->date}}</td>
                            <td>{{$orderlist->time}}</td>
                            <td>{{$orderlist->total}}</td>
                            <td>{{$orderlist->profit->profit}}</td>
                            <td>
                                <a href="{{route('profit_calculation',$orderlist->id)}}" class="btn btn-dark"><i class="fa fa-eye text-primary"></i></a>
                            </td>
                            <td><a class="btn" href="{{route('cancel_order',$orderlist->id)}}"><i class="fa fa-trash text-danger"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$orderlists->links()}}
            </div>
        </div>
    </div>
</body>

</html>
