@extends('layouts.profile')

@section('title', 'Pet Profile')


@section('content')
<div class="content-wrap">

    <div class="section-content" style="width:75%; margin:0 auto;padding:0 40px">
        <article>
            <section class="post_featured">
                <div class="post_nav">
                    <img src="../img/thumbnail/zetta.jpg" alt="Zetta">
                </div>
            </section>

            <h2>Askal Nga Brown</h2>

            <div class="post_info">
                Owner : <span class="post_info_item"><a href="#" class="post_info_author">John Louise Berdida</a></span>
                        <span class="post_info_item post_info_date">October 19,2016</span>
                        <span class="post_info_item"><i class=" fa fa-eye red_color">1</i></span>
                        <span class="post_info_item"><i class="fa fa-comment red_color">0</i></span>
                        <span class="post_info_item"><i class="fa fa-heart red_color">0</i></span>
            </div>

            <section>
                <div class="sc_reviews alignright"><!-- #TRX_REVIEWS_PLACEHOLDER# --></div>
                <p><span style="color:#191e23">Breed:</span> Domestic Longhair/Mix<br>
                    <span style="color:#191e23">Age:</span> 2 years 1 months<br>
                    <span style="color:#191e23">Sex:</span> Male<br>
                    <span style="color:#191e23">Color:</span> White/Brown
                </p>

                <p>Kung kinsa man ang bag.o nga tag.iya ani ampingi ninyog maayu ha pinangga kaayu ko na sama sa akong pag pangga niya. Pero buhian nalang ni nako sama sa pag ingon niya nako nga dili niya kayang suklian akong na feel :( <'/3.
                    Kung gusto nimo ni i adopt you can feel to contact me sama sa akong na feel . kay kbaw ko dili jud ni siya para akoa maong ako nalang ni siyang buhian :(
                </p>
                <p>Kung kinsa man gani tong bag.o nga makatag.iya ani palihug lang kog amping ha. Ayaw intawn pasakiti kay dili lalim ang mahigugmag tarong :( Pero lisod i express kung kbaw ka lisod nga mag kakamo.</p>

                <hr>

                <h3>Comments</h3>
                <ol class="commentlist">
                    <li class="profile-border">
                        <div class="comment-16">
                            <img src="../img/thumbnail/john.jpg" class="avatar">

                            <div class="comment-text">


                                <p class="meta">
                                    <strong>John Louise Berdida</strong>
                                    -
                                    <time>Posted: 4 minutes ago:</time>
                                </p>
                                <div class="description">
                                    <p>Hugot jud ? :D Luoya nalang jud. .HAHA</p>
                                </div>
                            </div>
                        </div>

                    </li> <!--end of first comment-->

                    <li class="profile-border">
                        <div class="comment-16">
                            <img src="../img/thumbnail/zetta.jpg" class="avatar">

                            <div class="comment-text">


                                <p class="meta">
                                    <strong>John Louise Berdida</strong>
                                    -
                                    <time>Posted: 1 hour ago:</time>
                                </p>
                                <div class="description">
                                   <p>How Sad ?</p>
                                </div>
                            </div>
                        </div>

                    </li> <!--end of first comment-->
                </ol>
                <br>
                <hr>
                <h4>Leave a comment</h4>

                <textarea class="form-control" rows="7" cols="10"></textarea>

                <div class="clearfix"></div>
                <br>
                <br>
                <button class="button-search hvr-pulse pull-left">Submit Message</button>


            </section>
        </article>
    </div>

</div>
@endsection
