@extends('layouts.clinics')

@section('title', 'About')
@push('head-scripts')


@push('head-css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/thumbnail.css') }}">
<link rel="stylesheet" href="{{ asset('css/fontawesome-stars.css') }}">
@endpush

@section('content')
<div class="content-wrap clearfix">

    <div class="section-content clearfix">

        <div class="content-left">

            <article>
                <section>
                    <div id="buddypress">
                        <div id="item-header">
                            <div id="cover-image-container">
                                <a href="#" id="header-cover-image"><img src=""></a>
                                <div id="item-header-cover-image">
                                    <div id="item-header-avatar">
                                        <a href="#" ><img src="" class="avatar avatar-150 photo"/></a>
                                    </div>

                                    <div id="item-header-content">
                                        <h2 class="user-nicename">Cebu Veterinary Doctors</h2>
                                        <div id="item-buttons"></div>
                                        <span class="activity">active 1 day, 20 hours ago</span>
                                        <div id="item-meta">
                                            <div id="latest-update"></div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div> <!--item-header-->

                        <div id="item-nav">
                            <div class="item-list-tabs no-ajax" id="objectnav" role="navigation">
                                <ul>
                                    <li id="activity-personal-li">
                                        <a href="{{ url('vetshops/') }}" id="user-activity">Profile</a>
                                    </li>
                                    <li id="xprofile-personal-li" class="current select">
                                        <a id="user-xprofile" href="{{ url('/vetshops/profile-about') }}">About</a>
                                    </li>
                                    <li id="friends-personal-li" class="current">
                                        <a id="user-friends" href="{{ url('/vetshops/profile-viewpost') }}">Post <span class="count">(1)</span></a>
                                    </li>
                                    <li id="groups-personal-li" class="current">
                                        <a id="user-groups" href="#">Settings</a>
                                    </li>
                                </ul>
                            </div>
                        </div><!--item-nav-->

                        <div class="clearfix"></div>
                        <hr>

                        <div class="bs-example bs-example-tabs" data-example-id=togglable-tabs>
                            <ul id=myTabs class="nav nav-tabs" role=tablist>
                                <li role=presentation class=active> <a href=#desc id=desc-tab role=tab data-toggle=tab aria-controls=home aria-expanded=true>Overview</a> </li>
                                <li role=presentation> <a href=#reviews role=tab id=reviews-tab data-toggle=tab aria-controls=profile>Reviews(2)</a> </li>
                            </ul>
                            <div id=myTabContent class=tab-content style="padding:30px 20px; border: 1px solid #e7e7e7">
                                <div role=tabpanel class="tab-pane fade in active" id=desc aria-labelledby=desc-tab>
                                    <h3 style="font-weight:700" class="pull-left" id="clinic-title">Clinic Schedule</h3>
                                    <!--Edit Schedule-->
                                    <ul>
                                        <li id="save-schedule" hidden><a class="pull-right" style="margin:20px 10px 0 0;"><i class="fa fa-floppy-o"> Save</i></a></li>
                                        <li id="edit-schedule"><a class="pull-right" style="margin:20px 10px 0 0;"><i class="fa fa-pencil"> Edit</i></a></li>
                                    </ul>

                                    <div class="clearfix"></div>
                                    <input type="hidden" class="form-control" style="width:35%" placeholder="Enter some title here.." id="edit-clinic-title"/>
                                    <br>

                                    <div id="edit-clinic-schedule" hidden>
                                        <textarea rows="5" class="form-control" placeholder="Some description here...."></textarea>
                                    </div>
                                    <div id="clinic-schedule">
                                        <p> The clinic offers low-cost services and is open to the public and indigent pet owners on Mondays, Tuesdays, Thursdays, Fridays and Saturdays at 1:30 - 3:00 PM. Contact: 09123456789</p>
                                    </div>
                                    <br>
                                    <!--Edit Rates-->
                                    <ul>
                                        <li id="save-rates" hidden><a class="pull-right" style="margin:20px 10px 0 0;"><i class="fa fa-floppy-o"> Save</i></a></li>
                                        <li id="edit-rates"><a class="pull-right" style="margin:20px 10px 0 0;"><i class="fa fa-pencil"> Edit</i></a></li>
                                    </ul>

                                    <h3 class="rate-title-header"style="font-weight:700">Clinic Rates</h3>

                                    <input type="hidden" class="form-control" style="width:35%" placeholder="Enter some title here.." id="rate-title-header"/>
                                    <br>
                                    <input type="hidden" class="form-control" style="width:35%" placeholder="Title description.." id="rate-title"/>
                                    <p class="rate-title">Spay & Neuter</p>
                                    <input type="hidden" class="form-control" style="width:35%;margin-top:5px;" placeholder="description 1.." id="rate-desc1"/>
                                    <input type="hidden" class="form-control" style="width:35%;margin-top:5px;" placeholder="description 2.." id="rate-desc2"/>
                                    <input type="hidden" class="form-control" style="width:35%;margin-top:5px;" placeholder="description 3.." id="rate-desc3"/>
                                    <input type="hidden" class="form-control" style="width:35%;margin-top:5px;" placeholder="description 4.." id="rate-desc4"/>


                                    <p class="rate-desc"><span class="fa fa-check-circle-o blue"></span>  Female cat : 1,000.00</p>
                                    <p class="rate-desc"><span class="fa fa-check-circle-o blue"></span> Female dog : 1,500   .00 (additional P500 for every 10 kg in excess of 15 kg bodyweight)</p>
                                    <p class="rate-desc"><span class="fa fa-check-circle-o blue"></span>  Male cat: 700.00</p>
                                    <p class="rate-desc"><span class="fa fa-check-circle-o blue"></span> Male dog : 1,000.00 (additional P500 for every 10 kg in excess of 15 kg body weight)</p>
                                    <br>
                                    <div class="clearfix"></div>
                                    <!--Edit Service-->
                                    <ul>
                                        <li id="save-service" hidden><a class="pull-right" style="margin:10px 10px 0 0;"><i class="fa fa-floppy-o"> Save</i></a></li>
                                        <li id="edit-service"><a class="pull-right" style="margin:10px 10px 0 0;"><i class="fa fa-pencil"> Edit</i></a></li>
                                    </ul>
                                    <h4 class="service-title">Services Offered</h4>
                                    <input type="hidden" class="form-control" style="width:35%" placeholder="Enter some title here.." id="service-title"/>


                                    <div id="service-desc" hidden>
                                        <br>
                                        <textarea rows="5" class="form-control" placeholder="Some description here...."></textarea>
                                    </div>
                                    <p class="service-desc">+24 hours on emergency cases,
                                    Shuttle & Pet Ambulance,
                                    Grooming,
                                    Consultation,
                                    laboratory,
                                    x-ray,
                                    ultrasound,
                                    ECG,
                                    Surgery,
                                    dental care,
                                    boarding,
                                    confinement,
                                    pet pharmacy,
                                    pet accessories,
                                    grooming,
                                    animal health products,
                                    Cat Clinic.
                                    </p>
                                    <hr>

                                    <div class="clearfix"></div>
                                    <!--Edit Service-->
                                    <ul>
                                        <li id="save-location" hidden><a class="pull-right" style="margin:10px 10px 0 0;"><i class="fa fa-floppy-o"> Save</i></a></li>
                                        <li id="edit-location"><a class="pull-right" style="margin:10px 10px 0 0;"><i class="fa fa-pencil"> Edit</i></a></li>
                                    </ul>
                                    <h4>Location</h4>
                                    <div id="location" hidden>
                                        <br>
                                        <input type="text" class="form-control" style="width:35%" id="location-value" placeholder="Put some location.."/>
                                    </div>
                                    <div style="text-decoration:none; overflow:hidden; height:300px; max-width:100%; margin-top:5px;">
                                        <div id="embed-map-canvas" style="height:100%; width:100%;max-width:100%;">
                                            <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Cebu+Veterinary+Doctor+Ramos+Cebu+City&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU" id="location-frame"></iframe>
                                        </div>
                                    </div>

                                </div>
                                <div class="clearfix"></div>
                                <!--for description-->
                                <div role=tabpanel class="tab-pane fade" id=reviews aria-labelledby=reviews-tab>
                                    <div class="reviews-content">
                                        <h3 style="font-weight:300">(2) Review for this item</h3>
                                        <br>
                                        <ol class="commentlist">
                                            <li>
                                                <div class="comment-16">
                                                    <img src="{{ asset("img/thumbnail/default-image.png")}}" class="avatar">

                                                    <div class="comment-text">
                                                        <div class="star-rating">
                                                            <select class="star" id="star1">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>

                                                        <p class="meta">
                                                            <strong>John Louise Berdida</strong>
                                                            -
                                                            <time>Posted: 1 Hour ago:</time>
                                                        </p>
                                                        <div class="description">
                                                            Batiag nawng ana imong pets oie . .Bdw interesting ko nga mopalit ana niya kay ipakaon nako sa akong binuhi nga dragon
                                                            mo ask lang ta ko kung dili bana matakdan sa bun.i akong dragon nig kaon ana niya kay gi bun.i raba na imong pets or
                                                            tambalan lang sa nako na ang lubot ana imong pets usa akong ipakaon ?
                                                        </div>
                                                    </div>
                                                </div>

                                            </li> <!--end of first comment-->

                                            <li>
                                                <div class="comment-16">
                                                    <img src="{{ asset("img/thumbnail/zetta.jpg") }}" class="avatar">

                                                    <div class="comment-text">
                                                        <div class="star-rating">
                                                            <select class="star">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>

                                                        <p class="meta">
                                                            <strong>Pet ni John</strong>
                                                            -
                                                            <time> Posted 32 minutes ago</time>
                                                        </p>
                                                        <div class="description">
                                                            Ka hinawayon ba nimong animala ka matay paka mura kag gwapo da . . tseee ayaw nalang mi palita pak u nimo ./.
                                                        </div>
                                                    </div>
                                                </div>

                                            </li> <!--end of first comment-->
                                        </ol>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div>
                                        <h4>Add Review</h4>
                                        <br>
                                        <p>Your email address will not be published. Required fields are marked <span style="color:red">*</span></p>
                                        <p class="comment-form-rating">
                                            <label for="ratings">Your Rating</label>
                                        <div class="comment-star-rating">
                                            <select class="star" id="ratings">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="clearfix"></div>
                                        <hr>
                                        <textarea name="" cols="10" rows="6" class="form-control" placeholder="Send your message here....."></textarea>
                                        <br>
                                        <div class="review-input">

                                            <div class="review-label">
                                                <label>Name: <span style="color:red">*</span></label>
                                            </div>

                                            <div class="review-inputs">
                                                <input type="text" placeholder="Your name here..."/>
                                            </div>

                                            <div class="review-label">
                                                <label>Email: <span style="color:red">*</span></label>
                                            </div>

                                            <div class="review-inputs">
                                                <input type="text" placeholder="John Doe@yahoo.com"/>
                                            </div>

                                        </div>
                                        <div class="clearfix"></div>
                                        <br>
                                        <center><button class="button-search hvr-pulse">Submit Message</button></center>
                                        <div class="clearfix"></div>
                                        </p>
                                    </div>


                                </div>
                                <!--for reviews-->
                            </div>
                        </div>



                        <div class="clearfix"></div>


                    </div>
                </section>
                <hr>

            </article>



        </div>


        <div class="widget-right">
            <aside class="widget">
                <h5 class="widget_title">
                    Search Shops or Clinics
                </h5>

                <form class="standard-form">
                    <div>
                        <label>Name</label>
                        <input type="text"/>
                    </div>
                    <div>
                        <label>Location</label>
                        <input type="text"/>
                    </div>
                    <div>
                        <label>Type</label>
                        <select>
                            <option>Vet Clinics</option>
                            <option>Pet Shops</option>

                        </select>
                    </div>
                    <div class="submit">
                        <button class="button-search hvr-pulse">SEARCH</button>
                    </div>
                </form>

            </aside>

        </div>

    </div>
</div> <!--content-wrap-->

@endsection
@push('body-bottom-scripts')
<script type="text/javascript" src="{{ asset('js/jquery.barrating.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/custom-elevate.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/custom-tooltip.js') }}"></script>
<script src="{{ asset("js/clinics-about-input.js") }}"></script><!--About Clinics Editing-->
<script>
    $(function () {
        $('.star').barrating({
            theme: 'fontawesome-stars',
        });
    });
</script>
@endpush
