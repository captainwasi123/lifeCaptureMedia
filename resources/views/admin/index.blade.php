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
                                            <h3><span class="counter">{{$total_orders}}</span> </h3>
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
                                            <h3><span class="counter">{{$pending_orders}}</span> </h3>
                                        </div>
                                        <a href="#" class="notification_btn yellow_btn">Pending</a>
                                        <div id="bar2" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="{{($pending_orders/$total_orders)*100}}"></span>
                                        </div>
                                    </div>
                                    <!-- single_quick_activity  -->
                                    <div class="single_quick_activity">
                                        <div class="count_content">
                                            <p>Users</p>
                                            <h3><span class="counter">{{$total_users}}</span> </h3>
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
                                            <h3><span class="counter">{{$active_users}}</span></h3>
                                        </div>
                                        <a href="#" class="notification_btn violate_btn">Active</a>
                                        <div id="bar4" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="{{($active_users/$total_users)*100}}"></span>
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
                                        <th scope="col">Shipping Addr.</th>
                                        <th scope="col">Total Amount</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Order at</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pending_orders_data as $key => $val)
                                        <tr>
                                            <td>{{sprintf("%04d", $val->id)}}</td>
                                            <td>{{@$val->buyer->firstname.' '.@$val->buyer->lastname}}</td>
                                            <td>{{@$val->buyer->email}}</td>
                                            <td>{{$val->disc_title}}</td>
                                            <td>{{$val->no_of_dvd}}</td>
                                            <td>{{$val->no_of_bluray}}</td>
                                            <td><a href="javascript:void(0)" data-id="{{base64_encode($val->id)}}" class="downloadMedia btn btn-sm btn-warning"><i class="fa fa-download"></i></a></td>
                                            <td class="nowrap">
                                                {{@$val->shipping->address_1.' '.@$val->shipping->address_2}}
                                                <br>
                                                {{@$val->shipping->state.', '.@$val->shipping->city.', '.@$val->shipping->zipcode}}
                                            </td>
                                            <td>${{number_format($val->total_price, 2)}}</td>
                                            <td><span class="badge badge-primary">Pending</span></td>
                                            <td class="nowrap">{{date('d-M-Y h:i A', strtotime($val->created_at))}}</td>
                                            <td>
                                                <div style="width:55px;">
                                                    <a href="javascript:void(0)" class="btn btn-sm btn-danger cancelOrder" data-id="{{base64_encode($val->id)}}">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" class="btn btn-sm btn-primary deliverOrder" data-id="{{base64_encode($val->id)}}">
                                                        <i class="fa fa-thumbs-up"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @if(count($pending_orders_data) == 0)
                                        <tr>
                                            <td colspan="10">No Data Found.</td>
                                        </tr>
                                    @endif
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