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


        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

@endsection

@section('css')
    <link rel="stylesheet" href="\assets\libs\cropper\cropper.css">
@endsection

@section('script')
    <script src="\assets\libs\cropper\cropper.js"></script>
    <script src="\assets\js\cropper-custom.js"></script>
@endsection
