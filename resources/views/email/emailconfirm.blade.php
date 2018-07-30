@extends("layouts.auth")


@section("content")

<div class="mywrapper">
		
		<div class="regcontainer">
			 <img src="images/sportzer_icon.png" class="login-logo">
			 <br>
			 <br>
           We have successfully verified your email.
           <div class="emailcont">
           		{{session('email')}}
           		 <i class="material-icons red-text" style="margin-left: 20px; vertical-align: middle;">check</i>
           </div>
           <br> You may now <a href="{{route('login')}}">Login</a>
		</div>
	</div>

@endsection