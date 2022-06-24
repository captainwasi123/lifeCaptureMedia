@extends('admin.includes.master')
@section('title', 'General Settings')
@section('content')
    <div class="container-fluid p-0 ">
        <div class="row ">
            <div class="col-lg-6">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">General Settings</h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <form method="post" action="{{route('admin.settings.update')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">DVD Price <small>(per item)</small></label>
                                    <input type="number" name="dvd_price" class="form-control" value="{{$data->dvd_price}}" step="any" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Blue-ray Price <small>(per item)</small></label>
                                    <input type="number" name="bluray_price" class="form-control" value="{{$data->bluray_price}}" step="any" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        
                        
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection