<!DOCTYPE html>
<html>
<head>
    <title>Sportzer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/material-design-icons.css">
		<link rel="shortcut icon" href="images/sportzer_icon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/app.css">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
</head>
<body>
	<div class="mywrapper">
		
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
</body>
</html>