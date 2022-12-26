<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Customer_Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

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
    <div class="container-fluid book_section mb-5 pb-5">
        <div class="container">
            <div class="d-flex justify-content-between border-bottom mb-3">
                <h1 class="border-0"> Dashboard</h1>
                <img src="" alt="user" width="200" height="200">
            </div>
            <div class="col-lg-8">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade active show" id="v-pills-orders" role="tabpanel"
                        aria-labelledby="v-pills-orders-tab">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Order Number </th>
                                    <th scope="col">Name</th>

                                    <th scope="col">Phone</th>

                                    <th scope="col">Total Amount</th>
                                    <th scope="col">Food Items</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $key=> $order)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$order->name}}</td>
                                    <td>{{$order->phone}}</td>
                                    <td>{{$order->total}}</td>
                                    <td></td>
                                    <td><a href="http://" class="btn btn-success">View</a></td>
                                    <span class="badge rounded-pill text-bg-primary">Done</span>
                                    <span class="badge rounded-pill text-bg-denger">Pending</span>


                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
                        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
                        crossorigin="anonymous">
                    </script>

</body>

</html>