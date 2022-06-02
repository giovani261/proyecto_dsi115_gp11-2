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
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            var classToggle = $('#sidebarToggle').find("i").attr('class');

            if (classToggle === "fa-bars fa-solid fa-xl"){
                $('#sidebarToggle').find("i").removeClass('fa-bars fa-solid fa-xl').addClass('fa-xmark fa-solid fa-xl');
            }
            if (classToggle === "fa-xmark fa-solid fa-xl") {
                $('#sidebarToggle').find("i").removeClass('fa-xmark fa-solid fa-xl').addClass('fa-bars fa-solid fa-xl');
            }
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

$(window).on("load",function() {
    // body...
    $(".loading-container").fadeOut("slow");
    if(document.body.classList.contains('sb-sidenav-toggled')==false){
        $('#sidebarToggle').find("i").removeClass('fa-xmark fa-solid fa-xl').addClass('fa-bars fa-solid fa-xl');
    }
    if(document.body.classList.contains('sb-sidenav-toggled')==true){
       $('#sidebarToggle').find("i").removeClass('fa-bars fa-solid fa-xl').addClass('fa-xmark fa-solid fa-xl');
   }
});

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})

function irArriba(pixeles) {
	// body...
	window.addEventListener("scroll", () => {
		var scroll = document.documentElement.scrollTop;
		//console.log(scroll);

		if(scroll > pixeles){
			btnSubir.style.right = 20 + "px";
		}
		else{
			btnSubir.style.right = -100 + "px";
		}
	})
}
irArriba(300);

$(window).on('hashchange', function(e){
    history.replaceState ("", document.title, e.originalEvent.oldURL);
});

function removevalidateform(formid){
    var element = document.getElementById(formid);
    element.classList.remove("was-validated");
}

// JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()
