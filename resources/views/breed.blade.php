@extends('layouts.main')

@section('title', 'Adopt')

@push('head-css')
<link rel="stylesheet" type="text/css" href="css/thumbnail.css">
@endpush

@section('content')
    <div class="header-container">
        <div class="header-content">
            <div class="header-left">
                <h1>Pet Breeder</h1>
            </div>
            <div class="header-right">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Pet Breeder</li>
                </ol>
            </div>
        </div>
    </div><!-- end of header container -->

    <div class="content-wrap clearfix">
        <div class="section-content clearfix">
            <div class="content-left">
                <div id="buddypress">
                    <div class="member-search">
                        <input type="text" placeholder="Search Members...">
                        <button class="button-search hvr-pulse">SEARCH</button>
                    </div>
                </div>
                <div class="dir-form">
                    <div class="item-list-tabs">
                        <ul>
                            <li class="selected">
                                <a href="#"></a>All Members <span>63</span>
                            </li>
                        </ul>
                    </div>

                    <div class="item-list-tabs" id="subnav">
                        <ul>
                            <li class="last">
                                <label>Order By: </label>
                                <select class="form-select">
                                    <option>Last Active</option>
                                    <option>Newest Registered</option>
                                    <option>Alphabetical</option>
                                </select>
                            </li>
                        </ul>
                    </div>

                    <div class="item-list-tabs clearfix">
                        <div class="custom-pagination">
                            Viewing 1 - 20 of 63 active members
                        </div>
                        <div class="pagination-links">
                            <a class="current">1</a>
                            <a class="page-numbers" href="#">2</a>
                            <a class="page-numbers" href="#">3</a>
                            <a class="page-numbers" href="#">4</a>
                            <a class="page-numbers" href="#">5</a>
                            <a class="page-numbers" href="#">6</a>
                            <a class="page-numbers" href="#">7</a>
                            <a class="page-numbers" href="#">
                                <span class="fa fa-long-arrow-right"></span>
                            </a>
                        </div>
                    </div>

                    <ul class="items-list">
                        <div class="alert alert-warning" role="alert" hidden>Sorry,no members were found.</div>
                        <li class="odd">
                            <div class="item-avatar">
                                <a href="{{ url('profile') }}">
                                    <img src="img/thumbnail/lyndon.jpg" alt="...">
                                </a>
                            </div>
                            <div class="custom-item">
                                <div class="item-title">
                                    <a href="{{ url('profile') }}">John Louise Berdida</a>
                                </div>
                                <div class="item-meta">
                                    <span class="fa fa-clock-o"> Posted 21 hours ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="even">
                            <div class="item-avatar">
                                <a href="{{ url('profile') }}">
                                    <img src="img/thumbnail/karen.jpg" alt="...">
                                </a>
                            </div>
                            <div class="custom-item">
                                <div class="item-title">
                                    <a href="{{ url('profile') }}">Jimzter Merioles</a>
                                </div>
                                <div class="item-meta">
                                    <span class="fa fa-clock-o"> Posted 21 hours ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="odd">
                            <div class="item-avatar">
                                <a href="{{ url('profile') }}">
                                    <img src="img/thumbnail/zetta.jpg" alt="...">
                                </a>
                            </div>
                            <div class="custom-item">
                                <div class="item-title">
                                    <a href="{{ url('profile') }}">Maria Clara Pamat</a>
                                </div>
                                <div class="item-meta">
                                    <span class="fa fa-clock-o"> Posted 21 hours ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="even">
                            <div class="item-avatar">
                                <a href="{{ url('profile') }}">
                                    <img src="img/thumbnail/lyndon.jpg" alt="...">
                                </a>
                            </div>
                            <div class="custom-item">
                                <div class="item-title">
                                    <a href="{{ url('profile') }}">John Louise Berdida</a>
                                </div>
                                <div class="item-meta">
                                    <span class="fa fa-clock-o"> Posted 21 hours ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="odd">
                            <div class="item-avatar">
                                <a href="{{ url('profile') }}">
                                    <img src="img/thumbnail/default-image.png" alt="...">
                                </a>
                            </div>
                            <div class="custom-item">
                                <div class="item-title">
                                    <a href="{{ url('profile') }}">Karen Faith Alejandria</a>
                                </div>
                                <div class="item-meta">
                                    <span class="fa fa-clock-o"> Posted 21 hours ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="even">
                            <div class="item-avatar">
                                <a href="{{ url('profile') }}">
                                    <img src="img/thumbnail/karen.jpg" alt="...">
                                </a>
                            </div>
                            <div class="custom-item">
                                <div class="item-title">
                                    <a href="{{ url('profile') }}l">Lyndon Abarquez</a>
                                </div>
                                <div class="item-meta">
                                    <span class="fa fa-clock-o"> Posted 21 hours ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="odd">
                            <div class="item-avatar">
                                <a href="{{ url('profile') }}">
                                    <img src="img/thumbnail/default-image.png" alt="...">
                                </a>
                            </div>
                            <div class="custom-item">
                                <div class="item-title">
                                    <a href="{{ url('profile') }}">John Louise Berdida</a>
                                </div>
                                <div class="item-meta">
                                    <span class="fa fa-clock-o"> Posted 21 hours ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="even">
                            <div class="item-avatar">
                                <a href="{{ url('profile') }}">
                                    <img src="img/thumbnail/karen.jpg" alt="...">
                                </a>
                            </div>
                            <div class="custom-item">
                                <div class="item-title">
                                    <a href="{{ url('profile') }}">Jimzter Merioles</a>
                                </div>
                                <div class="item-meta">
                                    <span class="fa fa-clock-o"> Posted 21 hours ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="odd">
                            <div class="item-avatar">
                                <a href="{{ url('profile') }}">
                                    <img src="img/thumbnail/zetta.jpg" alt="...">
                                </a>
                            </div>
                            <div class="custom-item">
                                <div class="item-title">
                                    <a href="{{ url('profile') }}">Maria Clara Pamat</a>
                                </div>
                                <div class="item-meta">
                                    <span class="fa fa-clock-o"> Posted 21 hours ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="even">
                            <div class="item-avatar">
                                <a href="{{ url('profile') }}">
                                    <img src="img/thumbnail/default-image.png" alt="...">
                                </a>
                            </div>
                            <div class="custom-item">
                                <div class="item-title">
                                    <a href="{{ url('profile') }}">John Louise Berdida</a>
                                </div>
                                <div class="item-meta">
                                    <span class="fa fa-clock-o"> Posted 21 hours ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="odd">
                            <div class="item-avatar">
                                <a href="{{ url('profile') }}">
                                    <img src="img/thumbnail/zetta.jpg" alt="...">
                                </a>
                            </div>
                            <div class="custom-item">
                                <div class="item-title">
                                    <a href="{{ url('profile') }}">Karen Faith Alejandria</a>
                                </div>
                                <div class="item-meta">
                                    <span class="fa fa-clock-o"> Posted 21 hours ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="even">
                            <div class="item-avatar">
                                <a href="{{ url('profile') }}">
                                    <img src="img/thumbnail/default-image.png" alt="...">
                                </a>
                            </div>
                            <div class="custom-item">
                                <div class="item-title">
                                    <a href="{{ url('profile') }}">Lyndon Abarquez</a>
                                </div>
                                <div class="item-meta">
                                    <span class="fa fa-clock-o"> Posted 21 hours ago</span>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class="item-list-tabs clearfix">
                        <div class="custom-pagination">
                            Viewing 1 - 20 of 63 active members
                        </div>
                        <div class="pagination-links">
                            <a class="current">1</a>
                            <a class="page-numbers" href="#">2</a>
                            <a class="page-numbers" href="#">3</a>
                            <a class="page-numbers" href="#">4</a>
                            <a class="page-numbers" href="#">5</a>
                            <a class="page-numbers" href="#">6</a>
                            <a class="page-numbers" href="#">7</a>
                            <a class="page-numbers" href="#">
                                <span class="fa fa-long-arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- dir-form -->
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
    </div>
@endsection

@push('body-bottom-scripts')
<script type="text/javascript" src="js/custom-tooltip.js"></script>
@endpush
