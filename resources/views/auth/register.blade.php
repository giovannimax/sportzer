<!DOCTYPE html>
<html>
<head>
	<title>Unplug - Building Real Human Connection</title>
	<link rel="stylesheet" type="text/css" href="css/material-design-icons.css">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/materialize.js"></script>
	<style type="text/css">
	html,body{
		margin: 0px;
		overflow: hidden;
		font-family: "Nunito Sans" !important;
	}
	@font-face {
  	font-family: 'Nunito Sans';
  	font-style: normal;
  	font-weight: 400;
  	src: local('Nunito Sans Regular'), local('NunitoSans-Regular'), url(fonts/nunito_sans.woff2) format('woff2');
  	unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
	}
		.mywrapper{
			font-family: "Nunito Sans";
			width: 100%;
			background: url(img/signupbg.jpg);
			background-repeat: no-repeat;
			height: 100vh;
			padding-top: 75px;
			background-size: cover;
		}

		.regcontainer{
			margin:auto;
			width: 30%;
			background: white;
			padding: 30px; 
			text-align: center;
		}

		.txtbox{
			font-family: "Nunito Sans";
			font-weight: 900;
			margin-top: 20px;
			padding: 10px;
			width: 100%;
		}
		.btn-primary{
			border-radius: 0px !important;
			margin-top: 30px;
			width: 100%;
		}
		textarea {
   			 resize: none;
   			 height: 200px;
		}

		.gendercont{
			text-align: left !important;
		}
	</style>
</head>
<body>
	<div class="mywrapper">
		
		<div class="regcontainer">
			<h3>Join us!</h3>
			<form method="POST">
				<input type="text" name="name" placeholder="Name" class="txtbox"><br/>
				<input type="email" name="email" placeholder="Email" class="txtbox"><br/>
				<input type="password" name="pass" placeholder="Password" class="txtbox"><br>
				<div class="gendercont">
					<label>Gender</label>
					<p>
				      <input class="with-gap" name="gender" type="radio" id="male" value="male" />
				      <label for="male">Male</label>
   						&nbsp;&nbsp;&nbsp;					
				      <input class="with-gap" name="gender" type="radio" id="female" value="female" />
				      <label for="female">Female</label>
   					</p>
				</div>
				<input name="register" type="submit" value="Register" class="waves-effect btn btn-primary"/>
			</form>
		</div>
	</div>
</body>
</html>