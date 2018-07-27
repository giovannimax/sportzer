@extends("layouts.auth")

@section("content")
	<div class="mywrapper light-blue lighten-1">
		
		<div class="regcontainer">
            <img src="images/sportzer_icon.png" class="login-logo">
			<h5>Login</h5>
			<form method="POST" action="{{ route('login') }}">
			{{ csrf_field() }}
                <!-- <input type="text" name="email" placeholder="Email" class="txtbox" style="margin-bottom: 25px;"><br> -->
                <div class="input-field col s6">
          <input id="email" type="email" name="email" class="validate txtbox">
          <label for="email" class="align-left">Email</label>
					@if($errors->has('email'))
					<p class="error">
						{{ $errors->first('email') }}
					</p>
					@endif
        </div>
        <div class="input-field col s6">
          <input id="password" type="password" name="password" class="validate txtbox">
          <label for="password" class="align-left">Password</label>
					@if($errors->has('password'))
						<p class="error">
						{{ $errors->first('password') }}
						</p>
					@endif
        </div>
				<p>
			      <label>
			      	<input type="checkbox" class="filled-in" id="filled-in-box"/>
			      	<span>Remember me</span>
			      </label>
			    </p>
				<div class="login-link">
					Not yet a member? <a href="register" class="mylink">Sign-up here</a>
				</div>
				<button type="submit" class="waves-effect btn btn-primary">LOGIN</button>
				</form>
				
		</div>
	</div>
@endsection