<div class="row" id="apartment_content">
    <div class="col-md-5">
        <div class="form-group">
            <div class="controls">
                <input type="number" required name="name" id="mophong" class="form-control rounded-pill"
                    placeholder="Mã phòng...">
                <div class="invalid-feedback"></div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <div class="controls">
                <select name="floor_id[{{ $item->id }}]" required class="form-select rounded-pill custom-select"
                    data-validation-required-message="Bạn chưa chọn tầng.">
                    <optgroup label="Tầng hầm">
                        @foreach ($building->building_floor->where('type', '1') as $building_floor)
                        <option value="{{ $building_floor->id }}" @if ($building_floor->id == $item->building_floor->id)
                            selected @endif>
                            {{ $building_floor->name_floor }}
                        </option>
                        @endforeach
                    </optgroup>
                    <optgroup label="Tầng nổi">
                        @foreach ($building->building_floor->where('type', '2') as $building_floor)
                        <option value="{{ $building_floor->id }}" @if ($building_floor->id == $item->building_floor->id)
                            selected @endif>
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
                <button type="button" data-item="service_id"
                    class="waves-effect waves-light btn btn-danger mb-5 btn-sm "><i class=" ri-close-line"></i></button>
            </div>
        </div>
    </div>
</div>