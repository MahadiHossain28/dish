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
            <form action="{{route('store_foodlist')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <div class="form">
                        <div class="cardform">
                            <div class="w3-card-4 w3-light-grey  top ">
                                <p class="title">
                                    Add Food-Items
                                </p>
                            </div>
                            <center>
                                <div class="login-form">
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" for="name" name="name" id="name" required><br><br>
                                            <span class="text-danger">
                                                @error('name')
                                                {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label for="number">Price</label>
                                            <input type="text" class="price" id="name" name="price" required>
                                        </div>
                                        <span class="text-danger"></span>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <select for="category" name="category" required>
                                                <option value="" selected><b>Select Category:</b></option>
                                                @foreach($category as $cat)
                                                <option value="{{$cat-> id}}">{{$cat->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <span class="text-danger"></span>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" for="image" name="image" id="image" class="form-control image" required>
                                        </div>
                                        <span class="text-danger"></span>
                                    </div>
                                    <div class="col-lg-8 text-right">
                                        <button type="submit" class="cart_btn">Submit</button>
                                    </div>
                                </div>
                            </center>


                        </div>

                    </div>
                    <div class="container signin text-center">

                        <p>Go Back to <a href="{{route('dashboard')}}">DashBoard</a></p>
                    </div>
            </form>
            <div class="section-body container-fluid">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="card" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">

                            <div class="card-body">
                                <div class="">
                                    <div class="table_section p-3 table-responsive-xxl">
                                        <table id="purchase_tbl" class="table table-striped text-center mx-3" ">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Item Name</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Add Image </th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($foods as $key => $foodlist)
                                                <tr class="text-center">
                                                    <td scope="col" class="">{{$key+1}}</td>
                                                    <td>{{$foodlist->name}}</td>
                                                    <td>{{$foodlist->price}}</td>
                                                    <td>{{$foodlist->category->name}}</td>



                                                    <td>
                                                        @if($foodlist->image !=null)
                                                        <img src="{{asset('/uploads/ImageFood/'.$foodlist->image)}}" alt="image" width="70" height="70" class="img img-responsive" />
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{$foodlist->action}}
                                                        <div class="row">
                                                            <div class="col">
                                                                <a href="{{route('edit_foodlist',$foodlist->id)}}"><i style="font-size: 20px;" class="fas fa-pencil-alt"></i></a>
                                                            </div>
                                                            <div class="col">
                                                                <a href="{{route('delete_foodlist',$foodlist->id)}}"><i style="font-size: 20px;" class="fa fa-trash text-danger"></i></a>
                                                            </div>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <td>

                                                    @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
</script>

</html>
