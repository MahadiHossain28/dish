<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Customer_Dashboard</title>
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    @include('backend.include.header');
    <div class="container rounded bg-transparent py-3">
        <div class="container">
            <div class="ordertable">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Add More Food Items
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Add Item</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('add_more')}}" method="POST">
                                    @csrf
                                    @foreach($suborderlists as $suborderlist)
                                    <input type="hidden" value="{{$suborderlist->id}}" name="id">
                                    <div class="mb-3">


                                        <label for="exampleInputEmail1" class="form-label">Food name</label>
                                        <select name="name" class="form-control">
                                            <option value="">select Food</option>
                                            @foreach($foods as $food)
                                            <option value="{{$food->name}}">{{$food->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Quantity</label>
                                        <input type="number" class="form-control" name="quantity">
                                    </div>
                                    @endforeach
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> #</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price </th>
                            <th scope="col">Quantity </th>
                            <th scope="col">Subtotal</th>
                            <th scope="col">Update</th>
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
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$suborderlist->id}}">
                                    Food
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop{{$suborderlist->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Update Food quantity ( {{$suborderlist->name}} )</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('update_qty')}}" method="POST">
                                                    @csrf
                                                    <input type="hidden" value="{{$suborderlist->id}}" name="id">
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Quantity</label>
                                                        <input type="number" class="form-control" value="{{$suborderlist->quantity}}" name="quantity">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
</body>

</html>
