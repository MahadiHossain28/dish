<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <title>Customer_Dashboard</title>
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


</head>

<body>

    @include('backend.include.header');
    <div class="container rounded bg-transparent py-3">

        <div class="container">
            <div class="ordertable">


                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> #</th>

                            <th scope="col">Name</th>

                            <th scope="col">Price </th>
                            <th scope="col">Quantity </th>

                            <th scope="col">Subtotal</th>
                            <th scope="col">Update Quantity</th>



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
                            <!-- <td> <span class="btn btn-success">Change</span></td> -->





                        </tr>
                        @endforeach


                    </tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>

</body>

</html>