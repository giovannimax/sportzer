@php 
use Illuminate\Support\Facades\Input;
$tempid = Input::get('id');
$tempclass = 'select'.$tempid;
$startdate = new DateTime(Input::get('sdate'));
$enddate = new DateTime(Input::get('edate'));
$dateInterval = $startdate->diff($enddate);
$numberOfDays = $dateInterval->format('%a');
@endphp

<div id='div{{$tempid}}' class="scheddev"> 
  <table class='highlight'>
  <tbody> 
  <tr> 
    <td style='vertical-align: top; width: 30%;'>
      <div class='input-field col s12 m12 l12'> 
        <label>Sports</label> 
        <input type='text' id='autocomplete-input' class='autocomplete autocomplete-input-{{$tempid}}' name='eventsport' placeholder='What sports will be held in this schedule'>
        <a href='#!' class='btn-flat red-text schedremover' onclick="removesched('div{{$tempid}}');">Cancel</a>
       </div>
     </td>
     <td> 
      <div class='input-field col s12 m6 l3'> 
       <select class='{{$tempclass}}'>
          @php 
            for($i = $startdate; $i <= $enddate; $i->modify('+1 day')){
               echo "<option>".$i->format("M d, Y")."</option>";
            }
          @endphp
        </select> 
        <label>Select Date</label> 
      </div>
      <div class='input-field col s12 m6 l3'> 
        <select class='{{$tempclass}}'>
          @for($hours=0; $hours<12; $hours++) 
          @for($mins=0; $mins<60; $mins+=30)
          @php if($hours==0) 
           echo '<option>'.str_pad(12,2,'0',STR_PAD_LEFT).':' .str_pad($mins,2,'0',STR_PAD_LEFT).' AM</option>'; 
          else
           echo '<option>'.str_pad($hours,2,'0',STR_PAD_LEFT).':' .str_pad($mins,2,'0',STR_PAD_LEFT).' AM</option>'; 
          @endphp @endfor @endfor @for($hours=0; $hours<12; $hours++) @for($mins=0; $mins<60; $mins+=30)
          @php echo '<option>'.str_pad($hours,2,'0',STR_PAD_LEFT).':' .str_pad($mins,2,'0',STR_PAD_LEFT).' PM</option>'
          @endphp
          @endfor 
          @endfor 
        </select> 
        <label>From</label> 
      </div>
      <div class='input-field col s12 m6 l3'> 
          <select class='{{$tempclass}}'>
             @for($hours=0; $hours<12; $hours++)
               @for($mins=0; $mins<60; $mins+=30) 
               @php if($hours==0) 
                  echo '<option>'.str_pad(12,2,'0',STR_PAD_LEFT).':' .str_pad($mins,2,'0',STR_PAD_LEFT).' AM</option>'; 
                else 
                  echo '<option>'.str_pad($hours,2,'0',STR_PAD_LEFT).':' .str_pad($mins,2,'0',STR_PAD_LEFT).' AM</option>';
              @endphp 
              @endfor 
             @endfor 
             @for($hours=0; $hours<12; $hours++)
                @for($mins=0; $mins<60; $mins+=30)
                 @php echo '<option>'.str_pad($hours,2,'0',STR_PAD_LEFT).':' .str_pad($mins,2,'0',STR_PAD_LEFT).' PM</option>';
                  @endphp 
                @endfor 
             @endfor 
          </select> 
          <label>To</label> 
      </div>
      <div class='input-field col s12 m6 l3'> 
          <select class='{{$tempclass}}'> 
              @for($i = 1; $i <= $numberOfDays; $i++)
                @php echo ($i == 1) ? '<option>Same day</option>':'<option>'.$i.'</option>'; @endphp
              @endfor
              </select> 
              <label>of the</label>
      </div>
      <div class='input-field col s4'>
        <select class='{{$tempclass}}'> 
          <option value='1'>Both</option> 
          <option value='2'>Male</option> 
          <option value='3'>Female</option> 
        </select> 
        <label>Select gender</label> 
      </div>
      <div class='input-field col s4'> 
          <label>Minimum Age</label>
          <input type='text' name='' placeholder='25'> 
      </div>
      <div class='input-field col s4'> 
          <label>Maximum Age</label> 
          <input type='text' name='' placeholder='45'>
      </div>
  </td>
</tr>
    </tbody> 
</table>
 </div>