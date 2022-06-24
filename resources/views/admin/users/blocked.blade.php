@extends('admin.includes.master')
@section('title', 'Blocked | Users')
@section('content')
    <div class="container-fluid p-0 ">
        <div class="row ">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_30 QA_section">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Blocked Users</h3>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div class="QA_table table-responsive ">
                            <!-- table-responsive -->
                            <table class="table pt-0">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">D.O.B</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Registered at</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $key => $val)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>{{$val->firstname.' '.$val->lastname}}</td>
                                            <td>{{$val->email}}</td>
                                            <td>{{$val->username}}</td>
                                            <td>{{date('d-M-Y', strtotime($val->dob))}}</td>
                                            <td><span class="badge badge-warning">Blocked</span></td>
                                            <td class="nowrap">{{date('d-M-Y h:i A', strtotime($val->created_at))}}</td>
                                            <td>
                                                <a href="javascript:void(0)" class="btn btn-sm btn-primary activeUser" data-id="{{base64_encode($val->id)}}">
                                                    <i class="fa fa-check"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{$users->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection