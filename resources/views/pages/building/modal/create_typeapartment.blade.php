<!-- Default Modals -->
<div id="{{ $md_id ?? 'modal' }}" class="modal {{ $md_animation ?? 'fade' }}" tabindex="-1" aria-labelledby="myModalLabel"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog {{ $md_size ?? '' }}">
        <div class="modal-content">
            {{ $form_start ?? '' }}
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">{{ $md_title ?? 'Tiêu đề' }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body">
                {{ $slot ?? 'Nội dung' }}
            </div>
            <div class="modal-footer">
                {{ $md_footer ?? 'Đặt button' }}
            </div>
            {{ $form_end ?? '' }}
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


@component('component.modal')
    @slot('md_id') create_typepartmentModal @endslot
    @slot('md_animation') zoomIn @endslot
    @slot('md_size') modal-xl @endslot
    @slot('md_title')Loại phòng @endslot
    @slot('form_start') <form class="needs-validation" novalidate="" action="#" method="GET"> @endslot
        @csrf
    <div class="row">
        <div class="col-md-4">
            <div class="row">
                <div class="form-group">
                    <label for="loaiphong">Loại phòng</label>
                    <span class="text-danger">*</span>
                    <div class="row mb-3 g-3">
                        <div class="col-md">
                            <select name="loaiphong" required
                                id="loaiphong"
                                class="form-select rounded-pill custom-select">
                                <option value="">...</option>
                                <option value="1">1...</option>
                                <option value="2">2...</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <label>Mô tả</label>
                <div class="ms-2">
                    Each design is a new, unique piece of art birthed into
                    this world,
                    and while you have the opportunity to be creative and
                    make your own
                    style choices.
                </div>
            </div>

        </div>
        <div class="col-md-8">
            <h5>Phòng áp dụng:</h5>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <div class="controls">
                            <input type="number" required name="name"
                                id="soluongphong"
                                class="form-control rounded-pill"
                                placeholder="Số lượng phòng...">
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="controls">
                            <select name="floor[floor_id]" required=""
                                class="form-select  rounded-pill custom-select"
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
                <div class="col-md-1">
                    <div class="form-group">
                        <div class="controls">
                            <button type="submit"
                                class="btn btn-success float">
                                <i class="bx bx-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
                <div class="row" id="apartment_content">
                    <div class="col-md-5">
                        <div class="form-group">
                            <div class="controls">
                                <input type="number" required
                                    name="name" id="mophong"
                                    class="form-control rounded-pill"
                                    placeholder="Mã phòng...">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="controls">
                                <select name="floor[floor_id]"
                                    required=""
                                    class="form-select  rounded-pill custom-select"
                                    data-validation-required-message="Bạn chưa chọn tầng.">
                                    <option value="">Chọn vị trí tầng
                                    </option>
                                    <optgroup label="Tầng hầm">
                                        <option value="B1">Tầng B1
                                        </option>
                                    </optgroup>
                                    <optgroup label="Tầng nổi">
                                        <option value="1">Tầng 1
                                        </option>
                                        <option value="2">Tầng 2
                                        </option>
                                        <option value="3">Tầng 3
                                        </option>
                                    </optgroup>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 text-end">
                        <div class="form-group">
                            <div class="controls">
                                <button type="button"
                                    data-item="service_id"
                                    class="waves-effect waves-light btn btn-danger mb-5 btn-sm "><i
                                        class=" ri-close-line"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    @slot('form_end') </form> @endslot

    @slot('md_footer') 
    <div class="box-footer text-end mb-3">
        <div class="col-12">
            <button type="button"
                class="btn btn-success float">Save</button>
        </div>
    </div>
    @endslot
@endcomponent

