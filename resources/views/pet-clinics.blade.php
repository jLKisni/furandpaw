@extends('layouts.main')

@section('title', 'Pet-clinics')

@push('head-css')
<link rel="stylesheet" type="text/css" href="css/thumbnail.css">
@endpush

@section('content')
<div class="content-wrap">

<div class="section-content">

    <div class="isotype_filters">
        <a href="#" class="active">All <span class="data-count">12</span></a>
        <a href="#">Pet Shops <span class="data-count">3</span></a>
        <a href="#">Vet Clinics <span class="data-count">2</span></a  >
    </div>

    <div class="thumbnail-container">
        <div class="row">

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">

                    <img src="img/VetClinics/CVD.jpg" alt="zetta">



                    <div class="caption">
                        <a href="{{ url('clinics-profile') }}"><h3>Cebu Veterinary Doctors</h3></a>
                        <br>
                        <p>Veterinarians And Pet Store</p>
                        <p></p>
                        <p>Location : Cebu City</p>
                        <p>Contact no. : 123-4567</p>

                    </div>

                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="img/VetClinics/CVD.jpg" alt="zetta">



                    <div class="caption">
                        <a href="{{ url('clinics-profile') }}"><h3>Cebu Veterinary Doctors</h3></a>
                        <br>
                        <p>Veterinarians And Pet Store</p>
                        <p></p>
                        <p>Location : Cebu City</p>
                        <p>Contact no. : 123-4567</p>

                    </div>

                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">

                    <img src="img/VetClinics/CVD.jpg" alt="zetta">



                    <div class="caption">
                        <a href="{{ url('clinics-profile') }}l"><h3>Cebu Veterinary Doctors</h3></a>
                        <br>
                        <p>Veterinarians And Pet Store</p>
                        <p></p>
                        <p>Location : Cebu City</p>
                        <p>Contact no. : 123-4567</p>

                    </div>

                </div>
            </div>
        </div><!-- end of first row -->


        <div class="row">

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">

                    <img src="img/VetClinics/CVD.jpg" alt="zetta">



                    <div class="caption">
                        <a href="{{ url('clinics-profile') }}"><h3>Cebu Veterinary Doctors</h3></a>
                        <br>
                        <p>Veterinarians And Pet Store</p>
                        <p></p>
                        <p>Location : Cebu City</p>
                        <p>Contact no. : 123-4567</p>

                    </div>

                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">

                    <img src="img/VetClinics/CVD.jpg" alt="zetta">



                    <div class="caption">
                        <a href="{{ url('clinics-profile') }}"><h3>Cebu Veterinary Doctors</h3></a>
                        <br>
                        <p>Veterinarians And Pet Store</p>
                        <p></p>
                        <p>Location : Cebu City</p>
                        <p>Contact no. : 123-4567</p>

                    </div>

                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">

                    <img src="img/VetClinics/CVD.jpg" alt="zetta">



                    <div class="caption">
                        <a href="{{ url('clinics-profile') }}"><h3>Cebu Veterinary Doctors</h3></a>
                        <br>
                        <p>Veterinarians And Pet Store</p>
                        <p></p>
                        <p>Location : Cebu City</p>
                        <p>Contact no. : 123-4567</p>

                    </div>

                </div>
            </div>
        </div><!-- end of second row -->



        <nav>
            <ul class="pager">
                <li><a href="#">Previous</a></li>
                <li><a href="#">Next</a></li>
            </ul>
        </nav>

    </div>
</div>

</div>
@endsection

@push('body-bottom-scripts')
<script type="text/javascript" src="js/custom-tooltip.js"></script>
@endpush
