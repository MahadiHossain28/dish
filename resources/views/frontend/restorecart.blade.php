<!DOCTYPE html>
<html>

<head>
    <title>Restore Cart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href=" https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="CSS/style.css">

    <link rel="stylesheet" href="CSS/dc.css" />
    <link rel="stylesheet" href="CSS/cart.css" />
    <link rel="stylesheet" href="CSS/form.css" />
    <link rel="stylesheet" href="CSS/header.css" />
</head>
<style>
h6 {
    color: black;
}

a {
    text-decoration-color: wheat;
}

.menu_icon {
    width: 2rem;
    cursor: pointer;
    margin-left: -80px;
    padding: 2%;

}

.img_container {
    height: 100px;
    width: 200px;
}

.img_container img {
    height: 100%;
    width: 100%;
    object-fit: cover;
}

.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;

    color: white;
    text-align: center;
}

body {
    color: #FFFFFF;
}

h1 {
    text-align: center;
    color: white;
    background: rgba(0, 0, 0, 0.5);
    padding: 20px;

}

h4 {
    color: black;
}

.form {

    margin-top: 39rem;
    margin-left: -43rem;
    padding-left: -35rem;
    padding-right: -5rem;


}

.cardform {

    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 30rem;
    margin-left: 17rem;
    margin: auto;
    text-align: center;




}

.size {
    width: 65%;
}

.text {
    color: black
}
</style>

@include('backend.include.header');

<div class="container-fluid  mb-5 pb-5">
    <div class="container">
        <div class="text">
            <div class="row">
                <div class="col-lg-8">


                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Food Item</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($suborderlists as $key=>$suborderlist)
                            <tr>
                                <td></td>

                                <td><span class="symbol">{{$suborderlist->name}}</span></td>

                                <td>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <form action="{{route('updatequantity')}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$suborderlist->id}}">
                                                <input class="quantity" min="20" max="500" name="quantity"
                                                    value="{{old('quantity') ?? $suborderlist->quantity}}" type="number"
                                                    id="quantity">

                                                <button type="submit" class="cart_btn">Reset Quantity</button>

                                        </span>

                                    </div>
                                </td>
                                <td><span class="symbol">৳ {{$suborderlist->sub_total}}
                                    </span></td>

                                <td><a class="cart_btn" href=""><i class="fa fa-trash text-danger"></i></a>
                                </td>
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
                                {{--{{Cart::subtotal()}}--}}
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
                        {{-- @php
                        $g_total = (float)str_replace(',','',Cart::subtotal());
                        @endphp--}}
                        <tr>
                            <td>Total Amount</td>
                            <td>:</td>
                            <td><span class="symbol">৳</span>
                                {{-- {{$g_total +($g_total*0.07)+100}}--}}
                            </td>
                        </tr>
                    </table>

                </div>

            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <center>
            <h5>Order Form</h5>
        </center>

        <div class="col-lg-8">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required
                    value="{{$order->name}}">
            </div>
            <span class="text-danger"></span>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter Phone" required
                value="{{$order->phone}}">
        </div>
        <span class="text-danger"></span>
    </div>
    <div class="col-lg-8">
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" required
                value="{{$order->address}}">
        </div>
        <span class="text-danger"></span>
    </div>
    <div class="col-lg-8">
        <div class="form-group">
            <label for="event">Event Name</label>
            <input type="text" class="form-control" id="event" name="event" placeholder="Enter your event's name"
                required value="{{$order->event}}">
        </div>
        <span class="text-danger"></span>
    </div>
    <div class="col-lg-8">
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="date" min="{{date('Y-m-d')}}" name="date"
                placeholder="Enter Phone" required value="{{$order->date}}">
        </div>
        <span class="text-danger"></span>
    </div>
    <div class="col-lg-8">
        <div class="form-group">
            <label for="time">Time</label>
            <input type="time" class="form-control" id="time" name="time" placeholder="Enter Phone" required
                value="{{$order->time}}">
        </div>
        <span class="text-danger"></span>
    </div>
    <div class="dropdown"><br>
        <a class="btn btn-dark dropdown-toggle" role="button" id="payment" data-bs-toggle="dropdown"
            aria-expanded="false" required>
            Payment Method
        </a>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#">Cash On Delivery</a></li>

        </ul>
    </div>
    <div class="col-lg-8 text-center">
        <input type="checkbox" id="check" name="checkbox" value="check">
        <label for="checkbox"><b> You can change the quantity 3 days before the event</b></label>
    </div>
    <div class="col-lg-8 text-right">

        <button type="submit" class="cart_btn">Submit</button>
    </div>
</div>
</form>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<!-- @push('custom_script')
<script>
$(document).ready(function() {
    $(document).on('change', '.quantity', function() {
        var i = 1;
        var i = $(this).val();
        var qty = $('#quantity' + i).val();
        var price = $('#price' + i).val();
        var total = price * quantity;
        $('#total' + i).val(total);
        total();


    });

});
</script>
@endpush -->
</body>

</html>