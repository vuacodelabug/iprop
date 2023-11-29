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
                                        <a class="nav-link mb-2 {{ Session('active_tab') ? '' : 'active' }}"
                                            id="v-pills-detail-tab" data-bs-toggle="pill" href="#v-pills-detail"
                                            role="tab" aria-controls="v-pills-detail" aria-selected="true"><i
                                                class="ri-home-5-line align-middle me-1"></i>
                                            Chi tiết</a>
                                        <a class="nav-link mb-2 {{ Session('active_tab') == 'utilities' ? 'active' : '' }}"
                                            id="v-pills-utilities-tab" data-bs-toggle="pill" href="#v-pills-utilities"
                                            role="tab" aria-controls="v-pills-utilities" aria-selected="false"><i
                                                class="ri-home-5-line align-middle me-1"></i>
                                            Tiện ích</a>
                                        <a class="nav-link mb-2 {{ Session('active_tab') == 'service' ? 'active' : '' }}"
                                            id="v-pills-service-tab" data-bs-toggle="pill" href="#v-pills-service"
                                            role="tab" aria-controls="v-pills-service" aria-selected="false"><i
                                                class="ri-home-5-line align-middle me-1"></i>
                                            Dịch vụ</a>
                                        <a class="nav-link {{ Session('active_tab') == 'typepartment' ? 'active' : '' }}"
                                            id="v-pills-typepartment-tab" data-bs-toggle="pill" href="#v-pills-typepartment"
                                            role="tab" aria-controls="v-pills-typepartment" aria-selected="false"><i
                                                class="ri-home-5-line align-middle me-1"></i>
                                            Loại phòng</a>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-9">
                                    <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                                        <div class="tab-pane fade {{ Session('active_tab') ? '' : 'show active' }}"
                                            id="v-pills-detail" role="tabpanel" aria-labelledby="v-pills-detail-tab">
                                            <div class="card-body">
                                                <form class="needs-validation validateForm" novalidate action="/admin/building/edit"
                                                method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="active_tab" value="detail">
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
                                                                                    style="background-image: url({{ asset($building->logo) }})">
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
                                                                            id="building_name" value="{{ $building->name }}"
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
                                                                                        <option
                                                                                            value="{{ $building->province->id }}"
                                                                                            selected>
                                                                                            {{ $building->province->name }}
                                                                                        </option>
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
                                                                                        <option
                                                                                            value="{{ $building->district->id }}"
                                                                                            selected>
                                                                                            {{ $building->district->name }}
                                                                                        </option>

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
                                                                                        <option
                                                                                            value="{{ $building->ward->id }}"
                                                                                            selected>
                                                                                            {{ $building->ward->name }}
                                                                                        </option>
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
                                                                                    value="{{ $building->address }}"
                                                                                    name="building_address" id="address"
                                                                                    class="form-control rounded-pill">
                                                                                <div class="invalid-feedback"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="row mb-3">
                                                                            <div class="col-md-6 ">
                                                                                <div class="form-group mb-3 validate">
                                                                                    <label for="numbfloor1">Số tầng
                                                                                        hầm</label>
                                                                                    <span class="text-danger">*</span>
                                                                                    <input type="number" required
                                                                                        min="0" max="163"
                                                                                        value="{{ $building->building_floor->where('type', '1')->count() }}"
                                                                                        name="floor1_numb" id="numbfloor1"
                                                                                        class="form-control rounded-pill">
                                                                                    <div class="invalid-feedback"></div>
                                                                                    <!-- Base Radios -->
                                                                                    <br>
                                                                                    <label>Style tầng hầm</label>
                                                                                    <div class="form-check ms-3 mb-2">
                                                                                        <input class="form-check-input"
                                                                                            type="radio"
                                                                                            name="floor1_style"
                                                                                            value="floor1_style1"
                                                                                            {{ $building->stylefloor1 == 'floor1_style1' ? 'checked' : '' }}
                                                                                            id="floor1_style1">
                                                                                        <label class="form-check-label"
                                                                                            for="floor1_style1">
                                                                                            B1, B2, B3...
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check ms-3">
                                                                                        <input class="form-check-input"
                                                                                            type="radio"
                                                                                            name="floor1_style"
                                                                                            value="floor1_style4"
                                                                                            {{ $building->stylefloor1 == 'floor1_style4' ? 'checked' : '' }}
                                                                                            id="floor1_style4">
                                                                                        <label class="form-check-label"
                                                                                            for="floor1_style4">
                                                                                            Tuỳ chỉnh
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div id="floor1">

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 border-start">
                                                                                <label for="floor2_numb">Số tầng
                                                                                    nổi</label>
                                                                                <span class="text-danger">*</span>
                                                                                <input type="number" required
                                                                                    min="1" max="163"
                                                                                    value="{{ $building->building_floor->where('type', '2')->count() }}"
                                                                                    name="floor2_numb" id="floor2_numb"
                                                                                    class="form-control rounded-pill">
                                                                                <div class="invalid-feedback"></div>
                                                                                <!-- Base Radios -->
                                                                                <br>
                                                                                <label for="numbfloor1">Style tầng
                                                                                    nổi</label>
                                                                                <div class="form-check ms-3 mb-2">
                                                                                    <input class="form-check-input"
                                                                                        type="radio" name="floor2_style"
                                                                                        value="floor2_style1"
                                                                                        id="floor2_style1"
                                                                                        {{ $building->stylefloor2 == 'floor2_style1' ? 'checked' : '' }}>
                                                                                    <label class="form-check-label"
                                                                                        for="floor2_style1">
                                                                                        1, 2, 3...
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check ms-3 mb-2">
                                                                                    <input class="form-check-input"
                                                                                        type="radio" name="floor2_style"
                                                                                        value="floor2_style2"
                                                                                        {{ $building->stylefloor2 == 'floor2_style2' ? 'checked' : '' }}
                                                                                        id="floor2_style2">
                                                                                    <label class="form-check-label"
                                                                                        for="floor2_style2">
                                                                                        G, 1, 2, 3...
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check ms-3">
                                                                                    <input class="form-check-input"
                                                                                        type="radio" name="floor2_style"
                                                                                        value="floor2_style4"
                                                                                        {{ $building->stylefloor2 == 'floor2_style4' ? 'checked' : '' }}
                                                                                        id="floor2_style4">
                                                                                    <label class="form-check-label"
                                                                                        for="floor2_style4">
                                                                                        Tuỳ chỉnh
                                                                                    </label>
                                                                                </div>
                                                                                <br>
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
                                        <div class="tab-pane fade {{ Session('active_tab') == 'utilities' ? 'show active' : '' }}"
                                            id="v-pills-utilities" role="tabpanel"
                                            aria-labelledby="v-pills-utilities-tab">
                                            <div class="card-body">
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="utilities">Tiện ích</label>
                                                                <span class="text-danger">*</span>
                                                                <div class="row mb-3 g-3">
                                                                    <div class="col-md">
                                                                        <select name="utilities_id" required
                                                                            data-validation-required-message="Bạn chưa chọn tiện ích."
                                                                            id="select-utilities"
                                                                            class="form-select rounded-pill custom-select">
                                                                            <option value="">Chọn tiện ích</option>
                                                                            @foreach ($list_utilities as $utilities)
                                                                                <option value="{{ $utilities->id }}">
                                                                                    {{ $utilities->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-auto">
                                                                        @foreach ($building->building_utilities as $key => $item)
                                                                        @endforeach
                                                                        <button type="submit" value="{{isset($item) ? $item->id : '0' }}" id="btn-utilities_add"
                                                                        class="btn btn-success float">
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

                                                <form class="needs-validation validateForm" id="formBuildingUtilities" novalidate action="/admin/building/edit"
                                                   method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="buiding_id" value="{{$building->id}}">
                                                    <input type="hidden" name="active_tab" value="utilities">
                                                    
                                                    <div id="utilities_content" style="max-height: 300px; overflow-x: hidden;">
                                                       @foreach ($building->building_utilities as $key => $item)
                                                       <div class="row" id="buildingutilities{{$item->id}}">
                                                        <input type="hidden" name="buildingutilities_id[{{$item->id}}]" value="{{$item->id}}">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <h6>{{ $item->utilities->name ?? '...' }}</h6>
                                                                            <input type="hidden" name="utilities_id[{{$item->id}}]" value="{{$item->id_utilities}}" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <select name="floor_id[{{$item->id}}]" required
                                                                            class="form-select rounded-pill custom-select"
                                                                            data-validation-required-message="Bạn chưa chọn tầng.">
                                                                            <optgroup label="Tầng hầm">
                                                                                @foreach ($building->building_floor->where('type', '1') as $building_floor)

                                                                                    <option value="{{$building_floor->id}}" @if ($building_floor->id == $item->building_floor->id) selected @endif>{{$building_floor->name_floor}}</option>
                                                                                @endforeach
                                                                            </optgroup>
                                                                            <optgroup label="Tầng nổi">
                                                                                @foreach ($building->building_floor->where('type', '2') as $building_floor)
                                                                                    <option value="{{$building_floor->id}}" @if ($building_floor->id == $item->building_floor->id) selected @endif>{{$building_floor->name_floor}}</option>
                                                                                @endforeach
                                                                            </optgroup>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <button type="button" data-item="{{$item->id}}"
                                                                            class="btn-utilities_delete waves-effect waves-light btn btn-danger mb-3 btn-sm "><i
                                                                                class=" ri-close-line"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                       @endforeach
                                                    </div>

                                                    <div class="box-footer text-end mb-3 md-3">
                                                        <input type="reset" value="Clear"
                                                            class="btn btn-warning float-right">
                                                        <button type="submit" class="btn btn-success float">Save</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade {{ Session('active_tab') == 'service' ? 'show active' : '' }}"
                                            id="v-pills-service" role="tabpanel" aria-labelledby="v-pills-service-tab">
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
                                        <div class="tab-pane fade {{ Session('active_tab') == 'typepartment' ? 'show active' : '' }}"
                                            id="v-pills-typepartment" role="tabpanel"
                                            aria-labelledby="v-pills-typepartment-tab">
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
        //detail
        $('html').on('click', '.btn-create_typepartment', function() {
            $('#create-record').attr('href', 'create');
            $('#create_typepartmentModal').modal('show');
        });

        function renderFloor(floor_numb, floor_style) {
            var floor_code;
            var floor_name;

            data = '';
            data += '<div class="row mb-3">';
            data += '<div class="col-md-6">';
            data += '<label for="floor_code">Mã tầng</label><span class="text-danger">*</span>';
            data += '</div>';
            data += '<div class="col-md-6">';
            data += '<label for="floor_name">Tầng</label>';
            data += '<span class="text-danger">*</span>';
            data += '</div>';
            data += '</div>';
            data += '<div id="floor1-content" style="max-height: 174px; overflow-x: hidden;">';
            for (var i = 0; i < floor_numb; i++) {
                switch (floor_style) {
                    case 'floor1_style1':
                        floor_name ='Tầng B' + (i + 1);
                        break;
                    case 'floor2_style1':
                        floor_name = 'Tầng '+ (i + 1);
                        break;
                    case 'floor2_style2':
                        floor_name = (i == 0) ? "Tầng G" : 'Tầng '+ i;
                        break;
                    case 'floor1_style4':
                        floor_name = '';
                        break;
                    case 'floor2_style4':
                        floor_name = '';
                        break;
                }

                data += '<div class="row mb-3">';
                data += '<div class="col-md-6">';

                floor_code = i + 1;
                if (floor_style.startsWith('floor1')) {
                    data += '<input type="text" value="' + floor_code + '" name="floor1_code[' + floor_code +
                        ']" id="floor1_code' + floor_code + '" class="form-control rounded" required>';
                } else if (floor_style.startsWith('floor2')) {
                    data += '<input type="text" value="' + floor_code + '" name="floor2_code[' + floor_code +
                        ']" id="floor2_code' + floor_code + '" class="form-control rounded" required>';
                }
                data += '<div class="invalid-feedback"> </div>';
                data += '</div>';
                data += '<div class="col-md-6">';
                if (floor_style.startsWith('floor1')) {
                    data += '<input type="text" value="' + floor_name + '" name="floor1_name[' + floor_code +
                        ']" id="floor1_name' + floor_code + '" class="form-control rounded" required>';
                } else if (floor_style.startsWith('floor2')) {
                    data += '<input type="text" value="' + floor_name + '" name="floor2_name[' + floor_code +
                        ']" id="floor2_name' + floor_code + '" class="form-control rounded" required>';
                }

                data += '<div class="invalid-feedback"></div>';
                data += '</div>';
                data += '</div>';
            }
            data += '</div>';
            return data;
        }

        function functionName(floor_numb, floor_style, floor) {
            var floor_numb = $(floor_numb).val();
            var floor_style = $(floor_style).val();

            if (floor_numb > 0 && floor_numb <= 163) {
                var dataRender = renderFloor(floor_numb, floor_style);
                $(floor).html(dataRender)
            } else {
                if (floor_numb > 300)
                    toast('warning', 'Thông báo | Số tầng không được vượt quá 163')
                $(floor).html('');
            }
        }

        $('#v-pills-detail').on('blur', '#numbfloor1', function() {
            functionName('#numbfloor1', 'input[name="floor1_style"]:checked', '#floor1');
        });

        $('#v-pills-detail').on('change', 'input[name="floor1_style"]:checked', function() {
            functionName('#numbfloor1', 'input[name="floor1_style"]:checked', '#floor1');
        });

        $('#v-pills-detail').on('blur', '#floor2_numb', function() {
            functionName('#floor2_numb', 'input[name="floor2_style"]:checked', '#floor2');
        });

        $('#v-pills-detail').on('change', 'input[name="floor2_style"]:checked', function() {
            functionName('#floor2_numb', 'input[name="floor2_style"]:checked', '#floor2');
        });


        //utilities
        $('#v-pills-utilities').on('change', '#select-utilities', function() {

            utilities_id = $(this).val();
            if(utilities_id){
                $('#utilities_discription').load('/admin/building/utilities_discription/' + utilities_id);
            }else{
                $('#utilities_discription').text('---');
            }
        });

        function renderUtilities(utilities_id, utilities_name, buildingutilities_id) {
            data = '';
            data += '   <div class="row" id="buildingutilities'+buildingutilities_id+'">';
            data += '   <input type="hidden" name="buildingutilities_id['+buildingutilities_id+']" value="0">';
            data += '        <div class="col-md-4">';
            data += '            <div class="form-group">';
            data += '                <div class="controls">';
            data += '                    <h6>' + utilities_name + '</h5>';
            data += '                        <input type="hidden" name="utilities_id['+buildingutilities_id+']" value="' + utilities_id + '" required>';
            data += '                </div>';
            data += '            </div>';
            data += '        </div>';
            data += '        <div class="col-md-6">';
            data += '            <div class="form-group">';
            data += '                <div class="controls">';
            data += '                    <select name="floor_id['+buildingutilities_id+']" class="form-select rounded-pill custom-select" required data-validation-required-message="Bạn chưa chọn tầng.">';
            data += '                        <option value="">Chọn vị trí tầng</option>';
            data += '                        <optgroup label="Tầng hầm">';
                @foreach ($building->building_floor->where('type', '1') as $item)
                    data +='<option value="{{ $item->id }}">{{ $item->name_floor }}</option>';
                @endforeach
            data += '                        </optgroup>';
            data += '                        <optgroup label="Tầng nổi">';
                @foreach ($building->building_floor->where('type', '2') as $item)
                    data +='<option value="{{ $item->id }}">{{ $item->name_floor }}</option>';
                @endforeach
            data += '                        </optgroup>';
            data += '                    </select>';
            data += '                </div>';
            data += '            </div>';
            data += '        </div>';
            data += '        <div class="col-md-2">';
            data += '            <div class="form-group">';
            data += '                <div class="controls">';
            data += '                    <button type="button" data-item="'+buildingutilities_id+'" class=" btn-utilities_delete waves-effect waves-light btn btn-danger mb-3 btn-sm "><i class=" ri-close-line"></i></button>';
            data += '                </div>';
            data += '            </div>';
            data += '        </div>';
            data += '    </div>';
            return data;
        }

        var buildingutilities_id = $('#btn-utilities_add').val();
        $('#v-pills-utilities').on('click', '#btn-utilities_add', function() {
            buildingutilities_id = parseInt(buildingutilities_id, 10) + 1;
            var utilities_id = $('#select-utilities').val();
            var utilities_name = $('#select-utilities').find('option:selected').text();
            if(utilities_id){

                var dataRender = renderUtilities(utilities_id, utilities_name, buildingutilities_id);
                $('#utilities_content').append(dataRender);
            }
        });

        $('#v-pills-utilities').on('click', '.btn-utilities_delete', function() {
            var buildingutilities_id = $(this).attr('data-item');
            utilities_delete ='<input type="hidden" name="utilities_delete['+buildingutilities_id+']" value="'+buildingutilities_id+'">';
            $('#buildingutilities'+buildingutilities_id).html('').html(utilities_delete);
        });
        //service
        //typepartment
</script>
@endsection
