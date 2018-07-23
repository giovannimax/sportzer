@extends("layouts.auth")


@section("content")

<div class="mywrapper">
		
		<div class="regcontainer">
			 <img src="images/sportzer_icon.png" class="login-logo">
			 <br>
			 <br>
           Your email have successfully verified. 
           <div class="emailcont">
           		{{session('email')}}
           		midnlesh13@gmal.com  <i class="material-icons red-text" style="margin-left: 20px; vertical-align: middle;">check</i>
           </div>
           <br> Click here to <a href="{{route('login')}}">Login</a>
		</div>
	</div>

@endsection