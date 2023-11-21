@extends('layouts.master')

@section('title', 'Thêm toà nhà')
@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row mb-3">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Thêm toà nhà</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Quản lý toà nhà</a></li>
                                <li class="breadcrumb-item active">Thêm toà nhà</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-xxl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="nav flex-column nav-pills text-right" id="v-pills-tab" role="tablist"
                                        aria-orientation="vertical">
                                        <a class="nav-link mb-2 active" id="v-pills-home-tab" data-bs-toggle="pill"
                                            href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                            aria-selected="true"><i class="ri-home-5-line align-middle me-1"></i>
                                            Chi tiết</a>
                                        <a class="nav-link mb-2" id="v-pills-profile-tab" data-bs-toggle="pill"
                                            href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                            aria-selected="false"><i class="ri-home-5-line align-middle me-1"></i>
                                            Tiện ích</a>
                                        <a class="nav-link mb-2" id="v-pills-messages-tab" data-bs-toggle="pill"
                                            href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                            aria-selected="false"><i class="ri-home-5-line align-middle me-1"></i>
                                            Dịch vụ</a>
                                        <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                            href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                                            aria-selected="false"><i class="ri-home-5-line align-middle me-1"></i>
                                            Loại phòng</a>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-9">
                                    <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                                        <div class="tab-pane detail fade show active" id="v-pills-home" role="tabpanel"
                                            aria-labelledby="v-pills-home-tab">
                                            <div class="card-body">
                                                <form class="needs-validation" action="create" id="validateForm"
                                                    method="POST" enctype="multipart/form-data" novalidate>
                                                    @csrf
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
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <h5><b>Logo</b></h5>
                                                                    <div class="controls">
                                                                        <label for="avatar"
                                                                            style="cursor: pointer; width:100%;">
                                                                            <div class="avatar-preview">
                                                                                <div id="imagePreview"
                                                                                    style="background-image: url(/assets/images/buiding-logo/logo-0.png)">
                                                                                </div>
                                                                            </div>
                                                                        </label>
                                                                        <input type="hidden" id="base64image"
                                                                            name="base64image">
                                                                        <input type="file" name="avatar"
                                                                            style="display: none;" id="avatar"
                                                                            class="imageUpload">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="row mb-3">
                                                                    <div class="form-group">
                                                                        <label for="name">Tên toà nhà</label>
                                                                        <span class="text-danger">*</span>
                                                                        <input type="text" required name="building_name"
                                                                            id="building_name"
                                                                            class="form-control rounded-pill">
                                                                        <div class="invalid-feedback"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <div class="form-group">
                                                                        <div class="row mb-3">
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label for="province_id">Thành
                                                                                        phố/Tỉnh</label>
                                                                                    <span class="text-danger">*</span>
                                                                                    <select required id="province"
                                                                                        name="province_id"
                                                                                        class="form-select  rounded-pill custom-select">
                                                                                        <option value="">---</option>
                                                                                        @foreach ($provinces as $province)
                                                                                            <option
                                                                                                value="{{ $province->provinceid }}">
                                                                                                {{ $province->name }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label
                                                                                        for="district_id">Quận/Huyện</label>
                                                                                    <span class="text-danger">*</span>
                                                                                    <select name="district_id" required
                                                                                        id="district"
                                                                                        class="form-select  rounded-pill custom-select">
                                                                                        <option value="">---</option>

                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <label for="ward_id">Phường/Xã</label>
                                                                                    <span class="text-danger">*</span>
                                                                                    <select name="ward_id" required
                                                                                        id="ward"
                                                                                        class="form-select  rounded-pill custom-select">
                                                                                        <option value="">---</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="form-group">
                                                                                <label for="address">Địa chỉ cụ
                                                                                    thể</label>
                                                                                <span class="text-danger">*</span>
                                                                                <input type="text" required
                                                                                    name="building_address" id="address"
                                                                                    class="form-control rounded-pill">
                                                                                <div class="invalid-feedback"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="row mb-3">
                                                                            <div class="col-md-6 ">
                                                                                <div class="form-group mb-3 validate">
                                                                                    <label for="numbfloor1">Số tầng hầm</label>
                                                                                    <span class="text-danger">*</span>
                                                                                    <input type="number" required
                                                                                        min="1" max="100"
                                                                                        name="floor1_numb" id="numbfloor1"
                                                                                        class="form-control rounded-pill">
                                                                                    <div class="invalid-feedback"></div>
                                                                                    <!-- Base Radios -->
                                                                                    <br>
                                                                                    <label>Style tầng hầm</label>
                                                                                    <div class="form-check ms-3 mb-2">
                                                                                        <input class="form-check-input" type="radio"  name="floor1_style" value="floor1_style1" id="floor1_style1" checked>
                                                                                        <label class="form-check-label" for="floor1_style1">
                                                                                            B1, B2, B3...
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check ms-3">
                                                                                        <input class="form-check-input" type="radio" name="floor1_style" value="floor_style4" id="floor_style4">
                                                                                        <label class="form-check-label" for="floor_style4">
                                                                                            Tuỳ chỉnh
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div id="floor1">
                                                                                   
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 border-start">
                                                                                <label for="numbfloor2">Số tầng nổi</label>
                                                                                <span class="text-danger">*</span>
                                                                                <input type="number" required
                                                                                    min="1" max="100"
                                                                                    name="numbfloor2" id="numbfloor2"
                                                                                    class="form-control rounded-pill">
                                                                                <div class="invalid-feedback"></div>
                                                                                <!-- Base Radios -->
                                                                                <br>
                                                                                <label for="numbfloor1">Style tầng nổi</label>
                                                                                <div class="form-check ms-3 mb-2">
                                                                                    <input class="form-check-input" type="radio" name="floor2_style" value="floor2_style1"  id="floor2_style1" checked>
                                                                                    <label class="form-check-label" for="floor2_style1">
                                                                                        1, 2, 3...
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check ms-3 mb-2">
                                                                                    <input class="form-check-input" type="radio" name="floor2_style" value="floor2_style2"  id="floor2_style2">
                                                                                    <label class="form-check-label" for="floor2_style2">
                                                                                        G, 1, 2, 3...
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check ms-3">
                                                                                    <input class="form-check-input" type="radio" name="floor2_style" value="floor_style4"  id="floor_style4">
                                                                                    <label class="form-check-label" for="floor_style4">
                                                                                        Tuỳ chỉnh
                                                                                    </label>
                                                                                </div>
                                                                                <div id="floor2">
                                                                                   
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="box-footer text-end mb-3">
                                                                        <div class="col-12">
                                                                            <input type="reset" value="Clear"
                                                                                class="btn btn-warning float-right">
                                                                            <button type="subnit"
                                                                                class="btn btn-success float">Save</button>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade utilities" id="v-pills-profile" role="tabpanel"
                                            aria-labelledby="v-pills-profile-tab">
                                            <div class="card-body">
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="utilities">Tiện ích</label>
                                                            <span class="text-danger">*</span>
                                                            <div class="row mb-3 g-3">
                                                                <div class="col-md">
                                                                    <select name="utilities_id" required
                                                                        id="select-utilities"
                                                                        class="form-select rounded-pill custom-select">
                                                                        <option value="">...</option>
                                                                        @foreach ($list_utilities as $utilities)
                                                                            <option value="{{ $utilities->id }}">
                                                                                {{ $utilities->name }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-auto">
                                                                    <button type="button" class="btn btn-success float"
                                                                        id="btn-utilities_add">
                                                                        <i class="bx bx-plus"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label>Mô tả</label>
                                                        <div class="ms-2" id="utilities_discription">
                                                            <span>---</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="border-top-double"></div>
                                                <br>

                                                <form class="needs-validation" novalidate action="create"
                                                    id="validateForm" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div id="utilities_content">
                                                        <div class="row" id="item-utilities{{ $utilities->id }}">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <h6>{{ $utilities->name }}</h5>
                                                                            {{-- <input type="hidden"
                                                                                name="utilities_id[utilities_id]"
                                                                                class="form-control" value="utilities_id"
                                                                                required=""> --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <select name="floor[floor_id]" required=""
                                                                            class="form-select rounded-pill custom-select"
                                                                            data-validation-required-message="Bạn chưa chọn tầng.">
                                                                            <option value="">Chọn vị trí tầng
                                                                            </option>
                                                                            <optgroup label="Tầng hầm">
                                                                                <option value="B1">Tầng B1</option>
                                                                            </optgroup>
                                                                            <optgroup label="Tầng nổi">
                                                                                <option value="1">Tầng 1</option>
                                                                                <option value="2">Tầng 2</option>
                                                                                <option value="3">Tầng 3</option>
                                                                            </optgroup>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <button type="button" data-item="utilities_id"
                                                                            class="waves-effect waves-light btn btn-danger mb-5 btn-sm "><i
                                                                                class=" ri-close-line"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="box-footer text-end mb-3">
                                                        <input type="reset" value="Clear"
                                                            class="btn btn-warning float-right">
                                                        <button type="button" class="btn btn-success float">Save</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                            aria-labelledby="v-pills-messages-tab">
                                            <div class="card-body">
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="dichvu">Dịch vụ</label>
                                                            <span class="text-danger">*</span>
                                                            <div class="row mb-3 g-3">
                                                                <div class="col-md">
                                                                    <select name="dichvu" required id="dichvu"
                                                                        class="form-select rounded-pill custom-select">
                                                                        <option value="">...</option>
                                                                        <option value="1">1...</option>
                                                                        <option value="2">2...</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-auto">
                                                                    <button type="button" class="btn btn-success float">
                                                                        <i class="bx bx-plus"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label>Mô tả</label>
                                                        <div class="ms-2">
                                                            Each design is a new, unique piece of art birthed into this
                                                            world,
                                                            and while you have the opportunity to be creative and make your
                                                            own
                                                            style choices.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="border-top-double"></div>
                                                <br>

                                                <form class="needs-validation" novalidate action="create"
                                                    id="validateForm" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="service_content">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <h6>Dịch vụ 1</h5>
                                                                            <input type="hidden"
                                                                                name="service_id[service_id]"
                                                                                class="form-control" value="service_id"
                                                                                required="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <input type="number" required name="name"
                                                                            id="giatien"
                                                                            class="form-control rounded-pill"
                                                                            placeholder="Giá tiền...">
                                                                        <div class="invalid-feedback"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <select name="floor[floor_id]" required=""
                                                                            class="form-select rounded-pill custom-select"
                                                                            data-validation-required-message="Bạn chưa chọn tầng.">
                                                                            <option value="">Đơn vị...
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            </optgroup>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <button type="button" data-item="service_id"
                                                                            class="waves-effect waves-light btn btn-danger mb-5 btn-sm "><i
                                                                                class=" ri-close-line"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="box-footer text-end mb-3">
                                                        <div class="col-12">
                                                            <input type="reset" value="Clear"
                                                                class="btn btn-warning float-right">
                                                            <button type="button"
                                                                class="btn btn-success float">Save</button>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                            aria-labelledby="v-pills-settings-tab">
                                            <div class="card-body">
                                                <form class="needs-validation" novalidate action="create"
                                                    id="validateForm" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="box-header with-border p-10">
                                                        <div class="row ">
                                                            <div class="col-md-8">
                                                                <h4 class="box-title">Loại phòng</h4>
                                                            </div>
                                                            <div class="col-md-4 text-end">
                                                                <button type="button"
                                                                    class="card-animate btn btn-success float btn-create_typepartment">
                                                                    <i class="bx bx-plus">Thêm loại phòng</i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <hr>

                                                    <section>
                                                        <div class="row row-cols-1 row-cols-md-3 g-3">
                                                            <div class="col">
                                                                <div class="card card-animate border border-3">
                                                                    <div
                                                                        class="card-header d-flex justify-content-between align-items-center">
                                                                        <h5 class="fw-semibold">Studio Special</h5>

                                                                        <button type="button"
                                                                            class="btn btn-danger btn-sm btn-icon waves-effect waves-light">
                                                                            <i class="ri-delete-bin-5-line"></i>
                                                                        </button>
                                                                    </div>


                                                                    <div class="card-body">
                                                                        <h6 class="text-muted">Phòng trong loại: 0</h6>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col">
                                                                <div class="card card-animate border border-3">
                                                                    <div
                                                                        class="card-header d-flex justify-content-between align-items-center">
                                                                        <h5 class="fw-semibold">Studio Special</h5>

                                                                        <button type="button"
                                                                            class="btn btn-danger btn-sm btn-icon waves-effect waves-light">
                                                                            <i class="ri-delete-bin-5-line"></i>
                                                                        </button>
                                                                    </div>


                                                                    <div class="card-body">
                                                                        <h6 class="text-muted">Phòng trong loại: 0</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="card card-animate border border-3">
                                                                    <div
                                                                        class="card-header d-flex justify-content-between align-items-center">
                                                                        <h5 class="fw-semibold">Studio Special</h5>

                                                                        <button type="button"
                                                                            class="btn btn-danger btn-sm btn-icon waves-effect waves-light">
                                                                            <i class="ri-delete-bin-5-line"></i>
                                                                        </button>
                                                                    </div>


                                                                    <div class="card-body">
                                                                        <h6 class="text-muted">Phòng trong loại: 0</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>

                                                    <section>
                                                        <h5 class="fw-semibold">Sơ đồ giác quan</h5>

                                                        <div class="d-flex gap-3">
                                                            <div
                                                                class="align-self-stretch d-flex align-items-center bg-primary px-5 text-nowrap">
                                                                <h6 class="mb-0 text-uppercase text-white fw-bold">
                                                                    Tầng G
                                                                </h6>
                                                            </div>

                                                            <div class="flex-grow-1 row row-cols-md-6 g-1">
                                                                <div class="col d-flex">
                                                                    <div
                                                                        class="bg-danger rounded-3 d-flex flex-column justify-content-center align-items-center flex-grow-1 text-white ">

                                                                        <h5 class="  fw-semibold text-white mb-1">101</h5>
                                                                        <h6 class="fw-semibold text-white mb-0">Studio
                                                                            Special</h6>
                                                                    </div>
                                                                </div>




                                                                <div class="col d-flex">
                                                                    <div
                                                                        class="bg-danger rounded-3 d-flex flex-column justify-content-center align-items-center flex-grow-1 text-white ">

                                                                        <h5 class="  fw-semibold text-white mb-1">101</h5>
                                                                        <h6 class="fw-semibold text-white mb-0">Studio
                                                                            Special</h6>
                                                                    </div>
                                                                </div>

                                                                <div class="col d-flex">
                                                                    <div
                                                                        class="bg-danger rounded-3 d-flex flex-column justify-content-center align-items-center flex-grow-1 text-white ">

                                                                        <h5 class="  fw-semibold text-white mb-1">101</h5>
                                                                        <h6 class="fw-semibold text-white mb-0">Studio
                                                                            Special</h6>
                                                                    </div>
                                                                </div>

                                                                <div class="col d-flex">
                                                                    <div
                                                                        class="bg-danger rounded-3 d-flex flex-column justify-content-center align-items-center flex-grow-1 text-white ">

                                                                        <h5 class="  fw-semibold text-white mb-1">101</h5>
                                                                        <h6 class="fw-semibold text-white mb-0">Studio
                                                                            Special</h6>
                                                                    </div>
                                                                </div>

                                                                <div class="col d-flex">
                                                                    <div
                                                                        class="bg-danger rounded-3 d-flex flex-column justify-content-center align-items-center flex-grow-1 text-white ">

                                                                        <h5 class="  fw-semibold text-white mb-1">101</h5>
                                                                        <h6 class="fw-semibold text-white mb-0">Studio
                                                                            Special</h6>
                                                                    </div>
                                                                </div>

                                                                <div class="col d-flex">
                                                                    <div
                                                                        class="bg-danger rounded-3 d-flex flex-column justify-content-center align-items-center flex-grow-1 text-white ">

                                                                        <h5 class="  fw-semibold text-white mb-1">101</h5>
                                                                        <h6 class="fw-semibold text-white mb-0">Studio
                                                                            Special</h6>
                                                                    </div>
                                                                </div>

                                                                <div class="col d-flex">
                                                                    <div
                                                                        class="bg-danger rounded-3 d-flex flex-column justify-content-center align-items-center flex-grow-1 text-white ">

                                                                        <h5 class="  fw-semibold text-white mb-1">101</h5>
                                                                        <h6 class="fw-semibold text-white mb-0">Studio
                                                                            Special</h6>
                                                                    </div>
                                                                </div>

                                                                <div class="col d-flex">
                                                                    <div
                                                                        class="bg-danger rounded-3 d-flex flex-column justify-content-center align-items-center flex-grow-1 text-white ">

                                                                        <h5 class="  fw-semibold text-white mb-1">101</h5>
                                                                        <h6 class="fw-semibold text-white mb-0">Studio
                                                                            Special</h6>
                                                                    </div>
                                                                </div>

                                                                <div class="col">
                                                                    <button type="button"
                                                                        class="btn btn-outline-secondary custom-toggle w-100"
                                                                        data-bs-toggle="button">
                                                                        <span class="icon-on">
                                                                            <b>101</b> <br>
                                                                            Studio Special
                                                                        </span>
                                                                        <span class="icon-off">
                                                                            <b>101</b> <br>
                                                                            Studio Special
                                                                        </span>
                                                                    </button>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </section>

                                                    <div class="card-body text-right row mb-3">
                                                        <div class="col-12">
                                                            <input type="reset" value="Clear"
                                                                class="btn btn-warning float-right">
                                                            <button type="button"
                                                                class="btn btn-success float">Save</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                {{-- component --}}
                                                @include('pages.building.modal.create_typeapartment')
                                                {{-- /component --}}
                                            </div>
                                        </div>
                                    </div>
                                </div><!--  end col -->
                            </div>
                            <!--end row-->
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            {{-- component --}}
            <div id="component">
                @include('pages.modal.crop')
            </div>
        </div>
        <!-- container-fluid -->


    </div>
    <!-- End Page-content -->

@endsection

@section('css')
@endsection

@section('script')
    <script>
        $('html').on('click', '.btn-create_typepartment', function() {
            $('#create-record').attr('href', 'create');
            $('#create_typepartmentModal').modal('show');
        });

        function renderFloor(floor_numb, floor_style)
        {
            var floor_code;
            var floor_name;

            data = '';
            data +='<div class="row mb-3">';
            data +='<div class="col-md-6">';
            data +='<label for="floor_code">Mã tầng</label><span class="text-danger">*</span>';
            data +='</div>';
            data +='<div class="col-md-6">';
            data +='<label for="floor_name">Tầng</label>';
            data +='<span class="text-danger">*</span>';
            data +='</div>';
            data +='</div>';
            data +='<div id="floor1-content" style="max-height: 174px; overflow-x: hidden;">';
            for(var i = 0; i< floor_numb; i++){
                switch(floor_style){
                    case 'floor1_style1':
                        floor_name = 'B'+ (i + 1);
                        break;
                    case 'floor2_style1':
                        floor_name = (i + 1);
                        break;
                    case 'floor2_style2':
                         floor_name = (i==0) ? "G" : i ;
                        break;
                    case 'floor_style4':
                        floor_name = '';
                        break;
                }
                
                data +='<div class="row mb-3">';
                data +='<div class="col-md-6">';
                
                floor_code = i+1;
                data +='<input type="text" value="'+floor_code+'" name="floor_code" id="floor_code" class="form-control rounded" required>';
            
                data +='<div class="invalid-feedback"> </div>';
                data +='</div>';
                data +='<div class="col-md-6">';

                if(floor_style == 'floor1_style1')
                {
                    
                }

                data +='<input type="text" value="'+floor_name+'" name="floor_name" id="floor_name" class="form-control rounded" required>';
                
                data +='<div class="invalid-feedback"></div>';
                data +='</div>';
                data +='</div>';
            }
            data +='</div>';
                return data;
        }

        function functionName(floor_numb ,floor_style, floor)
        {
            var floor_numb = $(floor_numb).val();
            var floor_style = $(floor_style).val();
            
            if(floor_numb > 0 && floor_numb <= 163)
            {
                var dataRender = renderFloor(floor_numb, floor_style);
                $(floor).html(dataRender)
            }else{
                if(floor_numb > 300)
                    toast('warning', 'Thông báo | Số tầng không được vượt quá 163')
                $(floor).html('');
            }
        }

        $('.detail').on('blur', '#numbfloor1', function() {
            functionName('#numbfloor1','input[name="floor1_style"]:checked', '#floor1');
        });

        $('.detail').on('change', 'input[name="floor1_style"]:checked', function() {
            functionName('#numbfloor1','input[name="floor1_style"]:checked', '#floor1');
        });

        $('.detail').on('blur', '#numbfloor2', function() {
            functionName('#numbfloor2','input[name="floor2_style"]:checked', '#floor2');
        });

        $('.detail').on('change', 'input[name="floor2_style"]:checked', function() {
            functionName('#numbfloor2','input[name="floor2_style"]:checked', '#floor2');
        });


/*
        $('.utilities').on('change', '#select-utilities', function() {

            utilities_id = $(this).val();
            $('#utilities_discription').load('/admin/building/utilities_discription/' + utilities_id);
        });

        function renderUtilities() {
            data = '';
            data += '<div class="row">';
            data += '                                                <div class="col-md-4">';
            data += '                                                    <div class="form-group">';
            data += '                                                        <div class="controls">';
            data += '                                                            <h6>Tiện ích 1</h5>';
            data += '                                                                <input type="hidden"';
            data += '                                                                    name="utilities_id[utilities_id]"';
            data +=
                '                                                                    class="form-control" value="utilities_id"';
            data += '                                                                    required="">';
            data += '                                                        </div>';
            data += '                                                    </div>';
            data += '                                                </div>';
            data += '                                                <div class="col-md-6">';
            data += '                                                    <div class="form-group">';
            data += '                                                        <div class="controls">';
            data +=
                '                                                            <select name="floor[floor_id]" required=""';
            data +=
                '                                                                class="form-select rounded-pill custom-select"';
            data +=
                '                                                                data-validation-required-message="Bạn chưa chọn tầng.">';
            data += '                                                                <option value="">Chọn vị trí tầng';
            data += '                                                                </option>';
            data += '                                                                <optgroup label="Tầng hầm">';
            data +=
                '                                                                    <option value="B1">Tầng B1</option>';
            data += '                                                                </optgroup>';
            data += '                                                                <optgroup label="Tầng nổi">';
            data += '                                                                    <option value="1">Tầng 1</option>';
            data += '                                                                    <option value="2">Tầng 2</option>';
            data += '                                                                    <option value="3">Tầng 3</option>';
            data += '                                                                </optgroup>';
            data += '                                                            </select>';
            data += '                                                        </div>';
            data += '                                                    </div>';
            data += '                                                </div>';
            data += '                                                <div class="col-md-2">';
            data += '                                                    <div class="form-group">';
            data += '                                                        <div class="controls">';
            data +=
                '                                                            <button type="button" data-item="utilities_id"';
            data +=
                '                                                                class="waves-effect waves-light btn btn-danger mb-5 btn-sm ">';
            data +=
                '                                                                    <i class=" ri-close-line"></i></button>';
            data += '                                                        </div>';
            data += '                                                    </div>';
            data += '                                                </div>';
            data += '                                            </div>';

            return data;
        }

        $('.utilities').on('click', '#btn-utilities_add', function() {
            //    alert('oke');

            var id = $('#select-utilities').val();
            var dataRender = renderUtilities();
            $('#utilities_content').append(dataRender);
            // utilities_id = $('#select-utilities').val();
            // $('#utilities_discription').load('/admin/building/utilities_discription/' + utilities_id);
        });
*/
    </script>
@endsection
