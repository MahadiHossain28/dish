<html>

<head>
    <meta charset="utf-8">
    <title>Order Informations</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/dashboard.css" />
</head>
<style>
.ordertable {
    margin-top: -26rem;
    padding-left: 17rem;
    padding-right: 0rem;
}
</style>


<body>

    <div class="d-flex" id="wrapper">
        <div class=" bg-white" id="sidebar-wrapper">

            <h4><b>Ⓓⓘⓢⓗ Ⓒⓐⓣⓔⓡⓘⓝⓖ</b></h4>

            <div class=" list-group list-group-flush my-2">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active">
                    <i class="fas fa-user-secret me-2"></i>Admin_Profile</a>
                <a href="#" class="list-group-item list-group-item-actionbg-transparent second-text fw-bold"><i
                        class="fas fa-project-diagram me-2"></i>Customer_List</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Order_List</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paperclip me-2"></i>Add_Recent Orders</a>
                <a href="{{route('foodlist')}}"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-shopping-cart me-2"></i>Food_List</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-gift me-2"></i>Add New_Platter</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-comment-dots me-2"></i>Profit</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>

        </div>

    </div>
    <div class="ordertable">

        <table class="table table-striped">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
</body>

</html>