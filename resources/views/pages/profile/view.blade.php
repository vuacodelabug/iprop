@extends('layouts.master')

@section('title', 'Thông tin nhân viên')
@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Thông tin nhân viên</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Quản lý nhân sự</a></li>
                                <li class="breadcrumb-item active">Nhân viên</li>
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
                            <h3 class="card-title">Thông tin nhân viên</h3>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group d-flex flex-column h-100">
                                        <h5><b>Ảnh đại diện</b></h5>
                                        <div class="controls flex-grow-1 d-flex">
                                            <label for="avatar" style="cursor: pointer;" class="flex-grow-1 pt-3">
                                                <div id="avatar-preview">
                                                    <div id="imagePreview"
                                                        style="background-image: url({{ asset($profile->users->avatar) }})">
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5><b>Họ và tên</b></h5>
                                                <span>{{ $profile->name }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5><b>Ngày sinh</b></h5>
                                                <span>{{ date('Y-m-d', strtotime($profile->birthday)) }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5><b>Giới tính</b></h5>
                                                <span>{{ $profile->gender }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5><b>Số điện thoại</b></h5>
                                                <span>{{ $profile->phone }}</span>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <h5><b>Email</b></h5>
                                                <span>{{ $profile->email }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5><b>Cmnd/cccd</b></h5>
                                                <span>{{ $profile->cmnd_cccd }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5><b>Ngày cấp</b></h5>
                                                <span>{{ date('Y-m-d', strtotime($profile->cmnd_date)) }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5><b>Nơi cấp</b></h5>
                                                <span>{{ $profile->place_of_Issue }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <h5><b>Địa chỉ thường trú</b></h5>
                                                <span>{{ $profile->permanent_address }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <h5><b>Địa chỉ tạm trú</b></h5>
                                                <span>{{ $profile->temporay_address }}</span>
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
