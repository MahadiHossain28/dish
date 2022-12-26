<html>

<head>
    <meta charset="utf-8">
    <title>Registration form</title>

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


    <!-- <div class="d-flex" id="wrapper">
        <div class=" bg-white" id="sidebar-wrapper">

            <h4><b>Ⓓⓘⓢⓗ Ⓒⓐⓣⓔⓡⓘⓝⓖ</b></h4>


            <div class=" list-group list-group-flush my-2">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active">
                    <i class="fas fa-user-secret me-2"></i>Admin_Profile</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-project-diagram me-2"></i>Customer_List</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Order_List</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paperclip me-2"></i>Add_Recent Orders</a>
                <a href="{{route('foodlist')}}"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-shopping-cart me-2"></i>Food_List</a>

                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-comment-dots me-2"></i>Profit</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>

    </div> -->

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

        <table class="table table-striped">
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
                    <!-- <td>{{$orderlist->id}}</td> -->
                    <td>{{$orderlist->name}}</td>

                    <td>{{$orderlist->address}}</td>
                    <td>{{$orderlist->phone}}</td>
                    <td>{{$orderlist->date}}</td>
                    <td>{{$orderlist->time}}</td>
                    <td>{{$orderlist->total}}</td>
                    <td>{{$orderlist->profit->profit}}</td>
                    <td>
                        <a href="{{route('profit_calculation',$orderlist->id)}}" class="btn btn-success">Show</a>
                    </td>
                    <td><a class="btn" href="{{route('cancel_order',$orderlist->id)}}"><i
                                class="fa fa-trash text-danger"></i></a></td>

                    <!-- <td>
                        <span class="btn btn-success">Confirm</span>
                        <span class="btn btn-danger">Cancel</span>
                    </td> -->

                </tr>
                @endforeach
            </tbody>
        </table>
        {{$orderlists->links()}}
    </div>
</body>

</html>