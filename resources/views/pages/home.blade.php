@extends('layout.app')
@section('title')
    NOMADS
@endsection

@section('content')
<!-- Header -->
<header class="text-center">
    <h1>
        Explore the Beautiful World
        <br>
        As Easy On Display
    </h1>   
    <p class="mt-3">
        You will see beautiful
        <br>
        moment you never see before 
    </p>
    <a href="#" class="btn btn-get-started px-4 mt-4">
        Get Started
    </a>
</header>
<main>
<!-- statistik -->
<section class="section-stats row justify-content-lg-center" id="stats">
    <div class="col-3 col-md-2 stats-detail">
        <h2>20K</h2>
        <p>Members</p>
    </div>
    <div class="col-3 col-md-2 stats-detail">
        <h2>12</h2>
        <p>Countries</p>
    </div>
    <div class="col-3 col-md-2 stats-detail">
        <h2>7</h2>
        <p>Partners</p>
    </div>
    <div class="col-3 col-md-2 stats-detail">
        <h2>3k</h2>
        <p>Hotels</p>
    </div>
</section>

<!-- panduan -->
<section class="section-popular" id="popular">
    <div class="container">
        <div class="row">
            <div class="col text-center section-popular-heading">
                <h2>Wisata Popular</h2>
                <p>Something That you never try
                    <br>
                    Before in this world</p>
            </div>
        </div>
    </div>
</section>

<!-- paket popular -->
<section class="section-popular-content" id="popularcontent">
    <div class="container">
        <div class="section-popular-travel row justify-content-lg-center">
            <!-- DERATAN -->
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column" 
                style="background-image: url('frontend/images/popular-1@2x.jpg');">
                    <div class="travel-country">INDONESIA</div>
                    <div class="travel-location">DERATAN,BALI</div>
                    <div class="travel-button mt-auto">
                        <a href="{{ route('detail') }}" class="btn btn-view-details px-4">
                            View Details
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- BROMO -->
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column" 
                style="background-image: url('frontend/images/popular-3@2x.jpg');">
                    <div class="travel-country">INDONESIA</div>
                    <div class="travel-location">NUSA PENIDA</div>
                    <div class="travel-button mt-auto">
                        <a href="{{ route('detail') }}" class="btn btn-view-details px-4">
                            View Details
                        </a>
                    </div>
                </div>
            </div>


            <!-- NUSAPENIDA -->
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column" 
                style="background-image: url('frontend/images/popular-2@2x.jpg');">
                    <div class="travel-country">INDONESIA</div>
                    <div class="travel-location">BROMO,MALANG</div>
                    <div class="travel-button mt-auto">
                        <a href="{{ route('detail') }}" class="btn btn-view-details px-4">
                            View Details
                        </a>
                    </div>
                </div>
            </div>

            <!-- Karimun -->
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column" 
                style="background-image: url('frontend/images/pupular-4@2x.jpg');">
                    <div class="travel-country">INDONESIA</div>
                    <div class="travel-location">KARIMUN,JAYA</div>
                    <div class="travel-button mt-auto">
                        <a href="{{ route('detail') }}" class="btn btn-view-details px-4">
                            View Details
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- section-network -->
<section class="section-network" id="network">
    <div class="container">
        <div class="row">
            <div class="col-md-4 \">
                <h2>Our Networks</h2>
                <p>Companies are trust us
                    <br>
                    more than just a trip</p>
            </div>
            <div class="col-md-8 text-center ">
                <img src="frontend/images/Group 19.png" alt="Logo Partner" class="img-partner" />
            </div>
        </div>
    </div>
</section>

<!-- Testimonial heading -->
<section class="section-testimonial-heading" id="testimonialHeading">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2>They Are Loving US</h2>
                <p>Moment we are giving them
                    <br>
                    the best experience</p>
            </div>
        </div>
    </div>
</section>

<!-- testimonial content -->
<section class="section-testimonial-content">
    <div class="container"> 
        <div class="section-popular-travel row justify-content-lg-center">
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-testimonial text-center">
                    <div class="testimonial-content">
                        <img src="frontend/images/user_pic.png" alt="User"
                        class=" mb-4 rounded-circle">
                        <h3 class="mb-4">Hari Darmawan</h3>
                        <p class="Testimonial">"It was glorious and I could 
                            not stop to say wohooo for 
                            every single moment
                            Dankeeeeee"</p>
                    </div>
                    <hr>
                    <p class="trip-to mt-2">
                        Trip to Ubud
                    </p>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-testimonial text-center">
                    <div class="testimonial-content">
                        <img src="frontend/images/user_pic.png" alt="User"
                        class=" mb-4 rounded-circle">
                        <h3 class="mb-4">Hari Darmawan</h3>
                        <p class="Testimonial">"It was glorious and I could 
                            not stop to say wohooo for 
                            every single moment
                            Dankeeeeee"</p>
                    </div>
                    <hr>
                    <p class="trip-to mt-2">
                        Trip to Ubud
                    </p>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-testimonial text-center">
                    <div class="testimonial-content">
                        <img src="frontend/images/user_pic.png" alt="User"
                        class=" mb-4 rounded-circle">
                        <h3 class="mb-4">Hari Darmawan</h3>
                        <p class="Testimonial">"It was glorious and I could 
                            not stop to say wohooo for 
                            every single moment
                            Dankeeeeee"</p>
                    </div>
                    <hr>
                    <p class="trip-to mt-2">
                        Trip to Ubud
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                    I Need Help
                </a>
                <a href="" class="btn btn-get-started px-4 mt-4 mx-1">
                    Get Started
                </a>
            </div>
        </div>
    </div>
</section>

</main>
@endsection