@extends('layouts.master')

@section('title', 'Danh sách phòng')
@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-item-center justify-content-between">
                        <h4 class="mb-sm-0">Danh sách phòng</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Quản lý khởi tạo</a></li>
                                <li class="breadcrumb-item active">Phòng</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card" id="invoiceList">
                        <div class="card-header border-0">
                            <div class="d-flex align-apartments-center">
                                <h5 class="card-title mb-0 flex-grow-1">phòng</h5>
                                <div class="flex-shrink-0">
                                    <div class="d-flex gap-2 flex-wrap">
                                        <button type="button" class="btn btn-secondary btn-create"><i
                                                class="ri-add-line align-bottom me-1"></i>Thêm phòng</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="card-body bg-soft-light border border-dashed border-start-0 border-end-0 ">
                            <form>
                                <div class="row">
                                    <div class="col-xxl-3 col-sm-3">
                                        <input name="key" type="text" class="form-control" id="key"
                                            @if (isset(Session::get('search')['key'])) value="{{ Session::get('search')['key'] }}" @endif
                                            placeholder="Search...">
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-2">
                                        <button type="button"
                                            class="btn btn-outline-success waves-effect waves-light search">
                                            <i class="bx bx-search-alt-2"></i>
                                        </button>
                                        <button type="button"
                                            class="btn btn-outline-danger waves-effect waves-light clear-search">
                                            <i class="bx bx-x"></i>
                                        </button>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>
                        </div>

                        <div class="card-body">
                            <div>
                                <div class="table-responsive table-card">
                                    <table class="table " id="invoiceTable">
                                        <thead class="text-muted">
                                            <tr>
                                                <th width="10%" class="text-uppercase">Id</th>
                                                <th width="30%"class="text-uppercase">Tên</th>
                                                <th width="30%"class="text-uppercase">Mô tả</th>
                                                <th width="20%"class="text-uppercase text-center">Trạng thái</th>
                                                <th width="10%"class="text-uppercase">Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list align-middle" id="invoice-list-data">
                                          
                                            @if (isset($apartments) and count($apartments) > 0)
                                                @foreach ($apartments as $apartment)
                                                    <tr id="item{{$apartment->id}}">
                                                        <td>{{ $apartment->id }}</td>
                                                        <td id="data_name{{ $apartment->id }}"
                                                            data-name="{{ $apartment->name }}">
                                                            {{ $apartment->name }}
                                                        </td>
                                                        <td id="data_description{{ $apartment->id }}">
                                                            {{ $apartment->description }}
                                                        </td>
                                                        
                                                        <td class="text-center">
                                                            @if ($apartment->status == '1')
                                                                <span class="badge rounded-pill text-bg-success px-3 fs-13">Active</span>
                                                            @else
                                                                <span class="badge rounded-pill text-bg-warning fs-13">Disabled</span>
                                                            @endif

                                                        </td>
                                                        <td>
                                                            <div class="d-flex gap-2">
                                                                <button type="button" data-id="{{ $apartment->id }}"
                                                                    class="btn btn-info btn-sm edit-item-btn btn-edit">
                                                                    <i class="ri-pencil-fill align-bottom text-white"></i>
                                                                </button>

                                                                {{-- <button type="button" data-id="{{ $apartment->id }}"
                                                                    class="btn btn-danger btn-sm remove-item-btn btn-delete"
                                                                    href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom text-white"></i>
                                                                </button> --}}
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif

                                        </tbody>

                                    </table>
                                    @if (!isset($apartments) or count($apartments) == 0)
                                        <div class="noresult">
                                            <div class="text-center">
                                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                                    colors="primary:#121331,secondary:#08a88a"
                                                    style="width:75px;height:75px"></lord-icon>
                                                <h5 class="mt-2">Không tìm thấy dữ liệu</h5>
                                            </div>
                                        </div>
                                    @endif

                                </div>
                                <div class="d-flex justify-content-end mt-3">
                                    <ul class="pagination listjs-pagination mb-0">
                                        @if (isset($apartments) and count($apartments) > 0)
                                            {{ $apartments->links() }}
                                        @endif
                                    </ul>
                                </div>
                            </div>

                            {{-- component --}}
                            <div id="component">
                                @include('pages.modal.delete')
                                @include('pages.apartment.modal.create')
                            </div>
                        </div>
                    </div>

                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div><!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection

@section('css')
@endsection

@section('script')
    <script src="{{ URL::asset('assets/js/edit-custom.js') }}"></script>
    
    <script>
          $('html').on('click', '.btn-create', function() {
                $('#create-record').attr('href', 'create');
                $('#createModal').modal('show');

            });
        $('#invoiceTable').on('click', '.btn-edit', function(){
            var id = $(this).attr('data-id');
            $.ajax({
                url: '/admin/apartment/find',
                method: 'post',
                data: {
                    id: id,
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                   if(response != 0){
                        var dataRender = renderEdit(id,response)
                        $('#item'+id).html(dataRender);
                    }
                    else{
                        alert ('không tìm thấy id');
                    }
                }
            }); 
        });

        $('#invoiceTable').on('click', '.btn-save', function(){
            var id = $(this).attr('data-id');
            var name = $('#name'+id).val();
            var description = $('#description'+id).val();
            var status = $('#status'+id).val();
            var error = 0;
            if(name == ''){
                $('#name'+id).addClass('is-invalid').next('.invalid-tooltip').html('Tên không được để trống');
                error=1;
            }
            if(error == 0){
                $.ajax({
                    url: '/admin/apartment/edit',
                    method: 'post',
                    data: {
                        id: id, name: name, description:description, status:status
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                    if(response != 0){
                            var dataRender = renderView(id,response)
                            toast('success', "Thông báo | Lưu thành công");
                            $('#item'+id).html(dataRender);
                        }
                        else{
                            alert ('không tìm thấy id');
                        }
                    }
                }); 
            }
          
          
        });

        $('#invoiceTable').on('click', '.btn-cancel', function(){
            var id = $(this).attr('data-id');
            $.ajax({
                url: '/admin/apartment/find',
                method: 'post',
                data: {
                    id: id,
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                   if(response != 0){
                        var dataRender = renderView(id,response)
                        $('#item'+id).html(dataRender);
                    }
                    else{
                        alert ('không tìm thấy id');
                    }
                }
            }); 
            
        });

        $('.search').click(function() {
            var key = $('#key').val();
            $.ajax({
                url: '/admin/search',
                method: 'post',
                data: {
                    key: key,
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        });

    </script>
@endsection
