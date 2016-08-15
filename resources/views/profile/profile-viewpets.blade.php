@extends('layouts.profile')

@section('title', 'View Pets')


@section('content')
<div class="content-wrap clearfix">

  <div class="section-content clearfix">

      <div class="content-left">

          <article>
              <section>
                  <div id="buddypress">
                      <div id="item-header">
                          <div id="cover-image-container">
                              <a href="#" id="header-cover-image"><img src="../img/thumbnail/timeline.jpg"></a>
                              <div id="item-header-cover-image">
                                  <div id="item-header-avatar">
                                      <a href="#" ><img src="../img/thumbnail/john.jpg" class="avatar avatar-150 photo"/></a>
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
                                  <li id="activity-personal-li" class="current">
                                      <a href="{{ url('/profile/profile-activity') }}" id="user-activity">Activity</a>
                                  </li>
                                  <li id="xprofile-personal-li" class="current select">
                                      <a id="user-xprofile" href="{{ url('/profile/profile-edit') }}">Profile</a>
                                  </li>
                                  <li id="friends-personal-li" class="current">
                                      <a id="user-friends" href="#">Friends <span class="count">1</span></a>
                                  </li>
                                  <li id="groups-personal-li" class="current">
                                      <a id="user-groups" href="{{ url('/profile/profile-settings') }}">Settings</a>
                                  </li>
                              </ul>
                          </div>
                      </div><!--item-nav-->

                      <div id="item-body">

                        <div ><a href="{{ url('/profile/profile-edit') }}">Edit</a></div>
                        <div><a href="{{ url('/profile/profile-viewpets') }}" class="current-selected">View Pets</a></div>
                        <div><a href="{{ url('/profile/profile-changephoto') }}">Change Profile Photo</a></div>
                        <div><a href="{{ url('/profile/profile-changecover') }}">Change Cover Image</a></div>
                          <h3>List of Pets</h3>
                          <p>Your Pets will be visible for this site. </p>

                      </div>

                      <div class="clearfix"></div>
                      <br><br>
                      <a href="{{ url('/profile/profile-addpets') }}" class="btn-comment">Add Pets</a>
                      <span style="margin-left:10px;">
                      <a href="{{ url('/profile/profile-sellpets') }}" class="btn-comment">Sell Pets or Accessories</a>
                      </span>
                      <br>
                      <div class="clearfix"></div>

                      <div class="item-list-tabs clearfix">
                          <div class="custom-pagination">
                              Viewing 1 - 6 of 10 Results
                          </div>


                          <div class="pagination-links">
                              <a class="current">1</a>
                              <a class="page-numbers" href="#">2</a>
                              <a class="page-numbers" href="#">
                                  <span class="fa fa-long-arrow-right"></span>
                              </a>
                          </div>

                      </div>



                      <ul class="items-list">
                          <div class="alert alert-warning" role="alert" hidden>Sorry,no Pets were found.</div>
                          <li class="odd">
                              <div class="item-thumbnail pull-left">
                                  <a href="{{ url('/profile/profile-petprofile') }}">
                                      <img src="../img/thumbnail/lyndon.jpg" alt="...">
                                  </a>
                              </div>

                              <div class="custom-item">
                                  <div class="item-title">
                                      <a href="{{ url('/profile/profile-petprofile') }}">Zetta</a>
                                  </div>

                                  <div class="item-meta">
                                      <span class="activity">Domestic Longhair/Mix</span>
                                  </div>

                                  <div class="item-meta">
                                      <span class="activity">2 years old</span>
                                  </div>


                                  <div class="item-meta">
                                      <a href="{{ url('/profile/profile-petprofile') }}" style="margin-right:10px">View</a><span><a href="#">Edit</a></span>
                                  </div>

                              </div>

                          </li>

                          <li class="even">

                              <div class="item-thumbnail pull-left">
                                  <a href="{{ url('/profile/profile-petprofile') }}">
                                      <img src="../img/thumbnail/zetta.jpg" alt="...">
                                  </a>
                              </div>

                              <div class="custom-item">
                                  <div class="item-title">
                                      <a href="petprofile.html">Zetta</a>
                                  </div>

                                  <div class="item-meta">
                                      <span class="activity">Domestic Longhair/Mix</span>
                                  </div>

                                  <div class="item-meta">
                                      <span class="activity">2 years old</span>
                                  </div>

                                  <div class="item-meta">
                                      <a href="{{ url('/profile/profile-petprofile') }}" style="margin-right:10px">View</a><span><a href="#">Edit</a></span>
                                  </div>

                              </div>
                          </li>


                          <li class="odd">
                              <div class="item-thumbnail pull-left">
                                  <a href="{{ url('/profile/profile-petprofile') }}">
                                      <img src="../img/thumbnail/default-image.png" alt="...">
                                  </a>
                              </div>

                              <div class="custom-item">
                                  <div class="item-title">
                                      <a href="petprofile.html">Zetta</a>
                                  </div>

                                  <div class="item-meta">
                                      <span class="activity">Domestic Longhair/Mix</span>
                                  </div>

                                  <div class="item-meta">
                                      <span class="activity">2 years old</span>
                                  </div>

                                  <div class="item-meta">
                                      <a href="{{ url('/profile/profile-petprofile') }}" style="margin-right:10px">View</a><span><a href="#">Edit</a></span>
                                  </div>

                              </div>

                          </li>

                          <li class="even">

                              <div class="item-thumbnail pull-left">
                                  <a href="{{ url('/profile/profile-petprofile') }}">
                                      <img src="../img/thumbnail/karen.jpg" alt="...">
                                  </a>
                              </div>

                              <div class="custom-item">
                                  <div class="item-title">
                                      <a href="petprofile.html">Zetta</a>
                                  </div>

                                  <div class="item-meta">
                                      <span class="activity">Domestic Longhair/Mix</span>
                                  </div>

                                  <div class="item-meta">
                                      <span class="activity">2 years old</span>
                                  </div>

                                  <div class="item-meta">
                                      <a href="{{ url('/profile/profile-petprofile') }}" style="margin-right:10px">View</a><span><a href="#">Edit</a></span>
                                  </div>

                              </div>
                          </li>

                          <li class="odd">
                              <div class="item-thumbnail pull-left">
                                  <a href="{{ url('/profile/profile-petprofile') }}">
                                      <img src="../img/thumbnail/lyndon.jpg" alt="...">
                                  </a>
                              </div>

                              <div class="custom-item">
                                  <div class="item-title">
                                      <a href="petprofile.html">Zetta</a>
                                  </div>

                                  <div class="item-meta">
                                      <span class="activity">Domestic Longhair/Mix</span>
                                  </div>

                                  <div class="item-meta">
                                      <span class="activity">2 years old</span>
                                  </div>

                                  <div class="item-meta">
                                      <a href="{{ url('/profile/profile-petprofile') }}" style="margin-right:10px">View</a><span><a href="#">Edit</a></span>
                                  </div>

                              </div>

                          </li>

                          <li class="even">

                              <div class="item-thumbnail pull-left">
                                  <a href="{{ url('/profile/profile-petprofile') }}">
                                      <img src="../img/thumbnail/zetta.jpg" alt="...">
                                  </a>
                              </div>

                              <div class="custom-item">
                                  <div class="item-title">
                                      <a href="petprofile.html">Zetta</a>
                                  </div>

                                  <div class="item-meta">
                                      <span class="activity">Domestic Longhair/Mix</span>
                                  </div>

                                  <div class="item-meta">
                                      <span class="activity">2 years old</span>
                                  </div>

                                  <div class="item-meta">
                                      <a href="{{ url('/profile/profile-petprofile') }}" style="margin-right:10px">View</a><span><a href="#">Edit</a></span>
                                  </div>

                              </div>
                          </li>


                      </ul>


                      <div class="item-list-tabs clearfix">
                          <div class="custom-pagination">
                              Viewing 1 - 6 of 10 Results
                          </div>


                          <div class="pagination-links">
                              <a class="current">1</a>
                              <a class="page-numbers" href="#">2</a>
                              <a class="page-numbers" href="#">
                                  <span class="fa fa-long-arrow-right"></span>
                              </a>
                          </div>

                      </div>


                  </div>
              </section>
              <hr>


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
