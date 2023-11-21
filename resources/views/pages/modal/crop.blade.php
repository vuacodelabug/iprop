
@component('component.modal')
    @slot('md_id') modal_cropper @endslot
    @slot('md_animation') @endslot
    @slot('md_size') @endslot
    @slot('md_title') Cropper @endslot

    <div class="img-container">
        <img id="image" alt="Picture"  style="max-height:75vh">
    </div>
    
    @slot('md_footer') 
    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
    <button type="button" id="crop" class="btn btn-secondary" data-dismiss="modal">crop</button>
    @endslot
@endcomponent

