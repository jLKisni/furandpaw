@extends('layouts.profile')

@section('title', 'Change Cover Photos')


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
                          <div><a href="{{ url('/profile/profile-viewpets') }}">View Pets</a></div>
                          <div><a href="{{ url('/profile/profile-changephoto') }}">Change Profile Photo</a></div>
                          <div><a href="{{ url('/profile/profile-changecover') }}" class="current-selected">Change Cover Image</a></div>
                            <h3>Change Cover Photo</h3>
                            <p>Your cover photo will be used on your profile and throughout the site. </p>

                        </div>


                        <div class="drag-drop clearfix" style="position: relative">
                            <div id="drag-drop-area" style="position:relative">
                                <div class="drag-drop-inside">
                                    <p class="drag-drop-info"><div id="image-holder"> </div></p>
                                    <p></p>
                                    <p class="drag-drop-buttons">
                                    <center><label class="myLabel">
                                        <input type="file" id="getphotos" required/>
                                        <span>Upload your files</span>
                                    </label>
                                    </center>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <br><br>
                        <div class="alert alert-warning" role="alert">For better results, make sure to upload an image that is larger than 1170px wide, and 225px tall.</div>
                        <p>If you'd like to delete your current cover image but not upload a new one, please use the delete Cover Image button.</p>
                        <button class="btn-comment">Save Cover Photo</button><span style="margin-left:10px;"><button class="btn-comment">Delete My Cover Photo</button></span>
                        <br>
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
@push('body-bottom-scripts')
<script>
        $(document).ready(function(){

            $("#getphotos").on('change', function () {

                if (typeof (FileReader) != "undefined") {

                    var image_holder = $("#image-holder");
                    image_holder.empty();

                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $("<img />", {
                            "src": e.target.result,
                            "class": "thumb-image",
                            "width":"60%",
                            "height":"200"
                        }).appendTo(image_holder);

                    }
                    image_holder.show();
                    reader.readAsDataURL($(this)[0].files[0]);
                } else {
                    alert("This browser does not support FileReader.");
                }
            });

        });
    </script>
@endpush
