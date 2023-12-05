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
                                        <a class="nav-link mb-2 {{ Session('active_tab') ? '' : 'active' }}" id="v-pills-detail-tab" data-bs-toggle="pill"
                                            href="#v-pills-detail" role="tab" aria-controls="v-pills-detail"
                                            aria-selected="true"><i class="ri-home-5-line align-middle me-1"></i>
                                            Chi tiết</a>
                                        <a class="nav-link mb-2 {{ Session('active_tab')=='utilities' ? 'active' : '' }}" id="v-pills-utilities-tab" data-bs-toggle="pill"
                                            href="#v-pills-utilities" role="tab" aria-controls="v-pills-utilities"
                                            aria-selected="false"><i class="ri-home-5-line align-middle me-1"></i>
                                            Tiện ích</a>
                                        <a class="nav-link mb-2 {{ Session('active_tab')=='service' ? 'active' : '' }}" id="v-pills-service-tab" data-bs-toggle="pill"
                                            href="#v-pills-service" role="tab" aria-controls="v-pills-service"
                                            aria-selected="false"><i class="ri-home-5-line align-middle me-1"></i>
                                            Dịch vụ</a>
                                        <a class="nav-link {{ Session('active_tab')=='typepartment' ? 'active' : '' }}" id="v-pills-typepartment-tab" data-bs-toggle="pill"
                                            href="#v-pills-typepartment" role="tab" aria-controls="v-pills-typepartment"
                                            aria-selected="false"><i class="ri-home-5-line align-middle me-1"></i>
                                            Loại phòng</a>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-9">
                                    <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                                        <div class="tab-pane fade {{ Session('active_tab') ? '' : 'show active' }}" id="v-pills-detail" role="tabpanel"
                                            aria-labelledby="v-pills-detail-tab">
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
                                                                                        min="0" max="163"
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
                                                                                        <input class="form-check-input" type="radio" name="floor1_style" value="floor1_style4" id="floor1_style4">
                                                                                        <label class="form-check-label" for="floor1_style4">
                                                                                            Tuỳ chỉnh
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div id="floor1">
                                                                                   
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 border-start">
                                                                                <label for="floor2_numb">Số tầng nổi</label>
                                                                                <span class="text-danger">*</span>
                                                                                <input type="number" required
                                                                                    min="1" max="163"
                                                                                    name="floor2_numb" id="floor2_numb"
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
                                                                                    <input class="form-check-input" type="radio" name="floor2_style" value="floor2_style4"  id="floor2_style4">
                                                                                    <label class="form-check-label" for="floor2_style4">
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
                                        <div class="tab-pane fade {{ Session('active_tab')=='utilities' ? 'show active' : '' }}" id="v-pills-utilities" role="tabpanel"
                                            aria-labelledby="v-pills-utilities-tab">
                                            <div class="card-body">
                                                <div class="alert alert-danger mb-xl-0" role="alert">
                                                         Bạn cần nhập thông tin chi tiết trước!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade {{ Session('active_tab')=='service' ? 'show active' : '' }}" id="v-pills-service" role="tabpanel"
                                            aria-labelledby="v-pills-service-tab">
                                            <div class="card-body">
                                                <div class="alert alert-danger mb-xl-0" role="alert">
                                                         Bạn cần nhập thông tin chi tiết trước!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade {{ Session('active_tab')=='typepartment' ? 'show active' : '' }}" id="v-pills-typepartment" role="tabpanel"
                                            aria-labelledby="v-pills-typepartment-tab">
                                            <div class="card-body">
                                                <div class="alert alert-danger mb-xl-0" role="alert">
                                                         Bạn cần nhập thông tin chi tiết trước!
                                                </div>
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
                
                data +='<div class="row mb-3">';
                data +='<div class="col-md-6">';
                
                floor_code = i+1;
                if(floor_style.startsWith('floor1')){
                    data +='<input type="text" value="'+floor_code+'" name="floor1_code['+floor_code+']" id="floor1_code'+floor_code+'" class="form-control rounded" required>';
                }else if(floor_style.startsWith('floor2')){
                    data +='<input type="text" value="'+floor_code+'" name="floor2_code['+floor_code+']" id="floor2_code'+floor_code+'" class="form-control rounded" required>';
                }
                data +='<div class="invalid-feedback"> </div>';
                data +='</div>';
                data +='<div class="col-md-6">';
                    if(floor_style.startsWith('floor1')){
                        data +='<input type="text" value="'+floor_name+'" name="floor1_name['+floor_code+']" id="floor1_name'+floor_code+'" class="form-control rounded" required>';
                }else if(floor_style.startsWith('floor2')){
                    data +='<input type="text" value="'+floor_name+'" name="floor2_name['+floor_code+']" id="floor2_name'+floor_code+'" class="form-control rounded" required>';
                }
                
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

        $('#v-pills-detail').on('blur', '#numbfloor1', function() {
            functionName('#numbfloor1','input[name="floor1_style"]:checked', '#floor1');
        });

        $('#v-pills-detail').on('change', 'input[name="floor1_style"]:checked', function() {
            functionName('#numbfloor1','input[name="floor1_style"]:checked', '#floor1');
        });

        $('#v-pills-detail').on('blur', '#floor2_numb', function() {
            functionName('#floor2_numb','input[name="floor2_style"]:checked', '#floor2');
        });

        $('#v-pills-detail').on('change', 'input[name="floor2_style"]:checked', function() {
            functionName('#floor2_numb','input[name="floor2_style"]:checked', '#floor2');
        });
    </script>
@endsection
