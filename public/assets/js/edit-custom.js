function renderEdit(id, data){
    console.log('is renderEdit');
    var dataRender = '';
    dataRender += '<td>'+id+'</td>';
    dataRender += '<td class="position-relative"><input type="text" value="'+data.name+'" id="name'+id+'" class="form-control" required><div class="invalid-tooltip"></div></td>';
    dataRender += '<td><input type="text" value="'+data.description+'" id="description'+id+'" class="form-control" required></td>';
    dataRender += '<td class="text-center">';
    dataRender += '    <select class="form-select" id="status'+id+'">';                                                        
    if(data.status == 0){
        dataRender += '        <option value="0" selected >Disabled</option>';
        dataRender += '        <option value="1">Active</option>';
    }
    else{
        dataRender += '        <option value="0">Disabled</option>';
        dataRender += '        <option value="1" selected>Active</option>';
    }
    dataRender += '    </select>';
    dataRender += '</td>';
    dataRender += '<td>';
    dataRender += '    <div class="d-flex gap-2">';
    dataRender += '        <button type="button" data-id="'+id+'" class="btn btn-success btn-sm btn-save">';
    dataRender += '            <i class="ri-save-2-fill align-bottom text-white"></i>';
    dataRender += '        </button>'; 
           
    dataRender += '       <button type="button" data-id="'+id+'" class="btn btn-warning btn-sm btn-cancel">';
    dataRender += '        <i class="ri-close-fill btn-sm align-bottom text-white"></i></button>';
    dataRender += '    </div>';
    dataRender += '</td>';

    return dataRender;
}

function renderView(id,data){
    console.log('is renderView');

    var dataRender = '';
    dataRender += '<td>'+id+'</td>';
    dataRender += '<td>'+data.name+'</td>';
    dataRender += '<td>'+data.description+'</td>';
    if(data.status == 0){
        dataRender += '<td class="text-center"><span class="badge rounded-pill text-bg-warning fs-13">Disabled</span></td>';
    }
    else{
        dataRender += '<td class="text-center"><span class="badge rounded-pill text-bg-success px-3 fs-13">Active</span></td>';
    }
    dataRender += '<td>';
    dataRender += '    <div class="d-flex gap-2">';
    dataRender += '        <button type="button" data-id="'+id+'" class="btn btn-info btn-sm edit-item-btn btn-edit">';
    dataRender += '            <i class="ri-pencil-fill align-bottom text-white"></i>';
    dataRender += '        </button>';
    dataRender += '    </div>';
    dataRender += '</td>';

    return dataRender;
}
