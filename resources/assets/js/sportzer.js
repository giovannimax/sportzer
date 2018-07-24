/*==== Preloader =====*/
$(window).on('load',function() {
    setTimeout(function() {
      $('body').addClass('loaded');      
    }, 500);
  });  
 

 /*==== Document on ready ====*/

  $(document).ready(function(){
  	/*==== Sidenav ====*/
    $('.sidenav').sidenav();
   /*==== Datepicker ====*/
    $('.datepicker').datepicker({
    	minDate: new Date,
    	format: "mmmm dd, yyyy"
    });
    /*==== Select ====*/
    $('select').formSelect();
  });