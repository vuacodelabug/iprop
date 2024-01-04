@component('components.modal')
    @slot('md_id')
        create_typeapartmentModal
    @endslot
    @slot('md_animation')
        zoomIn
    @endslot
    @slot('md_size')
        modal-xl
    @endslot
    @slot('md_title')
        Loại phòng
    @endslot
    @slot('form_start')
    @endslot
    <form class="needs-validation validateForm" id="formBuildingTypeModal" novalidate action="/admin/building/edit"
    method="POST">
    @csrf
    <div class="row">
        <div class="col-md-4">
            <div class="row">
                <div class="form-group">
                    <label for="loaiphong">Loại phòng</label>
                    <span class="text-danger">*</span>
                    <div class="row mb-3 g-3">
                        <div class="col">
                            <select name="typeapartment_id" required id="select-typeapartment"
                                class="form-select rounded-pill custom-select">
                                <option value="">Chọn loại phòng</option>
                                @foreach ($typeapartments as $typeapartment)
                                    <option value="{{ $typeapartment->id }}">
                                        {{ $typeapartment->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <label>Mô tả</label>
                <div class="ms-2" id="typeapartment_discription">
                    <span>---</span>
                </div>
            </div>

        </div>
        <div class="col-md-8">
            <label for="loaiphong">Phòng áp dụng:</label>
            <span class="text-danger">*</span>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <div class="controls">
                            <input type="number" required name="typeapartment_numb" id="soluongphong"
                                class="form-control rounded-pill" placeholder="Số lượng phòng...">
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="controls">
                            <select name="floor" required class="form-select rounded-pill custom-select"
                                data-validation-required-message="Bạn chưa chọn tầng.">
                                <option value="">
                                    Chọn tầng
                                </option>
                                <optgroup label="Tầng hầm">
                                    @foreach ($building->building_floor->where('type', '1') as $building_floor)
                                        <option value="{{ $building_floor->id }}">
                                            {{ $building_floor->name_floor }}
                                        </option>
                                    @endforeach
                                </optgroup>
                                <optgroup label="Tầng nổi">
                                    @foreach ($building->building_floor->where('type', '2') as $building_floor)
                                        <option value="{{ $building_floor->id }}">
                                            {{ $building_floor->name_floor }}
                                        </option>
                                    @endforeach
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <div class="controls">
                            <button type="button" value="{{ count($building->building_typeapartment) }}"
                                class="btn btn-typeapartment_add btn-success float">
                                <i class="bx bx-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
                <div id="typeapartment_content" style="max-height: 300px; overflow-x: hidden;"></div>
        </div>
    </div>

    @slot('form_end')
        </form>
    @endslot

    @slot('md_footer')
        <div class="box-footer text-end mb-3">
            <div class="col-12">
                <input type="hidden" name="building_id" value="{{ $building->id }}">
                <input type="hidden" name="active_tab" value="typeapartment">

                <button type="submit" class="btn btn-success float">Save</button>
            </div>
        </div>
    @endslot
@endcomponent
