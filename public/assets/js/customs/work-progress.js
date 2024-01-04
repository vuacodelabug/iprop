$(document).ready(function(){
    var countProgress

    // đếm số lượng check box
    function rating(working){
        if($('#' + working) !== null){
            countProgress = $('#' + working + ' input:checkbox:checked').length;
    
            base(working)
        }
    }

    // Hiển thị tỉ lệ khi load trang
    function base(working){
        $('#' + working + ' .rating .block').css('width',countProgress*25 +'%');
        $('#'+working+' .rating-counter').text(Math.ceil(countProgress*25))
    }

    $('.list-group-item input:checkbox').click(function(){
        var temp = $(this).parent().parent().parent().attr('id');

        target = $("#"+temp + " input:checkbox:checked").length*25
        numberCounter(temp)
    })

    // Thay đổi tỉ lệ khi chọn checkbox
    function numberCounter(id){
       var value = Number($('#'+id+'  .rating-counter').text());
        if(value < target){
            $('#'+id+' .rating-counter').text(Math.ceil(value+1))

            $('#'+id+' .rating .block').css('width',(value+1) +'%')
            setTimeout(() => {
                numberCounter(id)
            }, 12.5);   
        } 
        else if(value > target){
            $('#'+id+' .rating-counter').text(Math.ceil(value-1))

            $('#'+id+' .rating .block').css('width',(value-1) +'%')
            setTimeout(() => {
                numberCounter(id)
            }, 12.5);   
        } 
    }




    // Gọi function "Rating" và truyền id vào để chạy
    rating("gioHang-checkin-checkout");

    rating("gioHang")

    rating("gioHang-bookPhong")

  



})