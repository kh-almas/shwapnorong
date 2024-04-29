<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300&display=swap" rel="stylesheet">
    <title>Shapno Rong</title>
    <!-- Fav Icon -->
    <link rel="icon" href="favlogo.png">
{{--    <!-- my CSS -->--}}
{{--    <link rel="stylesheet" href="css/style.css">--}}
    <!-- Font Awesome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
{{--    <link rel="stylesheet" href="../css/style.css">--}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('js/javascript.js') }}">


</head>

<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" class="logo" height="80" width="80" alt="brand logo">
            Shwapno Rong
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        About
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                        <li><a class="dropdown-item" href="{{ route('company_introduction') }}">Company Introduction</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item" href="{{ route('servicesWedplanner') }}">Wedding Planner Services</a></li>
                        <li><a class="dropdown-item" href="{{ route('servicesCatering') }}">Exclusive Catering Services</a></li>
                        <!-- Add more services here -->
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="galleryDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Gallery
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="galleryDropdown">
                        <li><a class="dropdown-item" href="{{ route('photogallerys') }}">Photo Gallery</a></li>
                        <li><a class="dropdown-item" href="{{ route('video_gallery') }}">Video Gallery</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact us</a>
                </li>
            </ul>

        </div>
    </div>
</nav>




<!-- Modal Starts -->
<div class="modal fade" id="mymodal">
    <div class="modal-dialog">
        <div class="modal-content ">
            <div class="modal-header border-0">
                <h5 class="text-white text-center display-5 fw-bold">Enter Your Details</h5>
                <i class="bi bi-x-lg h5  text-white" data-bs-dismiss="modal"></i>
            </div>
            <div class="modal-body f-flex flex-column justify-content-center">
                <!-- Modal Form -->
                <form class="modalForm">
                    <label class="d-flex justify-content-center ">
                        Name<input type="text">
                    </label>
                    <label class="d-flex justify-content-center ">
                        Email<input type="email">
                    </label>
                    <label class="d-flex justify-content-center ">
                        Number<input type="number">
                    </label>
                    <label class="d-flex justify-content-center ">
                        Select Pakage for you
                        <select>
                            <option value="">Little Wedding</option>
                            <option value="">Big Wedding</option>
                            <option value="">Amazing Wedding</option>
                        </select>
                    </label>

                    <label class="d-flex justify-content-center ">
                        <textarea>Write message to us.. </textarea>
                    </label>
                    <label class="d-flex justify-content-center ">
                        <button>Send Request</button>
                    </label>
                </form>
                <!-- modal form ends -->
            </div>
            <div class="modal-footer border-0">
            </div>
        </div>
    </div>
</div>
<!-- modal Ends -->

<div>
    {{ $slot }}
</div>

<footer class="container-fluid ">
    <div class="row text-white text-center p-3 ">
        <div class="col-sm-4">
            <h6>Get In Touch</h6>
            <p>Hello@shawpnorong.com <br>
                (+880) 1613-370888
            </p>
        </div>
        <div class="col-sm-4">
            <h6>Address</h6>
            <p>Shapno Rong,
                464/1,west Rampura,Madina Tower (5th Floor), Dhaka -1219.</p>
        </div>
        <div class="col-sm-4">
            <h6>Social Links</h6>
            <div>
          <span>
            <a href="https://www.facebook.com/ShwapnoRong">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="https://www.instagram.com">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.twitter.com">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.youtube.com">
              <i class="fab fa-youtube"></i>
            </a>
          </span>
            </div>
        </div>
    </div>
</footer>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>

</body>

</html>
