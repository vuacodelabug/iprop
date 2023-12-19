<div class="col-md-6" id="buildingservice{{$countId}}">
    <input type="hidden" name="buildingservice_id[{{ $countId }}]"
        value="0">
    <div class="row">
        <div class="col-md-10">
            <div class="form-group">
                <div class="controls">
                    <h6  style="line-height: 25px">{{ $service->name ?? 'serviceName' }}</h6>
                        <input type="hidden" name="service_id[{{ $countId }}]"
                            class="form-control" value="{{ $service->id ?? '0' }}" required>
                </div>
            </div>
        </div>
        <div class="col-md-2 text-end">
            <div class="form-group">
                <div class="controls">
                    <button type="button" data-item="{{ $countId }}"
                        class="btn-service_delete waves-effect waves-light btn btn-danger mb-3 btn-sm "><i
                            class=" ri-close-line"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>