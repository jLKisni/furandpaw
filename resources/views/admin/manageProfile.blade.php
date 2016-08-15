@extends('layouts.admin')

@section('title', 'Manage Profile')

@section('content')
<nav class="navbar-default navbar-static-side" role="navigation">
    <!-- sidebar-collapse -->
    <div class="sidebar-collapse">
        <!-- side-menu -->
        <ul class="nav" id="side-menu">
            <li>
                <!-- user image section-->
                <div class="user-section">
                    <div class="user-section-inner">
                        <img src="{{ asset('img/thumbnail/john.jpg') }}" alt="">
                    </div>
                    <div class="user-info">
                        <div>John</div>
                        <div class="user-text-online">
                            <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                        </div>
                    </div>
                </div>
                <!--end user image section-->
            </li>
            <li class="sidebar-search">
                <!-- search section-->
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!--end search section-->
            </li>
            <li class="selected">
                <a href="{{ url('admin/manageProfile') }}"><i class="fa fa-dashboard fa-fw"></i> Manage Profile</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> All Users<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('admin/enthusiast') }}">Pet Enthusiast</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/petshops') }}">Pet Shops</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/vetclinics') }}">Veterinary Clinics</a>
                    </li>
                </ul>
                <!-- second-level-items -->
            </li>


            <li>
                <a href="#"><i class="fa fa-rss fa-fw"></i> Subscribers<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('admin/petshop-subscription') }}">Pet Shops</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/vetclinic-subscription') }}">Veterinary CLinics</a>
                    </li>
                </ul>
                <!-- second-level-items -->
            </li>
        </ul>
        <!-- end side-menu -->
    </div>
    <!-- end sidebar-collapse -->
</nav>



<!--  page-wrapper -->
      <div id="page-wrapper">

          <br><br>
             <div class="row">
              <div class="col-lg-12">
                   <!--Basic Tabs   -->
                  <div class="panel panel-primary">
                      <div class="panel-heading">
                          Manage Admin Profile
                      </div>
                      <div class="panel-body">
                          <ul class="nav nav-tabs">
                              <li class="active"><a href="#home" data-toggle="tab">Personal Data</a>
                              </li>
                              <li><a href="#profile" data-toggle="tab">Manage Password</a>
                              </li>

                          </ul>

                          <div class="tab-content">
                              <div class="tab-pane fade in active" id="home" >
                                  <br><br>
                                  <div class="row">

                                      <div class="col-lg-8">
                                          <form class="form-horizontal">
                                                <div class="form-group">
                                                  <label for="inputEmail3" class="col-sm-2 control-label">Firstname</label>
                                                  <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="John">
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label for="inputPassword3" class="col-sm-2 control-label">Lastname</label>
                                                  <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="Doe">
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
                                                  <div class="col-sm-10">
                                                    <input type="email" class="form-control" placeholder="johndoe@cykablyat.com">
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label for="inputPassword3" class="col-sm-2 control-label">Username</label>
                                                  <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="johndoe">
                                                  </div>
                                                </div>

                                                <div class="form-group">
                                                  <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-success">Update Information</button>
                                                  </div>
                                                </div>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                              <div class="tab-pane fade" id="profile">
                                  <br><br>
                                  <div class="row">

                                      <div class="col-lg-8">
                                          <form class="form-horizontal">
                                                <div class="form-group">
                                                  <label for="inputEmail3" class="col-sm-3 control-label">Old Password</label>
                                                  <div class="col-sm-7">
                                                    <input type="password" class="form-control" placeholder="**********">
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label for="inputPassword3" class="col-sm-3 control-label">New Password</label>
                                                  <div class="col-sm-7">
                                                    <input type="password" class="form-control" placeholder="">
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label for="inputPassword3" class="col-sm-3 control-label">Re-type Password</label>
                                                  <div class="col-sm-7">
                                                    <input type="password" class="form-control" placeholder="">
                                                  </div>
                                                </div>

                                                <div class="form-group">
                                                  <div class="col-sm-offset-3 col-sm-7">
                                                    <button type="submit" class="btn btn-success">Update Password</button>
                                                  </div>
                                                </div>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!--End Basic Tabs   -->
              </div>

          </div>
      </div>
      <!-- end page-wrapper -->
@endsection
