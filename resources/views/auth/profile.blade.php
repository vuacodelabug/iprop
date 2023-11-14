@extends('layouts.master')

@section('title', 'Cài đặt thông tin')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="position-relative mx-n4 mt-n4">
                <div class="profile-wid-bg profile-setting-img">
                    <img src="assets/images/profile-bg.jpg" class="profile-wid-img" alt="">
                    <div class="overlay-content">
                        <div class="text-end p-3">
                            <div class="p-0 ms-auto rounded-circle profile-photo-edit">
                                <input id="profile-foreground-img-file-input" type="file"
                                    class="profile-foreground-img-file-input">
                                <label for="profile-foreground-img-file-input" class="profile-photo-edit btn btn-light">
                                    <i class="ri-image-edit-line align-bottom me-1"></i> Change Cover
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xxl-3">
                    <div class="card mt-n5">
                        <div class="card-body p-4">
                            <div class="text-center">
                                <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                    <div class="controls">
                                        <label for="avatar" style="cursor: pointer; width:100%;">
                                            <div class="avatar-preview">
                                                <div id="imagePreview"
                                                    style="background-image: url({{ asset($profile->users->avatar) }})">
                                                </div>
                                            </div>
                                            <span class="rounded-circle bg-light text-body">
                                                <i class="ri-camera-fill"></i>
                                            </span>
                                        </label>
                                        <input type="hidden" id="base64image" name="base64image">
                                        <input type="file" name="avatar" style="display: none;"
                                            id="avatar" class="imageUpload">
                                    </div>
                                    {{-- <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                        <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                            
                                        </label>
                                    </div> --}}
                                </div>
                                <h5 class="fs-16 mb-1">{{ auth()->user()->profile->name }}</h5>
                            </div>
                        </div>
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
                <div class="col-xxl-9">
                    <div class="card mt-xxl-n5">
                        <div class="card-header">
                            <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link @if (!Session::has('tab') or Session::get('tab') == 1) active @endif" data-bs-toggle="tab"
                                        href="#personalDetails" role="tab">
                                        <i class="fas fa-home"></i> Thông tin cá nhân
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if (Session::has('tab') and Session::get('tab') == 2) active @endif" data-bs-toggle="tab"
                                        href="#changePassword" role="tab">
                                        <i class="far fa-user"></i> Thay đổi mật khẩu
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body p-4">
                            <div class="tab-content">
                                <div class="tab-pane  @if (!Session::has('tab') or Session::get('tab') == 1) active @endif" id="personalDetails"
                                    role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">Thông tin cá nhân</h3>
                                                </div>

                                                <form action="/admin/profile/" method="POST" class="needs-validation"
                                                    novalidate>
                                                    @csrf
                                                    <input type="hidden" name="id"
                                                        value="{{ auth()->user()->profile->id }}">
                                                    <div class="card-body">
                                                        @if (!Session::has('tab') or Session::get('tab') == 1)
                                                            @if (count($errors) > 0)
                                                                <div class="alert alert-borderless alert-danger">
                                                                    @foreach ($errors->all() as $error)
                                                                        <b>
                                                                            <li>{{ $error }}</li>
                                                                        </b>
                                                                    @endforeach
                                                                </div>
                                                            @endif
                                                        @endif
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="inputName" class="form-label"><b> Họ
                                                                                    và tên</b></label>
                                                                            <input type="text" name="name"
                                                                                value="{{ $profile->name }}" id="inputName"
                                                                                class="form-control" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="inputPhone"><b>Số điện
                                                                                    thoại</b> </label>
                                                                            <input type="tel" name="phone"
                                                                                value="{{ $profile->phone }}"
                                                                                pattern="[0-9]{10}" maxlength="10"
                                                                                id="inputName" class="form-control" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="inputBirthday"><b>Ngày
                                                                                    sinh</b> </label>
                                                                            <input type="date" name="birthday"
                                                                                value="{{ date('Y-m-d', strtotime($profile->birthday)) }}"
                                                                                id="inputBirthday" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-body row">
                                                                        <div class="col-md-6">
                                                                            <button type="submit"
                                                                                class="btn btn-success float">Save</button>
                                                                            <!-- <input type="reset" value="Create new Project" class="btn btn-success float-right"> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row mb-3">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="inputgender"><b> Giới
                                                                                    tính</b></label><br>
                                                                            <span>{{ $profile->gender }}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="inputcmnd_cccd"><b>
                                                                                    Cmnd/cccd</b></label>

                                                                            <br> <span>{{ $profile->cmnd_cccd }}</span>

                                                                        </div>
                                                                    </div>

                                                                    <div class="col-4">
                                                                        <div class="form-group">
                                                                            <label for="inputemail"><b> Địa chỉ
                                                                                    email</b></label>
                                                                            <br><span>{{ $profile->email }}</span>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="inputcmnd_date"><b>Ngày
                                                                                    cấp</b></label>
                                                                            <br><span>{{ date('Y-m-d', strtotime($profile->cmnd_date)) }}</span>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="inputplace_of_Issue"><b>Nơi
                                                                                    cấp</b></label>
                                                                            <br><span>{{ $profile->place_of_Issue }}</span>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="form-group">
                                                                            <label for="inputpermanent_address"><b>Địa chỉ
                                                                                    thường trú</b></label>
                                                                            <br><span>{{ $profile->permanent_address }}</span>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="form-group">
                                                                        <label for="inputtemporay_address"><b>Địa chỉ
                                                                                tạm trú</b></label>
                                                                        <br><span>{{ $profile->temporay_address }}</span>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                    <div class="col-md-4">

                                                    </div>
                                                    <!-- /.card -->


                                                </form>

                                            </div>
                                        </div>

                                    </div>
                                    <!-- end row -->
                                </div>
                                <!--end tab-pane-->
                                <div class="tab-pane @if (Session::has('tab') and Session::get('tab') == 2) active @endif" id="changePassword"
                                    role="tabpanel">
                                    
                                    <form action="/admin/profile/recovery" method="post">
                                        @csrf
                                        <div class="row g-2">
                                            @if (Session::has('tab') and Session::get('tab') == 2)
                                                @if (count($errors) > 0)
                                                    <div class="alert alert-borderless alert-danger">
                                                        @foreach ($errors->all() as $error)
                                                            <b>
                                                                <li>{{ $error }}</li>
                                                            </b>
                                                        @endforeach
                                                    </div>
                                                @endif
                                            @endif
                                            <div class="col-lg-4">
                                                <div>
                                                    <label for="oldpasswordInput" class="form-label">Mật khẩu*</label>
                                                    <input type="password" name="password_old" class="form-control"
                                                        id="oldpasswordInput" placeholder="Nhập mật khẩu">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div>
                                                    <label for="newpasswordInput" class="form-label">Mật khẩu mới*</label>
                                                    <input type="password" name="password_new" class="form-control"
                                                        id="newpasswordInput" placeholder="Nhập mật khẩu">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div>
                                                    <label for="confirmpasswordInput"
                                                        class="form-label">Xác nhận mật khẩu*</label>
                                                    <input type="password" name="password_confirm" class="form-control" id="confirmpasswordInput"
                                                        placeholder="Nhập mật khẩu">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <a href="/reset" class="link-primary text-decoration-underline">Quên
                                                        mật khẩu
                                                        ?</a>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-success">Đổi mật khẩu</button>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </form>

                                </div>
                                <!--end tab-pane-->

                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

        </div>
        <!-- container-fluid -->
    </div><!-- End Page-content -->
    <!-- end main content-->
@endsection
@section('css')

@endsection
@section('script')

    <script src="/assets/libs/prismjs/prism.js"></script>
    <script src="/assets/js/pages/form-validation.init.js"></script>

@endsection
