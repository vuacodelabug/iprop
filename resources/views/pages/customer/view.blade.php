@extends('layouts.master')

@section('title', 'Thông tin khách hàng')
@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Thông tin khách hàng</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Quản lý khách hàng</a></li>
                                <li class="breadcrumb-item active">Khách hàng</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Thông tin khách hàng</h3>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5><b>Họ và tên</b></h5>
                                                <span>{{ $customer->name }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5><b>Ngày sinh</b></h5>
                                                <span>{{ date('Y-m-d', strtotime($customer->birthday)) }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5><b>Giới tính</b></h5>
                                                <span>{{ $customer->gender }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5><b>Số điện thoại</b></h5>
                                                <span>{{ $customer->phone }}</span>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <h5><b>Email</b></h5>
                                                <span>{{ $customer->email }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5><b>Cmnd/cccd</b></h5>
                                                <span>{{ $customer->cmnd_cccd }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5><b>Ngày cấp</b></h5>
                                                <span>{{ date('Y-m-d', strtotime($customer->cmnd_date)) }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5><b>Nơi cấp</b></h5>
                                                <span>{{ $customer->place_of_Issue }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <h5><b>Địa chỉ thường trú</b></h5>
                                                <span>{{ $customer->permanent_address }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <h5><b>Địa chỉ tạm trú</b></h5>
                                                <span>{{ $customer->temporay_address }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-md-4">

                        </div>
                        <!-- /.card -->

                    </div>
                </div>

            </div>
            <!-- end row -->

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


@endsection

@section('css')
@endsection

@section('script')
@endsection
