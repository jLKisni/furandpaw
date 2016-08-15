@extends('layouts.main')

@section('title', 'Item')

@push('head-css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/thumbnail.css') }}">
<link rel="stylesheet" href="{{ asset('css/fontawesome-stars.css') }}">
@endpush

@section('content')
    <div class="header-container">
        <div class="header-content">
            <div class="header-left">
                <h1>My Item</h1>
            </div>
            <div class="header-right">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.html">Item</a></li>
                    <li class="active">My Item</li>
                </ol>
            </div>
        </div>
    </div><!-- end of header container -->

    <div class="content-wrap clearfix">
        <div class="section-content clearfix">
            <div class="content-left">
                <div class="items-thumbnail-border">
                    <div class="items-thumbnail">
                        <div class="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="img/carousel/carousel.jpg" alt="...">
                                </div>
                                <div class="item">
                                    <img src="img/carousel/carousel2.jpg" alt="...">
                                </div>
                                <div class="item">
                                    <img src="img/carousel/carousel3.jpg" alt="...">
                                </div>
                                <div class="item">
                                    <img src="img/carousel/carousel4.jpg" alt="...">
                                </div>
                            </div>
                            <a class="left carousel-control" href=".carousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href=".carousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <!--end of thumbnail-->
                </div>
                <!--end border thumbnail-->

                <div class="bs-example bs-example-tabs" data-example-id=togglable-tabs>
                    <ul id=myTabs class="nav nav-tabs" role=tablist>
                        <li role=presentation class=active>
                            <a href=#desc id=desc-tab role=tab data-toggle=tab aria-controls=home aria-expanded=true>Description</a>
                        </li>
                        <li role=presentation>
                            <a href=#reviews role=tab id=reviews-tab data-toggle=tab aria-controls=profile>Reviews (2)</a>
                        </li>
                    </ul>
                    <div id=myTabContent class=tab-content style="padding:30px 20px; border: 1px solid #e7e7e7">
                        <div role=tabpanel class="tab-pane fade in active" id=desc aria-labelledby=desc-tab>
                            <h3 style="font-weight:700">Product Description</h3>
                            <br>

                            <p><span class="fa fa-check-circle-o blue"></span> Selling my fucking pets nga batig nawng
                            </p>

                            <p><span class="fa fa-check-circle-o blue"></span> No defects kay gi tangkal</p>

                            <p>
                                <span class="fa fa-check-circle-o blue"></span> Naay bun-i sa lubot gamay pero butangi lang ug salicylic acid
                            </p>

                            <p><span class="fa fa-check-circle-o blue"></span> 3 months old with papers</p>

                            <p><span class="fa fa-check-circle-o blue"></span> Negotiable pani contact me or pm:D</p>
                            <hr>
                            <h4>Document photos</h4>
                            <br>

                            <div class="thumbnails">
                                <img src="img/thumbnail/karen.jpg"/>
                                <img src="img/thumbnail/zetta.jpg"/>
                                <img src="img/thumbnail/lyndon.jpg"/>
                                <img src="img/thumbnail/default-image.png"/>
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
                                            <img src="img/thumbnail/default-image.png" class="avatar">

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
                                    </li>
                                    <!--end of first comment-->
                                    <li>
                                        <div class="comment-16">
                                            <img src="img/thumbnail/zetta.jpg" class="avatar">

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
                                    </li>
                                    <!--end of first comment-->
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                            <div>
                                <h4>Add Review</h4>
                                <br>

                                <p>Your email address will not be published. Required fields are marked
                                    <span style="color:red">*</span></p>

                                <p class="comment-form-rating">
                                    <label for="">Your Rating</label>

                                <div class="comment-star-rating">
                                    <select class="star">
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
                                <center>
                                    <button class="button-search hvr-pulse">Submit Message</button>
                                </center>
                                <div class="clearfix"></div>
                                </p>
                            </div>
                        </div>
                        <!--for reviews-->
                    </div>
                </div>
            </div>
            <!-- dir-form -->
            <div class="widget-right-details">
                <div class="widget-navbar">
                    39 Views
                </div>
                <div class="widget-content">
                    <div class="widget-price">
                        <span class="fa fa-money fa-lg" style="padding-right:3px;"></span> Price: ₱ 1,000
                    </div>
                    <hr>
                    <div class="widget-number">
                        <span class="fa fa-mobile fa-2x" style="padding-right:8px;"> </span> Contact no: 09123456789
                    </div>
                    <hr>
                    <div class="widget-number">
                        <span class="fa fa-clock-o fa-lg" style="padding-right:8px;"> </span> Posted: 21 hours ago
                    </div>
                    <hr>
                    <textarea name="" id="" cols="2" rows="3" class="form-control" placeholder="Send your message here....."></textarea>
                    <br>
                    <center>
                        <button class="button-submit hvr-pulse-shrink" onclick="bookmarks()">Send Message</button>
                    </center>
                </div>
            </div>
            <div class="widget-right-details" style="margin-top:20px;">
                <div class="widget-navbar">Member Details</div>
                <div class="widget-content">
                    <div class="item-avatar">
                        <a href="#">
                            <img src="img/thumbnail/lyndon.jpg" alt="...">
                        </a>
                    </div>
                    <div class="custom-item">
                        <div class="item-title">
                            <a href="#">John Louise Berdida</a>
                        </div>
                        <div class="item-meta">
                            <span class="fa fa-clock-o"></span> Posted 21 hours ago
                            <br>
                            <span class="fa fa-map-marker" style="padding:0 2px"> </span> Cebu City
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end of content-wrap-->
@endsection

@push('body-bottom-scripts')
<script type="text/javascript" src="{{ asset('js/jquery.barrating.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/custom-elevate.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/custom-tooltip.js') }}"></script>
<script>
    $(function () {
        $('.star').barrating({
            theme: 'fontawesome-stars',
        });
    });
</script>
@endpush
