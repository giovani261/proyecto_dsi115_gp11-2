/*!
* Start Bootstrap - Simple Sidebar v6.0.3 (https://startbootstrap.com/template/simple-sidebar)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-simple-sidebar/blob/master/LICENSE)
*/
// 
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
            document.body.classList.toggle('sb-sidenav-toggled');
        }
        else {
            $('#sidebarToggle').find("i").removeClass('fa-solid fa-bars fa-xl').addClass('fa-solid fa-xmark fa-xl');
        }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

$(window).on("load",function() {
    // body...
    $(".loading-container").fadeOut("slow");
});

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})

function iconbar(){
    var classToggle = $('#sidebarToggle').find("i").attr('class');
    if (classToggle === "fa-solid fa-bars fa-xl"){
        $('#sidebarToggle').find("i").removeClass('fa-solid fa-bars fa-xl').addClass('fa-solid fa-xmark fa-xl');
    }
    if (classToggle === "fa-solid fa-xmark fa-xl") {
        $('#sidebarToggle').find("i").removeClass('fa-solid fa-xmark fa-xl').addClass('fa-solid fa-bars fa-xl');
    }
}