$(document).ready(function(){

    function rorate(className){
        $(`.${className}`).click(function(){
            if( $(`.${className}`).attr('aria-expanded') == "true" ){
                $(`.${className} .rotate-animate`).css('transform','rotate(0deg)');
            } else{
                $(`.${className} .rotate-animate`).css('transform','rotate(180deg)');
            }
        })
    }




    rorate('roHang-collapse') 
    rorate('bookPhong-collapse')
    rorate('checkIn-collapse')
    rorate('checkOut-collapse')
    rorate('veSinh-collapse')


})