<html>

<head>
    <meta charset="utf-8">
    <title>Dish Catering</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/dashboard.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<style>
.ordertable {
    margin-top: -39rem;
    padding-left: 20rem;
    padding-right: 0rem;
}
</style>


<body>
    @include('backend.include.backend_header');
    @include('backend.include.sidebar');




    <div class="ordertable">
        <div class="input-group">

        </div>

        <table class="table table-striped">
            <thead>
                <tr>

                    <th scope="col">Customer Name </th>
                    <th scope="col">Address </th>
                    <th scope="col">Phone </th>
                    <th scope="col">Date </th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach($customerlists as $key=>$customer)
                <tr>


                    <td>{{$key+1}}</td>

                    <td>{{$customer->name}}</td>

                    <td>{{$customer->address}}</td>
                    <td>{{$customer->phone}}</td>
                    <td>{{$customer->email}}</td>


                    <td>

                        <span class="btn btn-danger">Delete</span>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>