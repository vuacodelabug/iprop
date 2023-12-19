<div class="row" id="buildingutilities{{ $countId}}">
    <input type="hidden" name="buildingutilities_id[{{ $countId}}]" value="0">
    <div class="col-md-4">
        <div class="form-group">
            <div class="controls">
                <h6>{{ $utilities->name ?? '...' }}</h6>
                <input type="hidden" name="utilities_id[{{$countId}}]"
                    value="{{ $utilities->id}}" required>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <div class="controls">
                <select name="floor_id[{{ $countId}}]" required
                    class="form-select rounded-pill custom-select"
                    data-validation-required-message="Bạn chưa chọn tầng.">
                    <option value="">Chọn tầng</option>
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
    <div class="col-md-2">
        <div class="form-group">
            <div class="controls">
                <button type="button" data-item="{{$countId}}"
                    class="btn-utilities_delete waves-effect waves-light btn btn-danger mb-3 btn-sm "><i
                        class=" ri-close-line"></i></button>
            </div>
        </div>
    </div>
</div>
