@extends("layouts.auth")


@section("content")

<div class="mywrapper">
		
		<div class="regcontainer">
			 <img src="images/sportzer_icon.png" class="login-logo">
			 <br>
			 <br>
           We have sent you an email containing a link used to verify your account.

           <div class="emailcont">
           		{{session('email')}}
           </div>

           Haven't received our email yet? Kindly check your spam folder.
           To resend the email, <a href="#">click here</a>.
		</div>
	</div>

@endsection