<x-guest-layout>
    <!-- Main text  startingBox Section starts from here -->
{{--    <section class="container-fluid startingBox">--}}
{{--        <div class="row">--}}
{{--            <div class="col-12 text-center text-white">--}}
{{--                <h2 class="display-3 mt-lg-5">--}}
{{--                    Plan the Best Events & Weddings--}}
{{--                </h2>--}}
{{--                <h3 class="h2 mt-5">Creative Wedding</h3>--}}
{{--            </div>--}}
{{--            <div class="col-12"></div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <section style="padding-top: 6.6rem;">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($sliders as $key => $slider)
                    <div class="carousel-item{{ $key === 0 ? ' active' : '' }}">
                        <div style="position: relative; height: 80vh;">
                            <img src="{{ asset('uploads/' . $slider->image) }}" class="d-block w-100 h-100" alt="...">
                            <div class="row" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 100%;">
                                <div class="col-12 text-center text-white">
                                    <h2 class="display-3 mt-lg-5">
                                        Plan the Best Events & Weddings
                                    </h2>
                                    <h3 class="h2 mt-5">Creative Wedding</h3>
                                </div>
                                <div class="col-12"></div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- Welcome Section Starts here -->
    <section class="container-fluid welcomeBox">
        <div class="row justify-content-evenly py-5 px-2">
            @foreach($photos as $photo)
                @if($photo->serial === 'card1')
                    <div class="col-md-3 mt-5 d-flex align-items-end justify-content-center"
                         style="background-image: url({{ asset('uploads/cards/'. $photo->image) }});
                    background-size: cover;
                    min-height: 29rem;
                    border-radius: 20px;"
                    >
                        <h6>Umbrella Design</h6>
                    </div>
                @endif
            @endforeach

            <div class="col-md-4 mt-5 text-center pt-5">
                <h4 class="h1 ">Welcome</h4>
                <h5 class="h1 my-5">Your wedding will be the most important event in your life</h5>
                <a class="ownBtn " href="#">Read more</a>
            </div>

            @foreach($photos as $photo)
                @if($photo->serial === 'card2')
                    <div class="col-md-3 mt-5 d-flex align-items-end justify-content-center"
                         style="background-image: url({{ asset('uploads/cards/'. $photo->image) }});
                    background-size: cover;
                    min-height: 29rem;
                    border-radius: 20px;"
                    >
                        <h6>Interior Decoration</h6>
                    </div>
                @endif
            @endforeach

        </div>
    </section>


    <!-- Packages Section Starts from here -->
    <!-- <section class="container-fluid packageCards mb-5">
      <div class="row justify-content-evenly p-3 px-sm-5 ">
        <div class="col-lg-3 mt-3 col-12">
          <h5>Little Wedding</h5>
          <p>This package is made for Little Wedding Arrangement and Functions </p>
          <h4 class="text-center display-3 fw-bold">1800 <span>$</span></h4>
          <ul>
            <li>Wedding Decoration</li>
            <li>Maintenance</li>
            <li>Fresh Food</li>
            <li>Free Buffet</li>
          </ul>
          <div class="d-flex justify-content-center">
            <a class="ownBtn mt-5" href="#">Book Now</a>

          </div>
        </div>
        <div class="col-lg-3 mt-3 col-12">
          <h5>Big Wedding</h5>
          <p>This package is made for Big Wedding Arrangement and Funntion and all</p>
          <h4 class="text-center display-3 fw-bold">2500 <span>$</span></h4>
          <ul>
            <li>Free Flowers</li>
            <li>Wedding Decoration</li>
            <li>Maintenance</li>
            <li>Fresh Food</li>
            <li>Free Buffet</li>
          </ul>
          <div class="d-flex justify-content-center">
            <a class="ownBtn mt-4" href="#">Book Now</a>

          </div>
        </div>
        <div class="col-lg-3 mt-3 col-12">
          <h5>Amazing Wedding</h5>
          <p>This package is made for Amazing Wedding Arrangement and Funntion with our Luxury Services</p>
          <h4 class="text-center display-3 fw-bold">3200 <span>$</span></h4>
          <ul>
            <li>Free Flowers</li>
            <li>Wedding Decoration</li>
            <li>Maintenance</li>
            <li>Fresh Food</li>
            <li>Free Buffet</li>
            <li>luxury Arrangement</li>
          </ul>
          <div class="d-flex justify-content-center">
            <a class="ownBtn" href="#">Book Now</a>

          </div>

        </div>
      </div>
    </section>

    Pre Booking and Create best wedding section -->
    <!-- <section class="container-fluid bestWedding">
      <div class="row pt-5">
        <div class="col text-center text-white">
          <h6 class="display-6 ">Create Your Wedding Best with Us.</h6>
          <p class="h2 mt-5 px-sm-5 mx-sm-5 my-5">You can Send request to us for Advance Booking , Custom Decorations and
            Function Arrangements Our Team Will Contact . </p>
          <button class="ownBtn" data-bs-toggle="modal" data-bs-target="#mymodal">Send Request</button>

        </div>
      </div>

    </section> -->


    <!-- our Experience Section -->
    <section class="container-fluid ourExp px-md-5 px-4 rounded my-4 pt-2">
        <div class="row py-5 ">
            <div class="col ">
                <h5 class="tColor display-4 text-center fw-bold">
                    Our experience
                </h5>
                <p>Our Wedding Plans And Our Services are Best Pre Preparations, DJ/Music, Venue Booking, Decor, Photography
                    Services, Honeymoon, Service Staff, Invitations, Catering, PR and Media Coverage, Gifts, Celebrity Invites etc

                </p>
            </div>
        </div>
        <div class="row px-lg-5 px-0">
            @foreach($experiences as $experience)
                <div class="col-xl-3 col-md-6">
                    <img src="{{ asset('/uploads/experience/'. $experience->image) }}" class="image-fluid" alt="">
                </div>
            @endforeach
        </div>
    </section>



    <!-- important Event Section Starts from here -->
    <section class="container-fluid imptEvent my-5">
        <div class="row">
            <div class="col text-center">
                <h6 class="display-6 fw-bold ">Your wedding will be the most important event in your life</h6>
            </div>
        </div>

        <div class="row justify-content-evenly text-center pt-4 px-sm-0 px-1">
            <div class="col-md-5 mt-3">
                <h6 class="h3 fw-bold">Event Planing and Services</h6>
                <p>Venue selection, catering, photography/ Videography, styling & grooming, decoration, dJ & entertainment,
                    guests transfers, hospitality & guests support, invitations, wedding cake, trousseau packing, band & baraat
                    According to your Religion , flexibily and
                    Special Demand.
                </p>
                @foreach($photos as $photo)
                    @if($photo->serial === 'card3')
                        <img src="{{ asset('uploads/cards/'. $photo->image) }}" alt="Image Preview">
                    @endif
                @endforeach
            </div>
            <div class="col-md-5 mt-3">
                <h6 class="h3 fw-bold ">
                    Decoration of tables</h6>
                <p>
                    Hoping for something entirely romantic? Go for plenty of blooms! An entire garland spanning the length of the
                    table adds such a lush touch as a gorgeous centerpiece .Consider displaying tall vases filled with long
                    branches of cherry blossoms for a beautiful look.
                </p>
                @foreach($photos as $photo)
                    @if($photo->serial === 'card4')
                        <img src="{{ asset('uploads/cards/'. $photo->image) }}" alt="Image Preview">
                    @endif
                @endforeach
            </div>
        </div>
    </section>



    <!-- Our Clients and Partners -->
    <section class="container ourClients">
        <div class="row ">
            <div class="col text-center">
                <h6>Our Clients & Parthners</h6>
            </div>
        </div>
        <div class="row justify-content-center align-items-center pt-sm-5 pt-2">

            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <img src="{{ asset('images/waterfont.png') }}" alt="Logo" style="max-width: 100%; height: auto;">
            </div>
    </section>

    <!-- map Section Starts here -->
    <section class="container-fluid my-5 mapsec">
        <div class="row">
            <div class="col">
                <h6 class="display-5 text-center fw-bold">Visit Us</h6>
            </div>
        </div>
        <div class="row justify-content-center pt-5">
            <div class="col-sm-9 col-11 d-flex justify-content-center">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.479937543613!2d90.41922187415229!3d23.76591807865982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9f56867cbf5%3A0x9d219f3486330d21!2sShwapno%20Rong!5e0!3m2!1sen!2sbd!4v1691446314329!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    class="gMap" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
</x-guest-layout>
