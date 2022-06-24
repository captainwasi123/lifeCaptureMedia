@extends('admin.includes.master')
@section('title', 'Pending | Orders')
@section('content')
    <div class="container-fluid p-0 ">
        <div class="row ">
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
                                    @foreach($data as $key => $val)
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
                                    @if(count($data) == 0)
                                        <tr>
                                            <td colspan="11">No Data Found.</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                            {{$data->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection