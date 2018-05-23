<!DOCTYPE html>
<html>
<head>
    <title>Sportzer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/material-design-icons.css">
    <link rel="stylesheet" type="text/css" href="css/app.css">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
</head>
<body>
	<div class="mywrapper">
		
		<div class="regcontainer">
            <img src="images/sportzer_icon.png" style="width:40%;">
			<h5>Login</h5>
			<form method="POST">
                <!-- <input type="text" name="email" placeholder="Email" class="txtbox" style="margin-bottom: 25px;"><br> -->
                <div class="input-field col s6">
          <input id="email" type="text" name="email" class="validate txtbox">
          <label for="email" style="left:0px !important;">Email</label>
        </div>
        <div class="input-field col s6">
          <input id="password" type="password" name="password" class="validate txtbox">
          <label for="password" style="left:0px !important;">Password</label>
        </div>
				<p>
			      <label>
			      	<input type="checkbox" class="filled-in" id="filled-in-box"/>
			      	<span>Remember me</span>
			      </label>
			    </p>
				<div style="text-align: left !important; margin-left: 40px;">
					Not yet a member? <a href="register" class="mylink">Sign-up here</a>
				</div>
				<input name="register" type="submit" value="Login" class="waves-effect btn btn-primary"/>
				</form>
				
			
		</div>
	</div>
</body>
</html>