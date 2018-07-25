@php $page = "Update Event"; @endphp
@extends('layouts.main')

@section('content')
<div class="row">
  <div class="col s12 m8 l8" style="padding: 10px;">
    <div class="innercard">
      <div class="row">
        <h6>Event Details</h6>
        <hr>
      </div>
      <form method="POST" action="{{ route('event.update', ['id' => $eventData->id]) }}">
      @csrf
      @method('PATCH')
        <div class="row">
            <div class="input-field col s12 m12 l12">
              <label>Event Title</label>
              <input type="text" name="name" placeholder="Give it a name" value="{{ $eventData->name }}">
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m12 l12">
              <label>Event Description</label>
              <textarea name="description" class="materialize-textarea" placeholder="Insert description">{{ $eventData->description }}</textarea>
            </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m12 l4">
            <?php $categoryList = ['1' => 'Category 1', '2' => 'Category 2', '3' => 'Category 3']; ?>
               <select name="category" value="{{ $eventData->category }}">
                <option value="" disabled selected>Choose category</option>
                    @foreach($categoryList as $list => $index)
                        <?php 
                        echo ($list == $eventData->category) ? '<option value="'.$list.'" selected>'.$index.'</option>' : '<option value="'.$list.'">'.$index.'</option>';
                        ?>
                    @endforeach
              </select>
              <label>Category</label>
            </div>
            <div class="input-field col s12 m12 l4">
              <label>Event Start Date</label>
              <input type="text" class="datepicker" name="startDate" placeholder="When will it start" value="{{ $eventData->startDate }}">
            </div>
            <div class="input-field col s12 m12 l4">
              <label>Event End Date</label>
              <input type="text" class="datepicker" name="endDate" placeholder="When will it end" value="{{ $eventData->endDate }}">
            </div>
        </div>
      
      <div class="row">
        <h6>Venue</h6>
        <hr>
      </div>
      <div class="row">
        <div class="input-field col s12 m12 l12">
           <label>Location</label>
           <input id="autocomplete" type="text" name="venue" placeholder="Search for a venue or address" value="{{ $eventData->venue }}">
        </div>
        <div class="col s12 m12 l12">
          <div id="map"></div>
        </div>
      </div>
      <div class="row">
        <h6>Participants</h6>
        <hr>
      </div>
       <div class="row">
            <div class="input-field col s12 m12 l6">
              <label>Expected participants</label>
              <input type="number" name="expectedParticipants" placeholder="How many will attend" value="{{ $eventData->expectedParticipants }}">
            </div>
        </div>
         <div class="row">
            <div class="input-field col s12 m12 l6">
             <input type="submit" value="Create event" class="btn light-blue lighten-1 white-text">
            </div>
        </div>
    </div>
  </form>
  </div>
  <div class="col s12 m4 l4" style="padding: 10px;">
    <div class="innercard">
        <div class="row">
            <div class="col s12 m12 l12 createventhelper">
              <p>Lorem ipsum dolor sit amet, magna dolor nulla orci libero in, nam ut sit vestibulum vivamus eget adipiscing. Nullam nec, arcu potenti ipsum sit ligula euismod molestie, molestie velit volutpat dolorem purus sit, suscipit placerat. Nam ligula architecto, cubilia ut vel iaculis tincidunt ligula tortor, aptent arcu amet neque turpis dolor. Montes lectus in pellentesque vestibulum vitae, est fusce nulla consequat auctor, vel donec vitae amet.</p>
            </div>
        </div>
    </div>
  </div>
</div>

<script>
       // This example adds a search box to a map, using the Google Place Autocomplete
      // feature. People can enter geographical searches. The search box will return a
      // pick list containing a mix of places and predicted search terms.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 10.330534, lng: 123.8916521},
          zoom: 8,
          mapTypeId: 'roadmap'
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('autocomplete');
        var searchBox = new google.maps.places.SearchBox(input);
        //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCo2KRNr54lkdpXIxxd-ZqsKPBQxg9X1xU&libraries=places&callback=initAutocomplete"
    async defer></script>

@endsection