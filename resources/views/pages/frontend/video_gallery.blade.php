<x-guest-layout>
    <!--photo gallery Heading Section Starts -->
    <section class="container-fluid servicesHead my-5">
        <div class="row">
            <div class="col">
                <h1>video Gallery</h1>
            </div>
        </div>
    </section>

    <!-- our Experience Section -->
    <section class="container-fluid ourExp px-md-5 px-4 rounded my-4 pt-2">
        <div class="row">
            @foreach($videos as $video)
                <div class="col-sm-6 mb-4">
                    <div class="embed-responsive embed-responsive-16by9">
                        {!! $video->link !!}
                    </div>
                </div>
            @endforeach
        </div>
    </section>


</x-guest-layout>
