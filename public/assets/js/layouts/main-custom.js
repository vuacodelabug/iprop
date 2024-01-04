$(document).ready(function(){

    function desktopTabs(){
        if (window.innerWidth > 767){
            $("ul#nav-tabs a.nav-link.active i").addClass("d-none")
            // $('ul#nav-tabs a.nav-link h5, ul#nav-tabs a.nav-link h4').removeClass("d-none");
            $('ul#nav-tabs a.nav-link:not(.active) h5, ul#nav-tabs a.nav-link.active h4').removeClass("d-none");
            $('ul#nav-tabs').removeClass('nav-justified fs-20');
            $('ul#nav-tabs').addClass('custom-hover-nav-tabs');
        }
    }

    function mobileTabs(){
        if (window.innerWidth <= 767){
            $('ul#nav-tabs').removeClass('custom-hover-nav-tabs');
            $('ul#nav-tabs').addClass('nav-justified fs-20');

            $("ul#nav-tabs a.nav-link h5, ul#nav-tabs a.nav-link h4").addClass("d-none")
            $("ul#nav-tabs a.nav-link i").removeClass("d-none")
        } 
    }


    desktopTabs();
    mobileTabs();
    
    $(window).resize(function(){
        desktopTabs();
        mobileTabs();
    })

    $('ul#nav-tabs a.nav-link').click(function(){
        if (window.innerWidth > 767){
            desktopTabs();

            $("ul#nav-tabs a.nav-link.active h5, ul#nav-tabs a.nav-link.active i").addClass("d-none")
            $("ul#nav-tabs a.nav-link.active h4").removeClass("d-none")

            $("ul#nav-tabs a.nav-link:not(.active) h5, ul#nav-tabs a.nav-link:not(.active) i").removeClass("d-none")
            $("ul#nav-tabs a.nav-link:not(.active) h4").addClass("d-none")
        }
    })
    
})