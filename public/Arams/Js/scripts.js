/*!
    * Start Bootstrap - SB Admin v7.0.0 (https://startbootstrap.com/template/sb-admin)
    * Copyright 2013-2021 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
    //
// Scripts
//

window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});
//
// var numberOfButtons = document.querySelectorAll(".site-btn").length;
// for(var i=0 ;i<numberOfButtons;i++){
//
//
// document.querySelectorAll(".site-btn")[i].addEventListener("click" ,function(){
//  var buttonInnerHTML = this.innerHTML;
//
// changeColor(buttonInnerHTML);
// });
//
// }
//
//
//
//
//
// document.addEventListener("keypress",function(event){
//
// changeColor(event.key);
//
//
//
// });
//
// function changeColor(key){
//
//   switch(key) {
//     case "إضافة الموقع":
//       var button= new color:#000;
//       break;
//     default:
//
//   }
// }

// $("form-tabs-next").click(function(){
//  $("secondtab").toggle();
// })
