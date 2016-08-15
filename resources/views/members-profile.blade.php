@extends('layouts.main')

@section('title', 'Members-Profile')

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
                          <a href="#" id="header-cover-image"><img src="img/thumbnail/timeline.jpg"></a>
                          <div id="item-header-cover-image">
                              <div id="item-header-avatar">
                                  <a href="#" ><img src="img/thumbnail/john.jpg" class="avatar avatar-150 photo"/></a>
                              </div>

                              <div id="item-header-content">
                                  <h2 class="user-nicename">John Louise Berdida</h2>
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
                              <li id="activity-personal-li" class="current select">
                                  <a href="#" id="user-activity">Activity</a>
                              </li>
                              <li id="xprofile-personal-li" class="current">
                                  <a id="user-xprofile" href="#">Profile</a>
                              </li>
                              <li id="friends-personal-li" class="current">
                                  <a id="user-friends" href="#">Friends <span class="count">1</span></a>
                              </li>
                              <li id="groups-personal-li" class="current">
                                  <a id="user-groups" href="#">Groups <span class="count">4</span></a>
                              </li>
                          </ul>
                      </div>
                  </div><!--item-nav-->

                  <div id="item-body">
                          <div><a href="#">Personal</a></div>
                          <div><a href="#">Mentions</a></div>
                          <div><a href="#">Favorites</a></div>
                          <div><a href="#">Friends</a></div>
                          <div style="width:400px"><span style="padding-right: 10px;">Show: </span>
                              <select>
                                  <option>--Everything--</option>
                                  <option>Posts</option>
                                  <option>Friendships</option>
                                  <option>Comments</option>
                                  <option>Updates</option>
                              </select>
                          </div>
                  </div>
                  <div class="clearfix"></div>


              </div>
          </section>
          <hr>
          <br>
          <ol class="commentlist">
              <li class="profile-border">
                  <div class="comment-16">
                      <img src="img/thumbnail/john.jpg" class="avatar">

                      <div class="comment-text">


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
           </ol>

      </article>



      </div>


      <div class="widget-right">
          <aside class="widget">
              <h5 class="widget_title">
                  Search Members
              </h5>

              <form class="standard-form">
                  <div>
                      <label>Name</label>
                      <input type="text"/>
                  </div>
                  <div>
                      <label>Age</label>
                      <input type="text"/>
                  </div>
                  <div>
                      <label>Pet Breed</label>
                      <select>
                          <option>--Select Breed--</option>
                          <option>German Shepherd</option>
                          <option>Askal</option>
                          <option>Pussy</option>
                          <option>lang mananap</option>
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
<script>
    $(function () {
        $('.star').barrating({
            theme: 'fontawesome-stars',
        });
    });
</script>
@endpush
