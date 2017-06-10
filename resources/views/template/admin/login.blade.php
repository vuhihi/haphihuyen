<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>HÀ PHI HUYỀN LogIn</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="{{asset('template/assets/css/login.css')}}">

  
</head>

<body>
  @yield('error')
  <div class="login-wrap">
	
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
		
			<div class="sign-in-htm">
				<form method='post' action='{{ Route('posLogin') }}'>

				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="group">
					<label for="user" class="label">Email</label>
					<input id="user" type="text" class="input" name='email'>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" name='password'>
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked name='remember'>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="{{ Route('password/email') }}">Forgot Password?</a><br>
					<a href="{{ Route('home') }}">Home</a>
				</div>
				</form>
			</div>
			<div class="sign-up-htm">
				<form method='post' action='{{ Route('register') }}'>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input" name='name'>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" name='password'>
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="pass" type="password" class="input" name='password_confirmation' data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="text" class="input" name='email'>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Đã có tài khoản</a></label>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
  
  
</body>
</html>
