
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
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">dsds</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		<div class="login-form">
			
			<div class="sign-in-htm">
			@if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
				<form method='post' action="{{ Route('password\reset') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="token" value="{{ $token }}">				
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="email" class="input" name='email' value="{{ old('email') }}">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" name='password'>
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="pass" type="password" class="input" name="password_confirmation" data-type="password">
				</div>
				
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
				
				</form>
			</div>

		</div>
	</div>
</div>
  
  
</body>
</html>
