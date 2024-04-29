<x-guest-layout>
    <!--photo gallery Heading Section Starts -->
    <section class="container-fluid servicesHead my-5">
        <div class="row">
            <div class="col">
                <h1>Photo Gallery</h1>
            </div>
        </div>
    </section>

    <!-- our Experience Section -->
    <section class="container-fluid ourExp px-md-5 px-4 rounded my-4 pt-2">
        <div class="row px-lg-5 px-0">
            @foreach($photos as $photo)
            <div class="col-xl-3 col-md-6">

                    <img src="{{ asset('uploads/photo/'.$photo->image) }}" class="image-fluid" alt="">

            </div>
            @endforeach
        </div>
{{--        <div class="flex justify-end">--}}
{{--            {{ $photos->links() }}--}}
{{--        </div>--}}
    </section>


</x-guest-layout>
