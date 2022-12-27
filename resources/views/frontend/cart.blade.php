<!DOCTYPE html>
<html>

<head>
    <title>Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/dc.css">
    <link rel="stylesheet" href="CSS/header.css">


    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body>
@include('backend.include.header');
@if(session()->has('message'))
<div class="alert alert-danger">
    {{ session()->get('message') }}
</div>
@endif
<!-- <nav class="navbar navbar-expand-lg navbar-light" style=" background-color:#555b57c4">
    <a class="navbar-brand" href="#"><b>Ⓓⓘⓢⓗ Ⓒⓐⓣⓔⓡⓘⓝⓖ</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Platter</a>
            </li>

            <li class="nav-item">
                <a class="nav-link disabled" href="#">Login</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <a class="nav-link" href="{{route('cart')}}"><img src="FrontendImage/menu.png"
            class="menu_icon">{{count(Cart::content())}}</a>
</nav> -->
<div class="container-fluid  mb-5 pb-5">
    <div class="container">
        <form action="{{route('cart_order')}}" method="POST">
            @csrf
            <div class="text">
                <div class="row">
                    <div class="col-lg-8">


                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Food Item</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>SubTotal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($cart as $key=> $data)

                                <tr>
                                    <td></td>
                                    <td><img class="img-fluid mx-auto d-block image" src="{{asset('/uploads/ImageFood/'.$data->options->image)}}" style="width: 120px" alt="food">
                                    </td>
                                    <td><span class="symbol">{{$data->name}}</span></td>

                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <form action=""></form>
                                                <form action="{{route('cart_increment')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="rowid" value="{{$data->rowId}}">
                                                    <input class="quantity" min="20" max="500" name="quantity" value="{{$data->qty}}" type="number" id="quantity">
                                                    <button type="submit" class="btn btn-dark">Reset Quantity</button>
                                                </form>
                                            </span>

                                        </div>
                                    </td>
                                    <td><span class="symbol">৳
                                            {{$data->price}}</span>
                                        @php
                                        $total = $data->price*$data->qty;
                                        @endphp</td>
                                    <td><span class="symbol">৳
                                            {{$total}}</span></td>
                                    <td><a class="cart_btn" href="{{route('delete_cartitem',$data->rowId)}}"><i class="fa fa-trash text-danger"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- <div class="text-right">
                            <button type="submit" class="cart_btn mr-3">Save</button>
                        </div> -->


                    </div>
                    <div class="col-lg-4">
                        <table class="table table-bordered">
                            <tr>
                                <td>SubTotal</td>
                                <td>:</td>
                                <td><span class="symbol">৳</span> ৳
                                    {{Cart::subtotal()}}
                                </td>
                            </tr>
                            <tr>
                                <td>Delivery Charge</td>
                                <td>:</td>
                                <td><span class="symbol">৳</span>
                                    100</td>
                            </tr>
                            <tr>
                                <td>Tax</td>
                                <td>:</td>
                                <td><span class="symbol">৳</span>
                                    7%</td>
                            </tr>
                            @php
                            $g_total = (float)str_replace(',','',Cart::subtotal());
                            @endphp
                            <tr>
                                <td>Total Amount</td>
                                <td>:</td>
                                <td><span class="symbol">৳</span>
                                    {{$g_total +($g_total*0.07)+100}}
                                </td>
                            </tr>
                        </table>
                        <div class="text-right">
                            <a href="{{ route('foodmenu') }}" class="btn btn-dark">Go
                                Back</a>

                        </div>
                    </div>
                    <div class="row mt-3 pe-0">
                        <div class="col-lg-12">
                            <center>
                                <h5>Order Form</h5>
                            </center>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required value="">
                            </div>
                            <span class="text-danger"></span>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter Phone" required value="">
                            </div>
                            <span class="text-danger"></span>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" required value="">
                            </div>
                            <span class="text-danger"></span>

                            <div class="form-group">
                                <label for="event">Event Name</label>
                                <input type="text" class="form-control" id="event" name="event" placeholder="Enter your event's name" required value="">
                            </div>
                            <span class="text-danger"></span>

                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" id="date" min="{{\Carbon\Carbon::now()->addDays(3)->format('Y-m-d')}}" name="date" placeholder="Enter Phone" required value="">
                            </div>
                            <span class="text-danger"></span>

                            <div class="form-group">
                                <label for="time">Time</label>
                                <input type="time" class="form-control" id="time" name="time" placeholder="Enter Phone" required value="">
                            </div>
                            <div class="form-group">
                                <label for="time">Bkash Number</label>
                                <input type="number" class="form-control" id="time" name="bkash_number" placeholder="Enter number" required value="">
                            </div>
                            <div class="form-group">
                                <label for="time">Transaction ID</label>
                                <input type="text" class="form-control" id="time" name="transaction_id" placeholder="Enter transaction Id" required value="">
                            </div>
                            <span class="text-danger"></span>
                            <div class="d-flex justify-content-between mt-3">
                                <button type="submit" class="btn btn-dark text-right">Submit</button>

                                <ul class="text-end">
                                    <li><b> You can change the quantity 3 days before the event</b></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="border text-center">
                                <h5>Pay With Bkash</h5>
                                <img src="" alt="Bkash-Barcode">
                                <div class="mt-3">
                                    <h6><b>*২৪৭# ব্যবহার করে সেন্ড মানি করার নিয়ম</b></h6>
                                    <ul class="my-3">
                                        <li class="text-start">*২৪৭# ডায়াল করে বিকাশ মোবাইল মেন্যুতে প্রবেশ করুন</li>
                                        <li class="text-start">“Send Money” করতে 1 লিখে রিপ্লাই করুন</li>
                                        <li class="text-start">যে বিকাশ নাম্বারে টাকা পাঠাতে চান, সে বিকাশ নাম্বারটি প্রদান করুন</li>
                                        <li class="text-start">যকত টাকা সেন্ড মানি করতে চান তার পরিমাণ অংকে লিখুন</li>
                                        <li class="text-start">কত টাকা সেন্ড মানি করতে চান তার পরিমাণ অংকে লিখুন</li>
                                        <li class="text-start">এরপর রেফারেন্স হিসেবে যেকোনো একটি বার্তা প্রদান করুন (ঐচ্ছিক)</li>
                                        <li class="text-start">আপনার বিকাশ পিন প্রদান করে সেন্ড মানি’র প্রক্রিয়া সম্পন্ন করুন</li>
                                    </ul>
                                </div>
                                <div class="mt-3">
                                    <h6><b>বিকাশ অ্যাপ ব্যবহার করে সেন্ড মানি করার নিয়ম</b></h6>
                                    <ul class="my-3">
                                        <li class="text-start">বিকাশ অ্যাপে বিকাশ পিন প্রদান করে প্রবেশ করুন</li>
                                        <li class="text-start">“Send Money / সেন্ড মানি” অপশনে ট্যাপ করুন</li>
                                        <li class="text-start">যে নাম্বারে সেন্ড মানি করবেন, সে নাম্বারটি সিলেক্ট বা টাইপ করুন</li>
                                        <li class="text-start">এরপর কত টাকা সেন্ড মানি করতে চান তার পরিমাণ লিখুন</li>
                                        <li class="text-start">এরপর Reference অপশনের নিচে কোনো নোট লিখতে চাইলে তা লিখুন</li>
                                        <li class="text-start">বিকাশ পিন নাম্বার প্রদান করে এগিয়ে যান</li>
                                        <li class="text-start">এরপর ট্যাপ করে রেখে সেন্ড মানি কনফার্ম করুন</li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        </div>
                    </div>
                </div>
        </form>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</body>

</html>
