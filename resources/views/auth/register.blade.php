@extends("layouts.auth")

@section("content")
	<div class="mytwowrapper">
		<div class="row">
			<div class="col s6">
				<div class="description-container">
					<img class="description-logo" src="images/sportzer_cropped_white.png"><br>
					<p class="description-details">
						Sportzer aims to solve the problem which Organizer usually encountered during creating an event. Sportzer is a system which is used in the economy specifically in the Sports Area industry that connects organizers to participants online and gives them a satisfying service upon entering a certain sports event. 
					</p>
				</div>
			</div>
			<div class="col s6">
					<!--regcontainer-->

		<div class="regtwocontainer">
			<h3>Join us!</h3>
			<form method="POST" action="{{ route('register') }}">
			{{ csrf_field() }}
			<div class="row">
				<div class="input-field col s6">
				<input placeholder="John" id="first_name" name="firstname" type="text" class="validate">
				<label for="first">First Name</label>
				@if($errors->has('firstname'))
					<p class="error">{{ $errors->first('firstname') }}</p>
				@endif
				</div>
				<div class="input-field col s6">
				<input placeholder="Doe" id="last_name" name="lastname" type="text" class="validate">
				<label for="last_name">Last Name</label>
				@if($errors->has('lastname'))
					<p class="error">{{ $errors->first('lastname') }}</p>
				@endif
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<input placeholder="January 01, 2018" id="bdate" name="birthdate" type="text" class="datepicker">
					<label for="bdate">Birthdate</label>
				@if($errors->has('birthdate'))
					<p class="error">{{ $errors->first('birthdate') }}</p>
				@endif
				</div>
				<div class="input-field col s6">
					<input placeholder="+639123465789" id="pnumber" name="contact_no" maxlength="13" value="+63" type="text" class="validate">
					<label for="pnumber">Phone Number</label>
				@if($errors->has('contact_no'))
					<p class="error">{{ $errors->first('contact_no') }}</p>
				@endif
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<input placeholder="Jordan Creek Parkwa, Des Moines, Iowa" name="address" id="address" type="text" class="validate">
					<label for="address">Address</label>
					@if($errors->has('address'))
					<p class="error">{{ $errors->first('address') }}</p>
				@endif
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<input placeholder="sample@example.com" id="email" name="email" type="email" class="validate">
					<label for="email">Email</label>
					@if($errors->has('email'))
					<p class="error">{{ $errors->first('email') }}</p>
				@endif
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<input placeholder="*******" id="password" name="password" type="password" class="validate">
					<label for="password">Password</label>
					@if($errors->has('password'))
					<p class="error">{{ $errors->first('password') }}</p>
				@endif
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<input placeholder="*******" id="password_confirmation" name="password_confirmation" type="password" class="validate">
					<label for="password_confirmation">Verify Password</label>
				</div>
			</div>
				<div class="gendercont">
					<label>Gender</label><br>

					    <label>
					      <input class="with-gap" name="gender" id="male" type="radio" value="male" />
					      <span>Male</span>
					    </label>&nbsp;&nbsp;&nbsp;&nbsp;
					    <label>
					      <input class="with-gap" name="gender" id="female" type="radio" value="female" />
					      <span>Female</span>
					    </label>
					  @if($errors->has('gender'))
					<p class="error">{{ $errors->first('gender') }}</p>
				@endif
				</div>
			
				<button type="submit" class="waves-effect btn btn-primary">Register</button>
			</form>
		</div>

					<!--end regcontainer-->
			</div>
		</div>
	</div>
</div>
	<script>
  // Or with jQuery

  $(document).ready(function(){
    $('.datepicker').datepicker();
  });
	</script>
@endsection