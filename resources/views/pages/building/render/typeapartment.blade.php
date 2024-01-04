{{-- Lấy nội dung loại phòng từ db --}}
    @if (isset($buildingType) and isset($building))
        @foreach ($buildingType as $buildingType)
            <div class="row" id="apartment_content{{ $buildingType->id }}">
                <div class="col-md-5">
                    <div class="form-group">
                        <div class="controls">
                            <input type="number" required value="{{ $buildingType->apartment->name }}" name="name[{{ $buildingType->id }}]"
                                id="mophong" class="form-control rounded-pill" placeholder="Mã phòng...">
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="controls">
                            <select name="floor_id[{{ $buildingType->id }}]" required
                                class="form-select rounded-pill custom-select"
                                data-validation-required-message="Bạn chưa chọn tầng.">
                                <optgroup label="Tầng hầm">
                                    @foreach ($building->building_floor->where('type', '1') as $building_floor)
                                        <option value="{{ $building_floor->id }}"
                                            @if ($building_floor->id == $buildingType->id_floor) selected @endif>
                                            {{ $building_floor->name_floor }}
                                        </option>
                                    @endforeach
                                </optgroup>
                                <optgroup label="Tầng nổi">
                                    @foreach ($building->building_floor->where('type', '2') as $building_floor)
                                        <option value="{{ $building_floor->id }}"
                                            @if ($building_floor->id == $buildingType->id_floor) selected @endif>
                                            {{ $building_floor->name_floor }}
                                        </option>
                                    @endforeach
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 text-end">
                    <div class="form-group">
                        <div class="controls">
                            <button type="button" data-item="{{ $buildingType->id }}"
                                class="btn-typeapartment_delete waves-effect waves-light btn btn-danger mb-3 btn-sm "><i
                                    class=" ri-close-line"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif

{{-- Tạo mới nội dung loại phòng --}}
    @if(isset($page) AND $page == 'pageCreate' AND $typeapartment_numb > 0)
        @for($i =0; $i<$typeapartment_numb; $i++)
            <div class="row" id="apartment_content{{ $countId}}">
                <div class="col-md-5">
                    <div class="form-group">
                        <div class="controls">
                            <input type="number" required name="name"
                                id="mophong" class="form-control rounded-pill" placeholder="Mã phòng...">
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="controls">
                            <select name="floor_id[{{ $countId}}]" required
                                class="form-select rounded-pill custom-select"
                                data-validation-required-message="Bạn chưa chọn tầng.">
                                <optgroup label="Tầng hầm">
                                    @foreach ($building->building_floor->where('type', '1') as $building_floor)
                                        <option value="{{ $building_floor->id }}"
                                            @if ($building_floor->id == $floor_id) selected @endif>
                                            {{ $building_floor->name_floor }}
                                        </option>
                                    @endforeach
                                </optgroup>
                                <optgroup label="Tầng nổi">
                                    @foreach ($building->building_floor->where('type', '2') as $building_floor)
                                        <option value="{{ $building_floor->id }}"
                                            @if ($building_floor->id == $floor_id) selected @endif>
                                            {{ $building_floor->name_floor }}
                                        </option>
                                    @endforeach
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 text-end">
                    <div class="form-group">
                        <div class="controls">
                            <button type="button" data-item="{{ $countId}}"
                                class="btn-typeapartment_delete waves-effect waves-light btn btn-danger mb-3 btn-sm "><i
                                    class=" ri-close-line"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    @endif