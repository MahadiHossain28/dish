<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge" /> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" /> -->

    <!-- <link rel="stylesheet" href="CSS/dc.css"> -->
{{--    <link rel="stylesheet" href="CSS/header.css">--}}


    <title>Food List</title>

</head>
<style>
    .img_container {
        height: 100px;
        width: 200px;
    }

    .img_container img {
        height: 100%;
        width: 100%;
        margin-top: 1rem;
        object-fit: cover;
    }
    h5 {
        margin-top: -1rem;
    }
</style>
<body>
    @include('backend.include.header')
    <section class="mt-3">
            <div class="row justify-content-center">
                @forelse($food as $foodlist)
                <div class="col-lg-3 col-md-6 col-sm-12 col-12  mb-3">
                    <div class="card" style="width: 17rem;">
                        @if($foodlist->image !=null)
                        <div class="img_container mx-auto">
                            <img src="{{asset('/uploads/ImageFood/'.$foodlist->image)}}" class="img-fluid" alt="...">
                        </div>
                        @endif
                        <div class="card-body">
                            <label class="container">
                                <h6 class="card-title"><b>
                                        {{$foodlist->name}}
                                    </b></h6>
                                <p class="card-text text-dark">
                                    <span class="symbol">৳</span>{{$foodlist->price}}
                                </p>
                                <p class="card-text text-dark">
                                    <span class="symbol"></span>
                                <h5>{{$foodlist->category->name}}</h5>
                                </p>
                                @if(Auth::user())
                                <a class="btn btn-outline-secondary button" href="{{route('addtocart',$foodlist->id)}}">Add
                                    to Cart</a>
                                @else
                                <a class="btn btn-outline-secondary button" disable href="{{route('user_login')}}">login
                                    first</a>
                                @endif

                            </label>
                        </div>
                    </div>
                </div>
                @empty
                <div class="alert alert-info" role="alert">
                    <h5>No Match Found</h5>
                </div>
                @endforelse
            </div>
        </div>
    </section>
    <section>
        @include('backend.include.footer')
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js">
    </script>
</body>
</html>
