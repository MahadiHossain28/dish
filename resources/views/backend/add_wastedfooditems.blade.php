<html>

<head>
    <meta charset="utf-8">
    <title>Wasted Foods</title>
    <link rel="stylesheet" href="CSS/form.css">
    <link rel="icon" href="{{asset('Image/logo.png')}}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
    <link rel="stylesheet" type="text/css"
        href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="CSS/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="CSS/dashboard.css" /> -->

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
                        class="fas fa-gift me-2"></i>Add New_Platter</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-comment-dots me-2"></i>Cutlery</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>

    </div>
    <form action="{{route('store_wastedfoods')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form">
            <div class="cardform">
                <div class="w3-card-4 w3-light-grey  top ">

                    <p class="title">
                        Add Wasted Food Items
                    </p>

                </div>

                <center>
                    <form class="login-form">
                        <label for="name">Food Item</label>
                        <input type="text" name="name" required>
                        <label for="ammount">Amount</label>
                        <input type="text" name="amount" required>
                        <label for="duration">Average preservable Duration</label>
                        <input type="text" name="duration" required>
                        <label>Image</label>
                        <input type="file" for="image" name="image" id="image" class="form-control image"
                            style="width:25rem;" required>


                    </form>


                    <button type="submit"> Submit</button>
                </center>


                <div class=" w3-card-4 w3-light-grey top ">

                    <p class="title">
                    <h5>.....</h5>
                    </p>

                </div>

            </div>

        </div>
    </form>

    <div class="cardtable">
        <div class="w3-card-4 w3-light-grey toptable">
            <!-- <header class="w3-container w3-light-grey top">
            <h3>John Doe</h3>
        </header> -->
            <p class="title">
            <h5>Wasted Items<h5>
                    </p>

        </div>
        <div class="ordertable">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>

                        <th scope="col">Food Item </th>
                        <th scope="col">Quantity </th>
                        <th scope="col">Preservable Duration </th>
                        <th scope="col">Image </th>
                        <!-- <th scope="col">Status</th> -->
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach($wastedfooditems as $key => $wastedfooditem)
                    <tr class="text-center">
                        <td scope="col" class="">{{$key+1}}</td>
                        <td>{{$wastedfooditem->name}}</td>
                        <td>{{$wastedfooditem->amount}}</td>
                        <td>{{$wastedfooditem->duration}}</td>
                        <td>
                            @if($wastedfooditem->image !=null)
                            <img src="{{asset('/uploads/WastedFoodImage/'.$wastedfooditem->image)}}" alt="image"
                                width="70" height="70" class="img img-responsive" />
                            @endif
                        </td>
                        <td>
                            {{$wastedfooditem->action}}
                            <div class="row">
                                <div class="col">
                                    <a href="{{route('edit_wastedfooditems',$wastedfooditem->id)}}"><i
                                            style="font-size: 10px;" class="fas fa-pencil-alt"></i></a>
                                </div>
                                <div class="col">
                                    <a href="{{route('delete_wastedfooditems',$wastedfooditem->id)}}"><i
                                            style="font-size: 10px;" class="fa fa-trash text-danger"></i></a>
                                </div>
                            </div>
                        </td>

                    </tr>


                    @endforeach
                </tbody>

                </tbody>
            </table>
        </div>
        <div class="w3-card-4 toptable">

            <p class="title">
            <h5>.....</h5>
            </p>

        </div>



</body>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>


</html>