@php $page = "Events"; @endphp
@extends('layouts.main')

@section('content')
<div class="row">
@if(\Session::has('success'))
<div class="card light-blue lighten-5">
    <div class="card-content light-blue-text">
      <p>{{ \Session::get('success') }}</p>
    </div>
 </div>
@endif
@if(!$eventList->isEmpty())
  <div class="col s12 m6 l6">
     <a href="{{ route('event.create') }}" class="waves-effect waves-dark btn btncreateevent"><i class="material-icons" style="vertical-align:bottom;margin-right: 5px;">add</i>New Event</a>
  </div>
</div>
<div class="row">
  @foreach($eventList as $events)
  <a href="{{ route('event.edit', ['id' => $events->id]) }}">
  <div class="col s12 m6 l4" style="padding: 10px;">
     <div class="event-card hoverable">
       <div class="eventpiccont">
          <div class="eventpic" style="background: url('/../images/gallary/7.jpg');background-size:cover;background-position:center;">
            
          </div>
       </div>
       <div class="eventlabel">
        <div>
         <font>{{ $events->name }}</font>
       </div>
          <div class="lowerlabel">
           <font><i class="material-icons eventlocicon">location_on</i>{{ $events->venue }}</font>
          
             <font class="eventongoing">{{ $events->status === 1 ? 'Ongoing' : 'Ended' }}</font>
         </div>
       </div>
     </div>
  </div>
  </a>
  @endforeach
  @else
  <div class="d-flex justify-content-center center" style="margin-top: 80px;">
    <div>
      <h6>
      It seems you haven't created an event. <br><br><br>Add a new one:
      </h6>
      <div class="col s12 m12 l12">
       <a href="{{ route('event.create') }}" class="waves-effect waves-dark btn btncreateeventtwo"><i class="material-icons" style="vertical-align:bottom;margin-right: 5px;">add</i>New Event</a>
      </div>
    </div>
  </div>
  @endif
</div>

@endsection
@push('scripts')
  <script>
    $(function(){
      openModal = () => {
        alert('hello');
      }
    });
  </script>
@endpush