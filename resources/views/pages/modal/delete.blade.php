@component('component.modal')
    @slot('md_id')
        deleteModal
    @endslot
    @slot('md_animation')
        fade flip
    @endslot
    @slot('md_size')
        modal-dialog-centered
    @endslot
    @slot('md_title')
        {{-- Bạn có chắc muốn xoá? --}}
    @endslot

    <div class="mt-2 text-center">
        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548"
            style="width:100px;height:100px"></lord-icon>
        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
            <h4>Bạn có chắc muốn xoá ?</h4>
            <p class="text-muted mx-4 mb-0">Bạn có chắc chắn muốn xoá thông tin này</p>
        </div>
    </div>

    @slot('md_footer')
        <div class="d-flex gap-2 justify-content-center mt-4 mb-2 w-100">
            <button class="btn btn-link link-success fw-medium text-decoration-none" id="deleteRecord-close"
                data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i>Đóng</button>
            <a class="btn btn-danger" id="delete-record" href="#">Xoá</a>
        </div>
    @endslot
@endcomponent
