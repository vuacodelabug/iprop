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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Quản lý nhân viên</a></li>
                                <li class="breadcrumb-item active">Thêm nhân viên</li>
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
                            <h3 class="card-title">Thêm nhân viên</h3>
                        </div>

                        <form class="needs-validation" novalidate action="create" id="validateForm" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-md-2">
                                        <div class="row mb-3">
                                            
                                                <div class="form-group">
                                                    <h5><b>Ảnh đại diện</b></h5>
                                                    <div class="controls">
                                                        <label for="avatar" style="cursor: pointer; solid; width: 100%;">
                                                            <div class="avatar-preview">
                                                                <div id="imagePreview"
                                                                    style="background-image: url({{ asset('/assets/images/users/user-dummy-img.jpg') }})">
                                                                </div>
                                                            </div>

                                                            <style>
                                                                .avatar-preview {
                                                                    width: 178px;
                                                                    height: 178px;
                                                                }

                                                                #imagePreview {
                                                                    width: 100%;
                                                                    height: 100%;
                                                                    border-radius: 100%;
                                                                    background-size: cover;
                                                                    background-repeat: no-repeat;
                                                                    background-position: center;
                                                                }
                                                            </style>
                                                        </label>
                                                        <input type="hidden" id="base64image" name="base64image">
                                                        <input type="file" name="avatar" style="display: none;"
                                                            id="avatar" class="imageUpload">

                                                    </div>
                                                </div>
                                        </div>
                                        <hr>

                                    </div>
                                    <div class="col-md-10">
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="inputName">Họ và tên</label>
                                                    <span class="text-danger">*</span>
                                                    <input type="text" required name="name" id="inputName"
                                                        class="form-control rounded-pill">
                                                    <div class="invalid-feedback"></div>

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="inputBirthday">Ngày sinh</label>
                                                    <span class="text-danger">*</span>
                                                    <input type="date" required name="birthday" id="inputBirthday"
                                                        class="form-control rounded-pill">
                                                    <div class="invalid-feedback"></div>

                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="inputgender">Giới tính</label>
                                                    <span class="text-danger">*</span>
                                                    <select name="gender" required id="inputgender"
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
                                                    <label for="inputPhone">Số điện thoại</label>
                                                    <span class="text-danger">*</span>
                                                    <input type="tel" required name="phone" pattern="[0-9]{10}"
                                                        maxlength="10" id="inputName" class="form-control rounded-pill">
                                                    <div class="invalid-feedback"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="inputemail">Địa chỉ email</label>
                                                    <span class="text-danger">*</span>
                                                    <input type="text" required name="email" id="inputemail"
                                                        class="form-control rounded-pill">
                                                    <div class="invalid-feedback"></div>

                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="inputcmnd_cccd">Cmnd/cccd</label>
                                                    <span class="text-danger">*</span>
                                                    <input type="number" required pattern="[0-9]" name="cmnd_cccd"
                                                        id="inputcmnd_cccd" class="form-control rounded-pill">
                                                    <div class="invalid-feedback"></div>

                                                </div>
                                            </div>


                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="inputcmnd_date">Ngày cấp</label>
                                                    <span class="text-danger">*</span>
                                                    <input type="date" required name="cmnd_date" id="inputcmnd_date"
                                                        class="form-control rounded-pill">
                                                    <div class="invalid-feedback"></div>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="inputplace_of_Issue">Nơi cấp</label>
                                                    <span class="text-danger">*</span>
                                                    <input type="text" required name="place_of_Issue"
                                                        id="inputplace_of_Issue" class="form-control rounded-pill">
                                                    <div class="invalid-feedback"></div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="inputpermanent_address">Địa chỉ thường trú</label>
                                                    <span class="text-danger">*</span>
                                                    <input type="text" required name="permanent_address"
                                                        id="inputpermanent_address" class="form-control rounded-pill">
                                                    <div class="invalid-feedback"></div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="inputtemporay_address">Địa chỉ tạm trú</label>
                                                    <span class="text-danger">*</span>
                                                    <input type="text" required name="temporay_address"
                                                        id="inputtemporay_address" class="form-control rounded-pill">
                                                    <div class="invalid-feedback"></div>

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
                                    <a href="list" class="btn btn-secondary">Huỷ</a>
                                    <button type="submit" class="btn btn-success float">Tạo</button>
                                    <!-- <input type="reset" value="Create new Project" class="btn btn-success float-right"> -->
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
            <!-- end row mb-3 -->

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Cropper</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="img-container">
                        <img id="image" alt="Picture">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="crop" class="btn btn-secondary" data-dismiss="modal">crop</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('css')
    <link rel="stylesheet" href="\assets\libs\cropper\cropper.css">
@endsection

@section('script')
    <script src="\assets\libs\cropper\cropper.js"></script>
    <script src="\assets\js\cropper-custom.js"></script>
@endsection
