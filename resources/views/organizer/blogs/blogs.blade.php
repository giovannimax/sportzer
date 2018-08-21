@php $page = "Blogs"; @endphp
@extends('layouts.main')

@section('content')

<div class="row">
  <div class="col s12 m6 l6">
     <a href="blogs/create" class="waves-effect waves-dark btn btncreateevent"><i class="material-icons" style="vertical-align:bottom;margin-right: 5px;">add</i>New Blog</a>
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
         <font>Vlog: Volleyball</font>
       </div>
          <div class="lowerlabel">
           <font><i class="material-icons eventlocicon">movie_filter</i><i class="material-icons eventlocicon">visibility</i>1,234</font>
          
             <font class="eventongoing">11/05/18</font>
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
         <font>Science: Volleyball</font>
       </div>
          <div class="lowerlabel">
           <font><i class="material-icons eventlocicon">burst_mode</i><i class="material-icons eventlocicon">visibility</i>1,234</font>
          
             <font class="eventongoing">05/24/18</font>
         </div>
       </div>
     </div>
  </div>

</div>

@endsection