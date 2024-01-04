$(document).ready(function(){
    $('.btn__build-room').click(function(){
        $(this).toggleClass('active')
    })

    $('[data-bs-target="#ChiTietPhong-Modal"]').click(function(){  
        setTimeout(function(){$('.set-size').css("width", $('.get-size').width())},200)
    })
})

