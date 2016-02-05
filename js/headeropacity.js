$(function() {
    $(window).scroll(function() {
        var headerclass = document.querySelector("#header");
        var isHovered = $(document.getElementById("header")).is(":hover");
        if($(window).scrollTop() > 0) {
            if (isHovered == true) {
                headerclass.classList.add("header-opaque");
                headerclass.classList.remove("header-transparent");
                
            } else {
                headerclass.classList.add("header-transparent");
                headerclass.classList.remove("header-opaque");
            }
        } else {
            headerclass.classList.add("header-opaque");
            headerclass.classList.remove("header-transparent");
        }
    });
    $(header).hover(function() {
        var headerclass = document.querySelector("#header");
        var isHovered = $(document.getElementById("header")).is(":hover");
        if($(window).scrollTop() > 0) {
            if (isHovered == true) {
                headerclass.classList.add("header-opaque");
                headerclass.classList.remove("header-transparent");
                
            } else {
                headerclass.classList.add("header-transparent");
                headerclass.classList.remove("header-opaque");
            }
        } else {
            headerclass.classList.add("header-opaque");
            headerclass.classList.remove("header-transparent");
        }
    });
    // necessary because firefox/edge doesn't like .hover
    $(header).mouseout(function() {
        var headerclass = document.querySelector("#header");
        if($(window).scrollTop() > 0) {
            headerclass.classList.add("header-transparent");
            headerclass.classList.remove("header-opaque");
        } else {
            headerclass.classList.add("header-opaque");
            headerclass.classList.remove("header-transparent");
        }
    });
        
});