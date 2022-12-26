<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/dc.css">
    <link rel="stylesheet" href="CSS/header.css">


    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<!-- <style>
        *{
    margin:0;
    padding: 0;
    font-family: 'Roboto', sans-serif;

}
.body
{
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url(FrontendImage/r1.png);
    background-position: center;
    background-size:cover ;
    list-style: none;
    padding-left: 1rem;
    padding-right: 5rem;
    box-sizing: border-box;

}
h1{ 
	margin: 30px 0 20px 0;
	font-size:40 px;
	font-weight:550;
	text-shadow: 2px 1px 2px black; 
    text-decoration-color: blanchedalmond;
    color:#fff;
    /* list-style: none; */
}
.navbar
{
    height: 12%;
    display: flex;
    align-items: center;
  
    
}
.menu_icon
{
    width: 2%;
    cursor: pointer;
    margin-left: 40px;

}
nav
{
    flex:1;
    text-align:right;
    list-style: none;
}
nav ul li
{
list-style: none;
display:inline-block;
margin-left :60px; ;
}
nav ul li a
{
text-decoration: none;
color:#fff;
font-size: 12px;
}
.row
{
    display: flex;
    height: 88%;
    align-items: center;
}
/* .col
{
    flex-basis:50%;
} */
.head
{
    position:absolute;
    top:50%;
}
.paragraph
{
    position:absolute;
    top:60%;  
}
h2{
    color:#fff;
    font-size: 41px;
}
p{
    color:#fff;
    font-size: 14px;

}
button
{
    width: 148px;
    color: #000;
    font-size: 12px;
    padding: 12px 0;
    background-color: #fff;
    border: 0;
    border-radius: 20px;
    outline: none;
    margin-top: -450px;
    top:20%;

}
.card
{
    width:200px;
    height:230px;
    display:inline-block;
    border-radius: 10px;
    padding: 15px 25px;
    box-sizing: border-box;
    cursor: pointer;
    margin: 10px 15px;
    background-image: url(FrontendImage/r.jpg);
    background-position: center;
    background-size: cover;
}
/* .col1
{
    position: absolute;
    top:60%;

} */
/* .footer {
    font-size: 18px;
    line-height:1px; 
text-align: center;
padding: 3px;
background-color:rgba(241, 226, 226, 0.2);

} */
/* :root {
    --main-bg-color: #009d63;
    --main-text-color: #009d63;
    --second-text-color: #bbbec5;
    --second-bg-color: #c1efde;
  }
  
  .primary-text {
    color: var(--main-text-color);
  }
  
  .second-text {
    color: var(--second-text-color);
  }
  
  .primary-bg {
    background-color: var(--main-bg-color);
  }
  
  .secondary-bg {
    background-color: var(--second-bg-color);
  }
  
  .rounded-full {
    border-radius: 100%;
  }
  
  #wrapper {
    overflow-x: hidden;
    background-image: linear-gradient(
      to right,
      #baf3d7,
      #c2f5de,
      #cbf7e4,
      #d4f8ea,
      #ddfaef
    );
  }
  
  #sidebar-wrapper {
    min-height: 100vh;
    margin-left: -15rem;
    -webkit-transition: margin 0.25s ease-out;
    -moz-transition: margin 0.25s ease-out;
    -o-transition: margin 0.25s ease-out;
    transition: margin 0.25s ease-out;
  }
  
  #sidebar-wrapper .sidebar-heading {
    padding: 0.875rem 1.25rem;
    font-size: 1.2rem;
  }
  
  #sidebar-wrapper .list-group {
    width: 15rem;
  }
  
  #page-content-wrapper {
    min-width: 100vw;
  }
  
  #wrapper.toggled #sidebar-wrapper {
    margin-left: 0;
  }
  
  #menu-toggle {
    cursor: pointer;
  }
  
  .list-group-item {
    border: none;
    padding: 20px 30px;
  }
  
  .list-group-item.active {
    background-color: transparent;
    color: var(--main-text-color);
    font-weight: bold;
    border: none;
  }
  
  @media (min-width: 768px) {
    #sidebar-wrapper {
      margin-left: 0;
    }
  
    #page-content-wrapper {
      min-width: 0;
      width: 100%;
    }
  
    #wrapper.toggled #sidebar-wrapper {
      margin-left: -15rem;
    }
  } */
   
        </style> -->
<!-- @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif -->
<!-- <style>


h1 {
    text-align: center;
    color: white;
    background: rgba(0, 0, 0, 0.5);
    padding: -2px;

}
</style> -->


<body>

    <div class="body">
        @include('backend.include.header');
        <div class="container-fluid">
            <!-- <div class="img_container">
            <img src="r3.jpg">
        </div>* -->

            <!-- <nav>

                <div class="navbar">
                    <div class="logo">
                        <h1 class=""><b>Ⓓⓘⓢⓗ Ⓒⓐⓣⓔⓡⓘⓝⓖ</b></h1>
                    </div>

                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">Platters</a></li>
                        <li><a href="">Waste_FoodItems</a></li>
                        {{-- <li><a href="{{route('user_login')}}">Registration</a></li>--}}


                        @if(Auth::user())
                        <li><a href=" {{route('user_dashboard')}}">
                                User_Dashboard</a>
                        </li>
                        {{--<li><a href="{{route('logout')}}">Logout</a></li>--}}
                        @else
                        <li><a href="{{route('user_login')}}">Login</a></li>
                        @endif
                        <li><a href="{{route('cart')}}">
                                <img src="FrontendImage/menu.png" class="menu_icon">{{count(Cart::content())}}</a></li>
                    </ul>

                </div>
            </nav> -->
        </div>
    </div>
    <section>
        <div class="row">
            <div class="col-lg-3">
                <h2 class="head">Our Services</h2>
                <p class="paragraph"><b> Different cuisin holds different culture,disguised in taste<br>
                        Explore our authenticate services</b>
                </p>
                <!-- <button type="button">Explore</button> -->
            </div>
        </div>
        <div class="col1">
            <div class="row">

                <!-- <div class="col-lg-3">


                        <div class="card">
                            <h5>Corporate Catering</h5>
                            <p>From made-to-order foods to flawless service, we are the expert in making your next
                                corporate
                                event –small or large – a delicious success.</p>
                        </div>
                    </div> -->

                <!-- <div class="col-lg-3">
                        <div class="card card1">
                            <h5>Private Catering</h5>
                            <p>Life is full of occasions and celebrations. Scrumptious food makes these events
                                long-lasting.
                                YES, we proudly deliver super delicious food and fabulous service.</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card card2">
                            <h5>Corporate Catering</h5>
                            <p>From made-to-order foods to flawless service, we are the expert in making your next
                                corporate
                                event –
                                small or large – a delicious success.</p>
                        </div>
                    </div> -->



            </div>
        </div>
    </section>

    <!-- <footer>

        <center>
            <h2>𝘊𝘰𝘯𝘵𝘢𝘤𝘵 𝘐𝘯𝘧𝘰:</h2>
        </center>


        <center>
            <h5><b>Phone: 00002233</b></h5>
        </center>

        <p>
            <center><a href="mailto:bookstore@example.com"><b>Email:foodstore@example.com</b></a></center>
        </p>
    </footer> -->

    @include('backend.include.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>






</body>


</html>