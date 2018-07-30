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
    $('#datestart').datepicker({
    	minDate: new Date,
    	format: "mmmm dd, yyyy"
    });
    
    $("#datestart").on("change",function(){
      var setdate = new Date($(this).val());
      var nextsetdate = setdate;
      nextsetdate.setDate(nextsetdate.getDate() + 1);
         $('#dateend').datepicker({
            minDate: nextsetdate,
            format: "mmmm dd, yyyy"
          });
         $('#dateend').prop("disabled", false);
  });
    
  });

