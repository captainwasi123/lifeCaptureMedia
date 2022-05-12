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
                                            <p>Revenue</p>
                                            <h3>$<span class="counter">35000</span> </h3>
                                        </div>
                                        <a href="#" class="notification_btn">Today</a>
                                        <div id="bar1" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="95"></span>
                                        </div>
                                    </div>
                                    <!-- single_quick_activity  -->
                                    <div class="single_quick_activity">
                                        <div class="count_content">
                                            <p>Orders</p>
                                            <h3><span class="counter">35000</span> </h3>
                                        </div>
                                        <a href="#" class="notification_btn yellow_btn">This Week</a>
                                        <div id="bar2" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="65"></span>
                                        </div>
                                    </div>
                                    <!-- single_quick_activity  -->
                                    <div class="single_quick_activity">
                                        <div class="count_content">
                                            <p>Leads</p>
                                            <h3>$<span class="counter">50000</span> </h3>
                                        </div>
                                        <a href="#" class="notification_btn green_btn">This Month</a>
                                        <div id="bar3" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="75"></span>
                                        </div>
                                    </div>
                                    <!-- single_quick_activity  -->
                                    <div class="single_quick_activity">
                                        <div class="count_content">
                                            <p>Lead Conversion Rate</p>
                                            <h3><span class="counter">50</span> %</h3>
                                        </div>
                                        <a href="#" class="notification_btn violate_btn">Anual</a>
                                        <div id="bar4" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="85"></span>
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
                                <h3 class="m-0">Monthly Invoices</h3>
                            </div>
                            <div class="header_more_tool">
                                <div class="dropdown">
                                    <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                      <i class="ti-more-alt"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                      <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                      <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                      <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                      <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div class="QA_table table-responsive ">
                            <!-- table-responsive -->
                            <table class="table pt-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Profile</th>
                                        <th scope="col">Activity Type</th>
                                        <th scope="col">Owner</th>
                                        <th scope="col">Task</th>
                                        <th scope="col">Budget</th>
                                        <th scope="col">Priority</th>
                                        <th scope="col">Period</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Deadline</th>
                                        <th scope="col">Attachment</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> <img class="user_thumb" src="{{URL::to('/public/admin')}}/img/invoice_img/man_1.png" alt=""> </td>
                                        <td>Product</td>
                                        <td class="nowrap">Tom Smitn</td>
                                        <td class="nowrap" >Client data test</td>
                                        <td>$125000</td>
                                        <td>High</td>
                                        <td>Oct</td>
                                        <td><img class="check_status" src="{{URL::to('/public/admin')}}/img/invoice_img/check.png" alt=""> </td>
                                        <td> 25/10/2020</td>
                                        <td> <button class="btn_1" >PDF</button> </td>
                                    </tr>
                                    <tr>
                                        <td> <img class="user_thumb" src="{{URL::to('/public/admin')}}/img/invoice_img/man_2.png" alt=""> </td>
                                        <td>Product</td>
                                        <td class="nowrap">Tom Smitn</td>
                                        <td class="nowrap" >Client data test</td>
                                        <td>$125000</td>
                                        <td>High</td>
                                        <td>Oct</td>
                                        <td><img class="check_status" src="{{URL::to('/public/admin')}}/img/invoice_img/check.png" alt=""> </td>
                                        <td> 25/10/2020</td>
                                        <td> <button class="btn_1" >PDF</button> </td>
                                    </tr>
                                    <tr>
                                        <td> <img class="user_thumb" src="{{URL::to('/public/admin')}}/img/invoice_img/man_3.png" alt=""> </td>
                                        <td>Product</td>
                                        <td class="nowrap">Tom Smitn</td>
                                        <td class="nowrap" >Client data test</td>
                                        <td>$125000</td>
                                        <td>High</td>
                                        <td>Oct</td>
                                        <td><img class="check_status" src="{{URL::to('/public/admin')}}/img/invoice_img/check.png" alt=""> </td>
                                        <td> 25/10/2020</td>
                                        <td> <button class="btn_1" >PDF</button> </td>
                                    </tr>
                                    <tr>
                                        <td> <img class="user_thumb" src="{{URL::to('/public/admin')}}/img/invoice_img/man_4.png" alt=""> </td>
                                        <td>Product</td>
                                        <td class="nowrap">Tom Smitn</td>
                                        <td class="nowrap" >Client data test</td>
                                        <td>$125000</td>
                                        <td>High</td>
                                        <td>Oct</td>
                                        <td><img class="check_status" src="{{URL::to('/public/admin')}}/img/invoice_img/close.png" alt=""> </td>
                                        <td> 25/10/2020</td>
                                        <td> <button class="btn_1" >PDF</button> </td>
                                    </tr>
                                    <tr>
                                        <td> <img class="user_thumb" src="{{URL::to('/public/admin')}}/img/invoice_img/man_5.png" alt=""> </td>
                                        <td>Product</td>
                                        <td class="nowrap">Tom Smitn</td>
                                        <td class="nowrap" >Client data test</td>
                                        <td>$125000</td>
                                        <td>High</td>
                                        <td>Oct</td>
                                        <td><img class="check_status" src="{{URL::to('/public/admin')}}/img/invoice_img/close.png" alt=""> </td>
                                        <td> 25/10/2020</td>
                                        <td> <button class="btn_1" >PDF</button> </td>
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