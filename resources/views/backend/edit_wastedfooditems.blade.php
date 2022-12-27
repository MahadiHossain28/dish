<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('CSS/dashboard.css')}}" type="text/css" />
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        @include('backend.include.sidebar')
        <div id="page-content-wrapper">
            @include('backend.include.backend_header')
            <form method="POST" action="{{route('update_wastedfooditems')}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="container">
                    <h1>Edit Wasted Food Details</h1>
                    <hr>
                    <input type="hidden" name="wasted_fooditems_id" value="{{$wastedfood->id}}">
                    <label for="name"><b>Food Item</b></label>
                    <input type="text" for="name" name="name" id="name" value="{{$wastedfood->name}}" placeholder="Enter Food Item..">

                    <label for="price"><b>Amount</b></label>
                    <input type="text" for="amount" name="amount" id="amount" value="{{$wastedfood->amount}}" placeholder="Enter Price"><br><br>

                    <label for="price"><b>Presrveable Duration</b></label>
                    <input type="text" for="duration" name="duration" id="duration" value="{{$wastedfood->duration}}" placeholder="Enter Price"><br><br>

                    <input type="file" for="image" name="image" id="image" class="form-control image" value="{{$wastedfood->image}}"><br><br>
                    <div class="form-control image"><img src="{{'/uploads/WastedFoodImage/'.$wastedfood->image}}" alt="" width="70" height="70">
                    </div>
                    <hr>
                    <button type="submit" class="registerbtn">Submit</button>
                </div>
            </form>
            <div class="container signin">
                <p>Go Back to DashBoard<a href="{{route('dashboard')}}">DashBoard</a>.</p>
            </div>
            </form>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
</script>

</html>
