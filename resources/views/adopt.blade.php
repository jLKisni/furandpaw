@extends('layouts.main')

@section('title', 'Adopt')

@push('head-css')
<link rel="stylesheet" type="text/css" href="css/thumbnail.css">
@endpush

@section('content')
    <div class="header-container">
        <div class="header-content">
            <div class="header-left">
                <h1>Adoption</h1>
            </div>
            <div class="header-right">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">All post</a></li>
                    <li class="active">Adoption</li>
                </ol>
            </div>
        </div>
    </div><!-- end of header container -->
    <div class="content-wrap">
        <div class="section-content">
            <div class="isotype_filters">
                <a href="#" class="active">All <span class="data-count">12</span></a>
                <a href="#">Dogs <span class="data-count">3</span></a>
                <a href="#">Cats <span class="data-count">4</span></a>
                <a href="#">Adoption <span class="data-count">3</span></a>
                <a href="#">Vet Clinics <span class="data-count">2</span></a>
            </div>
            <div class="thumbnail-container">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="img/thumbnail/zetta.jpg" alt="zetta">

                            <div class="caption">
                                <a href=""><h3>Zetta</h3></a>
                                <br>

                                <p>Age: 2 years 1 months</p>

                                <p>Breed: Domestic Longhair/Mix</p>

                                <p>Sex : Male</p>

                                <p>Color : Gray</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="img/thumbnail/karen.jpg" alt="karen">

                            <div class="caption">
                                <a href=""><h3>Karen</h3></a>
                                <br>

                                <p>Age: 5 years 11 months</p>

                                <p>Breed: Domestic Longhair/Mix</p>

                                <p>Sex: Male</p>

                                <p>Color: Gray</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="img/thumbnail/lyndon.jpg" alt="lyndon">

                            <div class="caption">
                                <a href=""><h3>Lyndon</h3></a>
                                <br>

                                <p>Age: 2 years 1 months</p>

                                <p>Breed: Domestic Longhair/Mix</p>

                                <p>Sex: Male</p>

                                <p>Color: Gray</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of first row -->


                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="img/thumbnail/zetta.jpg" alt="zetta">

                            <div class="caption">
                                <a href=""><h3>Zetta</h3></a>
                                <br>

                                <p>Age: 2 years 1 months</p>

                                <p>Breed: Domestic Longhair/Mix</p>

                                <p>Sex : Male</p>

                                <p>Color : Gray</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="img/thumbnail/karen.jpg" alt="karen">

                            <div class="caption">
                                <a href=""><h3>Karen</h3></a>
                                <br>

                                <p>Age: 5 years 11 months</p>

                                <p>Breed: Domestic Longhair/Mix</p>

                                <p>Sex: Male</p>

                                <p>Color: Gray</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="img/thumbnail/lyndon.jpg" alt="lyndon">

                            <div class="caption">
                                <a href=""><h3>Lyndon</h3></a>
                                <br>

                                <p>Age: 2 years 1 months</p>

                                <p>Breed: Domestic Longhair/Mix</p>

                                <p>Sex: Male</p>

                                <p>Color: Gray</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of second row -->
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