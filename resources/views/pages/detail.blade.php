@extends('layout.app')

@section('title','Data Travel')

@section('content')
<!-- content -->
<main>
    <div class="section-details-header">
    </div>

        <div class="section-details-content">
            <div class="container">
                <div class="row">
                    <!-- breadcrumb -->
                    <div class="col">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">    
                                    Paket Travel
                                </li>
                                <li class="breadcrumb-item active">
                                    Details
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card card-details">
                            <h1>Nusa Penida</h1>
                            <p>Republic of Indonesia Raya</p>
                            <div class="gallery">
                                <div class="xzoom-container">
                                    <img src="frontend/images/Mask Group 3.jpg" class="xzoom" 
                                    id="xzoom-default" xoriginal="frontend/images/Mask Group 3.jpg">
                                
                                    <div class="xzoom-thumbs">
                                        <a href="frontend/images/Mask Group 3.jpg">
                                            <img src="frontend/images/Mask Group 3.jpg"
                                            class="xzoom-gallery" width="126" 
                                            xpreview="frontend/images/Mask Group 3.jpg">
                                        </a>

                                        <a href="frontend/images/Mask Group 3.jpg">
                                            <img src="frontend/images/Mask Group 3.jpg"
                                            class="xzoom-gallery" width="126" 
                                            xpreview="frontend/images/Mask Group 3.jpg">
                                        </a>

                                        <a href="frontend/images/Mask Group 3.jpg">
                                            <img src="frontend/images/Mask Group 3.jpg"
                                            class="xzoom-gallery" width="126" 
                                            xpreview="frontend/images/Mask Group 3.jpg">
                                        </a>

                                        <a href="frontend/images/Mask Group 3.jpg">
                                            <img src="frontend/images/Mask Group 3.jpg"
                                            class="xzoom-gallery" width="126" 
                                            xpreview="frontend/images/Mask Group 3.jpg">
                                        </a>

                                        <a href="frontend/images/Mask Group 3.jpg">
                                            <img src="frontend/images/Mask Group 3.jpg"
                                            class="xzoom-gallery" width="126" 
                                            xpreview="frontend/images/Mask Group 3.jpg">
                                        </a>
                                    </div>

                                    
                                </div>
                                
                            </div>

                        
                        <h2>Tentang Wisata</h2>
                        <p> Nusa Penida adalah sebuah pulau (=nusa) bagian dari negara Republik Indonesia yang
                            terletak di sebelah tenggara Bali yang dipisahkan oleh Selat Badung. Di dekat pulau ini
                            terdapat juga pulau-pulau kecil lainnya yaitu Nusa Ceningan dan Nusa Lembongan.
                            Perairan pulau Nusa Penida
                        </p>
                        <p>Nusa Penida adalah sebuah pulau (=nusa) bagian dari negara Republik Indonesia yang
                           terletak di sebelah tenggara Bali yang dipisahkan oleh Selat Badung. 
                        </p>

                        <div class="features row">
                            <div class="col-md-4">
                                <img src="frontend/images/ic_event.png"
                                     class="features-image"/>
                                <div class="description">
                                    <h3>Featured Event</h3>
                                    <p>Tari Kecak</p>
                                </div>

                            </div>
                            <div class="col-md-4 border-left">
                                <img src="frontend/images/ic_bahasa.png"
                                     class="features-image"/>
                                <div class="description">
                                    <h3>Language</h3>
                                    <p>Bahasa Indonesia</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <img src="frontend/images/ic_foods.png"
                                     class="features-image"/>
                                <div class="description">
                                    <h3>Foods</h3>
                                    <p>Local Foods</p>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2>Members are Going</h2>
                            <div class="members my-2">
                                <img src="frontend/images/usergoing.png" class="member-image">
                                <img src="frontend/images/usergoing.png" class="member-image">
                                <img src="frontend/images/usergoing.png" class="member-image">
                                <img src="frontend/images/usergoing.png" class="member-image">
                                <img src="frontend/images/usergoing.png" class="member-image">
                            </div>
                            <hr>
                            <h2>Trip Information</h2>
                            <table class="trip-information">
                                <tr>
                                    <th width="50%">Date of Departure</th>
                                    <td width="50%" class="text-right">22 Aug, 2019</td>
                                </tr>
                                <tr>
                                    <th width="50%">Duration</th>
                                    <td width="50%" class="text-right">4D,3N</td>
                                </tr>
                                <tr>
                                    <th width="50%">Type of trip</th>
                                    <td width="50%" class="text-right">Open Trip</td>
                                </tr>
                                <tr>
                                    <th width="50%">Price</th>
                                    <td width="50%" class="text-right">$80.00/Person</td>
                                </tr>
                            </table>
                            
                        </div>
                                <div class="join-container">
                                    <a href="{{ route('checkout') }}" class="btn btn-block btn-join-now mt-3">Join Now</a>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    
</main>
    
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="frontend/libraries/xzoom/xzoom.css">
@endpush

@push('addon-script')
    <script src="frontend/libraries/xzoom/xzoom.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".xzoom, .xzoom-gallery").xzoom({
                zoomWidth: 500,
                title: false,
                tint: '#333',
                Xoffset:15
            });
        }); 
    </script>
    
@endpush
    