@extends('layouts.master')

@section('title', 'Danh sách khách hàng')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-item-center justify-content-between">
                        <h4 class="mb-sm-0">Danh sách khách hàng</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Quản lý khách hàng</a></li>
                                <li class="breadcrumb-item active">Khách hàng</li>
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
                            <div class="d-flex align-customers-center">
                                <h5 class="card-title mb-0 flex-grow-1">Khách hàng</h5>
                                <div class="flex-shrink-0">
                                    <div class="d-flex gap-2 flex-wrap">
                                        <button class="btn btn-primary" id="remove-actions" onClick="deleteMultiple()"><i
                                                class="ri-delete-bin-2-line"></i></button>
                                        <a href="/admin/customer/create" class="btn btn-secondary"><i
                                                class="ri-add-line align-bottom me-1"></i>Thêm khách hàng</a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                    <table class="table align-middle table-nowrap" id="invoiceTable">
                                        <thead class="text-muted">
                                            <tr>
                                                <th class="text-uppercase">ID</th>
                                                <th class="text-uppercase">Tên</th>
                                                <th class="text-uppercase">Số điện thoại</th>
                                                <th class="text-uppercase">Giới tính</th>
                                                <th class="text-uppercase">Email</th>
                                                <th class="text-uppercase">Trạng thái</th>
                                                <th class="text-uppercase">Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list" id="invoice-list-data">
                                            @if (isset($customers) and count($customers) > 0)
                                                @foreach ($customers as $customer)
                                                    <tr>
                                                        <td>{{ $customer->id }}</td>
                                                        <td>{{ $customer->name }}</td>
                                                        <td>{{ $customer->phone }}</td>
                                                        <td>{{ $customer->gender }}</td>
                                                        <td>{{ $customer->email }}</td>
                                                        <td id="item{{ $customer->id }}">
                                                            @if ($customer->status == '1')
                                                                <span
                                                                    class="badge rounded-pill text-bg-success px-3 fs-13">Active</span>
                                                            @else
                                                                <span
                                                                    class="badge rounded-pill text-bg-warning fs-13">Disabled</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-soft-secondary btn-sm dropdown"
                                                                    type="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <i class="ri-more-fill align-middle"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end" style="">
                                                                    <li>
                                                                        <a class="dropdown-item"
                                                                            href="{{ 'show/' . $customer->id }}">
                                                                            <i
                                                                                class="ri-eye-fill align-bottom me-2 text-muted">
                                                                            </i>
                                                                            View
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item"
                                                                            href="{{ 'edit/' . $customer->id }}">
                                                                            <i
                                                                                class="ri-pencil-fill align-bottom me-2 text-muted">
                                                                            </i>
                                                                            Edit
                                                                        </a>
                                                                    </li>
                                                                    <li class="dropdown-divider"></li>
                                                                    <li>

                                                                        <button href=""
                                                                            class="dropdown-item change-status"
                                                                            data-id="{{ $customer->id }}">
                                                                            <i
                                                                                class="ri-exchange-line align-bottom me-2 text-muted"></i>
                                                                            Đổi trạng thái
                                                                        </button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif

                                        </tbody>

                                    </table>
                                    @if (!isset($customers) or count($customers) == 0)
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
                                        @if (isset($customers) and count($customers) > 0)
                                            {{ $customers->links() }}
                                        @endif
                                    </ul>
                                </div>

                            </div>

                            {{-- component --}}
                            <div id="component">
                                @include('pages.modal.delete')
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
    <script>
        $(document).ready(function() {
            function renderStatus(customer_status) {
                data = '';
                if (customer_status == '1') {
                    data += '<span class="badge rounded-pill text-bg-success px-3 fs-13"> Active </span>';
                } else {
                    data += '<span class="badge rounded-pill text-bg-warning fs-13" > Disabled </span>';
                }

                return data;
            }

           
            $('html').on('click', '.change-status', function() {
                var customer_id = $(this).attr('data-id');
                
                // Sử dụng Promise để xử lý kết quả
                var url = '/admin/customer/change-status/' + customer_id;
                var requestData = {
                };

                ajaxCustom(url, requestData)
                    .then(function(data) {
                        if (data) {
                            var dataRender = renderStatus(data);
                            toast('success', "Thông báo | Cập nhật thành công");
                            $('#item' + customer_id).html(dataRender);
                        }
                    })
                    .catch(function(error) {
                        console.error("Lỗi cập nhật", error);
                    });
            });


            $('.search').click(function() {
                var key = $('#key').val();

                var url = '/admin/search';
                var requestData = {
                    key:key,
                };
            
                ajaxCustom(url, requestData)
                    .then(function(data) {
                    })
                    .catch(function(error) {
                        window.location.reload();
                    });
            });
        });
    </script>
@endsection
