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

    $('#calendar').fullCalendar({
    header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,basicWeek'
      },
      events: [
    {
      title  : 'event1',
      start  : '2018-08-01'
    },
    {
      title  : 'event2',
      start  : '2018-08-05',
      end    : '2018-08-07'
    },
    {
      title  : 'event3',
      start  : '2018-08-09T12:30:00',
      allDay : false // will make the time show
    }
  ],
  eventColor: '#29b6f6',

  });

   });

