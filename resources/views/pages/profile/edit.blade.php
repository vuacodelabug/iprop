@extends('layouts.master')

@section('title', 'Thêm nhân viên')
@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row mb-3">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Thêm nhân viên</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Quảng lý nhân viên</a></li>
                                <li class="breadcrumb-item active">Thêm nhân viên</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Thêm nhân viên</h3>
                        </div>

                        <form action="/admin/profile/edit" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $profile->id }}">
                            <div class="card-body">
                                @if (count($errors) > 0)
                                    <div class="alert alert-borderless alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <b>
                                                <li>{{ $error }}</li>
                                            </b>
                                        @endforeach
                                    </div>
                                @endif
                                <div class="row mb-3">
                                    <div class="col-md-2">
                                        <div class="row mb-3">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <h5><b>Ảnh đại diện</b></h5>
                                                    <div class="controls">
                                                        <label for="avatar" style="cursor: pointer; width:100%;">
                                                            <div class="avatar-preview">
                                                                <div id="imagePreview"
                                                                    style="background-image: url({{ asset($profile->users->avatar) }})">
                                                                </div>
                                                            </div>
                                                        </label>
                                                        <input type="hidden" id="base64image" name="base64image">
                                                        <input type="file" name="avatar" style="display: none;"
                                                            id="avatar" class="imageUpload">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="inputName">Họ và tên
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <input type="text" name="name" value="{{ $profile->name }}"
                                                        id="inputName" class="form-control rounded-pill">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="inputBirthday">Ngày sinh
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <input type="date" name="birthday"
                                                        value="{{ date('Y-m-d', strtotime($profile->birthday)) }}"
                                                        id="inputBirthday" class="form-control rounded-pill">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="inputgender">Giới tính
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <select name="gender" value="{{ $profile->gender }}" id="inputgender"
                                                        class="form-control rounded-pill custom-select">
                                                        <option>Nam</option>
                                                        <option>Nữ</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="inputPhone">Số điện thoại
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <input type="tel" name="phone" value="{{ $profile->phone }}"
                                                        pattern="[0-9]{10}" maxlength="10" id="inputName"
                                                        class="form-control rounded-pill">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="inputemail">Địa chỉ email
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <input type="text" name="email" value="{{ $profile->email }}"
                                                        id="inputemail" class="form-control rounded-pill">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="inputcmnd_cccd">Cmnd/cccd
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <input type="number" pattern="[0-9]" name="cmnd_cccd"
                                                        value="{{ $profile->cmnd_cccd }}" id="inputcmnd_cccd"
                                                        class="form-control rounded-pill">
                                                </div>
                                            </div>

                                            <div class="col-6">

                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="inputcmnd_date">Ngày cấp
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <input type="date" name="cmnd_date"
                                                        value="{{ date('Y-m-d', strtotime($profile->cmnd_date)) }}"
                                                        id="inputcmnd_date" class="form-control rounded-pill">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="inputplace_of_Issue">Nơi cấp
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <input type="text" name="place_of_Issue"
                                                        value="{{ $profile->place_of_Issue }}" id="inputplace_of_Issue"
                                                        class="form-control rounded-pill">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="inputpermanent_address">Địa chỉ thường trú
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <input type="text" name="permanent_address"
                                                        value="{{ $profile->permanent_address }}"
                                                        id="inputpermanent_address" class="form-control rounded-pill">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="inputtemporay_address">Địa chỉ tạm trú
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <input type="text" name="temporay_address"
                                                        value="{{ $profile->temporay_address }}"
                                                        id="inputtemporay_address" class="form-control rounded-pill">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="col-md-4">

                            </div>
                            <!-- /.card -->

                            <div class="card-body row mb-3">
                                <div class="col-12">
                                    <a href="/admin/profile/list" class="btn btn-secondary">Huỷ</a>
                                    <button type="submit" class="btn btn-success float">Lưu</button>
                                    <!-- <input type="reset" value="Create new Project" class="btn btn-success float-right"> -->
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                {{-- component --}}
                <div id="component">
                    @include('pages.modal.crop')
                </div>
            </div>
            <!-- end row mb-3 -->

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection

@section('css')

@section('script')

@endsection
