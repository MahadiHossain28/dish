<!-- <html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Product Card</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<link rel="stylesheet" href="CSS/dc.css" />
<title>Product Card</title>

</head>
<style>
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

a {
    text-decoration-color: wheat;
}

.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;

    color: white;
    text-align: center;
}
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style=" background-color:#555b57c4">
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
        <a class="nav-link" href="{{route('cart')}}"><img src="FrontendImage/menu.png" class="menu_icon"></a>
    </nav>
    <div class="container">
        <div class="d-flex justify-content-between border-bottom mb-3">

        </div>
        <div class="row justify-content-center">
            @foreach($food as $foodlist)
            <div class="col-lg-3 col-md-6 col-sm-12 col-12  mb-3">

                <div class="card" style="width: 17rem;">
                    @if($foodlist->image !=null)

                    <div class="img_container mx-auto">
                        <img src="{{asset('/uploads/ImageFood/'.$foodlist->image)}}" class="img-fluid" alt="...">

                    </div>

                    @endif

                    <div class="card-body">
                        <label class="container">
                            <h5 class="card-title">
                                {{$foodlist->name}}
                            </h5>
                            <p class="card-text text-dark">
                                <span class="symbol">৳</span> {{$foodlist->price}}
                            </p>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>

                    </div>
                </div>





            </div>
            @endforeach
        </div>
    </div>
    </div>
    <div class="container my-5" style="background-color: rgba(0, 0, 0, 0.2);">
        <div class="footer">

            <footer style="background-color:#555b57c4">

                <div class="container p-4 pb-0">

                    <section class="mb-4">

                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                                class="fab fa-google"></i></a>

                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                                class="fab fa-instagram"></i></a>


                    </section>
            
</div>


<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" href="#">dishcatering.com</a>
</div>

</footer>
</div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
 <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script> 
</body>



</html> -->