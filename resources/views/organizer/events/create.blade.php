@php $page = "Create Event"; @endphp
@extends('layouts.main')

@section('content')

<div class="row">
  <div class="col s12 m12 l12" style="padding: 10px;">
    <div class="innercard">
      <div class="row">
        <h6>Event Details</h6>
        <hr>
      </div>
      <form method="POST" action="" enctype='multipart/form-data'>
        <div class="row">
            <div class="input-field col s12 m12 l6">
              <label>Event Title</label>
              <input type="text" name="name" placeholder="Give it a name">
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m12 l12">
              <label>Event Description</label>
              <textarea name="description" class="materialize-textarea" placeholder="Insert description"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12 l6">
              <label>Event Photo</label>
              <div class="eventaddimgcont">
                <div class="eventaddimg">
                  <input type="file" id="eventimage" name="eventphoto" onchange="readURL(this)">
                  <a href="#!" onclick="chooseFile();">
                    <div  id="eventimgtemp">
                      <i class="material-icons text-white">image</i><br>
                      <font>Add Event Photo</font>
                    </div>
                  </a>
                </div>
              </div>
            </div>
        </div>
         <div class="row">
          <h6>Venue</h6>
          <hr>
        </div>
        <div class="row">
          <div class="input-field col s12 m12 l12">
             <label>Location</label>
             <input id="autocomplete" type="text" name="location" placeholder="Search for a venue or address">
          </div>
          <div class="col s12 m12 l12">
            <div id="map"></div>
          </div>
        </div>
         <div class="row">
        <h6>Schedules</h6>
        <hr>
      </div>
        <div class="row">
            <div class="input-field col s12 m12 l6">
              <label>Event Start Date</label>
              <input id="datestart" type="text" class="datepicker" name="eventstart" placeholder="When will it start">
            </div>
            <div class="input-field col s12 m12 l6">
              <label>Event End Date</label>
              <input id="dateend" type="text" class="datepicker" name="eventend" placeholder="When will it end" disabled>
            </div>
        </div>
        <div class="row">
          <div class="col s12 m12 l12">
            <div class="schedcont" style="display: none;">
              <table>
                <thead>
                <tr>
                  <th>Sports</th>
                  <th>Schedule Details</th>
                </tr>
              </thead>
              </table>
          
        </div>
        <a href="#!" id="addsched" class="btn-flat" style="margin-top: 20px; display: none;">Add another schedule</a>
          </div>
        </div>
      <div class="row">
        <h6>Participants</h6>
        <hr>
      </div>
       <div class="row">
            <div class="input-field col s12 m12 l6">
              <label>Expected participants</label>
              <input type="number" name="expectedParticipants" placeholder="How many will attend">
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
</div>
@endsection

@section('scripts')

<script>
  var acdata = {
          "Basketball": '/images/sports/ball-of-basketball.png',
          "Badminton":"/images/sports/man-playing-badminton.png",
          "Lawn Tennis":"/images/sports/man-playing-tennis.png",
          "Table Tennis":"/images/sports/man-playing-ping-pong.png",
          "Volleyball":"/images/sports/volleyball-player.png",
          "Shot Put":"/images/sports/shot-put-throwing.png",
          "Javelin Throw":"/images/sports/throwing-javelin-silhouette-of-a-male-thrower.png",
          "Pole Vault":"/images/sports/pole-vault.png",
          "High Jump":"/images/sports/man-practicing-high-jump.png",
          "Long Jump":"/images/sports/long-jump.png",
        };
        function addsched(schedid){
          var sdate = $("#datestart").val();
          var edate = $("#dateend").val();
          $.get("/addsched",{id:schedid,sdate:sdate,edate:edate},function(data){
            $(data).appendTo(".schedcont").hide();
            $("#div"+tempid).ready(function(){
              $("#div"+tempid).slideDown("slow");
            });
          });
        }
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
              var imageUrl=e.target.result;
              $(".eventaddimg a div i").hide();
              $(".eventaddimg a div font").hide();
              $('#eventimgtemp').css('background-image', 'url(' + imageUrl + ')');
            };
            reader.readAsDataURL(input.files[0]);
            }
        }
        
function chooseFile() {         
            $("#eventimage").click();            
        } 
        
var dateStart = null;
var dateEnd = null;
var enumarateDates = null;
var tempid=1;
function listOfDates(){
  dates = [];
  for(var i in enumarateDates){
    dates.push(i);
  }
  return dates;
}
 function enumarateNumberOfDates(){
   var now = dateStart.clone(), dates = [];
   while(now.isSameOrBefore(dateEnd)){
     dates.push(now.format('MMM DD, YYYY'));
     now.add(1, 'days');
   }
   return dates;
 }                   
$('#datestart').change(function(){
  dateStart = moment(new Date($(this).val()));
  if(dateEnd){
    enumarateDates = enumarateNumberOfDates();
  }
  if($('#dateend').val()!=""){
    $(".schedcont").html("");
    addsched(tempid);
  }
});
$("#dateend").on("change",function(){
dateEnd = moment(new Date($(this).val()));
enumarateDates = enumarateNumberOfDates();
$(".schedcont").html("");
addsched(tempid);
});
$( document ).ajaxStop(function() {
 var numelems= $('.scheddev').length;
  if(numelems==1){
      $(".schedremover").hide();
    }
  M.updateTextFields();
$(".schedcont").show();
  $("#addsched").slideDown("slow");
  $(".select"+tempid).formSelect();
   /*===== Autocomplete ====*/
      $('.autocomplete-input-'+tempid).autocomplete({
        data: acdata,
      });
});
   $("#addsched").on("click", function(){
    tempid+=1;
    addsched(tempid);
    $(".schedremover").slideDown();
});
function removesched(div){
  $("#"+div).slideUp("slow",function(){
    $(this).remove();
    var numelems= $('.scheddev').length;
    if(numelems==1){
      $(".schedremover").slideUp();
    }
  });
}
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
</script>
@endsection