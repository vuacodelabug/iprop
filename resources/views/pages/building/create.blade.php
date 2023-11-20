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
                                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                            aria-labelledby="v-pills-home-tab">
                                            <div class="card-body">
                                                <form class="needs-validation" novalidate action="create" id="validateForm"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="card-body">
                                                        <div class="row mb-3">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <h5><b>Logo</b></h5>
                                                                    <div class="controls">
                                                                        <label for="avatar"
                                                                            style="cursor: pointer; solid: 1; width: 100%;">
                                                                            <!-- Rounded-circle Image -->
                                                                            <img class="rounded-circle avatar-xl"
                                                                                alt="200x200"
                                                                                src="/assets/images/logo/logo-0.png">
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
                                                                                        <option value="">Chọn thành
                                                                                            phố/tỉnh</option>
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
                                                                                        <option value="">Chọn
                                                                                            quận/huyện</option>

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
                                                                                        <option value="">Chọn
                                                                                            phường/xã</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                                <div class="form-group">
                                                                                    <label for="address">Địa chỉ cụ thể</label>
                                                                                    <span class="text-danger">*</span>
                                                                                    <input type="text" required
                                                                                        name="address" id="address"
                                                                                        class="form-control rounded-pill">
                                                                                    <div class="invalid-feedback"></div>
                                                                                </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="row mb-3">
                                                                            <div class="col-md-6">
                                                                                <label for="floor1">Số tầng hầm</label>
                                                                                <span class="text-danger">*</span>
                                                                                <input type="number" required
                                                                                    min="1" max="100"
                                                                                    name="name" id="floor1"
                                                                                    class="form-control rounded-pill">
                                                                                <div class="invalid-feedback"></div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label for="floor2">Số tầng nổi</label>
                                                                                <span class="text-danger">*</span>
                                                                                <input type="number" required
                                                                                    min="1" max="100"
                                                                                    name="name" id="floor2"
                                                                                    class="form-control rounded-pill">
                                                                                <div class="invalid-feedback"></div>
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
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                            aria-labelledby="v-pills-profile-tab">
                                            <div class="card-body">
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="tienich">Tiện ích</label>
                                                            <span class="text-danger">*</span>
                                                            <div class="row mb-3 g-3">
                                                                <div class="col-md">
                                                                    <select name="tienich" required id="tienich"
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
                                                        <div
                                                            class="
                                                    ms-2">
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
                                                    <div class="utilities_content">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <h6>Tiện ích 1</h5>
                                                                            <input type="hidden"
                                                                                name="utilities_id[utilities_id]"
                                                                                class="form-control" value="utilities_id"
                                                                                required="">
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
    <script>
        $('html').on('click', '.btn-create_typepartment', function() {
            $('#create-record').attr('href', 'create');
            $('#create_typepartmentModal').modal('show');

        });
    </script>
@endsection
