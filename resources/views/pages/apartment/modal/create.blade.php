@component('component.modal')
    @slot('md_id')
        createModal
    @endslot
    @slot('md_animation')
        fade flip
    @endslot
    @slot('md_size')
        modal-dialog-centered
    @endslot
    @slot('md_title')
        Tạo phòng
    @endslot

    @slot('form_start')
        <form class="needs-validation" id="validateForm" action="create" method="POST" novalidate>
        @endslot
        @csrf
        <div class="row row-cols-1 g-3">

            <div class="col">
                <label for="inputName" class="fw-semibold">Tên phòng</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="inputName"
                    placeholder="Phòng.." value="{{ old('name') }}" required>
                <div class="invalid-feedback"></div>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col">
                <label class="fw-semibold" for="inputDescription">Mô tả</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="inputDescription"
                    value="{{ old('description') }}" rows="3" maxlength="255" required></textarea>
                <div class="invalid-feedback"></div>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        @slot('form_end')
        </form>
    @endslot
    @slot('md_footer')
        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
            <button class="btn btn-link link-success fw-medium text-decoration-none" id="createRecord-close"
                data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i>Huỷ</button>
            <button type="submit" class="btn btn-danger" id="create-record" href="#">Lưu</button>
        </div>
    @endslot
@endcomponent
