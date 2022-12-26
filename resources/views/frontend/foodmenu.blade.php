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
    <link rel="stylesheet" href="CSS/header.css">


    <title>Food List</title>

</head>
<style>
/* .product_card small,
    .product_card strong {
        display: block;
    }

    .product_card .card-header {
        position: relative;
        overflow: hidden;
    }

    .product_card .card-overlay {
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: top 1s ease;
    }

    .product_card .card:hover .card-overlay {
        top: 0%;
    }

    .product_card .card .details-btn .btn {
        position: absolute;
        bottom: -100%;
        left: 0;
        width: 100%;
        border-radius: 0;
        transition: bottom 1s ease;
    }

    .product_card .card:hover .details-btn .btn {
        bottom: 0%;
    }

    .product_card .card .card-body {
        padding: 10px 0;
    }

    .text-decoration-line-through {
        text-decoration: line-through;
    }

    */
/* .menu_icon {
    width: 2rem;
    cursor: pointer;
    margin-left: -80px;
    padding: 2%;

} */

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

/* a {
    text-decoration-color: wheat;
} */

/* .button {

    margin-top: -3rem;
    margin-left: 4rem;
    margin-bottom: -1rem;
    margin-right: -112rem
} */

/* .footer {

    left: 0;
    bottom: 0;
    max-width: 100%;


    text-align: center;
} */

h5 {
    margin-top: -1rem;


}
</style>

<body>
    @include('backend.include.header')

    <!-- <section class="navigation">
        <div class="nav-container">
            <div class="brand">
                <a href="#!">Logo</a>
            </div>
            <nav>
                <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
                <ul class="nav-list">
                    <li>
                        <a href="#!">Home</a>
                    </li>
                    <li>
                        <a href="#!">About</a>
                    </li>

                    <li>
                        <a href="#!">Pricing</a>
                    </li>
                    <li>
                        <a href="#!">Portfolio</a>
                        <ul class="nav-dropdown">
                            <li>
                                <a href="#!">Web Design</a>
                            </li>
                            <li>
                                <a href="#!">Web Development</a>
                            </li>
                            <li>
                                <a href="#!">Graphic Design</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <form class="form-inline my-2 my-lg-0">
                            <input type="text" placeholder="Search.." name="search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                        </lo>

                    <li> <a class="nav-link" href="{{route('cart')}}"><img src="FrontendImage/menu.png"
                                class="menu_icon">{{count(Cart::content())}}</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section> -->




    <!-- <a href="{{route('cart')}}"> <img src="FrontendImage/menu.png" class="menu_icon">{{count(Cart::content())}}</a> -->
    <section>
        <div class="container">
            <div class="d-flex justify-content-between border-bottom mb-3">
                <div class="col-lg-8">
                    <div class="form-group">
                        <select for="category_id" id="category_id" name="category_id" required>
                            <option value="" selected><b>Select Category:</b></option>
                            @foreach($category as $cat)
                            <option value="{{$cat-> id}}">{{$cat-> name}}</option>
                            @endforeach

                        </select>
                    </div>
                    <span class="text-danger"></span>
                </div>
                {{-- @foreach($category as $cat)
                <div class="dropdown"><br>
                    <a class="btn btn-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#" value="{{category->name}}">Rich Food</a></li>


                </ul>
            </div>

            <!-- <h1 class="border-0">Latest Books</h1> -->
            <!-- <a class="all_books" href="{{ route('foodlist') }}">All Foods <i class="fa fa-arro w-right"></i></a> -->

            @endforeach--}}
        </div>
        <br><br><br><br>


        <div class="row justify-content-center">



            @forelse($food as $foodlist)
            {{--@if($foodlist->category == $cat->id)--}}
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
            {{--@endif--}}
            @empty
            <!-- <div class="btn btn-outline-light text-light m-2"> -->
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
    <!-- <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script> -->

</body>
<!-- <footer style="background-color:#555b57c4">

    <div class="container p-4 pb-0">

        <section class="mb-4">

            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                    class="fab fa-instagram"></i></a>



   
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright:
        <a class="text-white" href="#">dishcatering.com</a>
    </div>
  
</footer> -->





</html>