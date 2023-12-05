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

{{--
cách sử dụng
@component('components.modal')
    @slot('md_id') id_modal @endslot
    @slot('md_animation') md_animation @endslot
    @slot('md_size') modal-dialog-centered/ modal-dialog-scrollable @endslot
    @slot('md_title') Tiêu đề Modal @endslot
    @slot('form_start') <form class="needs-validation" novalidate="" action="#" method="GET"> @endslot
    @slot('form_url') admin/ @endslot
    @slot('form_method') POST/GET @endslot

    <p>Ban co chac muon xoa thong tin nay</p>

    @slot('form_end') </form> @endslot

    @slot('md_footer') @endslot
@endcomponent
--}}
