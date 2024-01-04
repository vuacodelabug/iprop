@extends('layouts.master')

@section('title', 'Giỏ hàng')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <div class="container-fluid">
                <!-- BreadCrumb Mobile -->
                <div class="row d-md-none">
                    <div class="col-12">
                        <div
                            class="page-title-box bg-primary p-0 d-sm-flex align-items-center justify-content-between">
                            <h2 class="mb-sm-0 text-white text-center p-2">IProp</h2>
                        </div>
                    </div>
                </div>

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Cart</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                    <li class="breadcrumb-item active">Cart</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->



                <section class="content" id="content">
                    <div class="card-body bg-transparent">
                        <div class="card card-animate" style="z-index: 2;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8 col-lg-7">
                                        <div class="row g-2">
                                            <div class="col-12 col-md-auto">
                                                <select class="form-control select-building_id " data-choices
                                                    name="choices-single-default" id="choices-single-default">
                                                    <option value="">Chọn toà nhà</option>
                                                    @foreach ($buildings as $building)
                                                    <option value="{{$building->id}}">{{$building->name}} | {{$building->address}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-pills custom-hover-nav-tabs border-bottom border-dark mb-3"
                            id="nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab"
                                    aria-selected="true">
                                    <i class="las la-atom nav-icon nav-tab-position d-none"></i>
                                    <h5 class="nav-titl nav-tab-position m-0 d-none">Tổng quan</h5>
                                    <div class="d-flex align-items-center justify-content-center h-100">
                                        <h4 class="text-white fs-14 m-0">Tổng quan</h4>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#product1" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <i class="ri-shopping-cart-2-fill nav-icon nav-tab-position"></i>
                                    <h5 class="nav-titl nav-tab-position m-0">Tạo mới</h5>
                                    <div class="d-flex align-items-center justify-content-center h-100">
                                        <h4 class="text-white fs-14 m-0 d-none">Tạo mới</h4>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#messages" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <i class="bx bxs-book-add nav-icon nav-tab-position"></i>
                                    <h5 class="nav-titl nav-tab-position m-0">Book phòng</h5>
                                    <div class="d-flex align-items-center justify-content-center h-100">
                                        <h4 class="text-white fs-14 m-0 d-none">Book phòng</h4>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#coc-cocdu" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <i class="bx bx-calendar-check nav-icon nav-tab-position"></i>
                                    <h5 class="nav-titl nav-tab-position m-0">Check in - out</h5>
                                    <div class="d-flex align-items-center justify-content-center h-100">
                                        <h4 class="text-white fs-14 m-0 d-none">Check in <br> Check out</h4>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#veSinh" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <i class="mdi mdi-broom nav-icon nav-tab-position"></i>
                                    <h5 class="nav-titl nav-tab-position m-0">Vệ sinh phòng</h5>
                                    <div class="d-flex align-items-center justify-content-center h-100">
                                        <h4 class="text-white fs-14 m-0 d-none">Vệ sinh phòng</h4>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#settings" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <i class="las la-file-invoice-dollar nav-icon nav-tab-position"></i>
                                    <h5 class="nav-titl nav-tab-position m-0">Hợp đồng</h5>
                                    <div class="d-flex align-items-center justify-content-center h-100">
                                        <h4 class="text-white fs-14 m-0 d-none">Hợp đồng</h4>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content text-muted">

                            <!-- Tổng quan -->
                            <div class="tab-pane active show" id="index-content" role="tabpanel">

                            </div>
                           

                            <!-- Tạo mới -->
                            <div class="tab-pane" id="card" role="tabpanel">
                                @include('pages.manager.apartment.cart')
                            </div>


                            <!-- Booking -->
                            <div class="tab-pane" id="messages" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="card card-height-100 card-animate">
                                            <div class="card-body p-0">
                                                <div class="alert alert-warning border-0 rounded-0 m-0 d-flex align-items-center"
                                                    role="alert">
                                                    <i data-feather="alert-triangle"
                                                        class="text-warning me-2 icon-sm"></i>
                                                    <div class="flex-grow-1 text-truncate">
                                                        Your free trial expired in <b>17</b> days.
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <a href="pages-pricing.html"
                                                            class="text-reset text-decoration-underline"><b>Upgrade</b></a>
                                                    </div>
                                                </div>

                                                <div class="row align-items-end">
                                                    <div class="col-sm-8 pb-1 px-3">
                                                        <div class="p-3" style="height: 128px;">
                                                            <p class="fs-16 lh-base">Upgrade your plan from a
                                                                <span class="fw-semibold">Free trial</span>, to
                                                                ‘Premium Plan’ <i class="mdi mdi-arrow-right"></i>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="px-3">
                                                            <img src="assets/images/user-illustarator-2.png"
                                                                class="img-fluid py-3 pt-5 pt-md-0" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end card-body-->
                                        </div>
                                    </div>

                                    <div class="col-lg-5">
                                        <div class="row row-col-2 row-cols-md-4 row-cols-lg-2 text-center">
                                            <div class="col">
                                                <div class="card mb-3 card-animate bg-dark bg-gradient">
                                                    <div class="card-body text-light">
                                                        <div
                                                            class="d-flex justify-content-around gap-1 align-items-center">
                                                            <div class="avatar-sm flex-shrink-0">
                                                                <span
                                                                    class="avatar-title bg-soft-light rounded-circle fs-3">
                                                                    <i
                                                                        class="las la-lock align-middle text-light opacity-100"></i>
                                                                </span>
                                                            </div>

                                                            <div class="">
                                                                <p
                                                                    class="text-uppercase text-light fw-semibold fs-14 mb-1">
                                                                    Phòng Khoá
                                                                </p>

                                                                <h4 class="text-light mb-0">16</h4>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div> <!-- end card-->
                                            </div> <!-- end col-->

                                            <div class="col">
                                                <div
                                                    class="card mb-3 card-animate --custom-bg-phongTrong bg-gradient">
                                                    <div class="card-body text-light">
                                                        <div
                                                            class="d-flex justify-content-around gap-1 align-items-center">
                                                            <div class="avatar-sm flex-shrink-0">
                                                                <span
                                                                    class="avatar-title bg-soft-light rounded-circle fs-3">
                                                                    <i
                                                                        class="las la-user-plus align-middle text-light opacity-100"></i>
                                                                </span>
                                                            </div>

                                                            <div class="">
                                                                <p
                                                                    class="text-uppercase text-light fw-semibold fs-14 mb-1">
                                                                    Phòng trống
                                                                </p>

                                                                <h4 class="text-light mb-0">16</h4>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div> <!-- end card-->
                                            </div> <!-- end col-->

                                            <div class="col">
                                                <div
                                                    class="card card-animate --custom-bg-phongCoc-CocDu bg-gradient">
                                                    <div class="card-body text-light">
                                                        <div
                                                            class="d-flex justify-content-around gap-1 align-items-center">
                                                            <div class="avatar-sm flex-shrink-0">
                                                                <span
                                                                    class="avatar-title bg-soft-light rounded-circle fs-3">
                                                                    <i
                                                                        class="las la-money-check-alt align-middle text-light opacity-100"></i>
                                                                </span>
                                                            </div>

                                                            <div class="">
                                                                <p
                                                                    class="text-uppercase text-light fw-semibold fs-14 mb-1">
                                                                    Cọc / Cọc đủ
                                                                </p>

                                                                <h4 class="text-light mb-0">16</h4>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div> <!-- end card-->
                                            </div> <!-- end col-->

                                            <div class="col">
                                                <div class="card card-animate --custom-bg-phongThue bg-gradient">
                                                    <div class="card-body text-light">
                                                        <div
                                                            class="d-flex justify-content-around gap-1 align-items-center">
                                                            <div class="avatar-sm flex-shrink-0">
                                                                <span
                                                                    class="avatar-title bg-soft-light rounded-circle fs-3">
                                                                    <i
                                                                        class="las la-user-lock align-middle text-light opacity-100"></i>
                                                                </span>
                                                            </div>

                                                            <div class="">
                                                                <p
                                                                    class="text-uppercase text-light fw-semibold fs-14 mb-1">
                                                                    Đã <br class="d-lg-none"> Thuê
                                                                </p>

                                                                <h4 class="text-light mb-0">16</h4>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div> <!-- end card-->
                                            </div> <!-- end col-->
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="card card-animate">
                                            <!-- Danh sách phòng -->
                                            <div class="card-body">
                                                <!-- Tầng G-->
                                                <div class="d-flex align-items-center gap-3 gap-md-2 gap-lg-3">
                                                    <!-- Tên Tầng -->
                                                    <div mb-0
                                                        class="rounded-3 bg-primary bg-gradient d-flex align-self-stretch">
                                                        <div class="p-2 d-flex text-center">
                                                            <p class="text-uppercase text-white fw-semibold fs-12 mb-0 align-self-center"
                                                                style="width: 75px;">
                                                                Tầng G
                                                            </p>
                                                        </div><!-- end card body -->
                                                    </div>

                                                    <!-- Phòng -->
                                                    <div class="d-flex flex-wrap gap-1">
                                                        <div class="mb-0 card card-animate bg-dark bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p data-bs-toggle="modal"
                                                                    data-bs-target="#LichSuBookPhong-Modal"
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    001
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongCoc-CocDu bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    002
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    003
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongThue bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    004
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div class="mb-0 card card-animate bg-dark bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    005
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongCoc-CocDu bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    006
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    007
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongThue bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    008
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div class="mb-0 card card-animate bg-dark bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    009
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Tầng 1-->
                                                <div class="d-flex align-items-center gap-3 gap-md-2 gap-lg-3 mt-2">
                                                    <!-- Tên Tầng -->
                                                    <div mb-0
                                                        class="rounded-3 bg-primary bg-gradient d-flex align-self-stretch">
                                                        <div class="p-2 d-flex text-center">
                                                            <p class="text-uppercase text-white fw-semibold fs-12 mb-0 align-self-center"
                                                                style="width: 75px;">
                                                                Tầng G
                                                            </p>
                                                        </div><!-- end card body -->
                                                    </div>

                                                    <!-- Phòng -->
                                                    <div class="d-flex flex-wrap gap-1">
                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    001
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    002
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    003
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    004
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    005
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    006
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    007
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    008
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    009
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    010
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    011
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>
                                                    </div>
                                                </div>



                                                <!-- Tầng 2-->
                                                <div class="d-flex align-items-center gap-3 gap-md-2 gap-lg-3 mt-2">
                                                    <!-- Tên Tầng -->
                                                    <div mb-0
                                                        class="rounded-3 bg-primary bg-gradient d-flex align-self-stretch">
                                                        <div class="p-2 d-flex text-center">
                                                            <p class="text-uppercase text-white fw-semibold fs-12 mb-0 align-self-center"
                                                                style="width: 75px;">
                                                                Tầng G
                                                            </p>
                                                        </div><!-- end card body -->
                                                    </div>

                                                    <!-- Phòng -->
                                                    <div class="d-flex flex-wrap gap-1">
                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    001
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    002
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    003
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    004
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    005
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    006
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    007
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    008
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    009
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    010
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    011
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-5 d-none d-lg-block">
                                        <div class="card card-height-100 card-animate">
                                            <div
                                                class="card-header align-items-center d-flex bg-primary bg-gradient">
                                                <h4 class="card-title mb-0 text-white fs-15">
                                                    <span class="">Mã Phòng: </span>
                                                    <span class="fw-bold">AP</span> <!-- Mã Toà -->
                                                    <span class="fw-bold">_</span>
                                                    <span class="fw-bold">1402</span> <!-- Mã Phòng -->
                                                    <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                                                    <span class="">Loại Phòng: </span>
                                                    <span class="fw-bold">Studio Special</span>
                                                    <!-- Loại Phòng -->
                                                </h4>

                                            </div><!-- end card header -->


                                            <!-- Lịch sử book phòng -->
                                            <div class="card-body fs-14">
                                                <h5 class="text-capitalize fw-semibold mb-2">
                                                    Lịch sử book phòng:</h5>

                                                <div class="table-responsive">
                                                    <!-- Striped Rows -->
                                                    <table
                                                        class="table table-striped-columns align-middle table-nowrap mb-0">

                                                        <thead class="bg-soft-dark">
                                                            <tr>
                                                                <th scope="col">STT</th>
                                                                <th scope="col">Ngày tạo</th>
                                                                <th scope="col">Giá cọc</th>
                                                                <th scope="col">Giá Phòng</th>
                                                                <th scope="col">Chi tiết</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row" class="text-center">1</th>
                                                                <td>Nov 14, 2021</td>
                                                                <td>2.500.000</td>
                                                                <td>1.000.000</td>
                                                                <td class="text-center">
                                                                    <button
                                                                        class="btn btn-sm bg-gr btn-info card-animate">
                                                                        <i class="ri-eye-line"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row" class="text-center">2</th>
                                                                <td>Nov 21, 2021</td>
                                                                <td>2.500.000</td>
                                                                <td>1.000.000</td>
                                                                <td class="text-center">
                                                                    <button
                                                                        class="btn btn-sm bg-gr btn-info card-animate">
                                                                        <i class="ri-eye-line"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row" class="text-center">3</th>
                                                                <td>Nov 24, 2021</td>
                                                                <td>2.500.000</td>
                                                                <td>1.000.000</td>
                                                                <td class="text-center">
                                                                    <button
                                                                        class="btn btn-sm bg-gr btn-info card-animate">
                                                                        <i class="ri-eye-line"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row" class="text-center">4</th>
                                                                <td>Nov 25, 2021</td>
                                                                <td>2.500.000</td>
                                                                <td>1.000.000</td>
                                                                <td class="text-center">
                                                                    <button
                                                                        class="btn btn-sm bg-gr btn-info card-animate">
                                                                        <i class="ri-eye-line"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div><!-- end card body -->

                                            <hr class="mb-0">

                                            <!-- Tạo mới -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-end">
                                                    <button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#BookPhong-Modal"
                                                        class="btn btn-secondary btn-label card-animate">
                                                        <i
                                                            class="bx bxs-book-add label-icon align-middle fs-18 me-2"></i>
                                                        Tạo mới
                                                    </button>
                                                </div>
                                            </div>
                                        </div><!-- end card -->
                                    </div>
                                </div>
                            </div>


                            <!-- Cọc - Cọc đủ -->
                            <div class="tab-pane" id="coc-cocdu" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="card card-height-100 card-animate">
                                            <div class="card-body p-0">
                                                <div class="alert alert-warning border-0 rounded-0 m-0 d-flex align-items-center"
                                                    role="alert">
                                                    <i data-feather="alert-triangle"
                                                        class="text-warning me-2 icon-sm"></i>
                                                    <div class="flex-grow-1 text-truncate">
                                                        Your free trial expired in <b>17</b> days.
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <a href="pages-pricing.html"
                                                            class="text-reset text-decoration-underline"><b>Upgrade</b></a>
                                                    </div>
                                                </div>

                                                <div class="row align-items-end">
                                                    <div class="col-sm-8 pb-1 px-3">
                                                        <div class="p-3" style="height: 128px;">
                                                            <p class="fs-16 lh-base">Upgrade your plan from a
                                                                <span class="fw-semibold">Free trial</span>, to
                                                                ‘Premium Plan’ <i class="mdi mdi-arrow-right"></i>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="px-3">
                                                            <img src="{{ URL::asset('assets/images/user-illustarator-2.png')}}"
                                                                class="img-fluid py-3 pt-5 pt-md-0" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end card-body-->
                                        </div>
                                    </div>

                                    <div class="col-lg-5">
                                        <div class="row row-col-2 row-cols-md-4 row-cols-lg-2 text-center">
                                            <!-- Phòng khoá -->
                                            <div class="col">
                                                <div class="card mb-3 card-animate bg-dark bg-gradient">
                                                    <div class="card-body text-light">
                                                        <div
                                                            class="d-flex justify-content-around gap-1 align-items-center">
                                                            <div class="avatar-sm flex-shrink-0">
                                                                <span
                                                                    class="avatar-title bg-soft-light rounded-circle fs-3">
                                                                    <i
                                                                        class="las la-lock align-middle text-light opacity-100"></i>
                                                                </span>
                                                            </div>

                                                            <div class="">
                                                                <p
                                                                    class="text-uppercase text-light fw-semibold fs-14 mb-1">
                                                                    Phòng Khoá
                                                                </p>

                                                                <h4 class="text-light mb-0">16</h4>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div> <!-- end card-->
                                            </div> <!-- end phòng khoá-->


                                            <!-- Phòng Book --> 
                                            <div class="col">
                                                <div
                                                    class="card mb-3 card-animate --custom-bg-phongTrong bg-gradient">
                                                    <div class="card-body text-light">
                                                        <div
                                                            class="d-flex justify-content-around gap-1 align-items-center">
                                                            <div class="avatar-sm flex-shrink-0">
                                                                <span
                                                                    class="avatar-title bg-soft-light rounded-circle fs-3">
                                                                    <i
                                                                        class="las la-user-plus align-middle text-light opacity-100"></i>
                                                                </span>
                                                            </div>

                                                            <div class="">
                                                                <p
                                                                    class="text-uppercase text-light fw-semibold fs-14 mb-1">
                                                                    Phòng trống
                                                                </p>

                                                                <h4 class="text-light mb-0">16</h4>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div> <!-- end card-->
                                            </div> <!-- end phòng book-->



                                            <!-- Phòng Cọc -->
                                            <div class="col">
                                                <div
                                                    class="card card-animate --custom-bg-phongCoc-CocDu bg-gradient">
                                                    <div class="card-body text-light">
                                                        <div
                                                            class="d-flex justify-content-around gap-1 align-items-center">
                                                            <div class="avatar-sm flex-shrink-0">
                                                                <span
                                                                    class="avatar-title bg-soft-light rounded-circle fs-3">
                                                                    <i
                                                                        class="las la-money-check-alt align-middle text-light opacity-100"></i>
                                                                </span>
                                                            </div>

                                                            <div class="">
                                                                <p
                                                                    class="text-uppercase text-light fw-semibold fs-14 mb-1">
                                                                    Cọc / Cọc đủ
                                                                </p>

                                                                <h4 class="text-light mb-0">16</h4>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div> <!-- end card-->
                                            </div> <!-- end phòng cọc-->


                                            <!-- Đã thuê -->
                                            <div class="col">
                                                <div class="card card-animate --custom-bg-phongThue bg-gradient">
                                                    <div class="card-body text-light">
                                                        <div
                                                            class="d-flex justify-content-around gap-1 align-items-center">
                                                            <div class="avatar-sm flex-shrink-0">
                                                                <span
                                                                    class="avatar-title bg-soft-light rounded-circle fs-3">
                                                                    <i
                                                                        class="las la-user-lock align-middle text-light opacity-100"></i>
                                                                </span>
                                                            </div>

                                                            <div class="">
                                                                <p
                                                                    class="text-uppercase text-light fw-semibold fs-14 mb-1">
                                                                    Đã <br class="d-lg-none"> Thuê
                                                                </p>

                                                                <h4 class="text-light mb-0">16</h4>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div> <!-- end card-->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-7">
                                        <!-- Check In -->
                                        <div class="card card-animate">
                                            <div class="card-header bg-success bg-gradient">
                                                <h5 class="fw-semibold mb-0 text-white">
                                                    Danh sách check in
                                                </h5>
                                            </div>

                                            <!-- Danh sách phòng -->
                                            <div class="card-body bg-soft-success">
                                                <!-- Tầng G-->
                                                <div class="d-flex align-items-center gap-3 gap-md-2 gap-lg-3">
                                                    <!-- Tên Tầng -->
                                                    <div mb-0
                                                        class="rounded-3 bg-primary bg-gradient d-flex align-self-stretch">
                                                        <div class="p-2 d-flex text-center">
                                                            <p class="text-uppercase text-white fw-semibold fs-12 mb-0 align-self-center"
                                                                style="width: 75px;">
                                                                Tầng G
                                                            </p>
                                                        </div><!-- end card body -->
                                                    </div>

                                                    <!-- Phòng -->
                                                    <div class="d-flex flex-wrap gap-1">
                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p data-bs-toggle="modal"
                                                                    data-bs-target="#ChiTietPhong-Modal"
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    001
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongCoc-CocDu bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    003
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongCoc-CocDu bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    005
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    008
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    009
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Tầng 1-->
                                                <div class="d-flex align-items-center gap-3 gap-md-2 gap-lg-3 mt-2">
                                                    <!-- Tên Tầng -->
                                                    <div mb-0
                                                        class="rounded-3 bg-primary bg-gradient d-flex align-self-stretch">
                                                        <div class="p-2 d-flex text-center">
                                                            <p class="text-uppercase text-white fw-semibold fs-12 mb-0 align-self-center"
                                                                style="width: 75px;">
                                                                Tầng G
                                                            </p>
                                                        </div><!-- end card body -->
                                                    </div>

                                                    <!-- Phòng -->
                                                    <div class="d-flex flex-wrap gap-1">

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongCoc-CocDu bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    002
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    005
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    006
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongCoc-CocDu bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    008
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongCoc-CocDu bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    010
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongCoc-CocDu bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    011
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>
                                                    </div>
                                                </div>



                                                <!-- Tầng 2-->
                                                <div class="d-flex align-items-center gap-3 gap-md-2 gap-lg-3 mt-2">
                                                    <!-- Tên Tầng -->
                                                    <div mb-0
                                                        class="rounded-3 bg-primary bg-gradient d-flex align-self-stretch">
                                                        <div class="p-2 d-flex text-center">
                                                            <p class="text-uppercase text-white fw-semibold fs-12 mb-0 align-self-center"
                                                                style="width: 75px;">
                                                                Tầng G
                                                            </p>
                                                        </div><!-- end card body -->
                                                    </div>

                                                    <!-- Phòng -->
                                                    <div class="d-flex flex-wrap gap-1">

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongCoc-CocDu bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    003
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongCoc-CocDu bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    005
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongCoc-CocDu bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    006
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    009
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Check out -->
                                        <div class="card card-animate">
                                            <div class="card-header bg-secondary bg-gradient">
                                                <h5 class="fw-semibold mb-0 text-white">
                                                    Danh sách check out
                                                </h5>
                                            </div>

                                            <!-- Danh sách phòng -->
                                            <div class="card-body bg-soft-secondary">
                                                <!-- Tầng G-->
                                                <div class="d-flex align-items-center gap-3 gap-md-2 gap-lg-3">
                                                    <!-- Tên Tầng -->
                                                    <div mb-0
                                                        class="rounded-3 bg-primary bg-gradient d-flex align-self-stretch">
                                                        <div class="p-2 d-flex text-center">
                                                            <p class="text-uppercase text-white fw-semibold fs-12 mb-0 align-self-center"
                                                                style="width: 75px;">
                                                                Tầng G
                                                            </p>
                                                        </div><!-- end card body -->
                                                    </div>

                                                    <!-- Phòng -->
                                                    <div class="d-flex flex-wrap gap-1">

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongThue bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    002
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongThue bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    004
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongThue bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    006
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongThue bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    007
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Tầng 1-->
                                                <div class="d-flex align-items-center gap-3 gap-md-2 gap-lg-3 mt-2">
                                                    <!-- Tên Tầng -->
                                                    <div mb-0
                                                        class="rounded-3 bg-primary bg-gradient d-flex align-self-stretch">
                                                        <div class="p-2 d-flex text-center">
                                                            <p class="text-uppercase text-white fw-semibold fs-12 mb-0 align-self-center"
                                                                style="width: 75px;">
                                                                Tầng G
                                                            </p>
                                                        </div><!-- end card body -->
                                                    </div>

                                                    <!-- Phòng -->
                                                    <div class="d-flex flex-wrap gap-1">
                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongThue bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    001
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongThue bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    003
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div class="mb-0 card card-animate bg-dark bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    004
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongThue bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    007
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongThue bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    009
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongThue bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    010
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>
                                                    </div>
                                                </div>



                                                <!-- Tầng 2-->
                                                <div class="d-flex align-items-center gap-3 gap-md-2 gap-lg-3 mt-2">
                                                    <!-- Tên Tầng -->
                                                    <div mb-0
                                                        class="rounded-3 bg-primary bg-gradient d-flex align-self-stretch">
                                                        <div class="p-2 d-flex text-center">
                                                            <p class="text-uppercase text-white fw-semibold fs-12 mb-0 align-self-center"
                                                                style="width: 75px;">
                                                                Tầng G
                                                            </p>
                                                        </div><!-- end card body -->
                                                    </div>

                                                    <!-- Phòng -->
                                                    <div class="d-flex flex-wrap gap-1">
                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongThue bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    001
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongThue bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    002
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongThue bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    004
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongThue bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    007
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongThue bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    008
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div class="mb-0 card card-animate bg-dark bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    010
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div class="mb-0 card card-animate bg-dark bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    011
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-5 d-none d-lg-block">
                                        <div class="card card-height-100">
                                            <div
                                                class="card-header align-items-center d-flex bg-primary bg-gradient">
                                                <h4 class="card-title mb-0 text-white fs-15">
                                                    <span class="">Mã Phòng: </span>
                                                    <span class="fw-bold">AP</span> <!-- Mã Toà -->
                                                    <span class="fw-bold">_</span>
                                                    <span class="fw-bold">1402</span> <!-- Mã Phòng -->
                                                    <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                                                    <span class="">Loại Phòng: </span>
                                                    <span class="fw-bold">Studio Special</span>
                                                    <!-- Loại Phòng -->
                                                </h4>

                                            </div><!-- end card header -->



                                            <div class="card-body fs-14">
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-pills animation-nav bg-light nav-justified gap-2 mb-3"
                                                    role="tablist">
                                                    <li class="nav-item waves-effect waves-light">
                                                        <a class="nav-link active" data-bs-toggle="tab"
                                                            href="#animation-info" role="tab">
                                                            Thông tin phòng
                                                        </a>
                                                    </li>
                                                    <li class="nav-item waves-effect waves-light">
                                                        <a class="nav-link" data-bs-toggle="tab"
                                                            href="#animation-history-in" role="tab">
                                                            Lịch sử Check in
                                                        </a>
                                                    </li>
                                                    <li class="nav-item waves-effect waves-light">
                                                        <a class="nav-link" data-bs-toggle="tab"
                                                            href="#animation-history-out" role="tab">
                                                            Lịch sử Check out
                                                        </a>
                                                    </li>
                                                </ul>


                                                <div class="tab-content text-muted">
                                                    <div class="tab-pane active" id="animation-info"
                                                        role="tabpanel">

                                                        <!-- Thông tin cơ bản -->
                                                        <div class="">
                                                            <h5 class="text-capitalize fw-semibold mb-3">Thông
                                                                tin cơ
                                                                bản:</h5>

                                                            <div class="row text-capitalize text-muted">
                                                                <div class="col-5">
                                                                    <p class="mb-1">
                                                                        Số phòng ngủ:
                                                                        <a class="fw-bold">2</a>
                                                                    </p>
                                                                </div>

                                                                <div class="col-3">
                                                                    <p class="mb-1">
                                                                        Số WC:
                                                                        <a class="fw-bold">2</a>
                                                                    </p>
                                                                </div>

                                                                <div class="col-4">
                                                                    <p class="mb-1">
                                                                        Diện tích:
                                                                        <a class="fw-bold text-lowercase">72
                                                                            m²</a>
                                                                    </p>

                                                                </div>
                                                            </div>

                                                            <div class="table-responsive mt-2">
                                                                <table class="table">
                                                                    <tbody class="fs-13">
                                                                        <tr class="">
                                                                            <td class="border-bottom-0 p-0">
                                                                                <div class="d-flex w-100">
                                                                                    <span style="width: 110px;">Giá
                                                                                        phòng:</span>
                                                                                    <a class="fw-bold">2.500.000
                                                                                        VNĐ</a>
                                                                                </div>
                                                                            </td>

                                                                            <td class="border-bottom-0 p-0">
                                                                                <div class="d-flex w-100">
                                                                                    <span style="width: 85px;">Giá
                                                                                        cọc:</span>
                                                                                    <a
                                                                                        class="fw-bold  flex-grow-1 text-end">1.000.000
                                                                                        VNĐ</a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="">
                                                                            <td class="border-bottom-0 p-0">
                                                                                <div class="d-flex w-100">
                                                                                    <span style="width: 110px;">
                                                                                        Ngày ở dự kiến:</span>
                                                                                    <a
                                                                                        class="fw-bold">23/06/2023</a>
                                                                                </div>
                                                                            </td>

                                                                            <td class="border-bottom-0 p-0">
                                                                                <div class="d-flex w-100">
                                                                                    <span
                                                                                        style="width: 85px; font-size: 11.5px;">
                                                                                        Cọc đã đóng:</span>
                                                                                    <a
                                                                                        class="fw-bold flex-grow-1 text-end">700.000
                                                                                        VNĐ</a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="">

                                                                            <td class="border-bottom-0 p-0">
                                                                                <div class="d-flex w-100">
                                                                                    <span style="width: 110px;">Số
                                                                                        lần đóng
                                                                                        cọc:</span>
                                                                                    <a class="fw-bold">3</a>
                                                                                </div>
                                                                            </td>


                                                                            <td class="border-bottom-0 p-0">
                                                                                <div class="d-flex w-100">
                                                                                    <span style="width: 85px;">Cọc
                                                                                        còn
                                                                                        lại:</span>
                                                                                    <a
                                                                                        class="fw-bold flex-grow-1 text-end">300.000
                                                                                        VNĐ</a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <!-- end row -->


                                                        <!-- Dịch vụ -->
                                                        <div class="row border-top py-3">
                                                            <h5 class="text-capitalize fw-semibold">Dịch vụ:
                                                            </h5>

                                                            <div class="table-responsive table-card mt-2 fs-14">
                                                                <table
                                                                    class="table table-borderless table-nowrap table-centered align-middle mb-0">
                                                                    <thead class="table-light text-muted">
                                                                        <tr>
                                                                            <th scope="col">Loại dịch vụ</th>
                                                                            <th scope="col">Giá tiền</th>
                                                                            <th scope="col">Đơn vị</th>
                                                                        </tr>
                                                                    </thead><!-- end thead -->
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <label
                                                                                        class="form-check-label ms-1">
                                                                                        Điện sinh hoạt
                                                                                    </label>
                                                                                </div>
                                                                            </td>
                                                                            <td class="text-muted">3.500</td>
                                                                            <td class="text-muted">VNĐ/Kwh</td>
                                                                        </tr><!-- end -->
                                                                        <tr>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <label
                                                                                        class="form-check-label ms-1">
                                                                                        Nước sinh hoạt
                                                                                    </label>
                                                                                </div>
                                                                            </td>
                                                                            <td class="text-muted">100.000</td>
                                                                            <td class="text-muted">
                                                                                VNĐ/Người/Tháng</td>
                                                                        </tr><!-- end -->
                                                                        <tr>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <label
                                                                                        class="form-check-label ms-1">
                                                                                        Giữ xe 2 bánh
                                                                                    </label>
                                                                                </div>
                                                                            </td>
                                                                            <td class="text-muted">100.000</td>
                                                                            <td class="text-muted">
                                                                                VNĐ/Chiếc/Tháng</td>
                                                                        </tr><!-- end -->
                                                                        <tr>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <label
                                                                                        class="form-check-label ms-1">
                                                                                        Giặt sấy cao cấp
                                                                                    </label>
                                                                                </div>
                                                                            </td>
                                                                            <td class="text-muted">50.000</td>
                                                                            <td class="text-muted">
                                                                                VNĐ/Người/Tháng</td>
                                                                        </tr><!-- end -->
                                                                    </tbody><!-- end tbody -->
                                                                </table><!-- end table -->
                                                            </div>
                                                        </div>


                                                        <!-- Tiện ích nội khu -->
                                                        <div class="row border-top py-3">
                                                            <h5 class="text-capitalize fw-semibold text-muted">
                                                                Tiện ích
                                                                nội khu:
                                                            </h5>

                                                            <div class="row row-cols-2 row-cols-xxl-3 mt-2">
                                                                <div class="col">
                                                                    <li class="list-group-item ps-0">
                                                                        <div class="d-flex align-items-start">
                                                                            <div
                                                                                class="form-check ps-0 flex-sharink-0">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input ms-0"
                                                                                    checked="" disabled="">
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <label
                                                                                    class="form-check-label mb-0 ps-2">
                                                                                    Đổ xe máy
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>

                                                                <div class="col">
                                                                    <li class="list-group-item ps-0">
                                                                        <div class="d-flex align-items-start">
                                                                            <div
                                                                                class="form-check ps-0 flex-sharink-0">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input ms-0"
                                                                                    checked="" disabled="">
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <label
                                                                                    class="form-check-label mb-0 ps-2">
                                                                                    Đổ xe hơi
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>

                                                                <div class="col">
                                                                    <li class="list-group-item ps-0">
                                                                        <div class="d-flex align-items-start">
                                                                            <div
                                                                                class="form-check ps-0 flex-sharink-0">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input ms-0"
                                                                                    checked="" disabled="">
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <label
                                                                                    class="form-check-label mb-0 ps-2">
                                                                                    Bể bơi
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>

                                                                <div class="col">
                                                                    <li class="list-group-item ps-0">
                                                                        <div class="d-flex align-items-start">
                                                                            <div
                                                                                class="form-check ps-0 flex-sharink-0">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input ms-0"
                                                                                    checked="" disabled="">
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <label
                                                                                    class="form-check-label mb-0 ps-2">
                                                                                    Giặt phơi
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>

                                                                <div class="col">
                                                                    <li class="list-group-item ps-0">
                                                                        <div class="d-flex align-items-start">
                                                                            <div
                                                                                class="form-check ps-0 flex-sharink-0">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input ms-0"
                                                                                    checked="" disabled="">
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <label
                                                                                    class="form-check-label mb-0 ps-2">
                                                                                    Sấy dịch vụ
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>

                                                                <div class="col">
                                                                    <li class="list-group-item ps-0">
                                                                        <div class="d-flex align-items-start">
                                                                            <div
                                                                                class="form-check ps-0 flex-sharink-0">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input ms-0"
                                                                                    checked="" disabled="">
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <label
                                                                                    class="form-check-label mb-0 ps-2">
                                                                                    GYM
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>

                                                                <div class="col">
                                                                    <li class="list-group-item ps-0">
                                                                        <div class="d-flex align-items-start">
                                                                            <div
                                                                                class="form-check ps-0 flex-sharink-0">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input ms-0"
                                                                                    checked="" disabled="">
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <label
                                                                                    class="form-check-label mb-0 ps-2">
                                                                                    Coffee
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>

                                                                <div class="col">
                                                                    <li class="list-group-item ps-0">
                                                                        <div class="d-flex align-items-start">
                                                                            <div
                                                                                class="form-check ps-0 flex-sharink-0">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input ms-0"
                                                                                    checked="" disabled="">
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <label
                                                                                    class="form-check-label mb-0 ps-2">
                                                                                    Nhà hàng
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>

                                                                <div class="col">
                                                                    <li class="list-group-item ps-0">
                                                                        <div class="d-flex align-items-start">
                                                                            <div
                                                                                class="form-check ps-0 flex-sharink-0">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input ms-0"
                                                                                    checked="" disabled="">
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <label
                                                                                    class="form-check-label mb-0 ps-2">
                                                                                    Shop
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <!-- Nội thất -->
                                                        <div class="row border-top py-3">
                                                            <h5 class="text-capitalize fw-semibold text-muted">
                                                                Nội thất:
                                                            </h5>

                                                            <div class="row row-cols-2 row-cols-xxl-3 mt-2">
                                                                <div class="col">
                                                                    <li class="list-group-item ps-0">
                                                                        <div class="d-flex align-items-start">
                                                                            <div
                                                                                class="form-check ps-0 flex-sharink-0">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input ms-0"
                                                                                    checked="" disabled="">
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <label
                                                                                    class="form-check-label mb-0 ps-2">
                                                                                    Hệ tủ bếp
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>

                                                                <div class="col">
                                                                    <li class="list-group-item ps-0">
                                                                        <div class="d-flex align-items-start">
                                                                            <div
                                                                                class="form-check ps-0 flex-sharink-0">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input ms-0"
                                                                                    checked="" disabled="">
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <label
                                                                                    class="form-check-label mb-0 ps-2">
                                                                                    Giường
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>

                                                                <div class="col">
                                                                    <li class="list-group-item ps-0">
                                                                        <div class="d-flex align-items-start">
                                                                            <div
                                                                                class="form-check ps-0 flex-sharink-0">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input ms-0"
                                                                                    checked="" disabled="">
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <label
                                                                                    class="form-check-label mb-0 ps-2">
                                                                                    Bộ bàn ăn
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>

                                                                <div class="col">
                                                                    <li class="list-group-item ps-0">
                                                                        <div class="d-flex align-items-start">
                                                                            <div
                                                                                class="form-check ps-0 flex-sharink-0">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input ms-0"
                                                                                    checked="" disabled="">
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <label
                                                                                    class="form-check-label mb-0 ps-2">
                                                                                    Nệm
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>

                                                                <div class="col">
                                                                    <li class="list-group-item ps-0">
                                                                        <div class="d-flex align-items-start">
                                                                            <div
                                                                                class="form-check ps-0 flex-sharink-0">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input ms-0"
                                                                                    checked="" disabled="">
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <label
                                                                                    class="form-check-label mb-0 ps-2">
                                                                                    Bộ ghế ăn
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>

                                                                <div class="col">
                                                                    <li class="list-group-item ps-0">
                                                                        <div class="d-flex align-items-start">
                                                                            <div
                                                                                class="form-check ps-0 flex-sharink-0">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input ms-0"
                                                                                    checked="" disabled="">
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <label
                                                                                    class="form-check-label mb-0 ps-2">
                                                                                    Kệ TV
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>

                                                                <div class="col">
                                                                    <li class="list-group-item ps-0">
                                                                        <div class="d-flex align-items-start">
                                                                            <div
                                                                                class="form-check ps-0 flex-sharink-0">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input ms-0"
                                                                                    checked="" disabled="">
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <label
                                                                                    class="form-check-label mb-0 ps-2">
                                                                                    Bộ Soffa
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>

                                                                <div class="col">
                                                                    <li class="list-group-item ps-0">
                                                                        <div class="d-flex align-items-start">
                                                                            <div
                                                                                class="form-check ps-0 flex-sharink-0">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input ms-0"
                                                                                    checked="" disabled="">
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <label
                                                                                    class="form-check-label mb-0 ps-2">
                                                                                    Kệ Tab
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>

                                                                <div class="col">
                                                                    <li class="list-group-item ps-0">
                                                                        <div class="d-flex align-items-start">
                                                                            <div
                                                                                class="form-check ps-0 flex-sharink-0">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input ms-0"
                                                                                    checked="" disabled="">
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <label
                                                                                    class="form-check-label mb-0 ps-2">
                                                                                    Bộ bàn khác
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>

                                                                <div class="col">
                                                                    <li class="list-group-item ps-0">
                                                                        <div class="d-flex align-items-start">
                                                                            <div
                                                                                class="form-check ps-0 flex-sharink-0">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input ms-0"
                                                                                    checked="" disabled="">
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <label
                                                                                    class="form-check-label mb-0 ps-2">
                                                                                    Tủ giày
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>

                                                                <div class="col">
                                                                    <li class="list-group-item ps-0">
                                                                        <div class="d-flex align-items-start">
                                                                            <div
                                                                                class="form-check ps-0 flex-sharink-0">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input ms-0"
                                                                                    checked="" disabled="">
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <label
                                                                                    class="form-check-label mb-0 ps-2">
                                                                                    Hệ tủ quần áo
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>

                                                                <div class="col">
                                                                    <li class="list-group-item ps-0">
                                                                        <div class="d-flex align-items-start">
                                                                            <div
                                                                                class="form-check ps-0 flex-sharink-0">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input ms-0"
                                                                                    checked="" disabled="">
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <label
                                                                                    class="form-check-label mb-0 ps-2">
                                                                                    Hệ Toilet
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <!-- Thiết bị trong phòng -->
                                                        <div class="row border-top py-3">
                                                            <h5 class="text-capitalize fw-semibold text-muted">
                                                                Thiết bị trong phòng:
                                                            </h5>

                                                            <div class="row row-cols-2 row-cols-xxl-3 mt-2">
                                                                <div class="col">
                                                                    <li class="list-group-item ps-0">
                                                                        <div class="d-flex align-items-start">
                                                                            <div
                                                                                class="form-check ps-0 flex-sharink-0">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input ms-0"
                                                                                    checked disabled>
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <label
                                                                                    class="form-check-label mb-0 ps-2">
                                                                                    Bộ điều hoà
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>

                                                                <div class="col">
                                                                    <li class="list-group-item ps-0">
                                                                        <div class="d-flex align-items-start">
                                                                            <div
                                                                                class="form-check ps-0 flex-sharink-0">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input ms-0"
                                                                                    checked disabled>
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <label
                                                                                    class="form-check-label mb-0 ps-2">
                                                                                    Máy sấy đồ
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>

                                                                <div class="col">
                                                                    <li class="list-group-item ps-0">
                                                                        <div class="d-flex align-items-start">
                                                                            <div
                                                                                class="form-check ps-0 flex-sharink-0">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input ms-0"
                                                                                    checked disabled>
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <label
                                                                                    class="form-check-label mb-0 ps-2">
                                                                                    Tủ lạnh
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>

                                                                <div class="col">
                                                                    <li class="list-group-item ps-0">
                                                                        <div class="d-flex align-items-start">
                                                                            <div
                                                                                class="form-check ps-0 flex-sharink-0">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input ms-0"
                                                                                    checked disabled>
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <label
                                                                                    class="form-check-label mb-0 ps-2">
                                                                                    Máy rửa bát
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>

                                                                <div class="col">
                                                                    <li class="list-group-item ps-0">
                                                                        <div class="d-flex align-items-start">
                                                                            <div
                                                                                class="form-check ps-0 flex-sharink-0">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input ms-0"
                                                                                    checked disabled>
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <label
                                                                                    class="form-check-label mb-0 ps-2">
                                                                                    Bếp (Từ/Hồng ngoại)
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>

                                                                <div class="col">
                                                                    <li class="list-group-item ps-0">
                                                                        <div class="d-flex align-items-start">
                                                                            <div
                                                                                class="form-check ps-0 flex-sharink-0">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input ms-0"
                                                                                    checked disabled>
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <label
                                                                                    class="form-check-label mb-0 ps-2">
                                                                                    Bộ Tivi
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>

                                                                <div class="col">
                                                                    <li class="list-group-item ps-0">
                                                                        <div class="d-flex align-items-start">
                                                                            <div
                                                                                class="form-check ps-0 flex-sharink-0">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input ms-0"
                                                                                    checked disabled>
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <label
                                                                                    class="form-check-label mb-0 ps-2">
                                                                                    Máy hút mùi
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>

                                                                <div class="col">
                                                                    <li class="list-group-item ps-0">
                                                                        <div class="d-flex align-items-start">
                                                                            <div
                                                                                class="form-check ps-0 flex-sharink-0">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input ms-0"
                                                                                    checked disabled>
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <label
                                                                                    class="form-check-label mb-0 ps-2">
                                                                                    Lò vi sóng
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>

                                                                <div class="col">
                                                                    <li class="list-group-item ps-0">
                                                                        <div class="d-flex align-items-start">
                                                                            <div
                                                                                class="form-check ps-0 flex-sharink-0">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input ms-0"
                                                                                    checked disabled>
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <label
                                                                                    class="form-check-label mb-0 ps-2">
                                                                                    Hệ nước nóng lạnh
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>

                                                                <div class="col">
                                                                    <li class="list-group-item ps-0">
                                                                        <div class="d-flex align-items-start">
                                                                            <div
                                                                                class="form-check ps-0 flex-sharink-0">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input ms-0"
                                                                                    checked disabled>
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <label
                                                                                    class="form-check-label mb-0 ps-2">
                                                                                    Modem Wifi
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>

                                                                <div class="col">
                                                                    <li class="list-group-item ps-0">
                                                                        <div class="d-flex align-items-start">
                                                                            <div
                                                                                class="form-check ps-0 flex-sharink-0">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input ms-0"
                                                                                    checked disabled>
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <label
                                                                                    class="form-check-label mb-0 ps-2">
                                                                                    Máy giặt
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>

                                                                <div class="col">
                                                                    <li class="list-group-item ps-0">
                                                                        <div class="d-flex align-items-start">
                                                                            <div
                                                                                class="form-check ps-0 flex-sharink-0">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input ms-0"
                                                                                    checked disabled>
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <label
                                                                                    class="form-check-label mb-0 ps-2">
                                                                                    Máy sấy tóc
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane" id="animation-history-in" role="tabpanel">
                                                        <div class="table-responsive">
                                                            <!-- Striped Rows -->
                                                            <table
                                                                class="table table-striped-columns align-middle table-nowrap mb-0">

                                                                <thead class="bg-soft-dark">
                                                                    <tr>
                                                                        <th scope="col">STT</th>
                                                                        <th scope="col">Người Thuê</th>
                                                                        <th scope="col">Ngày checkin</th>
                                                                        <th scope="col">Người sales</th>
                                                                        <th scope="col">Chi tiết</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row" class="text-center">1
                                                                        </th>
                                                                        <td>Nicholas Ball</td>
                                                                        <td>Nov 14, 2021</td>
                                                                        <td>Anna Adame</td>
                                                                        <td class="text-center">
                                                                            <button
                                                                                class="btn btn-sm bg-gr btn-info card-animate">
                                                                                <i class="ri-eye-line"></i>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" class="text-center">2
                                                                        </th>
                                                                        <td>Nicholas Ball</td>
                                                                        <td>Nov 21, 2021</td>
                                                                        <td>Anna Adame</td>
                                                                        <td class="text-center">
                                                                            <button
                                                                                class="btn btn-sm bg-gr btn-info card-animate">
                                                                                <i class="ri-eye-line"></i>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" class="text-center">3
                                                                        </th>
                                                                        <td>Nicholas Ball</td>
                                                                        <td>Nov 24, 2021</td>
                                                                        <td>Anna Adame</td>
                                                                        <td class="text-center">
                                                                            <button
                                                                                class="btn btn-sm bg-gr btn-info card-animate">
                                                                                <i class="ri-eye-line"></i>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" class="text-center">4
                                                                        </th>
                                                                        <td>Nicholas Ball</td>
                                                                        <td>Nov 25, 2021</td>
                                                                        <td>Anna Adame</td>
                                                                        <td class="text-center">
                                                                            <button
                                                                                class="btn btn-sm bg-gr btn-info card-animate">
                                                                                <i class="ri-eye-line"></i>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                            <hr class="mb-0">
                                                            <!-- <a class="btn btn-primary" href="#" role="button">Button</a> -->
                                                            <!-- Tạo mới -->
                                                            <div class="d-flex justify-content-end mt-3">
                                                                <a href="create-checkin.html"
                                                                    class="btn btn-secondary btn-label card-animate">
                                                                    <i
                                                                        class="las la-sign-in-alt label-icon align-middle fs-18 me-2"></i>
                                                                    Tạo Check In
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane" id="animation-history-out"
                                                        role="tabpanel">
                                                        <div class="table-responsive">
                                                            <!-- Striped Rows -->
                                                            <table
                                                                class="table table-striped-columns align-middle table-nowrap mb-0">

                                                                <thead class="bg-soft-dark">
                                                                    <tr>
                                                                        <th scope="col">STT</th>
                                                                        <th scope="col">Người Thuê</th>
                                                                        <th scope="col">Ngày checkout</th>
                                                                        <th scope="col">Người sales</th>
                                                                        <th scope="col">Chi tiết</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row" class="text-center">1
                                                                        </th>
                                                                        <td>Nicholas Ball</td>
                                                                        <td>Nov 14, 2021</td>
                                                                        <td>Anna Adame</td>
                                                                        <td class="text-center">
                                                                            <button
                                                                                class="btn btn-sm bg-gr btn-info card-animate">
                                                                                <i class="ri-eye-line"></i>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" class="text-center">2
                                                                        </th>
                                                                        <td>Nicholas Ball</td>
                                                                        <td>Nov 21, 2021</td>
                                                                        <td>Anna Adame</td>
                                                                        <td class="text-center">
                                                                            <button
                                                                                class="btn btn-sm bg-gr btn-info card-animate">
                                                                                <i class="ri-eye-line"></i>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" class="text-center">3
                                                                        </th>
                                                                        <td>Nicholas Ball</td>
                                                                        <td>Nov 24, 2021</td>
                                                                        <td>Anna Adame</td>
                                                                        <td class="text-center">
                                                                            <button
                                                                                class="btn btn-sm bg-gr btn-info card-animate">
                                                                                <i class="ri-eye-line"></i>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" class="text-center">4
                                                                        </th>
                                                                        <td>Nicholas Ball</td>
                                                                        <td>Nov 25, 2021</td>
                                                                        <td>Anna Adame</td>
                                                                        <td class="text-center">
                                                                            <button
                                                                                class="btn btn-sm bg-gr btn-info card-animate">
                                                                                <i class="ri-eye-line"></i>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                            <hr class="mb-0">

                                                            <!-- Tạo mới -->
                                                            <div class="d-flex justify-content-end mt-3">
                                                                <a href="create-checkout.html"
                                                                    class="btn btn-secondary btn-label card-animate">
                                                                    <i
                                                                        class="las la-sign-out-alt label-icon align-middle fs-18 me-2"></i>
                                                                    Tạo Check out
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end card-body -->
                                        </div><!-- end card -->
                                    </div>
                                </div>
                            </div>


                            <!-- Vệ sinh -->
                            <div class="tab-pane" id="veSinh" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="card card-height-100 card-animate">
                                            <div class="card-body p-0">
                                                <div class="alert alert-warning border-0 rounded-0 m-0 d-flex align-items-center"
                                                    role="alert">
                                                    <i data-feather="alert-triangle"
                                                        class="text-warning me-2 icon-sm"></i>
                                                    <div class="flex-grow-1 text-truncate">
                                                        Your free trial expired in <b>17</b> days.
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <a href="pages-pricing.html"
                                                            class="text-reset text-decoration-underline"><b>Upgrade</b></a>
                                                    </div>
                                                </div>

                                                <div class="row align-items-end">
                                                    <div class="col-sm-8 pb-1 px-3">
                                                        <div class="p-3" style="height: 128px;">
                                                            <p class="fs-16 lh-base">Upgrade your plan from a
                                                                <span class="fw-semibold">Free trial</span>, to
                                                                ‘Premium Plan’ <i class="mdi mdi-arrow-right"></i>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="px-3">
                                                            <img src="assets/images/user-illustarator-2.png"
                                                                class="img-fluid py-3 pt-5 pt-md-0" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end card-body-->
                                        </div>
                                    </div>

                                    <div class="col-lg-5">
                                        <div class="row row-col-2 row-cols-md-4 row-cols-lg-2 text-center">
                                            <div class="col">
                                                <div class="card mb-3 card-animate bg-dark bg-gradient">
                                                    <div class="card-body text-light">
                                                        <div
                                                            class="d-flex justify-content-around gap-1 align-items-center">
                                                            <div class="avatar-sm flex-shrink-0">
                                                                <span
                                                                    class="avatar-title bg-soft-light rounded-circle fs-3">
                                                                    <i
                                                                        class="las la-lock align-middle text-light opacity-100"></i>
                                                                </span>
                                                            </div>

                                                            <div class="">
                                                                <p
                                                                    class="text-uppercase text-light fw-semibold fs-14 mb-1">
                                                                    Phòng Khoá
                                                                </p>

                                                                <h4 class="text-light mb-0">16</h4>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div> <!-- end card-->
                                            </div> <!-- end col-->

                                            <div class="col">
                                                <div
                                                    class="card mb-3 card-animate --custom-bg-phongTrong bg-gradient">
                                                    <div class="card-body text-light">
                                                        <div
                                                            class="d-flex justify-content-around gap-1 align-items-center">
                                                            <div class="avatar-sm flex-shrink-0">
                                                                <span
                                                                    class="avatar-title bg-soft-light rounded-circle fs-3">
                                                                    <i
                                                                        class="las la-user-plus align-middle text-light opacity-100"></i>
                                                                </span>
                                                            </div>

                                                            <div class="">
                                                                <p
                                                                    class="text-uppercase text-light fw-semibold fs-14 mb-1">
                                                                    Phòng trống
                                                                </p>

                                                                <h4 class="text-light mb-0">16</h4>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div> <!-- end card-->
                                            </div> <!-- end col-->

                                            <div class="col">
                                                <div
                                                    class="card card-animate --custom-bg-phongCoc-CocDu bg-gradient">
                                                    <div class="card-body text-light">
                                                        <div
                                                            class="d-flex justify-content-around gap-1 align-items-center">
                                                            <div class="avatar-sm flex-shrink-0">
                                                                <span
                                                                    class="avatar-title bg-soft-light rounded-circle fs-3">
                                                                    <i
                                                                        class="las la-money-check-alt align-middle text-light opacity-100"></i>
                                                                </span>
                                                            </div>

                                                            <div class="">
                                                                <p
                                                                    class="text-uppercase text-light fw-semibold fs-14 mb-1">
                                                                    Cọc / Cọc đủ
                                                                </p>

                                                                <h4 class="text-light mb-0">16</h4>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div> <!-- end card-->
                                            </div> <!-- end col-->

                                            <div class="col">
                                                <div class="card card-animate --custom-bg-phongThue bg-gradient">
                                                    <div class="card-body text-light">
                                                        <div
                                                            class="d-flex justify-content-around gap-1 align-items-center">
                                                            <div class="avatar-sm flex-shrink-0">
                                                                <span
                                                                    class="avatar-title bg-soft-light rounded-circle fs-3">
                                                                    <i
                                                                        class="las la-user-lock align-middle text-light opacity-100"></i>
                                                                </span>
                                                            </div>

                                                            <div class="">
                                                                <p
                                                                    class="text-uppercase text-light fw-semibold fs-14 mb-1">
                                                                    Đã <br class="d-lg-none"> Thuê
                                                                </p>

                                                                <h4 class="text-light mb-0">16</h4>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div> <!-- end card-->
                                            </div> <!-- end col-->
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="card card-animate">
                                            <!-- Danh sách phòng -->
                                            <div class="card-body">
                                                <!-- Tầng G-->
                                                <div class="d-flex align-items-center gap-3 gap-md-2 gap-lg-3">
                                                    <!-- Tên Tầng -->
                                                    <div mb-0
                                                        class="rounded-3 bg-primary bg-gradient d-flex align-self-stretch">
                                                        <div class="p-2 d-flex text-center">
                                                            <p class="text-uppercase text-white fw-semibold fs-12 mb-0 align-self-center"
                                                                style="width: 75px;">
                                                                Tầng G
                                                            </p>
                                                        </div><!-- end card body -->
                                                    </div>

                                                    <!-- Phòng -->
                                                    <div class="d-flex flex-wrap gap-1">
                                                        <div class="mb-0 card card-animate bg-dark bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p data-bs-toggle="modal"
                                                                    data-bs-target="#LichSuVeSinhPhong-Modal"
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    001
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongCoc-CocDu bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    002
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    003
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongThue bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    004
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div class="mb-0 card card-animate bg-dark bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    005
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongCoc-CocDu bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    006
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    007
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongThue bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    008
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div class="mb-0 card card-animate bg-dark bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    009
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Tầng 1-->
                                                <div class="d-flex align-items-center gap-3 gap-md-2 gap-lg-3 mt-2">
                                                    <!-- Tên Tầng -->
                                                    <div mb-0
                                                        class="rounded-3 bg-primary bg-gradient d-flex align-self-stretch">
                                                        <div class="p-2 d-flex text-center">
                                                            <p class="text-uppercase text-white fw-semibold fs-12 mb-0 align-self-center"
                                                                style="width: 75px;">
                                                                Tầng G
                                                            </p>
                                                        </div><!-- end card body -->
                                                    </div>

                                                    <!-- Phòng -->
                                                    <div class="d-flex flex-wrap gap-1">
                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    001
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    002
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    003
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    004
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    005
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    006
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    007
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    008
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    009
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    010
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    011
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>
                                                    </div>
                                                </div>



                                                <!-- Tầng 2-->
                                                <div class="d-flex align-items-center gap-3 gap-md-2 gap-lg-3 mt-2">
                                                    <!-- Tên Tầng -->
                                                    <div mb-0
                                                        class="rounded-3 bg-primary bg-gradient d-flex align-self-stretch">
                                                        <div class="p-2 d-flex text-center">
                                                            <p class="text-uppercase text-white fw-semibold fs-12 mb-0 align-self-center"
                                                                style="width: 75px;">
                                                                Tầng G
                                                            </p>
                                                        </div><!-- end card body -->
                                                    </div>

                                                    <!-- Phòng -->
                                                    <div class="d-flex flex-wrap gap-1">
                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    001
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    002
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    003
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    004
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    005
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    006
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    007
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    008
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    009
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    010
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    011
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-5 d-none d-lg-block">
                                        <div class="card card-height-100 card-animate">
                                            <div
                                                class="card-header align-items-center d-flex bg-primary bg-gradient">
                                                <h4 class="card-title mb-0 text-white fs-15">
                                                    <span class="">Mã Phòng: </span>
                                                    <span class="fw-bold">AP</span> <!-- Mã Toà -->
                                                    <span class="fw-bold">_</span>
                                                    <span class="fw-bold">1402</span> <!-- Mã Phòng -->
                                                    <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                                                    <span class="">Loại Phòng: </span>
                                                    <span class="fw-bold">Studio Special</span>
                                                    <!-- Loại Phòng -->
                                                </h4>

                                            </div><!-- end card header -->


                                            <!-- Lịch sử dọn vệ sinh phòng -->
                                            <div class="card-body fs-14">
                                                <h5 class="text-capitalize fw-semibold mb-2">
                                                    Lịch sử dọn vệ sinh phòng:</h5>

                                                <div class="table-responsive">
                                                    <!-- Striped Rows -->
                                                    <table
                                                        class="table table-striped-columns align-middle table-nowrap mb-0">

                                                        <thead class="bg-soft-dark">
                                                            <tr>
                                                                <th scope="col">STT</th>
                                                                <th scope="col">Người dọn</th>
                                                                <th scope="col">Ngày bắt đầu</th>
                                                                <th scope="col">Ngày kết thúc</th>
                                                                <th scope="col">Chi tiết</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row" class="text-center">1</th>
                                                                <td>Nicholas Ball</td>
                                                                <td>Nov 14, 2021</td>
                                                                <td>Nov 13, 2021</td>
                                                                <td class="text-center">
                                                                    <button
                                                                        class="btn btn-sm bg-gr btn-info card-animate">
                                                                        <i class="ri-eye-line"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row" class="text-center">2</th>
                                                                <td>Nicholas Ball</td>
                                                                <td>Nov 21, 2021</td>
                                                                <td>Nov 22, 2021</td>
                                                                <td class="text-center">
                                                                    <button
                                                                        class="btn btn-sm bg-gr btn-info card-animate">
                                                                        <i class="ri-eye-line"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row" class="text-center">3</th>
                                                                <td>Nicholas Ball</td>
                                                                <td>Nov 24, 2021</td>
                                                                <td>Nov 25, 2021</td>
                                                                <td class="text-center">
                                                                    <button
                                                                        class="btn btn-sm bg-gr btn-info card-animate">
                                                                        <i class="ri-eye-line"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row" class="text-center">4</th>
                                                                <td>Nicholas Ball</td>
                                                                <td>Nov 25, 2021</td>
                                                                <td>Nov 29, 2021</td>
                                                                <td class="text-center">
                                                                    <button
                                                                        class="btn btn-sm bg-gr btn-info card-animate">
                                                                        <i class="ri-eye-line"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div><!-- end card body -->

                                            <hr class="mb-0">

                                            <!-- Tạo mới -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-end">
                                                    <button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#veSinh-Modal"
                                                        class="btn btn-secondary btn-label card-animate">
                                                        <i
                                                            class="mdi mdi-broom label-icon align-middle fs-18 me-2"></i>
                                                        Tạo mới
                                                    </button>
                                                </div>
                                            </div>
                                        </div><!-- end card -->
                                    </div>
                                </div>
                            </div>


                            <!-- Hợp đồng -->
                            <div class="tab-pane" id="settings" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="card card-animate h-100">
                                            <div class="card-body p-0">
                                                <div class="alert alert-warning border-0 rounded-0 m-0 d-flex align-items-center"
                                                    role="alert">
                                                    <i data-feather="alert-triangle"
                                                        class="text-warning me-2 icon-sm"></i>
                                                    <div class="flex-grow-1 text-truncate">
                                                        Your free trial expired in <b>17</b> days.
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <a href="pages-pricing.html"
                                                            class="text-reset text-decoration-underline"><b>Upgrade</b></a>
                                                    </div>
                                                </div>

                                                <div class="row align-items-end">
                                                    <div class="col-sm-8 pb-1 px-3">
                                                        <div class="p-3" style="height: 128px;">
                                                            <p class="fs-16 lh-base">Upgrade your plan from a
                                                                <span class="fw-semibold">Free trial</span>, to
                                                                ‘Premium Plan’ <i class="mdi mdi-arrow-right"></i>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="px-3">
                                                            <img src="assets/images/user-illustarator-2.png"
                                                                class="img-fluid py-3 pt-5 pt-md-0" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end card-body-->
                                        </div>
                                    </div>

                                    <div class="col-lg-5">
                                        <div class="row h-100 row-col-2 row-cols-md-4 row-cols-lg-2 text-center">
                                            <div class="col">
                                                <div class="mb-0 card card-animate bg-primary bg-gradient">
                                                    <div class="card-body text-white">
                                                        <div
                                                            class="d-flex justify-content-around gap-1 align-items-center">
                                                            <div class="avatar-sm flex-shrink-0">
                                                                <span
                                                                    class="avatar-title bg-soft-light rounded-circle fs-3">
                                                                    <i
                                                                        class="las la-calculator align-middle  opacity-100"></i>
                                                                </span>
                                                            </div>

                                                            <div class=" ">
                                                                <p class="text-uppercase fw-semibold fs-12 mb-1">
                                                                    Tống số <br> hợp đồng
                                                                </p>

                                                                <h5 class="text-white mb-0">16</h5>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div> <!-- end card-->
                                            </div> <!-- end col-->

                                            <div class="col">
                                                <div
                                                    class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                    <div class="card-body text-light">
                                                        <div
                                                            class="d-flex justify-content-around gap-1 align-items-center">
                                                            <div class="avatar-sm flex-shrink-0">
                                                                <span
                                                                    class="avatar-title bg-soft-light rounded-circle fs-3">
                                                                    <i
                                                                        class="las la-user-plus align-middle text-light opacity-100"></i>
                                                                </span>
                                                            </div>

                                                            <div class="">
                                                                <p class="text-uppercase fw-semibold fs-12 mb-1">
                                                                    Hợp đồng <br> đang ở
                                                                </p>

                                                                <h5 class="text-light mb-0">16</h5>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div> <!-- end card-->
                                            </div> <!-- end col-->

                                            <div class="col d-flex align-items-end">
                                                <div
                                                    class="mb-0 card card-animate --custom-bg-phongCoc-CocDu bg-gradient flex-grow-1">
                                                    <div class="card-body text-light">
                                                        <div
                                                            class="d-flex justify-content-around gap-1 align-items-center">
                                                            <div class="avatar-sm flex-shrink-0">
                                                                <span
                                                                    class="avatar-title bg-soft-light rounded-circle fs-3">
                                                                    <i
                                                                        class="las la-exclamation-triangle align-middle text-light opacity-100"></i>
                                                                </span>
                                                            </div>

                                                            <div class="">
                                                                <p class="text-uppercase fw-semibold fs-12 mb-1">
                                                                    Sắp <br class="d-lg-none">
                                                                    hết hạn
                                                                </p>

                                                                <h5 class="text-light mb-0">16</h5>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div> <!-- end card-->
                                            </div> <!-- end col-->

                                            <div class="col d-flex align-items-end">
                                                <div
                                                    class="mb-0 card card-animate --custom-bg-phongThue bg-gradient flex-grow-1">
                                                    <div class="card-body text-light">
                                                        <div
                                                            class="d-flex justify-content-around gap-1 align-items-center">
                                                            <div class="avatar-sm flex-shrink-0">
                                                                <span
                                                                    class="avatar-title bg-soft-light rounded-circle fs-3">
                                                                    <i
                                                                        class="las la-exclamation-circle align-middle text-light opacity-100"></i>
                                                                </span>
                                                            </div>

                                                            <div class="">
                                                                <p
                                                                    class="text-uppercase text-light fw-semibold fs-12 mb-1">
                                                                    Check <br class="d-lg-none"> out
                                                                </p>

                                                                <h5 class="text-light mb-0">16</h5>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div> <!-- end card-->
                                            </div> <!-- end col-->
                                        </div>
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="card card-animate">
                                            <!-- Danh sách phòng -->
                                            <div class="card-body">
                                                <!-- Tầng G-->
                                                <div class="d-flex align-items-center gap-3 gap-md-2 gap-lg-3">
                                                    <!-- Tên Tầng -->
                                                    <div mb-0
                                                        class="rounded-3 bg-primary bg-gradient d-flex align-self-stretch">
                                                        <div class="p-2 d-flex text-center">
                                                            <p class="text-uppercase text-white fw-semibold fs-12 mb-0 align-self-center"
                                                                style="width: 75px;">
                                                                Tầng G
                                                            </p>
                                                        </div><!-- end card body -->
                                                    </div>

                                                    <!-- Phòng -->
                                                    <div class="d-flex flex-wrap gap-1">
                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p data-bs-toggle="modal"
                                                                    data-bs-target="#HopDong-Modal"
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    001
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongCoc-CocDu bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    002
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    003
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongThue bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    004
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    005
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongCoc-CocDu bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    006
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    007
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongThue bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    008
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    009
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Tầng 1-->
                                                <div class="d-flex align-items-center gap-3 gap-md-2 gap-lg-3 mt-2">
                                                    <!-- Tên Tầng -->
                                                    <div mb-0
                                                        class="rounded-3 bg-primary bg-gradient d-flex align-self-stretch">
                                                        <div class="p-2 d-flex text-center">
                                                            <p class="text-uppercase text-white fw-semibold fs-12 mb-0 align-self-center"
                                                                style="width: 75px;">
                                                                Tầng G
                                                            </p>
                                                        </div><!-- end card body -->
                                                    </div>

                                                    <!-- Phòng -->
                                                    <div class="d-flex flex-wrap gap-1">
                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    001
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    002
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    003
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    004
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    005
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    006
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    007
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    008
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    009
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    010
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    011
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>
                                                    </div>
                                                </div>



                                                <!-- Tầng 2-->
                                                <div class="d-flex align-items-center gap-3 gap-md-2 gap-lg-3 mt-2">
                                                    <!-- Tên Tầng -->
                                                    <div mb-0
                                                        class="rounded-3 bg-primary bg-gradient d-flex align-self-stretch">
                                                        <div class="p-2 d-flex text-center">
                                                            <p class="text-uppercase text-white fw-semibold fs-12 mb-0 align-self-center"
                                                                style="width: 75px;">
                                                                Tầng G
                                                            </p>
                                                        </div><!-- end card body -->
                                                    </div>

                                                    <!-- Phòng -->
                                                    <div class="d-flex flex-wrap gap-1">
                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    001
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    002
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    003
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    004
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    005
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    006
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    007
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    008
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    009
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    010
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>

                                                        <div
                                                            class="mb-0 card card-animate --custom-bg-phongTrong bg-gradient">
                                                            <div class="card-body p-2 text-center">
                                                                <p
                                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                                    011
                                                                </p>
                                                            </div><!-- end card body -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-5 d-none d-lg-block">
                                        <div class="card card-height-100 card-animate">
                                            <div
                                                class="card-header align-items-center d-flex bg-primary bg-gradient">
                                                <h4 class="card-title mb-0 text-white fs-15">
                                                    <span class="">Mã Phòng: </span>
                                                    <span class="fw-bold">AP</span> <!-- Mã Toà -->
                                                    <span class="fw-bold">_</span>
                                                    <span class="fw-bold">1402</span> <!-- Mã Phòng -->
                                                    <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                                                    <span class="">Loại Phòng: </span>
                                                    <span class="fw-bold">Studio Special</span>
                                                    <!-- Loại Phòng -->
                                                </h4>
                                            </div><!-- end card header -->


                                            <!-- Lịch sử hợp đồng -->
                                            <div class="card-body fs-14">
                                                <h5 class="text-capitalize fw-semibold mb-2">
                                                    Lịch sử hợp đồng:</h5>

                                                <div class="table-responsive" data-simplebar
                                                    data-simplebar-direction="rtl">
                                                    <!-- Striped Rows -->
                                                    <table
                                                        class="table table-striped-columns align-middle table-nowrap mb-0">

                                                        <thead class="bg-soft-dark">
                                                            <tr>
                                                                <th scope="col">Mã hợp đồng</th>
                                                                <th scope="col">Tên khách</th>
                                                                <th scope="col">Ngày check in</th>
                                                                <th scope="col">Ngày check out</th>
                                                                <th scope="col">Loại hợp đồng</th>
                                                                <th scope="col">Chi tiết</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row" class="text-center">
                                                                    Dex_T04746_4026</th>
                                                                <td>Nicholas Ball</td>
                                                                <td>Nov 14, 2021</td>
                                                                <td>Nov 14, 2021</td>
                                                                <td>Hợp đồng 6 tháng</td>
                                                                <td class="text-center">
                                                                    <button
                                                                        class="btn btn-sm bg-gr btn-info card-animate">
                                                                        <i class="ri-eye-line"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row" class="text-center">
                                                                    Dex_T04746_4026</th>
                                                                <td>Nicholas Ball</td>
                                                                <td>Nov 14, 2021</td>
                                                                <td>Nov 14, 2021</td>
                                                                <td>Hợp đồng 6 tháng</td>
                                                                <td class="text-center">
                                                                    <button
                                                                        class="btn btn-sm bg-gr btn-info card-animate">
                                                                        <i class="ri-eye-line"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row" class="text-center">
                                                                    Dex_T04746_4026</th>
                                                                <td>Nicholas Ball</td>
                                                                <td>Nov 14, 2021</td>
                                                                <td>Nov 14, 2021</td>
                                                                <td>Hợp đồng 6 tháng</td>
                                                                <td class="text-center">
                                                                    <button
                                                                        class="btn btn-sm bg-gr btn-info card-animate">
                                                                        <i class="ri-eye-line"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row" class="text-center">
                                                                    Dex_T04746_4026</th>
                                                                <td>Nicholas Ball</td>
                                                                <td>Nov 14, 2021</td>
                                                                <td>Nov 14, 2021</td>
                                                                <td>Hợp đồng 6 tháng</td>
                                                                <td class="text-center">
                                                                    <button
                                                                        class="btn btn-sm bg-gr btn-info card-animate">
                                                                        <i class="ri-eye-line"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div><!-- end card body -->

                                            <hr class="mb-0">

                                            <!-- Tạo mới -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-end">
                                                    <button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#HopDong-Modal"
                                                        class="btn btn-secondary btn-label card-animate">
                                                        <i
                                                            class="las la-file-medical label-icon align-middle fs-18 me-2"></i>
                                                        Tạo mới
                                                    </button>
                                                </div>
                                            </div>
                                        </div><!-- end card -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card-body -->
                </section>
                <!-- end content -->

            </div>
        </div><!-- container-fluid -->
    </div>
    <!-- End Page-content -->

        <!-- Tạo rổ hàng -->
    <div id="TaoRoHang-Modal" class="modal fade" tabindex="-1" aria-labelledby="TaoRoHang" aria-hidden="true"
    style="display: none;">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <!-- Tên Modal -->
                <div class="modal-header border-bottom d-flex align-items-center pb-3">
                    <h5 class="modal-title" id="TaoRoHang">
                        Tạo rổ hàng
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>

                <div class="modal-body fs-15">
                    <form class="needs-validation mt-1" novalidate>
                        <!-- Phòng áp dụng -->
                        <div class="">
                            <p class="fw-semibold">
                                Phòng áp dụng
                            </p>

                            <div class="card-body">
                                <!-- Tầng G-->
                                <div class="d-flex align-items-center gap-3 gap-md-2 gap-lg-3">
                                    <!-- Tên Tầng -->
                                    <div mb-0="" class="rounded-3 bg-primary bg-gradient d-flex align-self-stretch">
                                        <div class="p-2 d-flex text-center">
                                            <p class="text-uppercase text-white fw-semibold fs-12 mb-0 align-self-center"
                                                style="width: 100px;">
                                                Tầng G
                                            </p>
                                        </div><!-- end card body -->
                                    </div>

                                    <!-- Phòng -->
                                    <div class="d-flex flex-wrap gap-1">
                                        <div class="btn__build-room card-animate">
                                            <p class="build-room">001</p>
                                        </div>

                                        <div class="btn__build-room card-animate">
                                            <p class="build-room">002</p>
                                        </div>

                                        <div class="btn__build-room card-animate">
                                            <p class="build-room">003</p>
                                        </div>

                                        <div class="btn__build-room card-animate">
                                            <p class="build-room">004</p>
                                        </div>

                                        <div class="btn__build-room card-animate">
                                            <p class="build-room">005</p>
                                        </div>

                                        <div class="btn__build-room card-animate">
                                            <p class="build-room">006</p>
                                        </div>

                                        <div class="btn__build-room card-animate">
                                            <p class="build-room">007</p>
                                        </div>

                                        <div class="btn__build-room card-animate">
                                            <p class="build-room">008</p>
                                        </div>

                                        <div class="btn__build-room card-animate">
                                            <p class="build-room">009</p>
                                        </div>

                                        <div class="btn__build-room card-animate">
                                            <p class="build-room">010</p>
                                        </div>

                                        <div class="btn__build-room card-animate">
                                            <p class="build-room">011</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tầng 1-->
                                <div class="d-flex align-items-center gap-3 gap-md-2 gap-lg-3 mt-2">
                                    <!-- Tên Tầng -->
                                    <div mb-0="" class="rounded-3 bg-primary bg-gradient d-flex align-self-stretch">
                                        <div class="p-2 d-flex text-center">
                                            <p class="text-uppercase text-white fw-semibold fs-12 mb-0 align-self-center"
                                                style="width: 100px;">
                                                Tầng G
                                            </p>
                                        </div><!-- end card body -->
                                    </div>

                                    <!-- Phòng -->
                                    <div class="d-flex flex-wrap gap-1">
                                        <div class="btn__build-room card-animate">
                                            <p class="build-room">001</p>
                                        </div>

                                        <div class="btn__build-room card-animate">
                                            <p class="build-room">002</p>
                                        </div>

                                        <div class="btn__build-room card-animate">
                                            <p class="build-room">003</p>
                                        </div>

                                        <div class="btn__build-room card-animate">
                                            <p class="build-room">004</p>
                                        </div>

                                        <div class="btn__build-room card-animate">
                                            <p class="build-room">005</p>
                                        </div>

                                        <div class="btn__build-room card-animate">
                                            <p class="build-room">006</p>
                                        </div>

                                        <div class="btn__build-room card-animate">
                                            <p class="build-room">007</p>
                                        </div>

                                        <div class="btn__build-room card-animate">
                                            <p class="build-room">008</p>
                                        </div>

                                        <div class="btn__build-room card-animate">
                                            <p class="build-room">009</p>
                                        </div>

                                        <div class="btn__build-room card-animate">
                                            <p class="build-room">010</p>
                                        </div>

                                        <div class="btn__build-room card-animate">
                                            <p class="build-room">011</p>
                                        </div>
                                    </div>
                                </div>



                                <!-- Tầng 2-->
                                <div class="d-flex align-items-center gap-3 gap-md-2 gap-lg-3 mt-2">
                                    <!-- Tên Tầng -->
                                    <div mb-0="" class="rounded-3 bg-primary bg-gradient d-flex align-self-stretch">
                                        <div class="p-2 d-flex text-center">
                                            <p class="text-uppercase text-white fw-semibold fs-12 mb-0 align-self-center"
                                                style="width: 100px;">
                                                Tầng G
                                            </p>
                                        </div><!-- end card body -->
                                    </div>

                                    <!-- Phòng -->
                                    <div class="d-flex flex-wrap gap-1">
                                        <div class="btn__build-room card-animate">
                                            <p class="build-room">001</p>
                                        </div>

                                        <div class="btn__build-room card-animate">
                                            <p class="build-room">002</p>
                                        </div>

                                        <div class="btn__build-room card-animate">
                                            <p class="build-room">003</p>
                                        </div>

                                        <div class="btn__build-room card-animate">
                                            <p class="build-room">004</p>
                                        </div>

                                        <div class="btn__build-room card-animate">
                                            <p class="build-room">005</p>
                                        </div>

                                        <div class="btn__build-room card-animate">
                                            <p class="build-room">006</p>
                                        </div>

                                        <div class="btn__build-room card-animate">
                                            <p class="build-room">007</p>
                                        </div>

                                        <div class="btn__build-room card-animate">
                                            <p class="build-room">008</p>
                                        </div>

                                        <div class="btn__build-room card-animate">
                                            <p class="build-room">009</p>
                                        </div>

                                        <div class="btn__build-room card-animate">
                                            <p class="build-room">010</p>
                                        </div>

                                        <div class="btn__build-room card-animate">
                                            <p class="build-room">011</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <!-- Thông tin cơ bản -->
                        <div class="">
                            <p class="fw-semibold">
                                Thông tin cơ bản:
                            </p>

                            <div class="row g-2">
                                <div class="col-4 position-relative">
                                    <label for="giaPhong" class="form-label fw-semibold text-muted">Giá phòng</label>
                                    <input type="text" class="form-control" id="giaPhong" required>
                                    <!-- <div class="valid-tooltip">
                                        Looks good!
                                    </div> -->
                                    <div class="invalid-tooltip">
                                        Nhập giá phòng !
                                    </div>
                                </div>

                                <div class="col-4 position-relative">
                                    <label for="giaCoc" class="form-label fw-semibold text-muted">Giá cọc</label>
                                    <input type="number" class="form-control" id="giaCoc" required>
                                    <!-- <div class="valid-tooltip">
                                        Looks good!
                                    </div> -->
                                    <div class="invalid-tooltip">
                                        Nhập giá cọc
                                    </div>
                                </div>
                                <div class="col-4 col-lg-3 position-relative">
                                    <label for="donVi" class="form-label fw-semibold text-muted">Đơn vị</label>
                                    <select class="form-select" id="donVi" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option>...</option>
                                    </select>
                                    <div class="invalid-tooltip">
                                        Chọn đơn vị !
                                    </div>
                                </div>
                            </div>

                        </div>

                        <hr>

                    <div class="row g-2">
                        <!-- Thời hạn -->
                        <div class="col-6 position-relative">
                            <label for="thoiHan" class="form-label fw-semibold text-muted">
                                Thời hạn
                            </label>
                            <div class="row">
                                <div class="col-6 pe-0">
                                    <input type="text" class="form-control" id="thoiHan" required>
                                    <!-- <div class="valid-tooltip">
                                        Looks good!
                                    </div> -->
                                    <div class="invalid-tooltip">
                                        Nhập thời hạn !
                                    </div>
                                </div>
                                <div class="col-6">
                                    <select class="form-select">
                                        <option value="1">Tháng</option>
                                        <option value="2">Ngày</option>
                                        <option value="3">...</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <!-- Hoa hồng -->
                        <div class="col-5 position-relative">
                            <label class="form-label fw-semibold text-muted">
                                Hoa hồng
                            </label>
                            <div class="row">
                                <div class="col-7 col-md-8">
                                    <input type="text" class="form-control" required>
                                    <!-- <div class="valid-tooltip">
                                        Looks good!
                                    </div> -->
                                    <div class="invalid-tooltip">
                                        Nhập hoa hồng !
                                    </div>
                                </div>
                                <div class="col-5 col-md-4 ps-0">
                                    <select class="form-select">
                                        <option value="1">%</option>
                                        <option value="2">VND</option>
                                        <option value="3">...</option>
                                    </select>
                                    <!-- <div class="valid-tooltip">
                                        Looks good!
                                    </div> -->
                                    <div class="invalid-tooltip">
                                        Nhập đơn vị !
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        <hr>

                        <!-- Dịch vụ -->
                        <div class="">

                            <p class="fw-semibold mb-0">
                                Dịch vụ:
                            </p>

                            <div class="row g-2 mt-1">
                                <div class="col-12 col-lg-4 position-relative">
                                    <label for="dichVu" class="form-label fw-semibold text-muted">Loại dịch vụ</label>
                                    <select class="form-select" id="dichVu" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option>...</option>
                                    </select>
                                    <div class="invalid-tooltip">
                                        Chọn dịch vụ !
                                    </div>
                                </div>

                                <div class="col-5 col-lg-4 position-relative">
                                    <label for="giaTien" class="form-label fw-semibold text-muted">Giá tiền</label>
                                    <input type="number" class="form-control" id="giaTien" required>
                                    <!-- <div class="valid-tooltip">
                                        Looks good!
                                    </div> -->
                                    <div class="invalid-tooltip">
                                        Nhập giá tiền !
                                    </div>
                                </div>

                                <div class="col-5 col-md-6 col-lg-3 position-relative">
                                    <label for="donVi" class="form-label fw-semibold text-muted">Đơn vị</label>
                                    <select class="form-select" id="donVi" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option>...</option>
                                    </select>
                                    <div class="invalid-tooltip">
                                        Chọn đơn vị !
                                    </div>
                                </div>

                                <div class="col-2 col-md-1 position-relative d-flex flex-column align-items-center">
                                    <label for="" class="form-label fw-semibold text-muted">&NoBreak;</label>

                                    <button class="btn btn-danger btn-sm p-0 px-2 h-100">
                                        <i class=" ri-delete-bin-5-line fs-18"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="row g-2 mt-1">
                                <div class="col-12 col-lg-4 position-relative">
                                    <label for="dichVu" class="form-label fw-semibold text-muted">Loại dịch vụ</label>
                                    <select class="form-select" id="dichVu" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option>...</option>
                                    </select>
                                    <div class="invalid-tooltip">
                                        Chọn dịch vụ !
                                    </div>
                                </div>

                                <div class="col-5 col-lg-4 position-relative">
                                    <label for="giaTien" class="form-label fw-semibold text-muted">Giá tiền</label>
                                    <input type="number" class="form-control" id="giaTien" required>
                                    <!-- <div class="valid-tooltip">
                                        Looks good!
                                    </div> -->
                                    <div class="invalid-tooltip">
                                        Nhập giá tiền !
                                    </div>
                                </div>

                                <div class="col-5 col-md-6 col-lg-3 position-relative">
                                    <label for="donVi" class="form-label fw-semibold text-muted">Đơn vị</label>
                                    <select class="form-select" id="donVi" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option>...</option>
                                    </select>
                                    <div class="invalid-tooltip">
                                        Chọn đơn vị !
                                    </div>
                                </div>

                                <div class="col-2 col-md-1 position-relative d-flex flex-column align-items-center">
                                    <label for="" class="form-label fw-semibold text-muted">&NoBreak;</label>

                                    <button class="btn btn-danger btn-sm p-0 px-2 h-100">
                                        <i class=" ri-delete-bin-5-line fs-18"></i>
                                    </button>
                                </div>
                            </div>

                            <button class="btn btn-secondary btn-sm p-0 px-2 mt-3">
                                <i class=" ri-add-circle-line fs-20"></i>
                            </button>
                        </div>

                        <hr>

                        <!-- Tiện ích nội khu -->
                        <div class="">
                            <p class="fw-semibold mb-0">
                                Tiện ích nội khu:
                            </p>

                            <div class="row row-cols-2 row-cols-xxl-3 mt-2">
                                <div class="col">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0"
                                                    id="TaoRoHang__doXeMay">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                    for="TaoRoHang__doXeMay">
                                                    Đổ xe máy
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="col">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0"
                                                    id="TaoRoHang__doXeHoi">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                    for="TaoRoHang__doXeHoi">
                                                    Đổ xe hơi
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="col">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0" id="TaoRoHang__beBoi">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                    for="TaoRoHang__beBoi">
                                                    Bể bơi
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="col">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0"
                                                    id="TaoRoHang__giatPhoi">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                    for="TaoRoHang__giatPhoi">
                                                    Giặt phơi
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="col">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0"
                                                    id="TaoRoHang__sayDichVu">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                    for="TaoRoHang__sayDichVu">
                                                    Sấy dịch vụ
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="col">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0" id="TaoRoHang__GYM">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                    for="TaoRoHang__GYM">
                                                    GYM
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="col">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0" id="TaoRoHang__Coffee">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                    for="TaoRoHang__Coffee">
                                                    Coffee
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="col">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0"
                                                    id="TaoRoHang__nhaHang">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                    for="TaoRoHang__nhaHang">
                                                    Nhà hàng
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="col">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" id="TaoRoHang__shop" class="form-check-input ms-0">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                    for="TaoRoHang__shop">
                                                    Shop
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <!-- Nội thất -->
                        <div class="">
                            <p class="fw-semibold mb-0">
                                Nội thất:
                            </p>

                            <div class="row row-cols-2 row-cols-xxl-3 mt-2">
                                <div class="col">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0"
                                                    id="TaoRoHang__heTuBep">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                    for="TaoRoHang__heTuBep">
                                                    Hệ tủ bếp
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="col">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0" id="TaoRoHang__giuong">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                    for="TaoRoHang__giuong">
                                                    Giường
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="col">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0"
                                                    id="TaoRoHang__boBanAn">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                    for="TaoRoHang__boBanAn">
                                                    Bộ bàn ăn
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="col">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0" id="TaoRoHang__nem">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                    for="TaoRoHang__nem">
                                                    Nệm
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="col">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0"
                                                    id="TaoRoHang__boGheAn">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                    for="TaoRoHang__boGheAn">
                                                    Bộ ghế ăn
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="col">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0" id="TaoRoHang__keTV">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                    for="TaoRoHang__keTV">
                                                    Kệ TV
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="col">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0"
                                                    id="TaoRoHang__boSoffa">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                    for="TaoRoHang__boSoffa">
                                                    Bộ soffa
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="col">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0" id="TaoRoHang__keTab">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                    for="TaoRoHang__keTab">
                                                    Kệ Tab
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="col">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0"
                                                    id="TaoRoHang__boBanKhac">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                    for="TaoRoHang__boBanKhac">
                                                    Bộ bàn khác
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="col">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0" id="TaoRoHang__tuGiay">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                    for="TaoRoHang__tuGiay">
                                                    Tủ giày
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="col">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0"
                                                    id="TaoRoHang__heTuQuanAo">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                    for="TaoRoHang__heTuQuanAo">
                                                    Hệ tủ quần áo
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="col">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0"
                                                    id="TaoRoHang__heToilet">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                    for="TaoRoHang__heToilet">
                                                    Hệ Toilet
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <!-- Thiết bị trong phòng -->
                        <div class="">
                            <p class="fw-semibold mb-0">
                                Thiết bị trong phòng:
                            </p>

                            <div class="row row-cols-2 row-cols-xxl-3 mt-2">
                                <div class="col">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0"
                                                    id="TaoRoHang__boDieuHoa">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                    for="TaoRoHang__boDieuHoa">
                                                    Bộ điều hoà
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="col">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0"
                                                    id="TaoRoHang__maySayDo">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                    for="TaoRoHang__maySayDo">
                                                    Máy sấy đồ
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="col">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0" id="TaoRoHang__tuLanh">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                    for="TaoRoHang__tuLanh">
                                                    Tủ lạnh
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="col">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0"
                                                    id="TaoRoHang__mayRuaBat">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                    for="TaoRoHang__mayRuaBat">
                                                    Máy rửa bát
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="col">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0"
                                                    id="TaoRoHang__bepTu-hongNgoai">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                    for="TaoRoHang__bepTu-hongNgoai">
                                                    Bếp (Từ/Hồng ngoại)
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="col">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0" id="TaoRoHang__boTivi">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                    for="TaoRoHang__boTivi">
                                                    Bộ Tivi
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="col">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0"
                                                    id="TaoRoHang__mayHutMui">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                    for="TaoRoHang__mayHutMui">
                                                    Máy hút mùi
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="col">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0"
                                                    id="TaoRoHang__loViSong">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                    for="TaoRoHang__loViSong">
                                                    Lò vi sóng
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="col">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0"
                                                    id="TaoRoHang__heNuocNongLanh">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                    for="TaoRoHang__heNuocNongLanh">
                                                    Hệ nước nóng lạnh
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="col">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0"
                                                    id="TaoRoHang__modemWifi">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                    for="TaoRoHang__modemWifi">
                                                    Modem Wifi
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="col">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0"
                                                    id="TaoRoHang__mayGiat">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                    for="TaoRoHang__mayGiat">
                                                    Máy giặt
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="col">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0"
                                                    id="TaoRoHang__maySayToc">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                    for="TaoRoHang__maySayToc">
                                                    Máy sấy tóc
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer border-top p-0 pt-3 mt-3">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary ">Apply</button>
                        </div>
                    </form>
                </div>



            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Lịch sử Book Phòng -->
    <div id="LichSuVeSinhPhong-Modal" class="modal fade" tabindex="-1" aria-labelledby="LichSuVeSinh" aria-hidden="true"
    style="display: none;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-bottom d-flex align-items-start pb-3">
                    <h5 class="modal-title" id="LichSuVeSinh">
                        <span class="">Mã Phòng: </span>
                        <span class="fw-bold">AP</span> <!-- Mã Toà -->
                        <span class="fw-bold">_</span>
                        <span class="fw-bold">1402</span> <!-- Mã Phòng -->
                        <br>
                        <span class="">Loại Phòng: </span>
                        <span class="fw-bold">Studio Special</span> <!-- Loại Phòng -->
                    </h5>
                    <button type="button" class="btn-close mt-0" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>

                <div class="modal-body">
                    <h5 class="fs-15 fw-semibold">
                        Lịch sử dọn vệ sinh
                    </h5>
                    <div class="table-responsive">
                        <!-- Striped Rows -->
                        <table class="table table-striped-columns align-middle table-nowrap mb-0">

                            <thead class="bg-soft-dark">
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Người dọn</th>
                                    <th scope="col">Ngày bắt đầu</th>
                                    <th scope="col">Ngày kết thúc</th>
                                    <th scope="col">Chi tiết</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" class="text-center">1</th>
                                    <td>Nicholas Ball</td>
                                    <td>Nov 14, 2021</td>
                                    <td>Nov 13, 2021</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm bg-gr btn-info card-animate">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">2</th>
                                    <td>Nicholas Ball</td>
                                    <td>Nov 21, 2021</td>
                                    <td>Nov 22, 2021</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm bg-gr btn-info card-animate">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">3</th>
                                    <td>Nicholas Ball</td>
                                    <td>Nov 24, 2021</td>
                                    <td>Nov 25, 2021</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm bg-gr btn-info card-animate">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">4</th>
                                    <td>Nicholas Ball</td>
                                    <td>Nov 25, 2021</td>
                                    <td>Nov 29, 2021</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm bg-gr btn-info card-animate">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <div class="d-flex justify-content-end">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#veSinh-Modal"
                            class="btn btn-secondary btn-label card-animate">
                            <i class="mdi mdi-broom label-icon align-middle fs-18 me-2"></i>
                            Tạo mới
                        </button>
                    </div>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <!-- Vệ Sinh Phòng -->
    <div id="veSinh-Modal" class="modal fade" tabindex="-1" aria-labelledby="veSinh" aria-hidden="true"
    style="display: none;">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <!-- Tên Modal -->
                <div class="modal-header border-bottom d-flex align-items-center pb-3">
                    <h5 class="modal-title" id="veSinh">
                        Dọn vệ sinh
                        <!-- <span>--</span>
                        <span class="">Mã Phòng: </span>
                        <span class="fw-bold">AP</span>
                        <span class="fw-bold">_</span>
                        <span class="fw-bold">1402</span> -->
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>

                <div class="modal-body fs-15">
                    <form class="needs-validation mt-1 border-0 modal-content" novalidate>
                        <div class="row">
                            <div class="col-lg-6 order-lg-1">
                                <!-- Thông tin cơ bản -->
                                <div class="">
                                    <h5 class="fw-semibold">
                                        Thông tin cơ bản:
                                    </h5>

                                    <!-- Thời Gian Dọn Vệ Sinh -->
                                    <div class="row row-cols-2 g-2">
                                        <div class="col-6 position-relative">
                                            <label for="bookPhong" class=" form-label fw-semibold text-muted">
                                                Ngày bắt đầu
                                            </label>

                                            <input type="text" required data-provider="flatpickr" data-date-format="d M, Y"
                                                class="d-none d-lg-block form-control fs-14 fw-semibold flatpickr-input">


                                            <input type="date" class="form-control fs-14 fw-semibold d-lg-none" required>
                                        </div>

                                        <div class="col-6 position-relative">
                                            <label for="bookPhong" class=" form-label fw-semibold text-muted">
                                                Ngày hoàn thành
                                            </label>

                                            <input type="text" required data-provider="flatpickr" data-date-format="d M, Y"
                                                class="d-none d-lg-block form-control fs-14 fw-semibold flatpickr-input">


                                            <input type="date" class="form-control fs-14 fw-semibold d-lg-none" required>
                                        </div>
                                    </div>


                                    <!-- Người dọn vệ sinh -->
                                    <div class="mt-3">
                                        <label for="choices-multiple-remove-button" class="form-label text-muted">
                                            Người dọn vệ sinh
                                        </label>

                                        <select class="form-control" id="choices-multiple-remove-button" data-choices
                                            data-choices-removeItem name="choices-multiple-remove-button" multiple>
                                            <option value="1" data-bs-toggle="modal" data-bs-target="#valueModal"
                                                data-id="1" selected>Long IT</option>
                                            <option value="2" data-bs-toggle="modal" data-bs-target="#valueModal"
                                                data-id="2">
                                                Hoàng Long Megas</option>
                                            <option value="3" data-bs-toggle="modal" data-bs-target="#valueModal"
                                                data-id="3">
                                                Thanh Long Mã</option>
                                            <option value="4" data-bs-toggle="modal" data-bs-target="#valueModal"
                                                data-id="4">Lê
                                                Hoàng Long</option>
                                        </select>
                                    </div>
                                </div>

                                <hr>

                                <!-- Nghiệp vụ dọn dẹp -->
                                <div class="">
                                    <h5 class="fw-semibold">
                                        Nghiệp vụ dọn dẹp:
                                    </h5>

                                    <!-- Title -->
                                    <div class="row g-2 mt-2">
                                        <div class="col-5">
                                            <h5 class="mb-0 fw-semibold text-muted">Loại</h5>
                                        </div>

                                        <div class="col-7">
                                            <h5 class="mb-0 fw-semibold text-muted">Nhiệm vụ</h5>
                                        </div>
                                    </div>

                                    <!-- Slect -->
                                    <div class="">
                                        <div class="row g-2 g-md-3 g-lg-2 pt-md-2 pt-lg-0">
                                            <div class="row g-2">
                                                <div class="col-5">
                                                    <select class="form-select" required="">
                                                        <option selected="" disabled="" value="">
                                                            Chọn loại
                                                        </option>
                                                        <option>Làm sạch</option>
                                                        <option>Khử mùi</option>
                                                        <option>Tạo hương thơm</option>
                                                        <option>Quét dọn</option>
                                                        <option>Giặt</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please select a valid state.
                                                    </div>
                                                </div>

                                                <div class="col-7">
                                                    <div class="d-flex gap-2">
                                                        <select class="form-select flex-grow-1" required="">
                                                            <option selected="" disabled="" value="">
                                                                Chọn loại
                                                            </option>
                                                            <option>Kiểm tra nội thất</option>
                                                            <option>Kiểm tra thiết bị</option>
                                                            <option>Quét dọn</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Please select a valid state.
                                                        </div>

                                                        <button class="btn btn-danger btn-sm p-0 px-2 align-self-auto">
                                                            <i class=" ri-delete-bin-5-line fs-18"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-2 g-md-3 g-lg-2 pt-md-2 pt-lg-0">
                                            <div class="row g-2">
                                                <div class="col-5">
                                                    <select class="form-select" required="">
                                                        <option selected="" disabled="" value="">
                                                            Chọn loại
                                                        </option>
                                                        <option>Làm sạch</option>
                                                        <option>Khử mùi</option>
                                                        <option>Tạo hương thơm</option>
                                                        <option>Quét dọn</option>
                                                        <option>Giặt</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please select a valid state.
                                                    </div>
                                                </div>

                                                <div class="col-7">
                                                    <div class="d-flex gap-2">
                                                        <select class="form-select flex-grow-1" required="">
                                                            <option selected="" disabled="" value="">
                                                                Chọn loại
                                                            </option>
                                                            <option>Kiểm tra nội thất</option>
                                                            <option>Kiểm tra thiết bị</option>
                                                            <option>Quét dọn</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Please select a valid state.
                                                        </div>

                                                        <button class="btn btn-danger btn-sm p-0 px-2 align-self-auto">
                                                            <i class=" ri-delete-bin-5-line fs-18"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-secondary btn-sm p-0 px-2 mt-2">
                                        <i class=" ri-add-circle-line fs-20"></i>
                                    </button>
                                </div>
                            </div>


                            <div class="col-lg-6 order-lg-0 border-end-double">
                                <div class="custom-border-none pt-4 pt-lg-0 mt-4 mt-lg-0 border-top-double"></div>

                                <!-- Tình trạng nội Thất -->
                                <div class="">
                                    <h5 class="fw-semibold">
                                        Tình trạng nội thất:
                                    </h5>

                                    <div class="table-responsive text-center">
                                        <!-- Striped Rows -->
                                        <table class="table-small-gap table table-striped align-middle table-nowrap mb-0">

                                            <thead class="bg-soft-dark">
                                                <tr>
                                                    <th scope="col" style="width: 55%;"></th>
                                                    <th scope="col" style="width: 15%;">Tốt</th>
                                                    <th scope="col" style="width: 15%;">Hỏng</th>
                                                    <th scope="col" style="width: 15%;">Mất</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Lavabo</th>
                                                    <td>
                                                        <div class="form-check flex-center-center">
                                                            <input class="form-check-input" name="Lavabo" type="radio"
                                                                value="tot" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check flex-center-center">
                                                            <input class="form-check-input" name="Lavabo" type="radio"
                                                                value="hong">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check flex-center-center">
                                                            <input class="form-check-input" name="Lavabo" type="radio"
                                                                value="mat">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Bàn làm việc</th>
                                                    <td>
                                                        <div class="form-check flex-center-center">
                                                            <input class="form-check-input" name="banLamViec" type="radio"
                                                                value="tot" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check flex-center-center">
                                                            <input class="form-check-input" name="banLamViec" type="radio"
                                                                value="hong">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check flex-center-center">
                                                            <input class="form-check-input" name="banLamViec" type="radio"
                                                                value="mat">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Vòi sen</th>
                                                    <td>
                                                        <div class="form-check flex-center-center">
                                                            <input class="form-check-input" name="voiSen" type="radio"
                                                                value="tot" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check flex-center-center">
                                                            <input class="form-check-input" name="voiSen" type="radio"
                                                                value="hong">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check flex-center-center">
                                                            <input class="form-check-input" name="voiSen" type="radio"
                                                                value="mat">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Hệ tủ bếp</th>
                                                    <td>
                                                        <div class="form-check flex-center-center">
                                                            <input class="form-check-input" name="heTuBep" type="radio"
                                                                value="tot" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check flex-center-center">
                                                            <input class="form-check-input" name="heTuBep" type="radio"
                                                                value="hong">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check flex-center-center">
                                                            <input class="form-check-input" name="heTuBep" type="radio"
                                                                value="mat">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <hr>

                                <!-- Tình trạng thiết bị -->
                                <div class="">
                                    <h5 class="fw-semibold">
                                        Tình trạng thiết bị:
                                    </h5>

                                    <div class="table-responsive text-center">
                                        <!-- Striped Rows -->
                                        <table class="table-small-gap table table-striped align-middle table-nowrap mb-0">

                                            <thead class="bg-soft-dark">
                                                <tr>
                                                    <th scope="col" style="width: 55%;"></th>
                                                    <th scope="col" style="width: 15%;">Tốt</th>
                                                    <th scope="col" style="width: 15%;">Hỏng</th>
                                                    <th scope="col" style="width: 15%;">Mất</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Máy nước nóng lạnh</th>
                                                    <td>
                                                        <div class="form-check flex-center-center">
                                                            <input class="form-check-input" name="mayNuocNongLanh"
                                                                type="radio" value="tot" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check flex-center-center">
                                                            <input class="form-check-input" name="mayNuocNongLanh"
                                                                type="radio" value="hong">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check flex-center-center">
                                                            <input class="form-check-input" name="mayNuocNongLanh"
                                                                type="radio" value="mat">
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">Máy sấy</th>
                                                    <td>
                                                        <div class="form-check flex-center-center">
                                                            <input class="form-check-input" name="maySay" type="radio"
                                                                value="tot" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check flex-center-center">
                                                            <input class="form-check-input" name="maySay" type="radio"
                                                                value="hong">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check flex-center-center">
                                                            <input class="form-check-input" name="maySay" type="radio"
                                                                value="mat">
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">Máy hút mùi</th>
                                                    <td>
                                                        <div class="form-check flex-center-center">
                                                            <input class="form-check-input" name="mayHutMui" type="radio"
                                                                value="tot" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check flex-center-center">
                                                            <input class="form-check-input" name="mayHutMui" type="radio"
                                                                value="hong">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check flex-center-center">
                                                            <input class="form-check-input" name="mayHutMui" type="radio"
                                                                value="mat">
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">Tủ lạnh</th>
                                                    <td>
                                                        <div class="form-check flex-center-center">
                                                            <input class="form-check-input" name="tuLanh" type="radio"
                                                                value="tot" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check flex-center-center">
                                                            <input class="form-check-input" name="tuLanh" type="radio"
                                                                value="hong">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check flex-center-center">
                                                            <input class="form-check-input" name="tuLanh" type="radio"
                                                                value="mat">
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">Máy lạnh</th>
                                                    <td>
                                                        <div class="form-check flex-center-center">
                                                            <input class="form-check-input" name="mayLanh" type="radio"
                                                                value="tot" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check flex-center-center">
                                                            <input class="form-check-input" name="mayLanh" type="radio"
                                                                value="hong">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check flex-center-center">
                                                            <input class="form-check-input" name="mayLanh" type="radio"
                                                                value="mat">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer border-top p-0 pt-3 mt-3">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary ">Apply</button>
                        </div>
                    </form>
                </div>



            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->





    <!-- Chi tiết phòng -->
    <div id="ChiTietPhong-Modal" class="modal fade" tabindex="-1" aria-labelledby="ChiTietPhong" aria-hidden="true"
    style="display: none;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-bottom d-flex align-items-start pb-3">
                    <h5 class="modal-title" id="ChiTietPhong">
                        <span class="">Mã Phòng: </span>
                        <span class="fw-bold">AP</span> <!-- Mã Toà -->
                        <span class="fw-bold">_</span>
                        <span class="fw-bold">1402</span> <!-- Mã Phòng -->
                        <br>
                        <span class="">Loại Phòng: </span>
                        <span class="fw-bold">Studio Special</span> <!-- Loại Phòng -->
                    </h5>
                    <button type="button" class="btn-close mt-0" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>

                <div class="modal-body">
                    <!-- Thông tin cơ bản -->
                    <div class="">
                        <h5 class="fs-15 fw-semibold">
                            Thông tin cơ bản
                        </h5>

                        <div class="d-flex gap-4">
                            <div class="">
                                <span>Số phòng ngủ:</span>
                                <span>2</span>
                            </div>

                            <div class="">
                                <span>Số WC</span>
                                <span>2</span>
                            </div>

                            <div class="">
                                <span>Diện tích</span>
                                <span>72 m&#178;</span>
                            </div>
                        </div>


                        <div class="row row-cols-1 row-cols-md-2 mt-2">
                            <div class="col order-md-0">
                                <div class="d-flex w-100">
                                    <span style="width: 110px;">Giá
                                        phòng:</span>
                                    <a class="fw-bold">2.500.000
                                        VNĐ</a>
                                </div>
                            </div>

                            <div class="col order-md-1">
                                <div class="d-flex w-100">
                                    <span class="width-110-85">
                                        Giá cọc:
                                    </span>
                                    <a class="fw-bold get-size text-end">1.000.000
                                        VNĐ</a>
                                </div>
                            </div>

                            <div class="col order-md-3">
                                <div class="d-flex w-100">
                                    <span class="width-110-85" style="font-size: 11.5px;">
                                        Cọc đã đóng:</span>
                                    <a class="fw-bold set-size text-end">700.000
                                        VNĐ</a>
                                </div>
                            </div>

                            <div class="col order-md-5">
                                <div class="d-flex w-100">
                                    <span class="width-110-85">Cọc còn
                                        lại:</span>
                                    <a class="fw-bold set-size text-end">300.000
                                        VNĐ</a>
                                </div>
                            </div>

                            <div class="col order-md-2 mt-2 mt-md-0">
                                <div class="d-flex w-100">
                                    <span style="width: 110px;">
                                        Ngày ở dự kiến:</span>
                                    <a class="fw-bold set-size" id="get-size">23/06/2023</a>
                                </div>
                            </div>

                            <div class="col order-md-4">
                                <div class="d-flex w-100">
                                    <span style="width: 110px;">Số lần đóng
                                        cọc:</span>
                                    <a class="fw-bold set-size">3</a>
                                </div>
                            </div>
                        </div>


                    </div>

                    <hr>

                    <!-- Dịch vụ -->
                    <div class="">
                        <h5 class="fs-15 fw-semibold">
                            Dịch vụ
                        </h5>

                        <div class="table-responsive table-card mt-2">
                            <table class="table table-borderless table-nowrap table-centered align-middle mb-0">
                                <thead class="table-light text-muted">
                                    <tr>
                                        <th scope="col">Loại dịch vụ</th>
                                        <th scope="col">Giá tiền</th>
                                        <th scope="col">Đơn vị</th>
                                    </tr>
                                </thead><!-- end thead -->
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label ms-1">
                                                    Điện sinh hoạt
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-muted">3.500</td>
                                        <td class="text-muted">VNĐ/Kwh</td>
                                    </tr><!-- end -->
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label ms-1">
                                                    Nước sinh hoạt
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-muted">100.000</td>
                                        <td class="text-muted">VNĐ/Người/Tháng</td>
                                    </tr><!-- end -->
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label ms-1">
                                                    Giữ xe 2 bánh
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-muted">100.000</td>
                                        <td class="text-muted">VNĐ/Chiếc/Tháng</td>
                                    </tr><!-- end -->
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label ms-1">
                                                    Giặt sấy cao cấp
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-muted">50.000</td>
                                        <td class="text-muted">VNĐ/Người/Tháng</td>
                                    </tr><!-- end -->
                                </tbody><!-- end tbody -->
                            </table><!-- end table -->
                        </div>
                    </div>

                    <hr>

                    <!-- Tiện ích nội khu -->
                    <div class="">
                        <h5 class="fs-15 fw-semibold">
                            Tiện ích nội khu
                        </h5>

                        <div class="row row-cols-2 row-cols-xxl-3 mt-2">
                            <div class="col">
                                <li class="list-group-item ps-0">
                                    <div class="d-flex align-items-start">
                                        <div class="form-check ps-0 flex-sharink-0">
                                            <input type="checkbox" class="form-check-input ms-0" checked disabled>
                                        </div>
                                        <div class="flex-grow-1">
                                            <label class="form-check-label mb-0 ps-2">
                                                Đổ xe máy
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <div class="col">
                                <li class="list-group-item ps-0">
                                    <div class="d-flex align-items-start">
                                        <div class="form-check ps-0 flex-sharink-0">
                                            <input type="checkbox" class="form-check-input ms-0" checked disabled>
                                        </div>
                                        <div class="flex-grow-1">
                                            <label class="form-check-label mb-0 ps-2">
                                                Đổ xe hơi
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <div class="col">
                                <li class="list-group-item ps-0">
                                    <div class="d-flex align-items-start">
                                        <div class="form-check ps-0 flex-sharink-0">
                                            <input type="checkbox" class="form-check-input ms-0" checked disabled>
                                        </div>
                                        <div class="flex-grow-1">
                                            <label class="form-check-label mb-0 ps-2">
                                                Bể bơi
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <div class="col">
                                <li class="list-group-item ps-0">
                                    <div class="d-flex align-items-start">
                                        <div class="form-check ps-0 flex-sharink-0">
                                            <input type="checkbox" class="form-check-input ms-0" checked disabled>
                                        </div>
                                        <div class="flex-grow-1">
                                            <label class="form-check-label mb-0 ps-2">
                                                Giặt phơi
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <div class="col">
                                <li class="list-group-item ps-0">
                                    <div class="d-flex align-items-start">
                                        <div class="form-check ps-0 flex-sharink-0">
                                            <input type="checkbox" class="form-check-input ms-0" checked disabled>
                                        </div>
                                        <div class="flex-grow-1">
                                            <label class="form-check-label mb-0 ps-2">
                                                Sấy dịch vụ
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <div class="col">
                                <li class="list-group-item ps-0">
                                    <div class="d-flex align-items-start">
                                        <div class="form-check ps-0 flex-sharink-0">
                                            <input type="checkbox" class="form-check-input ms-0" checked disabled>
                                        </div>
                                        <div class="flex-grow-1">
                                            <label class="form-check-label mb-0 ps-2">
                                                GYM
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <div class="col">
                                <li class="list-group-item ps-0">
                                    <div class="d-flex align-items-start">
                                        <div class="form-check ps-0 flex-sharink-0">
                                            <input type="checkbox" class="form-check-input ms-0" checked disabled>
                                        </div>
                                        <div class="flex-grow-1">
                                            <label class="form-check-label mb-0 ps-2">
                                                Coffee
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <div class="col">
                                <li class="list-group-item ps-0">
                                    <div class="d-flex align-items-start">
                                        <div class="form-check ps-0 flex-sharink-0">
                                            <input type="checkbox" class="form-check-input ms-0" checked disabled>
                                        </div>
                                        <div class="flex-grow-1">
                                            <label class="form-check-label mb-0 ps-2">
                                                Nhà hàng
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <div class="col">
                                <li class="list-group-item ps-0">
                                    <div class="d-flex align-items-start">
                                        <div class="form-check ps-0 flex-sharink-0">
                                            <input type="checkbox" class="form-check-input ms-0" checked disabled>
                                        </div>
                                        <div class="flex-grow-1">
                                            <label class="form-check-label mb-0 ps-2">
                                                Shop
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <!-- Nội thất -->
                    <div class="row border-top py-3">
                        <h5 class="text-capitalize fw-semibold text-muted">
                            Nội thất:
                        </h5>

                        <div class="row row-cols-2 row-cols-xxl-3 mt-2">
                            <div class="col">
                                <li class="list-group-item ps-0">
                                    <div class="d-flex align-items-start">
                                        <div class="form-check ps-0 flex-sharink-0">
                                            <input type="checkbox" class="form-check-input ms-0" checked="" disabled="">
                                        </div>
                                        <div class="flex-grow-1">
                                            <label class="form-check-label mb-0 ps-2">
                                                Hệ tủ bếp
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <div class="col">
                                <li class="list-group-item ps-0">
                                    <div class="d-flex align-items-start">
                                        <div class="form-check ps-0 flex-sharink-0">
                                            <input type="checkbox" class="form-check-input ms-0" checked="" disabled="">
                                        </div>
                                        <div class="flex-grow-1">
                                            <label class="form-check-label mb-0 ps-2">
                                                Giường
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <div class="col">
                                <li class="list-group-item ps-0">
                                    <div class="d-flex align-items-start">
                                        <div class="form-check ps-0 flex-sharink-0">
                                            <input type="checkbox" class="form-check-input ms-0" checked="" disabled="">
                                        </div>
                                        <div class="flex-grow-1">
                                            <label class="form-check-label mb-0 ps-2">
                                                Bộ bàn ăn
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <div class="col">
                                <li class="list-group-item ps-0">
                                    <div class="d-flex align-items-start">
                                        <div class="form-check ps-0 flex-sharink-0">
                                            <input type="checkbox" class="form-check-input ms-0" checked="" disabled="">
                                        </div>
                                        <div class="flex-grow-1">
                                            <label class="form-check-label mb-0 ps-2">
                                                Nệm
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <div class="col">
                                <li class="list-group-item ps-0">
                                    <div class="d-flex align-items-start">
                                        <div class="form-check ps-0 flex-sharink-0">
                                            <input type="checkbox" class="form-check-input ms-0" checked="" disabled="">
                                        </div>
                                        <div class="flex-grow-1">
                                            <label class="form-check-label mb-0 ps-2">
                                                Bộ ghế ăn
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <div class="col">
                                <li class="list-group-item ps-0">
                                    <div class="d-flex align-items-start">
                                        <div class="form-check ps-0 flex-sharink-0">
                                            <input type="checkbox" class="form-check-input ms-0" checked="" disabled="">
                                        </div>
                                        <div class="flex-grow-1">
                                            <label class="form-check-label mb-0 ps-2">
                                                Kệ TV
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <div class="col">
                                <li class="list-group-item ps-0">
                                    <div class="d-flex align-items-start">
                                        <div class="form-check ps-0 flex-sharink-0">
                                            <input type="checkbox" class="form-check-input ms-0" checked="" disabled="">
                                        </div>
                                        <div class="flex-grow-1">
                                            <label class="form-check-label mb-0 ps-2">
                                                Bộ Soffa
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <div class="col">
                                <li class="list-group-item ps-0">
                                    <div class="d-flex align-items-start">
                                        <div class="form-check ps-0 flex-sharink-0">
                                            <input type="checkbox" class="form-check-input ms-0" checked="" disabled="">
                                        </div>
                                        <div class="flex-grow-1">
                                            <label class="form-check-label mb-0 ps-2">
                                                Kệ Tab
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <div class="col">
                                <li class="list-group-item ps-0">
                                    <div class="d-flex align-items-start">
                                        <div class="form-check ps-0 flex-sharink-0">
                                            <input type="checkbox" class="form-check-input ms-0" checked="" disabled="">
                                        </div>
                                        <div class="flex-grow-1">
                                            <label class="form-check-label mb-0 ps-2">
                                                Bộ bàn khác
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <div class="col">
                                <li class="list-group-item ps-0">
                                    <div class="d-flex align-items-start">
                                        <div class="form-check ps-0 flex-sharink-0">
                                            <input type="checkbox" class="form-check-input ms-0" checked="" disabled="">
                                        </div>
                                        <div class="flex-grow-1">
                                            <label class="form-check-label mb-0 ps-2">
                                                Tủ giày
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <div class="col">
                                <li class="list-group-item ps-0">
                                    <div class="d-flex align-items-start">
                                        <div class="form-check ps-0 flex-sharink-0">
                                            <input type="checkbox" class="form-check-input ms-0" checked="" disabled="">
                                        </div>
                                        <div class="flex-grow-1">
                                            <label class="form-check-label mb-0 ps-2">
                                                Hệ tủ quần áo
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <div class="col">
                                <li class="list-group-item ps-0">
                                    <div class="d-flex align-items-start">
                                        <div class="form-check ps-0 flex-sharink-0">
                                            <input type="checkbox" class="form-check-input ms-0" checked="" disabled="">
                                        </div>
                                        <div class="flex-grow-1">
                                            <label class="form-check-label mb-0 ps-2">
                                                Hệ Toilet
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <!-- Thiết bị trong phòng -->
                    <div class="row border-top py-3">
                        <h5 class="text-capitalize fw-semibold text-muted">
                            Thiết bị trong phòng:
                        </h5>

                        <div class="row row-cols-2 row-cols-xxl-3 mt-2">
                            <div class="col">
                                <li class="list-group-item ps-0">
                                    <div class="d-flex align-items-start">
                                        <div class="form-check ps-0 flex-sharink-0">
                                            <input type="checkbox" class="form-check-input ms-0" checked disabled>
                                        </div>
                                        <div class="flex-grow-1">
                                            <label class="form-check-label mb-0 ps-2">
                                                Bộ điều hoà
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <div class="col">
                                <li class="list-group-item ps-0">
                                    <div class="d-flex align-items-start">
                                        <div class="form-check ps-0 flex-sharink-0">
                                            <input type="checkbox" class="form-check-input ms-0" checked disabled>
                                        </div>
                                        <div class="flex-grow-1">
                                            <label class="form-check-label mb-0 ps-2">
                                                Máy sấy đồ
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <div class="col">
                                <li class="list-group-item ps-0">
                                    <div class="d-flex align-items-start">
                                        <div class="form-check ps-0 flex-sharink-0">
                                            <input type="checkbox" class="form-check-input ms-0" checked disabled>
                                        </div>
                                        <div class="flex-grow-1">
                                            <label class="form-check-label mb-0 ps-2">
                                                Tủ lạnh
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <div class="col">
                                <li class="list-group-item ps-0">
                                    <div class="d-flex align-items-start">
                                        <div class="form-check ps-0 flex-sharink-0">
                                            <input type="checkbox" class="form-check-input ms-0" checked disabled>
                                        </div>
                                        <div class="flex-grow-1">
                                            <label class="form-check-label mb-0 ps-2">
                                                Máy rửa bát
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <div class="col">
                                <li class="list-group-item ps-0">
                                    <div class="d-flex align-items-start">
                                        <div class="form-check ps-0 flex-sharink-0">
                                            <input type="checkbox" class="form-check-input ms-0" checked disabled>
                                        </div>
                                        <div class="flex-grow-1">
                                            <label class="form-check-label mb-0 ps-2">
                                                Bếp (Từ/Hồng ngoại)
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <div class="col">
                                <li class="list-group-item ps-0">
                                    <div class="d-flex align-items-start">
                                        <div class="form-check ps-0 flex-sharink-0">
                                            <input type="checkbox" class="form-check-input ms-0" checked disabled>
                                        </div>
                                        <div class="flex-grow-1">
                                            <label class="form-check-label mb-0 ps-2">
                                                Bộ Tivi
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <div class="col">
                                <li class="list-group-item ps-0">
                                    <div class="d-flex align-items-start">
                                        <div class="form-check ps-0 flex-sharink-0">
                                            <input type="checkbox" class="form-check-input ms-0" checked disabled>
                                        </div>
                                        <div class="flex-grow-1">
                                            <label class="form-check-label mb-0 ps-2">
                                                Máy hút mùi
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <div class="col">
                                <li class="list-group-item ps-0">
                                    <div class="d-flex align-items-start">
                                        <div class="form-check ps-0 flex-sharink-0">
                                            <input type="checkbox" class="form-check-input ms-0" checked disabled>
                                        </div>
                                        <div class="flex-grow-1">
                                            <label class="form-check-label mb-0 ps-2">
                                                Lò vi sóng
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <div class="col">
                                <li class="list-group-item ps-0">
                                    <div class="d-flex align-items-start">
                                        <div class="form-check ps-0 flex-sharink-0">
                                            <input type="checkbox" class="form-check-input ms-0" checked disabled>
                                        </div>
                                        <div class="flex-grow-1">
                                            <label class="form-check-label mb-0 ps-2">
                                                Hệ nước nóng lạnh
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <div class="col">
                                <li class="list-group-item ps-0">
                                    <div class="d-flex align-items-start">
                                        <div class="form-check ps-0 flex-sharink-0">
                                            <input type="checkbox" class="form-check-input ms-0" checked disabled>
                                        </div>
                                        <div class="flex-grow-1">
                                            <label class="form-check-label mb-0 ps-2">
                                                Modem Wifi
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <div class="col">
                                <li class="list-group-item ps-0">
                                    <div class="d-flex align-items-start">
                                        <div class="form-check ps-0 flex-sharink-0">
                                            <input type="checkbox" class="form-check-input ms-0" checked disabled>
                                        </div>
                                        <div class="flex-grow-1">
                                            <label class="form-check-label mb-0 ps-2">
                                                Máy giặt
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <div class="col">
                                <li class="list-group-item ps-0">
                                    <div class="d-flex align-items-start">
                                        <div class="form-check ps-0 flex-sharink-0">
                                            <input type="checkbox" class="form-check-input ms-0" checked disabled>
                                        </div>
                                        <div class="flex-grow-1">
                                            <label class="form-check-label mb-0 ps-2">
                                                Máy sấy tóc
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary ">Save Changes</button>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <!-- Lịch sử rổ hàng -->
    <div id="LichSuRoHang-Modal" class="modal fade" tabindex="-1" aria-labelledby="LichSuRoHang" aria-hidden="true"
    style="display: none;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-bottom d-flex align-items-start pb-3">
                    <h5 class="modal-title" id="LichSuRoHang">
                        <span class="">Mã Phòng: </span>
                        <span class="fw-bold">AP</span> <!-- Mã Toà -->
                        <span class="fw-bold">_</span>
                        <span class="fw-bold">1402</span> <!-- Mã Phòng -->
                        <br>
                        <span class="">Loại Phòng: </span>
                        <span class="fw-bold">Studio Special</span> <!-- Loại Phòng -->
                    </h5>
                    <button type="button" class="btn-close mt-0" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>

                <div class="modal-body">
                    <h5 class="fs-15 fw-semibold">
                        Lịch sử tạo rổ hàng
                    </h5>
                    <div class="table-responsive">
                        <table class="table table-striped-columns align-middle table-nowrap mb-0">
                            <thead class="bg-soft-dark">
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Ngày tạo</th>
                                    <th scope="col">Giá cọc</th>
                                    <th scope="col">Giá phòng</th>
                                    <th scope="col">Chi tiết</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" class="text-center">1</th>
                                    <td>Nov 14, 2021</td>
                                    <td>2.500.000</td>
                                    <td>1.000.000</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-info">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">2</th>
                                    <td>Nov 21, 2021</td>
                                    <td>2.500.000</td>
                                    <td>1.000.000</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-info">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">3</th>
                                    <td>Nov 24, 2021</td>
                                    <td>2.500.000</td>
                                    <td>1.000.000</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-info">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">4</th>
                                    <td>Nov 25, 2021</td>
                                    <td>2.500.000</td>
                                    <td>1.000.000</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-info">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <div class="d-flex justify-content-end">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#TaoRoHang-Modal"
                            class="btn btn-secondary btn-label card-animate">
                            <i class="bx bxs-cart-add label-icon align-middle fs-18 me-2"></i>
                            Tạo mới
                        </button>
                    </div>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->




    <!-- Lịch sử Book Phòng -->
    <div id="LichSuBookPhong-Modal" class="modal fade" tabindex="-1" aria-labelledby="LichSuBookPhong" aria-hidden="true"
    style="display: none;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-bottom d-flex align-items-start pb-3">
                    <h5 class="modal-title" id="LichSuBookPhong">
                        <span class="">Mã Phòng: </span>
                        <span class="fw-bold">AP</span> <!-- Mã Toà -->
                        <span class="fw-bold">_</span>
                        <span class="fw-bold">1402</span> <!-- Mã Phòng -->
                        <br>
                        <span class="">Loại Phòng: </span>
                        <span class="fw-bold">Studio Special</span> <!-- Loại Phòng -->
                    </h5>
                    <button type="button" class="btn-close mt-0" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>

                <div class="modal-body">
                    <h5 class="fs-15 fw-semibold">
                        Lịch sử Book Phòng
                    </h5>
                    <div class="table-responsive">
                        <table class="table table-striped-columns align-middle table-nowrap mb-0">
                            <thead class="bg-soft-dark">
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Ngày tạo</th>
                                    <th scope="col">Giá cọc</th>
                                    <th scope="col">Giá phòng</th>
                                    <th scope="col">Chi tiết</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" class="text-center">1</th>
                                    <td>Nov 14, 2021</td>
                                    <td>2.500.000</td>
                                    <td>1.000.000</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-info">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">2</th>
                                    <td>Nov 21, 2021</td>
                                    <td>2.500.000</td>
                                    <td>1.000.000</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-info">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">3</th>
                                    <td>Nov 24, 2021</td>
                                    <td>2.500.000</td>
                                    <td>1.000.000</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-info">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">4</th>
                                    <td>Nov 25, 2021</td>
                                    <td>2.500.000</td>
                                    <td>1.000.000</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-info">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <div class="d-flex justify-content-end">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#BookPhong-Modal"
                            class="btn btn-secondary btn-label card-animate">
                            <i class="bx bxs-book-add label-icon align-middle fs-18 me-2"></i>
                            Tạo mới
                        </button>
                    </div>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <!-- Book Phòng -->
    <div id="BookPhong-Modal" class="modal fade" tabindex="-1" aria-labelledby="BookPhong" aria-hidden="true"
    style="display: none;">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <!-- Tên Modal -->
                <div class="modal-header border-bottom d-flex align-items-center pb-3">
                    <h5 class="modal-title" id="BookPhong">
                        Book Phòng
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>

                <div class="modal-body fs-15">
                    <form class="needs-validation mt-1 border-0 modal-content" novalidate>
                        <div class="row">
                            <div class="col-lg-7 border-end-double">
                                <!-- Thông tin cơ bản -->
                                <div class="">
                                    <p class="fw-semibold">
                                        Thông tin cơ bản:
                                    </p>

                                    <div class="row g-2">
                                        <div class="col-4 position-relative">
                                            <label for="giaPhong" class="form-label fw-semibold text-muted">Giá
                                                phòng</label>
                                            <input type="text" class="form-control" id="giaPhong" required>
                                            <!-- <div class="valid-tooltip">
                                                Looks good!
                                            </div> -->
                                            <div class="invalid-tooltip">
                                                Nhập giá phòng !
                                            </div>
                                        </div>

                                        <div class="col-4 position-relative">
                                            <label for="giaCoc" class="form-label fw-semibold text-muted">Giá cọc</label>
                                            <input type="number" class="form-control" id="giaCoc" required>
                                            <!-- <div class="valid-tooltip">
                                                Looks good!
                                            </div> -->
                                            <div class="invalid-tooltip">
                                                Nhập giá cọc
                                            </div>
                                        </div>

                                        <div class="col-4 col-lg-3 position-relative">
                                            <label for="donVi" class="form-label fw-semibold text-muted">Đơn vị</label>
                                            <select class="form-select" id="donVi" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option>...</option>
                                            </select>
                                            <div class="invalid-tooltip">
                                                Chọn đơn vị !
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-11 position-relative">
                                            <div class="row row-cols-2 g-2">
                                                <div class="col">
                                                    <label class="form-label fw-semibold text-muted">
                                                        Ngày Book phòng
                                                    </label>

                                                    <input type="text" required="" readonly="readonly"
                                                        class="d-none d-lg-block form-control fs-14 fw-semibold flatpickr-input"
                                                        data-provider="flatpickr" data-date-format="d M, Y">

                                                    <input type="date" class="form-control fs-14 fw-semibold d-lg-none"
                                                        required="">

                                                    <!-- <div class="valid-tooltip">
                                                        Looks good!
                                                    </div> -->

                                                    <div class="invalid-tooltip">
                                                        Nhập giá phòng !
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <label class="form-label fw-semibold text-muted">
                                                        Ngày ở dự kiến
                                                    </label>

                                                    <input type="text" required="" readonly="readonly"
                                                        class="d-none d-lg-block form-control fs-14 fw-semibold flatpickr-input"
                                                        data-provider="flatpickr" data-date-format="d M, Y">

                                                    <input type="date" class="form-control fs-14 fw-semibold d-lg-none"
                                                        required="">

                                                    <!-- <div class="valid-tooltip">
                                                        Looks good!
                                                    </div> -->

                                                    <div class="invalid-tooltip">
                                                        Nhập giá phòng !
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <hr>

                                <!-- Dịch vụ -->
                                <div class="">

                                    <p class="fw-semibold mb-0">
                                        Dịch vụ:
                                    </p>

                                    <div class="row g-2 mt-1">
                                        <div class="col-12 col-lg-4 position-relative">
                                            <label for="dichVu" class="form-label fw-semibold text-muted">Loại dịch
                                                vụ</label>
                                            <select class="form-select" id="dichVu" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option>...</option>
                                            </select>
                                            <div class="invalid-tooltip">
                                                Chọn dịch vụ !
                                            </div>
                                        </div>

                                        <div class="col-5 col-lg-4 position-relative">
                                            <label for="giaTien" class="form-label fw-semibold text-muted">Giá tiền</label>
                                            <input type="number" class="form-control" id="giaTien" required>
                                            <!-- <div class="valid-tooltip">
                                                Looks good!
                                            </div> -->
                                            <div class="invalid-tooltip">
                                                Nhập giá tiền !
                                            </div>
                                        </div>

                                        <div class="col-5 col-md-6 col-lg-3 position-relative">
                                            <label for="donVi" class="form-label fw-semibold text-muted">Đơn vị</label>
                                            <select class="form-select" id="donVi" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option>...</option>
                                            </select>
                                            <div class="invalid-tooltip">
                                                Chọn đơn vị !
                                            </div>
                                        </div>

                                        <div class="col-2 col-md-1 position-relative d-flex flex-column align-items-center">
                                            <label for="" class="form-label fw-semibold text-muted">&NoBreak;</label>

                                            <button class="btn btn-danger btn-sm p-0 px-2 h-100">
                                                <i class=" ri-delete-bin-5-line fs-18"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="row g-2 mt-1">
                                        <div class="col-12 col-lg-4 position-relative">
                                            <label for="dichVu" class="form-label fw-semibold text-muted">Loại dịch
                                                vụ</label>
                                            <select class="form-select" id="dichVu" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option>...</option>
                                            </select>
                                            <div class="invalid-tooltip">
                                                Chọn dịch vụ !
                                            </div>
                                        </div>

                                        <div class="col-5 col-lg-4 position-relative">
                                            <label for="giaTien" class="form-label fw-semibold text-muted">Giá tiền</label>
                                            <input type="number" class="form-control" id="giaTien" required>
                                            <!-- <div class="valid-tooltip">
                                                Looks good!
                                            </div> -->
                                            <div class="invalid-tooltip">
                                                Nhập giá tiền !
                                            </div>
                                        </div>

                                        <div class="col-5 col-md-6 col-lg-3 position-relative">
                                            <label for="donVi" class="form-label fw-semibold text-muted">Đơn vị</label>
                                            <select class="form-select" id="donVi" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option>...</option>
                                            </select>
                                            <div class="invalid-tooltip">
                                                Chọn đơn vị !
                                            </div>
                                        </div>

                                        <div class="col-2 col-md-1 position-relative d-flex flex-column align-items-center">
                                            <label for="" class="form-label fw-semibold text-muted">&NoBreak;</label>

                                            <button class="btn btn-danger btn-sm p-0 px-2 h-100">
                                                <i class=" ri-delete-bin-5-line fs-18"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <button class="btn btn-secondary btn-sm p-0 px-2 mt-3">
                                        <i class=" ri-add-circle-line fs-20"></i>
                                    </button>
                                </div>

                                <hr>

                                <!-- Tiện ích nội khu -->
                                <div class="">
                                    <p class="fw-semibold mb-0">
                                        Tiện ích nội khu:
                                    </p>

                                    <div class="row row-cols-2 row-cols-xxl-3 mt-2">
                                        <div class="col">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="TaoRoHang__doXeMay">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                            for="TaoRoHang__doXeMay">
                                                            Đổ xe máy
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>

                                        <div class="col">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="TaoRoHang__doXeHoi">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                            for="TaoRoHang__doXeHoi">
                                                            Đổ xe hơi
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>

                                        <div class="col">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="TaoRoHang__beBoi">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                            for="TaoRoHang__beBoi">
                                                            Bể bơi
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>

                                        <div class="col">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="TaoRoHang__giatPhoi">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                            for="TaoRoHang__giatPhoi">
                                                            Giặt phơi
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>

                                        <div class="col">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="TaoRoHang__sayDichVu">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                            for="TaoRoHang__sayDichVu">
                                                            Sấy dịch vụ
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>

                                        <div class="col">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="TaoRoHang__GYM">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                            for="TaoRoHang__GYM">
                                                            GYM
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>

                                        <div class="col">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="TaoRoHang__Coffee">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                            for="TaoRoHang__Coffee">
                                                            Coffee
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>

                                        <div class="col">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="TaoRoHang__nhaHang">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                            for="TaoRoHang__nhaHang">
                                                            Nhà hàng
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>

                                        <div class="col">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" id="TaoRoHang__shop"
                                                            class="form-check-input ms-0">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                            for="TaoRoHang__shop">
                                                            Shop
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <!-- Nội thất -->
                                <div class="">
                                    <p class="fw-semibold mb-0">
                                        Nội thất:
                                    </p>

                                    <div class="row row-cols-2 row-cols-xxl-3 mt-2">
                                        <div class="col">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="BookPhong__heTuBep">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                            for="BookPhong__heTuBep">
                                                            Hệ tủ bếp
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>

                                        <div class="col">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="BookPhong__giuong">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                            for="BookPhong__giuong">
                                                            Giường
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>

                                        <div class="col">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="BookPhong__boBanAn">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                            for="BookPhong__boBanAn">
                                                            Bộ bàn ăn
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>

                                        <div class="col">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="BookPhong__nem">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                            for="BookPhong__nem">
                                                            Nệm
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>

                                        <div class="col">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="BookPhong__boGheAn">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                            for="BookPhong__boGheAn">
                                                            Bộ ghế ăn
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>

                                        <div class="col">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="BookPhong__keTV">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                            for="BookPhong__keTV">
                                                            Kệ TV
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>

                                        <div class="col">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="BookPhong__boSoffa">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                            for="BookPhong__boSoffa">
                                                            Bộ soffa
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>

                                        <div class="col">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="BookPhong__keTab">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                            for="BookPhong__keTab">
                                                            Kệ Tab
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>

                                        <div class="col">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="BookPhong__boBanKhac">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                            for="BookPhong__boBanKhac">
                                                            Bộ bàn khác
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>

                                        <div class="col">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="BookPhong__tuGiay">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                            for="BookPhong__tuGiay">
                                                            Tủ giày
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>

                                        <div class="col">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="BookPhong__heTuQuanAo">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                            for="BookPhong__heTuQuanAo">
                                                            Hệ tủ quần áo
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>

                                        <div class="col">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="BookPhong__heToilet">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                            for="BookPhong__heToilet">
                                                            Hệ Toilet
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <!-- Thiết bị trong phòng -->
                                <div class="">
                                    <p class="fw-semibold mb-0">
                                        Thiết bị trong phòng:
                                    </p>

                                    <div class="row row-cols-2 row-cols-xxl-3 mt-2">
                                        <div class="col">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="BookPhong__boDieuHoa">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                            for="BookPhong__boDieuHoa">
                                                            Bộ điều hoà
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>

                                        <div class="col">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="BookPhong__maySayDo">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                            for="BookPhong__maySayDo">
                                                            Máy sấy đồ
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>

                                        <div class="col">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="BookPhong__tuLanh">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                            for="BookPhong__tuLanh">
                                                            Tủ lạnh
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>

                                        <div class="col">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="BookPhong__mayRuaBat">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                            for="BookPhong__mayRuaBat">
                                                            Máy rửa bát
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>

                                        <div class="col">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="BookPhong__bepTu-hongNgoai">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                            for="BookPhong__bepTu-hongNgoai">
                                                            Bếp (Từ/Hồng ngoại)
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>

                                        <div class="col">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="BookPhong__boTivi">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                            for="BookPhong__boTivi">
                                                            Bộ Tivi
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>

                                        <div class="col">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="BookPhong__mayHutMui">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                            for="BookPhong__mayHutMui">
                                                            Máy hút mùi
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>

                                        <div class="col">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="BookPhong__loViSong">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                            for="BookPhong__loViSong">
                                                            Lò vi sóng
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>

                                        <div class="col">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="BookPhong__heNuocNongLanh">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                            for="BookPhong__heNuocNongLanh">
                                                            Hệ nước nóng lạnh
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>

                                        <div class="col">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="BookPhong__modemWifi">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                            for="BookPhong__modemWifi">
                                                            Modem Wifi
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>

                                        <div class="col">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="BookPhong__mayGiat">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                            for="BookPhong__mayGiat">
                                                            Máy giặt
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>

                                        <div class="col">
                                            <li class="list-group-item ps-0">
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check ps-0 flex-sharink-0">
                                                        <input type="checkbox" class="form-check-input ms-0"
                                                            id="BookPhong__maySayToc">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label mb-0 ps-2 w-100 text-muted"
                                                            for="BookPhong__maySayToc">
                                                            Máy sấy tóc
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="col-lg-5">
                                <!-- Thông tin giao dịch -->
                                <div class="custom-border-none pt-4 pt-lg-0 mt-4 mt-lg-0 border-top-double">
                                    <p class="fw-semibold">
                                        Thông tin giao dịch:
                                    </p>

                                    <div class="row g-2">
                                        <!-- Sàn giao dịch -->
                                        <div class="col-12 position-relative">
                                            <label for="bookPhong" class=" form-label fw-semibold text-muted">
                                                Sàn giao dịch
                                            </label>
                                            <select class="form-select" id="bookPhong" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option>...</option>
                                            </select>
                                            <div class="invalid-tooltip">
                                                Chọn sàn !
                                            </div>
                                        </div>


                                        <!-- Sell -->
                                        <div class="col-12 position-relative">
                                            <label for="choices-multiple-remove-button" class="form-label text-muted">Nhân
                                                viên Sell</label>

                                            <select class="form-control" id="choices-multiple-remove-button" data-choices
                                                data-choices-removeItem name="choices-multiple-remove-button" multiple>
                                                <option value="1" data-bs-toggle="modal" data-bs-target="#valueModal"
                                                    data-id="1" selected>Long IT</option>
                                                <option value="2" data-bs-toggle="modal" data-bs-target="#valueModal"
                                                    data-id="2">Hoàng Long Megas</option>
                                                <option value="3" data-bs-toggle="modal" data-bs-target="#valueModal"
                                                    data-id="3">Thanh Long Mã</option>
                                                <option value="4" data-bs-toggle="modal" data-bs-target="#valueModal"
                                                    data-id="4">Lê Hoàng Long</option>
                                            </select>
                                        </div>


                                        <!-- Thời hạn -->
                                        <div class="col-7 position-relative">
                                            <label for="thoiHan" class="form-label fw-semibold text-muted">
                                                Thời hạn
                                            </label>
                                            <div class="row">
                                                <div class="col-4 pe-0">
                                                    <input type="text" class="form-control" id="thoiHan" required>
                                                    <!-- <div class="valid-tooltip">
                                                        Looks good!
                                                    </div> -->
                                                    <div class="invalid-tooltip">
                                                        Nhập thời hạn !
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <select class="form-select">
                                                        <option value="1">Tháng</option>
                                                        <option value="2">Ngày</option>
                                                        <option value="3">...</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Hoa hồng -->
                                        <div class="col-5 position-relative">
                                            <label class="form-label fw-semibold text-muted">
                                                Hoa hồng
                                            </label>
                                            <div class="row">
                                                <div class="col-7 col-md-8">
                                                    <input type="text" class="form-control" required>
                                                    <!-- <div class="valid-tooltip">
                                                        Looks good!
                                                    </div> -->
                                                    <div class="invalid-tooltip">
                                                        Nhập hoa hồng !
                                                    </div>
                                                </div>
                                                <div class="col-5 col-md-4 ps-0">
                                                    <input type="text" class="form-control" value="%" required>
                                                    <!-- <div class="valid-tooltip">
                                                        Looks good!
                                                    </div> -->
                                                    <div class="invalid-tooltip">
                                                        Nhập đơn vị !
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>



                                <!-- Thông tin khách hàng -->
                                <div class="">
                                    <p class="fw-semibold">
                                        Thông tin khách hàng:
                                    </p>

                                    <!-- <div class="Temp">
                                        <div class="row">
                                            <div class="col-12 px-4">
                                                <div class="row py-3 border-3 border">

                                                    <div class="col-12">
                                                        <div class="mb-2">
                                                            <input type="text" class="form-control" placeholder="Họ tên"
                                                                required>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="mb-2">
                                                                    <input type="text" required="" placeholder="Ngày sinh"
                                                                        class="d-none d-lg-block form-control flatpickr-input"
                                                                        data-provider="flatpickr" data-date-format="d M, Y">

                                                                    <input type="date" class="form-control d-lg-none"
                                                                        id="exampleInputdate">
                                                                </div>
                                                            </div>

                                                            <div class="col-6 ps-0">
                                                                <select class="form-select">
                                                                    <option value="1">Nam</option>
                                                                    <option value="2">Nữ</option>
                                                                    <option value="3">Khác</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="mb-2">
                                                            <input type="text" class="form-control"
                                                                placeholder="CCCD / Hộ chiếu" required>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="mb-2">
                                                                    <input type="text" placeholder="Ngày cấp" required
                                                                        class="d-none d-lg-block form-control flatpickr-input"
                                                                        data-provider="flatpickr" data-date-format="d M, Y">

                                                                    <input type="date" class="form-control d-lg-none"
                                                                        required id="exampleInputdate">
                                                                </div>
                                                            </div>

                                                            <div class="col-6 ps-0">
                                                                <select class="form-select" required>
                                                                    <option value="">Nơi cấp</option>
                                                                    <option value="1">An Giang</option>
                                                                    <option value="2">Cà Mau</option>
                                                                    <option value="3">Long An</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <br>

                                        <div class="row">
                                            <div class="col-12 px-4">
                                                <div class="row py-3 border-3 border">
                                                    <div class="col-12">
                                                        <div class="row mb-2">
                                                            <div class="col-4 pe-0">
                                                                <input type="number" class="form-control" placeholder="SĐT"
                                                                    required>
                                                            </div>

                                                            <div class="col-8">
                                                                <input type="email" class="form-control"
                                                                    placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <input type="text" class="form-control"
                                                                placeholder="Địa chỉ thường trú (Theo hộ khẩu)">
                                                        </div>

                                                        <textarea class="form-control" rows="4"
                                                            placeholder="Ghi chú ..."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="Temp">
                                        <div class="row">
                                            <div class="col-12 px-4">
                                                <div class="row py-3 border-3 border">

                                                    <div class="col-12">

                                                        <!-- Họ tên -->
                                                        <div class="form-floating mb-2">
                                                            <input type="text" class="form-control fs-14 fw-semibold"
                                                                id="float-hoTen" placeholder="temp" required>
                                                            <label for="float-hoTen" class="text-muted fw-bold">Họ
                                                                tên</label>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-6 pe-0">
                                                                <div class="form-floating mb-2">
                                                                    <input type="text" id="float-ngaySinh-desktop" required
                                                                        class="d-none d-lg-block form-control fs-14 fw-semibold flatpickr-input"
                                                                        data-provider="flatpickr" data-date-format="d M, Y"
                                                                        placeholder="temp">

                                                                    <label for="float-ngaySinh-desktop"
                                                                        class="text-muted fw-bold d-none d-lg-block">
                                                                        Ngày sinh
                                                                    </label>

                                                                    <input type="date" placeholder="temp"
                                                                        class="form-control fs-14 fw-semibold d-lg-none"
                                                                        required id="float-ngaySinh">

                                                                    <label for="float-ngaySinh"
                                                                        class="text-muted fw-bold d-lg-none">
                                                                        Ngày sinh
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <div class="form-floating mb-2">
                                                                    <select class="form-select fs-14 fw-semibold"
                                                                        id="float-gioiTinh">
                                                                        <option value="1">Nam</option>
                                                                        <option value="2">Nữ</option>
                                                                        <option value="3">Khác</option>
                                                                    </select>

                                                                    <label for="float-gioiTinh" class="text-muted fw-bold">
                                                                        Giới tính
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-floating mb-2">
                                                            <input type="text" class="form-control fs-14 fw-semibold"
                                                                id="float-CCCD" required placeholder="temp">

                                                            <label for="float-CCCD" class="text-muted fw-bold">
                                                                CCCD / Hộ chiếu
                                                            </label>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-6 pe-0">
                                                                <div class="form-floating mb-2">
                                                                    <input type="text" id="float-ngayCap-desktop" required
                                                                        class="d-none d-lg-block form-control fs-14 fw-semibold flatpickr-input"
                                                                        data-provider="flatpickr" data-date-format="d M, Y"
                                                                        placeholder="temp">

                                                                    <label for="float-ngayCap-desktop"
                                                                        class="text-muted fw-bold d-none d-lg-block">
                                                                        Ngày cấp
                                                                    </label>

                                                                    <input type="date" placeholder="temp"
                                                                        class="form-control fs-14 fw-semibold d-lg-none"
                                                                        required id="float-ngayCap">

                                                                    <label for="float-ngayCap"
                                                                        class="text-muted fw-bold d-lg-none">
                                                                        Ngày cấp
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <div class="form-floating">
                                                                    <select class="form-select fs-14 fw-semibold"
                                                                        id="float-noiCap" required>
                                                                        <option value="">Nơi cấp</option>
                                                                        <option value="1">An Giang</option>
                                                                        <option value="2">Cà Mau</option>
                                                                        <option value="3">Long An</option>
                                                                    </select>

                                                                    <label for="float-noiCap" class="text-muted fw-bold">
                                                                        Nơi cấp
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <br>

                                        <div class="row">
                                            <div class="col-12 px-4">
                                                <div class="row py-3 border-3 border">
                                                    <div class="col-12">
                                                        <div class="row mb-2">
                                                            <div class="col-5 col-md-4 pe-0">
                                                                <div class="form-floating">
                                                                    <input type="number"
                                                                        class="form-control fs-14 fw-semibold"
                                                                        placeholder="temp" required>

                                                                    <label for="float-sdt" class="fw-bold text-muted">
                                                                        Số điện thoại
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="col-7 col-md-8">
                                                                <div class="form-floating">
                                                                    <input type="email"
                                                                        class="form-control fs-14 fw-semibold"
                                                                        placeholder="temp" required>

                                                                    <label class="fw-bold text-muted">
                                                                        Email
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mb-2">
                                                            <div class="form-floating">
                                                                <input type="text" class="form-control" required
                                                                    placeholder="temp">

                                                                <label class="fw-bold text-muted">
                                                                    Địa chỉ thường trú (Theo hộ khẩu)
                                                                </label>
                                                            </div>
                                                        </div>


                                                        <textarea class="form-control fs-14 fw-semibold" rows="4"
                                                            placeholder="Ghi chú ..."></textarea>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer border-top p-0 pt-3 mt-3">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary ">Apply</button>
                            </div>
                        </div>
                    </form>
                </div>



            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <!-- Tạo hợp đồng -->
    <div id="HopDong-Modal" class="modal fade" tabindex="-1" aria-labelledby="HopDong" aria-hidden="true"
    style="display: none;">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header border-bottom d-flex align-items-start pb-3">
                    <h5 class="modal-title" id="HopDong">
                        <span class="">Mã Phòng: </span>
                        <span class="fw-bold">AP</span> <!-- Mã Toà -->
                        <span class="fw-bold">_</span>
                        <span class="fw-bold">1402</span> <!-- Mã Phòng -->
                        <br>
                        <span class="">Loại Phòng: </span>
                        <span class="fw-bold">Studio Special</span> <!-- Loại Phòng -->
                    </h5>
                    <button type="button" class="btn-close mt-0" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>

                <div class="modal-body">
                    <h5 class="fs-15 fw-semibold">
                        Lịch sử hợp đồng
                    </h5>
                    <div class="table-responsive">
                        <table class="table table-striped-columns align-middle table-nowrap mb-0">

                            <thead class="bg-soft-dark">
                                <tr>
                                    <th scope="col">Mã hợp đồng</th>
                                    <th scope="col">Tên khách</th>
                                    <th scope="col">Ngày check in</th>
                                    <th scope="col">Ngày check out</th>
                                    <th scope="col">Loại hợp đồng</th>
                                    <th scope="col">Chi tiết</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" class="text-center">
                                        Dex_T04746_4026</th>
                                    <td>Nicholas Ball</td>
                                    <td>Nov 14, 2021</td>
                                    <td>Nov 14, 2021</td>
                                    <td>Hợp đồng 6 tháng</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm bg-gr btn-info card-animate">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">
                                        Dex_T04746_4026</th>
                                    <td>Nicholas Ball</td>
                                    <td>Nov 14, 2021</td>
                                    <td>Nov 14, 2021</td>
                                    <td>Hợp đồng 6 tháng</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm bg-gr btn-info card-animate">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">
                                        Dex_T04746_4026</th>
                                    <td>Nicholas Ball</td>
                                    <td>Nov 14, 2021</td>
                                    <td>Nov 14, 2021</td>
                                    <td>Hợp đồng 6 tháng</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm bg-gr btn-info card-animate">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">
                                        Dex_T04746_4026</th>
                                    <td>Nicholas Ball</td>
                                    <td>Nov 14, 2021</td>
                                    <td>Nov 14, 2021</td>
                                    <td>Hợp đồng 6 tháng</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm bg-gr btn-info card-animate">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <div class="d-flex justify-content-end">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#TaoRoHang-Modal"
                            class="btn btn-secondary btn-label card-animate">
                            <i class="las la-file-medical label-icon align-middle fs-18 me-2"></i>
                            Tạo mới
                        </button>
                    </div>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->



    <!-- Vệ Sinh Phòng -->


@endsection

@section('css')
  <!-- Main Custom (Còn 1 Custom Js ở cuối)-->
  <link href="{{ URL::asset('assets/css/layouts/main-custom.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ URL::asset('assets/css/customs/cart.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('script')

    <!-- Custom Js -->
    <script src="{{ URL::asset('assets/js/layouts/main-custom.js') }}"></script>
    <script src="{{ URL::asset('assets/js/customs/cart.js') }}"></script>
    
    <script>
        // Khi giá trị của phần tử thay đổi
        // đoạn mã sẽ gọi một yêu cầu AJAX để lấy dữ liệu từ server và sau đó cập nhật nội dung của một phần tử 
    $(document).ready(function() {
        $('html').on('change', '.select-building_id', function() {
        
            var building_id = $(this).val();
            var url = '/admin/manager/apartment/index-content';

            var requestData = {
                building_id: building_id,
            };

            ajaxCustom(url, requestData, 'get')
                .then(function(data) {
                    // console.log(data);
                    $('#index-content').html(data);
                })
                .catch(function(error) {
                    console.error("Không có dữ liệu trả về");
                    // console.error("Lỗi:", error);
                });    

        });
    });

    </script>
@endsection
