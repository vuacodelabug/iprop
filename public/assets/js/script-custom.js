function toast(type_toat, content, gravity='top', position='right', time = 3000){
    Toastify({
        text: content,
        duration: time,
        newWindow: true,
        close: true,
        className: "bg-"+type_toat,
        gravity: gravity, // `top` or `bottom`
        position: position, // `left`, `center` or `right`            
        onClick: function(){} // Callback after click
    }).showToast();
}

$(document).ready(function(){
    
    $('.clear-search').click(function(){
        $.ajax({
            url: '/admin/clear-search',
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                window.location.reload();
            }
        });
    });  
    
    $('.select2').select2({});
    
    $('.validateForm').submit(function(event) {
        if (this.checkValidity() === false) {
            event.preventDefault(); // Ngăn chặn hành động mặc định của sự kiện
            event.stopPropagation(); // Ngăn chặn sự kiện lan toả đến các phần tử cha hoặc các trình xử lý sự kiện khác.
    
            /*
            Kiểm tra từng trường và hiển thị thông báo lỗi
            Lặp qua tất cả các phần tử input trong form.
            Trả về true nếu trường hiện tại hợp lệ, ngược lại là false.
             Lấy thông báo lỗi mặc định của trường input
             Sử dụng để hiển thị thông báo lỗi trong phần tử có class .invalid-feedback nằm ngay sau trường input.
            */
            $(this).find(':input').each(function() { 
                if (!this.validity.valid) {
                    var error_message = this.validationMessage;
                    // Hiển thị thông báo lỗi, ví dụ:
                    $(this).next('.invalid-feedback').html(error_message);
                }
            });
        }
        $(this).addClass('was-validated'); // Thêm class was-validated vào form để kích hoạt hiển thị thông báo lỗi của Bootstrap.
    });
});


function ajaxCustom(url, requestData) {
    var deferred = $.Deferred();

    $.ajax({
        url: url,
        method: 'post',
        data: requestData,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            var data = response;

            if (data) {
                // Giải quyết Deferred với dữ liệu
                deferred.resolve(data);
            } else {
                // Nếu có lỗi, từ chối Deferred với thông báo lỗi
                deferred.reject("Không có dữ liệu trả về");
            }
        },
        error: function() {
            // Nếu có lỗi, từ chối Deferred với thông báo lỗi
            deferred.reject("Có lỗi xảy ra khi gửi yêu cầu");
        }
    });
    return deferred.promise();
/*
    @cách dùng
    // Sử dụng Promise để xử lý kết quả
    var url = '/admin/customer/change-status/' + customer_id;
    var requestData = {
        customer_id: customer_id,
    };

    ajaxCustom(url, requestData)
        .then(function(data) {
            //khi data có du lieu chay lệnh o day
            // console.log("Dữ liệu thành công:", data);
        })
        .catch(function(error) {
            // console.error("Lỗi:", error);
        });
*/
}

$('html').on('change', '#province', function() {
    province_id = $(this).val();
    //lấy danh sách quận/huyện của tỉnh
    $('#district').load('/admin/address/render_districts/'+ province_id);
    $('#district').removeAttr('disabled');
    $('#ward').load('/admin/address/render_wards/'+ '0');
});

 $('html').on('change', '#district', function() {
    district_id = $(this).val();
    //lấy danh sách quận/huyện của tỉnh
    $('#ward').load('/admin/address/render_wards/'+ district_id);
    $('#ward').removeAttr('disabled');

});
