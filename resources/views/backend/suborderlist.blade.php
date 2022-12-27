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
            <table class="table table-striped mx-3">
                <thead>
                    <tr>
                        <th scope="col"> #</th>

                        <th scope="col">Name</th>

                        <th scope="col">Price </th>
                        <th scope="col">Quantity </th>

                        <th scope="col">Subtotal</th>
                        <th scope="col">Order ID</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach($suborderlists as $key=>$suborderlist)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$suborderlist->name}}</td>
                        <td>{{$suborderlist->price}}</td>
                        <td>{{$suborderlist->quantity}}</td>
                        <td>{{$suborderlist->sub_total}}</td>
                        <td>{{$suborderlist->order_id}}</td>
                    </tr>
                    @endforeach
                </tbody>
                </tbody>
            </table>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
</script>

</html>
