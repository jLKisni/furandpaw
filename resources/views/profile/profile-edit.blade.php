@extends('layouts.profile')

@section('title', 'Edit-Settings')


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

                          <div ><a href="{{ url('/profile/profile-edit') }}" class="current-selected">Edit</a></div>
                          <div><a href="{{ url('/profile/profile-viewpets') }}">View Pets</a></div>
                          <div><a href="{{ url('/profile/profile-changephoto') }}">Change Profile Photo</a></div>
                          <div><a href="{{ url('/profile/profile-changecover') }}">Change Cover Image</a></div>
                          <h4>Editing 'Base' Profile Group</h4>

                          <div class="editfield">
                              <label for="username">Name(Required)</label>
                              <input id="username" name="field_1" type="text" value="John Louise Berdida" aria-required="true">
                              <div class="field-visibility-settings-notoggle">
                                  This field can be seen by : <span class="current-visibility-level"> Everyone</span>
                              </div>
                              <p class="description"></p>
                          </div>

                          <div class="editfield">
                              <label for="username">Email Address</label>
                              <input id="email" name="field_1" type="text" value="jLkisni@yahoo.com" aria-required="true">
                              <div class="field-visibility-settings-notoggle">
                                  This field can be seen by : <span class="current-visibility-level"> Everyone</span>
                              </div>
                              <p class="description"></p>
                          </div>

                          <div class="editfield">
                              <label>Pet Breed</label>
                              <select>
                                  <option>--None--</option>
                                  <option>Shepherd</option>
                                  <option>Spinions</option>
                                  <option>Porsel</option>
                                  <option>Nihon Terrier</option>
                                  <option>Mastiff</option>
                                  <option>Lionberger</option>
                                  <option>Collie</option>
                              </select>
                              <div class="field-visibility-settings-notoggle">
                                  This field can be seen by : <span class="current-visibility-level"> Everyone</span>
                              </div>
                              <p class="description"></p>
                          </div>
                          <br>
                          <button class="btn-comment pull-left">Save Changes</button>
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
