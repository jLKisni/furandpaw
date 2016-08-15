@extends('layouts.admin')

@section('title', 'PetShops Subscription')

@push('head-css')
<link href="{{ asset("assets/plugins/dataTables/dataTables.bootstrap.css") }}" rel="stylesheet" />
@endpush
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
            <li>
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


            <li class="active">
                <a href="#"><i class="fa fa-rss fa-fw"></i> Subscribers<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="selected">
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

           <br><br><br>
              <div class="row">
               <div class="col-lg-12">
                    <!--Basic Tabs   -->
                   <div class="panel panel-primary">
                       <div class="panel-heading">
                           PetShops Subscription Dashboard
                       </div>
                       <div class="panel-body">
                           <ul class="nav nav-tabs">
                               <li class="active"><a href="#registeredUser" data-toggle="tab">Subscription</a>
                               </li>


                           </ul>

                           <div class="tab-content">
                               <div class="tab-pane fade in active" id="registeredUser" >
                                   <br><br>
                                    <div class="table-responsive">
                                               <table class="table table-striped table-bordered table-hover" id="dataTables-subscription">
                                                   <thead>
                                                       <tr>
                                                           <th>Subscription Id</th>
                                                           <th>Subscriber</th>
                                                           <th>Company Name</th>
                                                           <th>SUbscription Start Date</th>
                                                           <th>Subscription End Date</th>
                                                           <th>Subscription Status</th>

                                                       </tr>
                                                   </thead>
                                                   <tbody>
                                                       <tr class="odd gradeX">
                                                           <td>jLkisni</td>
                                                           <td>Internet Explorer 4.0</td>
                                                           <td>Win 95+</td>
                                                           <td class="center">06-15-2016</td>
                                                           <td class="center">07-26-2016</td>
                                                           <td class="center">Active</td>
                                                       </tr>
                                                       <tr class="even gradeC">
                                                           <td>lyndonabarques</td>
                                                           <td>Internet Explorer 5.0</td>
                                                           <td>Win 95+</td>
                                                           <td class="center">06-15-2016</td>
                                                           <td class="center">07-26-2016</td>
                                                           <td class="center">Active</td>
                                                       </tr>
                                                       <tr class="odd gradeA">
                                                           <td>jimmerioles</td>
                                                           <td>Internet Explorer 5.5</td>
                                                           <td>Win 95+</td>
                                                           <td class="center">06-15-2016</td>
                                                           <td class="center">07-26-2016</td>
                                                           <td class="center">Active</td>
                                                       </tr>
                                                       <tr class="even gradeA">
                                                           <td>clarapamat</td>
                                                           <td>Internet Explorer 6</td>
                                                           <td>Win 98+</td>
                                                           <td class="center">06-15-2016</td>
                                                           <td class="center">07-26-2016</td>
                                                           <td class="center">Active</td>
                                                       </tr>
                                                       <tr class="odd gradeX">
                                                           <td>jLkisni</td>
                                                           <td>Internet Explorer 4.0</td>
                                                           <td>Win 95+</td>
                                                           <td class="center">06-15-2016</td>
                                                           <td class="center">07-26-2016</td>
                                                           <td class="center">Active</td>
                                                       </tr>
                                                       <tr class="even gradeC">
                                                           <td>lyndonabarques</td>
                                                           <td>Internet Explorer 5.0</td>
                                                           <td>Win 95+</td>
                                                           <td class="center">06-15-2016</td>
                                                           <td class="center">07-26-2016</td>
                                                           <td class="center">Active</td>
                                                       </tr>
                                                       <tr class="odd gradeA">
                                                           <td>jimmerioles</td>
                                                           <td>Internet Explorer 5.5</td>
                                                           <td>Win 95+</td>
                                                           <td class="center">06-15-2016</td>
                                                           <td class="center">07-26-2016</td>
                                                           <td class="center">Active</td>
                                                       </tr>
                                                       <tr class="even gradeA">
                                                           <td>clarapamat</td>
                                                           <td>Internet Explorer 6</td>
                                                           <td>Win 98+</td>
                                                           <td class="center">06-15-2016</td>
                                                           <td class="center">07-26-2016</td>
                                                           <td class="center">Active</td>
                                                       </tr>


                                                   </tbody>
                                               </table>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <!--End Basic Tabs   -->
               </div>

           </div>
       </div>
<!-- endpage-wrapper -->
@endsection
@push('body-bottom-scripts')
<!-- Page-Level Plugin Scripts-->
   <script src="{{ asset("assets/plugins/dataTables/jquery.dataTables.js") }}"></script>
   <script src="{{ asset("assets/plugins/dataTables/dataTables.bootstrap.js") }}"></script>
   <script>
   $(document).ready(function () {
           $('#dataTables-subscription').dataTable();
       });
   </script>
@endpush
