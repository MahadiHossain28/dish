<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Catering Service</title>

    <link rel="stylesheet" href="CSS/header.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">



</head>

<body>

    <div class="body">
        @include('backend.include.header');
        <form action="{{route('edit_dashboard', $customer->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="container-fluid  mb-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <center>
                                <h5>Edit Your Information</h5>
                            </center>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name"
                                    value="{{$customer->name}}">
                            </div>
                            <span class="text-danger"></span>
                        </div>

                        <div class="col-lg-8">
                            <div class="form-group">
                                <label for="number">Phone</label>
                                <input type="text" class="form-control" id="number" name="number"
                                    placeholder="Enter Phone" value="{{$customer->phone}}">
                            </div>
                            <span class="text-danger"></span>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    placeholder="Enter Address" value="{{$customer->address}}">
                            </div>
                            <span class="text-danger"></span>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Enter Phone" value="{{$customer->email}}">
                            </div>
                            <span class="text-danger"></span>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Enter Password" value="{{$customer->password}}">
                            </div>
                            <span class="text-danger"></span>
                        </div><br><br>


                        <!-- <div class="col-lg-8">
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="image" class="form-control image" id="image" name="image">
                                @if($customer->image !=null)
                                <img src="{{asset('/uploads/CustomerImage/'.$customer->image)}}" alt="image" width="200"
                                    height="200" class="img img-responsive" />
                                @endif
                            </div>
                            <span class="text-danger"></span>
                        </div> -->
                        <div class="text-right">
                            <button type="submit" class="cart_btn mr-3">Update</button>
                        </div>
                    </div>

                </div>
            </div>

            <!-- <div class="registration">


            <center>
                <h2>Catering Service</h2>
            </center><br>


            <input type="text" for="name" name="name" id="name" placeholder="name.."
                value="{{$customer->name}}"><br><br>



             <input type="text" for="number" name="number" id="name" placeholder="Enter your phone number.." value="{{$customer->number}}"><br><br>
            <input type="text" for="email" name="email" id="name" placeholder="Enter your email.."
                value="{{$customer->email}}"><br><br>
            <input type="text" for="address" name="address" id="name" placeholder="Enter your address .."
                value="{{$customer->address}}"><br><br>

            <input type="text" for="password" name="password" id="name" placeholder="Put three to five unique numbers"
                value="{{$customer->password}}"><br><br>



            <br><br>

            <button type="submit" name="submit" id="sub" value="submit"
                class="btn btn-primary btn-block ">Submit</button>
            <br>
            <center><b> Already a member?<a href="{{route('user_login')}}">LOG-IN</a></b></a></center>
        </div> -->
        </form>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
    integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
</script>

</body>

</html>
