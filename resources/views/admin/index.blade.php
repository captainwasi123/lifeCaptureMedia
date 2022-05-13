@extends('admin.includes.master')
@section('title', 'Dashboard')
@section('content')
    <div class="container-fluid p-0 ">
        <div class="row ">
            <div class="col-lg-12">
                <div class="single_element">
                    <div class="quick_activity">
                        <div class="row">
                            <div class="col-12">
                                <div class="quick_activity_wrap">
                                    <!-- single_quick_activity  -->
                                    <div class="single_quick_activity">
                                        <div class="count_content">
                                            <p>Orders</p>
                                            <h3><span class="counter">156</span> </h3>
                                        </div>
                                        <a href="#" class="notification_btn">Total</a>
                                        <div id="bar1" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="100"></span>
                                        </div>
                                    </div>
                                    <!-- single_quick_activity  -->
                                    <div class="single_quick_activity">
                                        <div class="count_content">
                                            <p>Orders</p>
                                            <h3><span class="counter">15</span> </h3>
                                        </div>
                                        <a href="#" class="notification_btn yellow_btn">Pending</a>
                                        <div id="bar2" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="10"></span>
                                        </div>
                                    </div>
                                    <!-- single_quick_activity  -->
                                    <div class="single_quick_activity">
                                        <div class="count_content">
                                            <p>Users</p>
                                            <h3><span class="counter">50</span> </h3>
                                        </div>
                                        <a href="#" class="notification_btn green_btn">Total</a>
                                        <div id="bar3" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="100"></span>
                                        </div>
                                    </div>
                                    <!-- single_quick_activity  -->
                                    <div class="single_quick_activity">
                                        <div class="count_content">
                                            <p>Users</p>
                                            <h3><span class="counter">46</span></h3>
                                        </div>
                                        <a href="#" class="notification_btn violate_btn">Active</a>
                                        <div id="bar4" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="90"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_30 QA_section">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Pending Orders</h3>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div class="QA_table table-responsive ">
                            <!-- table-responsive -->
                            <table class="table pt-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Order#</th>
                                        <th scope="col">Buyer</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Disc Title</th>
                                        <th scope="col">DVD</th>
                                        <th scope="col">Blu-ray</th>
                                        <th scope="col">Download</th>
                                        <th scope="col">Total Amount</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Order at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Anas Mojo</td>
                                        <td>mojo@gmail.com</td>
                                        <td>Memories</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td><a href="#"><i class="fa fa-download"></i></a></td>
                                        <td>$50</td>
                                        <td><span class="badge badge-primary">Pending</span></td>
                                        <td class="nowrap">13-May-2022 12:14 AM</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Anas Mojo</td>
                                        <td>mojo@gmail.com</td>
                                        <td>Memories</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td><a href="#"><i class="fa fa-download"></i></a></td>
                                        <td>$50</td>
                                        <td><span class="badge badge-primary">Pending</span></td>
                                        <td class="nowrap">13-May-2022 12:14 AM</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Anas Mojo</td>
                                        <td>mojo@gmail.com</td>
                                        <td>Memories</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td><a href="#"><i class="fa fa-download"></i></a></td>
                                        <td>$50</td>
                                        <td><span class="badge badge-primary">Pending</span></td>
                                        <td class="nowrap">13-May-2022 12:14 AM</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Anas Mojo</td>
                                        <td>mojo@gmail.com</td>
                                        <td>Memories</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td><a href="#"><i class="fa fa-download"></i></a></td>
                                        <td>$50</td>
                                        <td><span class="badge badge-primary">Pending</span></td>
                                        <td class="nowrap">13-May-2022 12:14 AM</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Anas Mojo</td>
                                        <td>mojo@gmail.com</td>
                                        <td>Memories</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td><a href="#"><i class="fa fa-download"></i></a></td>
                                        <td>$50</td>
                                        <td><span class="badge badge-primary">Pending</span></td>
                                        <td class="nowrap">13-May-2022 12:14 AM</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Anas Mojo</td>
                                        <td>mojo@gmail.com</td>
                                        <td>Memories</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td><a href="#"><i class="fa fa-download"></i></a></td>
                                        <td>$50</td>
                                        <td><span class="badge badge-primary">Pending</span></td>
                                        <td class="nowrap">13-May-2022 12:14 AM</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Anas Mojo</td>
                                        <td>mojo@gmail.com</td>
                                        <td>Memories</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td><a href="#"><i class="fa fa-download"></i></a></td>
                                        <td>$50</td>
                                        <td><span class="badge badge-primary">Pending</span></td>
                                        <td class="nowrap">13-May-2022 12:14 AM</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Anas Mojo</td>
                                        <td>mojo@gmail.com</td>
                                        <td>Memories</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td><a href="#"><i class="fa fa-download"></i></a></td>
                                        <td>$50</td>
                                        <td><span class="badge badge-primary">Pending</span></td>
                                        <td class="nowrap">13-May-2022 12:14 AM</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Anas Mojo</td>
                                        <td>mojo@gmail.com</td>
                                        <td>Memories</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td><a href="#"><i class="fa fa-download"></i></a></td>
                                        <td>$50</td>
                                        <td><span class="badge badge-primary">Pending</span></td>
                                        <td class="nowrap">13-May-2022 12:14 AM</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Anas Mojo</td>
                                        <td>mojo@gmail.com</td>
                                        <td>Memories</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td><a href="#"><i class="fa fa-download"></i></a></td>
                                        <td>$50</td>
                                        <td><span class="badge badge-primary">Pending</span></td>
                                        <td class="nowrap">13-May-2022 12:14 AM</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('addScript')
    <script src="{{URL::to('/public/admin')}}/vendors/chart_am/core.js"></script>
    <script src="{{URL::to('/public/admin')}}/vendors/chart_am/charts.js"></script>
    <script src="{{URL::to('/public/admin')}}/vendors/chart_am/animated.js"></script>
    <script src="{{URL::to('/public/admin')}}/vendors/chart_am/kelly.js"></script>
    <script src="{{URL::to('/public/admin')}}/vendors/chart_am/chart-custom.js"></script>
@endsection