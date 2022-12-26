<html>

<head>
    <meta charset="utf-8">
    <title>Wasted Foods</title>
    <link rel="stylesheet" href="CSS/form.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
    <link rel="stylesheet" type="text/css"
        href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="CSS/style.css">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/dashboard.css" />

    <style>
    .ordertable {
        margin-top: 5rem;
        padding-left: 2rem;
        padding-right: 0rem;

    }

    .cardform {

        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 70rem;
        margin-left: 17rem;
        margin: auto;
        text-align: center;




    }

    .form {
        margin-top: -15rem;
        padding-left: 25rem;
        padding-right: 7rem;

    }



    .cardtable {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 65rem;
        margin-left: 17rem;
        text-align: center;

    }

    .title {
        color: black;
        font-size: 18px;
    }

    .submit {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }

    /* a {
        text-decoration: none;
        font-size: 22px;
        color: black;
       
    } */

    /* button:hover,
    a:hover {
        opacity: 0.7;
    } */

    .top {
        max-width: 70rem;
        height: 2rem;
        background-color: lightgray;
    }

    .toptable {
        max-width: 70rem;
        height: 2rem;
        background-color: rgba(0, 0, 0, 0.2);
    }


    input {
        display: block;
        width: 50%;
        padding: .2em;
        margin: .2em 0 .6em;
        font-size: 1.2em;

    }

    /* input[type=submit] {
        background: salmon;
        border: none;
        margin: 1em 0;
        color: white;
        padding: 1em;
    } */




    /* Presentational for this pen */





    .footer {

        left: 0;
        bottom: 0;
        width: 100%;
        color: white;
        text-align: center;
    }
    </style>

</head>

<body>
    <div class="d-flex" id="wrapper">
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
                        class="pfas fa-gift me-2"></i>Add New_Platter</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-comment-dots me-2"></i>Cutlery</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>

    </div>

    <div class="container-fluid book_section mb-5 pb-5">
        <form action="{{route('add_profitcalculation')}}" method="post">
            @csrf

            <div class="container">
                <div class="form">
                    <div class="cardform">
                        <div class="w3-card-4 w3-light-grey  top ">

                            <p class="title">
                                Profit Calculation
                            </p>

                        </div>

                        <center>
                            <div class="login-form">

                                <input type="text" hidden name="order_id" value="{{$orderlist->id}}">
                                <label>Payed Amount</label>
                                <input type="number" name="payed" value="{{$orderlist->total}}">
                                <label>Total Expenditure</label>
                                <input type="number" name="expense" value="">

                                <button type="submit"> Submit</button><br><br>

                            </div>

                        </center>

                        <div class=" w3-card-4 w3-light-grey top ">

                            <p class="title">
                            <h5>.....</h5>
                            </p>

                        </div>
                    </div>

                </div>

                <!-- <div class="row">
                <div class="col-lg-6">
                    <form action="" method="POST">@csrf
                        <div class="row">

                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <table class="table table-bordered">
                        <tr>
                            <td>SubTotal</td>
                            <td>:</td>
                            <td><span class="symbol">৳</span> </td>
                        </tr>
                        <tr>
                            <td>Delivery Charge</td>
                            <td>:</td>
                            <td><span class="symbol">৳</span> </td>
                        </tr>
                        <tr>
                            <td>Total Amount</td>
                            <td>:</td>
                            <td><span class="symbol">৳</span>
                            </td>
                        </tr>
                    </table>
                    <div class="text-center">
                        <a href="" class="cart_btn mr-3">Go
                            Back</a>
                        <a href="" class="cart_btn mr-3">Place
                            Order</a>
                    </div>
                </div>
            </div> -->
            </div>
        </form>
    </div>
    <!-- <div class="modal fade" id="success_order" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <h4 class="text-success">Your Order Has Been Placed</h4>
                    <h4 class="mt-3"><strong><i>Thank You For Yor Purchase</i></strong></h4>
                </div>
            </div>
        </div>
    </div> -->






</body>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>


</html>