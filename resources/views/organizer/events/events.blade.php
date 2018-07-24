@php $page = "Events"; @endphp
@extends('layouts.main')

@section('content')

<div class="row">
  <div class="col s12 m6 l6">
     <a href="events/create" class="waves-effect waves-dark btn light-blue lighten-1 white-text btncreateevent"><i class="material-icons" style="vertical-align:bottom;margin-right: 5px;">add</i>New Event</a>
  </div>
  
</div>
<div class="row">
  <div class="col s12 m6 l4" style="padding: 10px;">
     <div class="event-card hoverable">
       <div class="eventpiccont">
          <div class="eventpic" style="background: url('/../images/gallary/7.jpg');background-size:cover;background-position:center;">
            
          </div>
       </div>
       <div class="eventlabel">
        <div>
         <font>Event Name</font>
       </div>
          <div class="lowerlabel">
           <font><i class="material-icons eventlocicon">location_on</i>Sanciangko St., Cebu City</font>
          
             <font class="eventongoing">Ongoing</font>
         </div>
       </div>
     </div>
  </div>
   <div class="col s12 m6 l4" style="padding: 10px;">
     <div class="event-card hoverable">
       <div class="eventpiccont">
          <div class="eventpic" style="background: url('/../images/gallary/13.jpg');background-size:cover;background-position:center;">
            
          </div>
       </div>
       <div class="eventlabel">
        <div>
         <font>Event one</font>
       </div>
          <div class="lowerlabel">
           <font><i class="material-icons eventlocicon">location_on</i>Colon St., Cebu City</font>
          
             <font class="eventsoon">Soon</font>
         </div>
       </div>
     </div>
  </div> 
  <div class="col s12 m6 l4" style="padding: 10px;">
     <div class="event-card hoverable">
       <div class="eventpiccont">
          <div class="eventpic" style="background: url('/../images/gallary/2.jpg');background-size:cover;background-position:center;">
            
          </div>
       </div>
       <div class="eventlabel">
        <div>
         <font>Event two</font>
       </div>
          <div class="lowerlabel">
           <font><i class="material-icons eventlocicon">location_on</i>Talisay City, Cebu</font>
          
             <font class="eventdone">Done</font>
         </div>
       </div>
     </div>
  </div>
  <div class="col s12 m6 l4" style="padding: 10px;">
     <div class="event-card hoverable">
       <div class="eventpiccont">
          <div class="eventpic" style="background: url('/../images/gallary/11.jpg');background-size:cover;background-position:center;">
            
          </div>
       </div>
       <div class="eventlabel">
        <div>
         <font>Event three</font>
       </div>
          <div class="lowerlabel">
           <font><i class="material-icons eventlocicon">location_on</i>Poblacion,Talisay City, Cebu</font>
          
             <font class="eventdone">Done</font>
         </div>
       </div>
     </div>
  </div>
  <div class="col s12 m6 l4" style="padding: 10px;">
     <div class="event-card hoverable">
       <div class="eventpiccont">
          <div class="eventpic" style="background: url('/../images/gallary/8.jpg');background-size:cover;background-position:center;">
            
          </div>
       </div>
       <div class="eventlabel">
        <div>
         <font>Event four</font>
       </div>
          <div class="lowerlabel">
           <font><i class="material-icons eventlocicon">location_on</i>Cebu Business Park, Cebu City</font>
          
             <font class="eventdone">Done</font>
         </div>
       </div>
     </div>
  </div>
</div>

@endsection