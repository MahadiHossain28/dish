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

        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="CSS/dashboard.css" /> -->

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/dashboard.css" />
    </head>
    <style>
.ordertable {
    margin-top: 1rem;
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
    margin-top: -40rem;
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
        <form action="{{route('postcategory')}}" method="POST">
            @csrf
            <div class="form">
                <div class="cardform">
                    <div class="w3-card-4 w3-light-grey  top ">

                        <p class="title">
                            Select Category
                        </p>

                    </div>

                    <center>
                        <div class="login-form">

                            <br><br>
                            <label><b>Category<b></label>

                            <select for="category" type="category" id="username" name="name">

                                <option value="Rich Food">Rich Food</option>
                                <option value="Fast Food">Fast Food</option>
                                <option value="Drinks">Drinks</option>
                                <option value="Dessert">Dessert</option>
                                <option value="Salad">Salad</option>
                            </select><br><br>




                        </div>

                        </p>

                        <button type="submit" class="btn btn-outline-dark" data-mdb-ripple-color="dark">
                            Submit
                        </button>
                    </center>
                    <div class=" w3-card-4 w3-light-grey top ">

                        <p class="title">
                        <h5>.....</h5>
                        </p>
                        <div class="ordertable">

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Category ID</th>

                                        <th scope="col">Customer Name </th>

                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($category as $category_id)
                                    <tr>



                                        <td>{{$category_id->id}}</td>

                                        <td>{{$category_id->name}}</td>




                                        <td><a href="http://" class="btn btn-success">Show</a></td>


                                    </tr>
                                    @endforeach


                                </tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </body>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>


    </html>