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
                                        <a class="nav-link {{ Session('active_tab') == 'typeapartment' ? 'active' : '' }}"
                                            id="v-pills-typeapartment-tab" data-bs-toggle="pill"
                                            href="#v-pills-typeapartment" role="tab"
                                            aria-controls="v-pills-typeapartment" aria-selected="false"><i
                                                class="ri-home-5-line align-middle me-1"></i>
                                            Loại phòng</a>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-9">
                                    <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                                        <div class="tab-pane fade {{ Session('active_tab') ? '' : 'show active' }}"
                                            id="v-pills-detail" role="tabpanel" aria-labelledby="v-pills-detail-tab">
                                            <div class="card-body">
                                                <form class="needs-validation validateForm" novalidate
                                                    action="/admin/building/edit" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="active_tab" value="detail">
                                                    <input type="hidden" name="buiding_id" value="{{ $building->id }}">
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
                                                                                        class="form-select rounded-pill custom-select select2">
                                                                                        @foreach ($provinces as $province)
                                                                                            <option
                                                                                                value="{{ $province->provinceid }}"
                                                                                                @if ($province->provinceid == $building->province_id) selected @endif>
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
                                                                                        @foreach ($districts as $district)
                                                                                            <option
                                                                                                value="{{ $district->districtid }}"
                                                                                                @if ($district->districtid == $building->district_id) selected @endif>
                                                                                                {{ $district->name }}
                                                                                            </option>
                                                                                        @endforeach
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
                                                                                        @foreach ($wards as $ward)
                                                                                            <option
                                                                                                value="{{ $ward->wardid }}"
                                                                                                @if ($ward->wardid == $building->ward_id) selected @endif>
                                                                                                {{ $ward->name }}
                                                                                            </option>
                                                                                        @endforeach
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
                                                                                    @if ($building->building_floor->where('type', '1')->count() > 0)
                                                                                        <div class="row mb-3">
                                                                                            <div class="col-md-6"><label
                                                                                                    for="floor_code">Mã
                                                                                                    tầng</label><span
                                                                                                    class="text-danger">*</span>
                                                                                            </div>
                                                                                            <div class="col-md-6"><label
                                                                                                    for="floor_name">Tầng</label><span
                                                                                                    class="text-danger">*</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div id="floor1-content"
                                                                                            style="max-height: 174px; overflow-x: hidden;">

                                                                                            @foreach ($building->building_floor->where('type', '1') as $item)
                                                                                                <div class="row mb-3">
                                                                                                    <div class="col-md-6">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            value="{{ $item->code_floor }}"
                                                                                                            name="floor1_code[{{ $item->id }}]"
                                                                                                            id="floor1_code1"
                                                                                                            class="form-control rounded"
                                                                                                            required="">
                                                                                                        <div
                                                                                                            class="invalid-feedback">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-6">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            value="{{ $item->name_floor }}"
                                                                                                            name="floor1_name[{{ $item->id }}]"
                                                                                                            id="floor1_name1"
                                                                                                            class="form-control rounded"
                                                                                                            required="">
                                                                                                        <div
                                                                                                            class="invalid-feedback">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    @endif

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
                                                                                    @if ($building->building_floor->where('type', '2')->count() > 0)
                                                                                        <div class="row mb-3">
                                                                                            <div class="col-md-6"><label
                                                                                                    for="floor_code">Mã
                                                                                                    tầng</label><span
                                                                                                    class="text-danger">*</span>
                                                                                            </div>
                                                                                            <div class="col-md-6"><label
                                                                                                    for="floor_name">Tầng</label><span
                                                                                                    class="text-danger">*</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div id="floor2-content"
                                                                                            style="max-height: 174px; overflow-x: hidden;">

                                                                                            @foreach ($building->building_floor->where('type', '2') as $item)
                                                                                                <div class="row mb-3">
                                                                                                    <div class="col-md-6">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            value="{{ $item->code_floor }}"
                                                                                                            name="floor2_code[{{ $item->id }}]"
                                                                                                            id="floor2_code1"
                                                                                                            class="form-control rounded"
                                                                                                            required="">
                                                                                                        <div
                                                                                                            class="invalid-feedback">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-6">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            value="{{ $item->name_floor }}"
                                                                                                            name="floor2_name[{{ $item->id }}]"
                                                                                                            id="floor2_name1"
                                                                                                            class="form-control rounded"
                                                                                                            required="">
                                                                                                        <div
                                                                                                            class="invalid-feedback">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    @endif
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
                                                                        class="form-select rounded-pill select2">
                                                                        <option value="">Chọn tiện ích</option>
                                                                        @foreach ($list_utilities as $utilities)
                                                                            <option value="{{ $utilities->id }}">
                                                                                {{ $utilities->name }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-auto">
                                                                    <button type="submit"
                                                                        value="{{ $building->building_utilities->count() }}"
                                                                        id="btn-utilities_add"
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

                                                <form class="needs-validation validateForm" novalidate
                                                    action="/admin/building/edit" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="building_id"
                                                        value="{{ $building->id }}">
                                                    <input type="hidden" name="active_tab" value="utilities">

                                                    <div id="utilities_content"
                                                        style="max-height: 300px; overflow-x: hidden;">
                                                        @foreach ($building->building_utilities as $building_utilities)
                                                            <div class="row"
                                                                id="buildingutilities{{ $building_utilities->id }}">
                                                                <input type="hidden"
                                                                    name="buildingutilities_id[{{ $building_utilities->id }}]"
                                                                    value="{{ $building_utilities->id }}">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <h6>{{ $building_utilities->utilities->name ?? '...' }}
                                                                            </h6>
                                                                            <input type="hidden"
                                                                                name="utilities_id[{{ $building_utilities->id }}]"
                                                                                value="{{ $building_utilities->id_utilities }}"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <select
                                                                                name="floor_id[{{ $building_utilities->id }}]"
                                                                                required
                                                                                class="form-select rounded-pill custom-select"
                                                                                data-validation-required-message="Bạn chưa chọn tầng.">
                                                                                <optgroup label="Tầng hầm">
                                                                                    @foreach ($building->building_floor->where('type', '1') as $building_floor)
                                                                                        <option
                                                                                            value="{{ $building_floor->id }}"
                                                                                            @if ($building_floor->id == $building_utilities->building_floor->id) selected @endif>
                                                                                            {{ $building_floor->name_floor }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </optgroup>
                                                                                <optgroup label="Tầng nổi">
                                                                                    @foreach ($building->building_floor->where('type', '2') as $building_floor)
                                                                                        <option
                                                                                            value="{{ $building_floor->id }}"
                                                                                            @if ($building_floor->id == $building_utilities->building_floor->id) selected @endif>
                                                                                            {{ $building_floor->name_floor }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <button type="button"
                                                                                data-item="{{ $building_utilities->id }}"
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
                                                            <label for="select-service">Dịch vụ</label>
                                                            <span class="text-danger">*</span>
                                                            <div class="row mb-3 g-3">
                                                                <div class="col-md">
                                                                    <select name="select-service" required
                                                                        id="select-service"
                                                                        class="form-select rounded-pill select2">
                                                                        <option value="">
                                                                            Chọn dịch vụ
                                                                        </option>
                                                                        @foreach ($services as $service)
                                                                            <option value="{{ $service->id }}">
                                                                                {{ $service->name }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-auto">

                                                                    <button type="buttom"
                                                                        value="{{ count($building->building_service) }}"
                                                                        id="btn-service_add"
                                                                        class="btn btn-success float">
                                                                        <i class="bx bx-plus"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label>Mô tả</label>
                                                        <div class="ms-2" id="service_discription">
                                                            <span>---</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="border-top-double"></div>
                                                <br>

                                                <form class="needs-validation validateForm" novalidate
                                                    action="/admin/building/edit" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="building_id"
                                                        value="{{ $building->id }}">
                                                    <input type="hidden" name="active_tab" value="service">

                                                    <div id="service_content" class="row"
                                                        style="max-height: 300px; overflow-x: hidden;">
                                                        @foreach ($building->building_service as $building_service)
                                                            <div class="col-md-6"
                                                                id="buildingservice{{ $building_service->id }}">
                                                                <input type="hidden"
                                                                    name="buildingservice_id[{{ $building_service->id ?? 'buildingserviceId' }}]"
                                                                    value="{{ $building_service->id ?? 'buildingserviceId' }}">
                                                                <div class="row">
                                                                    <div class="col-md-10">
                                                                        <div class="form-group">
                                                                            <div class="controls">
                                                                                <h6 style="line-height: 25px">
                                                                                    {{ $building_service->service->name ?? 'serviceName' }}
                                                                                </h6>
                                                                                <input type="hidden"
                                                                                    name="service_id[{{ $building_service->id ?? 'buildingserviceId' }}]"
                                                                                    class="form-control"
                                                                                    value="{{ $building_service->id_service ?? 'serviceId' }}"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2 text-end">
                                                                        <div class="form-group">
                                                                            <div class="controls">
                                                                                <button type="button"
                                                                                    data-item="{{ $building_service->id ?? 'buildingserviceId' }}"
                                                                                    class="btn-service_delete waves-effect waves-light btn btn-danger mb-3 btn-sm "><i
                                                                                        class=" ri-close-line"></i></button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <hr>
                                                    <div class="box-footer text-end mb-3">
                                                        <div class="col-12">
                                                            <input type="reset" value="Clear"
                                                                class="btn btn-warning float-right">
                                                            <button type="submit"
                                                                class="btn btn-success float">Save</button>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade {{ Session('active_tab') == 'typeapartment' ? 'show active' : '' }}"
                                            id="v-pills-typeapartment" role="tabpanel"
                                            aria-labelledby="v-pills-typeapartment-tab">
                                            <div class="card-body">
                                                <form class="formBuildingTypeApartment validateForm" method="POST">
                                                    @csrf
                                                    <div class="box-header with-border p-10">
                                                        <div class="row ">
                                                            <div class="col-md-8">
                                                                <h4 class="box-title">Loại phòng</h4>
                                                            </div>
                                                            <div class="col-md-4 text-end">
                                                                <button type="button"
                                                                    class="card-animate btn btn-success float btn-createModaltypeapartment">
                                                                    <i class="bx bx-plus">Thêm loại phòng</i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>

                                                    </div>
                                                    <hr>

                                                    <section>
                                                        <div class="row row-cols-1 row-cols-md-3 g-3"
                                                            id="typeapartment-content">
                                                            @foreach ($building->building_typeapartment->where('status', '1')->where('_delete', '1')->groupBy('id_typeapartment') as $building_type)
                                                                <div class="col">
                                                                    <div class="card card-animate border border-3">
                                                                        <div
                                                                            class="card-header d-flex justify-content-between align-items-center">
                                                                            <h5 class="fw-semibold mb-0">
                                                                                {{ $building_type->first()->typeapartment->name }}
                                                                            </h5>

                                                                            <button type="button"
                                                                                type-id="{{ $building_type->first()->id_typeapartment }}"
                                                                                class="btn btn-secondary btn-sm btn-icon waves-effect waves-light btn-editModaltypeapartment">
                                                                                <i class="ri-edit-box-line"></i>
                                                                            </button>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <h6 class="text-muted">Phòng trong loại:
                                                                                {{ $building_type->count() }}</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </section>

                                                    <section>
                                                        <h5 class="fw-semibold">Sơ đồ:</h5>

                                                        <div class="d-flex flex-column gap-2">
                                                            @foreach ($blockfloors as $blockfloor)
                                                                <div class="d-flex gap-3">
                                                                    <div
                                                                        class="align-self-stretch d-flex align-items-center bg-primary px-5 text-nowrap rounded-3">
                                                                        <h6 class="mb-0 text-uppercase text-white fw-bold"
                                                                            style="min-width: 53px">
                                                                            {{ $blockfloor->name_floor }}
                                                                        </h6>
                                                                    </div>
                                                                    <div class="flex-grow-1 row row-cols-md-6 g-2">
                                                                        @if (count($blockfloor->getBuildingTypeApartmentByIdFloor($blockfloor->id_floor)) > 0)
                                                                            @foreach ($blockfloor->getBuildingTypeApartmentByIdFloor($blockfloor->id_floor) as $floor)
                                                                                <div class="col d-flex ">
                                                                                    <div
                                                                                        class="sanpham{{ $floor->apartment->status }} rounded-3 d-flex flex-column justify-content-center align-items-center flex-grow-1 text-white ">

                                                                                        <h5
                                                                                            class="fw-semibold text-white mt-2">
                                                                                            {{ $floor->apartment->name }}
                                                                                        </h5>
                                                                                        <h6
                                                                                            class="fw-semibold text-white mb-2">
                                                                                            {{ $floor->typeapartment->name }}
                                                                                        </h6>

                                                                                    </div>
                                                                                </div>
                                                                            @endforeach
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </section>
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
            <div id="components">
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
        //--detail

        // Hiển thị thông tin về mã và tên tầng
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

            // Tạo vòng lặp để hiển thị thông tin về từng tầng
            for (var i = 0; i < floor_numb; i++) {
                switch (floor_style) {
                    // Xác định tên tầng dựa trên kiểu và chỉ số
                    case 'floor1_style1':
                        floor_name = 'Tầng B' + (i + 1);
                        break;
                    case 'floor2_style1':
                        floor_name = 'Tầng ' + (i + 1);
                        break;
                    case 'floor2_style2':
                        floor_name = (i == 0) ? "Tầng G" : 'Tầng ' + i;
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

        // Kiểm tra và hiển thị thông tin tầng khi có sự kiện thay đổi hoặc mất focus
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

        // Gắn sự kiện cho các input và select để tự động cập nhật thông tin tầng khi có sự kiện thay đổi hoặc mất focus
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


    //--utilities

        // Xử lý khi người dùng thay đổi lựa chọn utilities
        $('#v-pills-utilities').on('change', '#select-utilities', function() {
            var active_tab = "utilities";
            utilities_id = $(this).val();
            // Kiểm tra xem giá trị có tồn tại hay không
            if (utilities_id) {
                // Nếu có, thực hiện AJAX để load mô tả dịch vụ tương ứng
                $('#utilities_discription').load('/admin/building/get_discription/' + utilities_id +
                    '?active_tab=' + active_tab);
            } else {
                // Nếu không có giá trị, hiển thị dấu gạch ngang
                $('#utilities_discription').text('---');
            }
        });

        // Xử lý khi người dùng click nút thêm dịch vụ '#btn-utilities_add'
        $('#v-pills-utilities').on('click', '#btn-utilities_add', function() {
            countId = Number($('#btn-utilities_add').val()) + 1;
            var utilities_id = $('#select-utilities').val();
            var building_id = $("input[name='building_id']").val();

            if (utilities_id) {
                var url = '/admin/building/renderUtilities';
                var requestData = {
                    utilities_id: utilities_id,
                    countId: countId,
                    building_id: building_id,
                };

                ajaxCustom(url, requestData, 'GET')
                    .then(function(data) {
                        $('#btn-utilities_add').val(countId);
                        $('#utilities_content').append(data);
                        $('.select2').select2();
                    })
                    .catch(function(error) {
                        console.error("Lỗi:", error);
                    });
            }
        });

        // Xử lý khi người dùng click nút xóa dịch vụ 
        $('#v-pills-utilities').on('click', '.btn-utilities_delete', function() {
            var buildingutilities_id = $(this).attr('data-item');
            // Tạo input ẩn để đánh dấu dịch vụ này đã bị xóa
            var utilities_delete = '<input type="hidden" name="utilities_delete[' + buildingutilities_id +
                ']" value="' + buildingutilities_id + '">';
            // Thay đổi nội dung của phần hiển thị dịch vụ để chứa input ẩn
            $('#buildingutilities' + buildingutilities_id).html('').html(utilities_delete);
        });

    //--service
        // Xử lý khi người dùng thay đổi lựa chọn trong service
        $('#v-pills-service').on('change', '#select-service', function() {
            var service_id = $(this).val();
            var active_tab = "service";

            if (service_id) {
                // thực hiện AJAX để load mô tả dịch vụ tương ứng
                $('#service_discription').load('/admin/building/get_discription/' + service_id + '?active_tab=' +
                    active_tab);
            } else {
                $('#service_discription').text('---');
            }
        });

        // Xử lý khi người dùng click nút xóa dịch vụ
        $('#v-pills-service').on('click', '.btn-service_delete', function() {
            var buildingservice_id = $(this).attr('data-item');

            // Tạo input ẩn để đánh dấu dịch vụ này đã bị xóa
            service_delete = '<input type="hidden" name="service_delete[' + buildingservice_id +
                ']" value="' + buildingservice_id + '">';
            // Thay đổi nội dung của phần hiển thị dịch vụ để chứa input ẩn
            $('#buildingservice' + buildingservice_id).html('').html(service_delete);
        });

        // Xử lý khi người dùng click nút thêm dịch vụ
        $('#v-pills-service').on('click', '#btn-service_add', function() {
            var countId = Number($('#btn-service_add').val()) + 1;
            var service_id = $('#select-service').val();
            if (service_id) {
                var url = '/admin/building/renderService';
                var requestData = {
                    service_id: service_id,
                    countId: countId,
                };

                ajaxCustom(url, requestData, 'GET')
                    .then(function(data) {
                        $('#btn-service_add').val(countId)
                        $('#service_content').append(data);
                        $('.select2').select2();
                    })
                    .catch(function(error) {
                        console.error("Lỗi:", error);
                    });
            }
        });

    //--typeapartment

        //Mở modal khi người dùng click nút tạo mới
        $('html').on('click', '.btn-createModaltypeapartment', function() {
            $("#select-typeapartment").val('').prop("disabled", false);
            $("#typeapartment_discription").html("<span>---</span>");
            $('#typeapartment_content').html('');
            $('#create_typeapartmentModal').modal('show');
        });

        // Xử lý khi người dùng click nút chỉnh sửa
        $('html').on('click', '.btn-editModaltypeapartment', function() {
            var typeapartment_id = $(this).attr('type-id');
            var building_id = $('input[name="building_id"]').val();
            var url = '/admin/building/get_typeapartment/';

            var requestData = {
                building_id: building_id,
                typeapartment_id: typeapartment_id,
            };

            // Thực hiện AJAX để lấy thông tin typeapartment và hiển thị trong modal
            ajaxCustom(url, requestData)
                .then(function(data) {
                    console.log(data);
                    $('#typeapartment_content').html(data);
                    $('#create_typeapartmentModal').modal('show');
                })
                .catch(function(error) {
                    console.error("Không nhận được dữ liệu trả về");
                    // console.error("Lỗi:", error);
                });

        });
        // Xử lý khi người dùng click nút +  trong modal
        $('#v-pills-typeapartment').on('click', '.btn-typeapartment_add', function() {
            countId = Number($('.btn-typeapartment_add').val()) + 1;
            var typeapartment_id = $('#select-typeapartment').val();
            var building_id = $("input[name='building_id']").val();
            var typeapartment_numb = $("input[name='typeapartment_numb']").val();
            var floor_id = $("select[name='floor']").val();
            
            if (typeapartment_id && typeapartment_numb) {
                var url = '/admin/building/rendertypeapartment';
                var requestData = {
                    typeapartment_id: typeapartment_id,
                    countId: countId,
                    building_id: building_id,
                    typeapartment_numb: typeapartment_numb,
                    floor_id:floor_id
                };

                ajaxCustom(url, requestData, 'GET')
                    .then(function(data) {
                        $('.btn-typeapartment_add').val(countId);
                        $('#typeapartment_content').append(data);
                        $('.select2').select2();
                    })
                    .catch(function(error) {
                        console.error("Lỗi:", error);
                    });
            }
        });

        // Xử lý khi người dùng thay đổi lựa chọn typeapartment             
        $('#v-pills-typeapartment').on('change', '#select-typeapartment', function() {
            var typeapartment_id = $(this).val();
            var active_tab = "typeapartment";

            if (typeapartment_id) {
                $('#typeapartment_discription').load('/admin/building/get_discription/' + typeapartment_id +
                    '?active_tab=' + active_tab);
            } else {
                $('#typeapartment_discription').text('---');
            }
        });

        // Xử lý khi người dùng click nút xóa
        $('#v-pills-typeapartment').on('click', '.btn-typeapartment_delete', function() {
            var buildingtypeapartment_id = $(this).attr('data-item');
            typeapartment_delete = '<input type="hidden" name="typeapartment_delete[' + buildingtypeapartment_id +
                ']" value="' + buildingtypeapartment_id + '">';
            $('#apartment_content' + buildingtypeapartment_id).html('').html(typeapartment_delete);
        });
    </script>
@endsection
