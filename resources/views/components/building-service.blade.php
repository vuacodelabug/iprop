<input type="hidden" name="buildingservice_id[{{$buildingserviceId ?? 'buildingserviceId'}}]" value="{{$buildingserviceId ?? 'buildingserviceId'}}">
    <div class="col-md-4">
        <div class="form-group">
            <div class="controls">
                <h6>{{$serviceName ?? 'serviceName'}}</h5>
                    <input type="hidden"
                        name="service_id[{{$buildingserviceId ?? 'buildingserviceId'}}]"
                        class="form-control"
                        value="{{ $serviceId ??'serviceId'}}" required>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <div class="controls">
                <input type="number" required
                    name="price[{{$buildingserviceId ?? 'buildingserviceId'}}]"
                    id="price"
                    class="form-control rounded-pill"
                    value="{{ $price ?? 'price'}}"
                    placeholder="Giá tiền...">
                <div class="invalid-feedback"></div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <div class="controls">
                <select name="unit_id[{{$buildingserviceId ?? 'buildingserviceId'}}]" required
                    class="form-select rounded-pill custom-select"
                    data-validation-required-message="Bạn chưa chọn đơn vị.">
                    <option value="">
                        Chọn đơn vị...
                    </option>
                    @foreach ($units as $unit)
                        <option value="{{ $unit->id }}"
                            @if ($unit->id ==  $selectedUnitId) selected @endif>
                            {{ $unit->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <div class="controls">
                <button type="button"
                    data-item="{{$buildingserviceId ?? 'buildingserviceId'}}"
                    class="btn-service_delete waves-effect waves-light btn btn-danger mb-3 btn-sm "><i
                        class=" ri-close-line"></i></button>
            </div>
        </div>
    </div>
{{-- 
Huong dan su dung
@component('components.building-service')
    @slot('buildingserviceId') {{ $item->id }} @endslot
    @slot('serviceName')  $item->service->name  @endslot
    @slot('serviceId')  $item->id_service @endslot
    @slot('price')  $item->price  @endslot
    @slot('units')  $units @endslot
    @slot('selectedUnitId') $item->id_unit @endslot
@endcomponent

hoặc
 <x-building-service
    :buildingserviceId=" $item->id"
    :serviceName="$item->service->name"
    :serviceId="$item->id_service"
    :price="$item->price"
    :units="$units"
    :selectedUnitId="$item->id_unit"
/>
 --}}
