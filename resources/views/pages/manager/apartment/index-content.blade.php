
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
                    <div class="card mb-3 card-animate sanpham1 bg-gradient">
                        <div class="card-body text-light">
                            <div
                                class="d-flex justify-content-around gap-1 align-items-center mini-stats-wid">
                                <div class="avatar-sm flex-shrink-0">
                                    <span
                                        class="avatar-title bg-soft-light rounded-circle fs-3 mini-stat-icon">
                                        <i
                                            class="las la-lock align-middle text-light opacity-100"></i>
                                    </span>
                                </div>

                                <div class="">
                                    <p class="text-uppercase text-light fw-semibold fs-14 mb-1">
                                        Phòng Khoá
                                    </p>

                                    <h4 class="text-light mb-0">{{ count(optional($apartment)->where('status', 1)) }}</h4>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col">
                    <div
                        class="card mb-3 card-animate sanpham0 bg-gradient">
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

                                    <h4 class="text-light mb-0">{{ count(optional($apartment)->where('status', 0)) }}</h4>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col">
                    <div
                        class="card card-animate sanpham3 bg-gradient">
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

                                    <h4 class="text-light mb-0">{{ count(optional($apartment)->where('status', 3)) + count(optional($apartment)->where('status', 2)) }}</h4>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col">
                    <div class="card card-animate sanpham4 bg-gradient">
                        <div class="card-body text-light">
                            <div class="d-flex justify-content-around gap-1 align-items-center">
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

                                    <h4 class="text-light mb-0">{{ count(optional($apartment)->where('status', 4)) }}</h4>
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
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column gap-2">
                    @foreach ($blockfloors as $blockfloor)
                        <div class="d-flex gap-3">
                            <div mb-0
                            class="rounded-3 bg-primary bg-gradient d-flex align-self-stretch">
                            <div class="p-2 d-flex text-center">
                                <p class="text-uppercase text-white fw-semibold fs-12 mb-0 align-self-center"
                                    style="width: 75px;">
                                    {{ $blockfloor->name_floor }}
                                </p>
                            </div><!-- end card body -->
                        </div>

                            <div class="d-flex flex-wrap gap-1">
                                @if(count($blockfloor->getBuildingTypeApartmentByIdFloor($blockfloor->id_floor)) > 0)
                                    @foreach ($blockfloor->getBuildingTypeApartmentByIdFloor($blockfloor->id_floor) as $floor)
                                        <div class="mb-0 card card-animate sanpham{{$floor->apartment->status}} bg-gradient ">
                                            <div class="card-body p-2 text-center ">
                                                <p data-bs-toggle="modal"
                                                    data-bs-target="#ChiTietPhong-Modal"
                                                    class="build-room text-uppercase text-light fw-semibold fs-12">
                                                    {{ $floor->apartment->name }}
                                                </p>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                    @endforeach
                               @endif
                            </div>
                        </div>
                    @endforeach
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

            <div class="card-body fs-15">

                <!-- Thông tin cơ bản -->
                <div class="">
                    <h5 class="text-capitalize fw-semibold mb-3">Thông tin cơ
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
                                <a class="fw-bold text-lowercase">72 m&#178;</a>
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
                                            <a class="fw-bold">23/06/2023</a>
                                        </div>
                                    </td>

                                    <td class="border-bottom-0 p-0">
                                        <div class="d-flex w-100">
                                            <span
                                                style="width: 85px; font-size: 11.5px;">
                                                Cọc đã đóng:</span>
                                            <a class="fw-bold flex-grow-1 text-end">700.000
                                                VNĐ</a>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="">

                                    <td class="border-bottom-0 p-0">
                                        <div class="d-flex w-100">
                                            <span style="width: 110px;">Số lần đóng
                                                cọc:</span>
                                            <a class="fw-bold">3</a>
                                        </div>
                                    </td>


                                    <td class="border-bottom-0 p-0">
                                        <div class="d-flex w-100">
                                            <span style="width: 85px;">Cọc còn
                                                lại:</span>
                                            <a class="fw-bold flex-grow-1 text-end">300.000
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
                    <h5 class="text-capitalize fw-semibold">Dịch vụ:</h5>

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


                <!-- Tiện ích nội khu -->
                <div class="row border-top py-3">
                    <h5 class="text-capitalize fw-semibold text-muted">Tiện ích
                        nội khu:
                    </h5>

                    <div class="row row-cols-2 row-cols-xxl-3 mt-2">
                        <div class="col">
                            <li class="list-group-item ps-0">
                                <div class="d-flex align-items-start">
                                    <div class="form-check ps-0 flex-sharink-0">
                                        <input type="checkbox"
                                            class="form-check-input ms-0" checked
                                            disabled>
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
                                        <input type="checkbox"
                                            class="form-check-input ms-0" checked
                                            disabled>
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
                                        <input type="checkbox"
                                            class="form-check-input ms-0" checked
                                            disabled>
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
                                        <input type="checkbox"
                                            class="form-check-input ms-0" checked
                                            disabled>
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
                                        <input type="checkbox"
                                            class="form-check-input ms-0" checked
                                            disabled>
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
                                        <input type="checkbox"
                                            class="form-check-input ms-0" checked
                                            disabled>
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
                                        <input type="checkbox"
                                            class="form-check-input ms-0" checked
                                            disabled>
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
                                        <input type="checkbox"
                                            class="form-check-input ms-0" checked
                                            disabled>
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
                                        <input type="checkbox"
                                            class="form-check-input ms-0" checked
                                            disabled>
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
                                        <input type="checkbox"
                                            class="form-check-input ms-0" checked=""
                                            disabled="">
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
                                        <input type="checkbox"
                                            class="form-check-input ms-0" checked=""
                                            disabled="">
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
                                        <input type="checkbox"
                                            class="form-check-input ms-0" checked=""
                                            disabled="">
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
                                        <input type="checkbox"
                                            class="form-check-input ms-0" checked=""
                                            disabled="">
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
                                        <input type="checkbox"
                                            class="form-check-input ms-0" checked=""
                                            disabled="">
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
                                        <input type="checkbox"
                                            class="form-check-input ms-0" checked=""
                                            disabled="">
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
                                        <input type="checkbox"
                                            class="form-check-input ms-0" checked=""
                                            disabled="">
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
                                        <input type="checkbox"
                                            class="form-check-input ms-0" checked=""
                                            disabled="">
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
                                        <input type="checkbox"
                                            class="form-check-input ms-0" checked=""
                                            disabled="">
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
                                        <input type="checkbox"
                                            class="form-check-input ms-0" checked=""
                                            disabled="">
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
                                        <input type="checkbox"
                                            class="form-check-input ms-0" checked=""
                                            disabled="">
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
                                        <input type="checkbox"
                                            class="form-check-input ms-0" checked=""
                                            disabled="">
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
                                        <input type="checkbox"
                                            class="form-check-input ms-0" checked
                                            disabled>
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
                                        <input type="checkbox"
                                            class="form-check-input ms-0" checked
                                            disabled>
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
                                        <input type="checkbox"
                                            class="form-check-input ms-0" checked
                                            disabled>
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
                                        <input type="checkbox"
                                            class="form-check-input ms-0" checked
                                            disabled>
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
                                        <input type="checkbox"
                                            class="form-check-input ms-0" checked
                                            disabled>
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
                                        <input type="checkbox"
                                            class="form-check-input ms-0" checked
                                            disabled>
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
                                        <input type="checkbox"
                                            class="form-check-input ms-0" checked
                                            disabled>
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
                                        <input type="checkbox"
                                            class="form-check-input ms-0" checked
                                            disabled>
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
                                        <input type="checkbox"
                                            class="form-check-input ms-0" checked
                                            disabled>
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
                                        <input type="checkbox"
                                            class="form-check-input ms-0" checked
                                            disabled>
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
                                        <input type="checkbox"
                                            class="form-check-input ms-0" checked
                                            disabled>
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
                                        <input type="checkbox"
                                            class="form-check-input ms-0" checked
                                            disabled>
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

            </div><!-- end card body -->
        </div><!-- end card -->
    </div>

</div>