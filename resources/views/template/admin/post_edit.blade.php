<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{url('template/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('template/assets/css/font-awesome.min.css')}}">
</head>
<boby>
	<div class='container'>
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<form>
       			<div class="form-group">
      				<label for="email">Email:</label>
      				<input type="email" class="form-control" id="email" placeholder="Enter email">
    			</div>
    			<div class="form-group">
      				<label for="pwd">Password:</label>
      				<input type="password" class="form-control" id="pwd" placeholder="Enter password">
    			</div>
    			<div class="checkbox">
      				<label><input type="checkbox"> Remember me</label>
    			</div>
    			<button type="submit" class="btn btn-default">Submit</button>
  			</form>
		</div>
		<div class="col-sm-2"></div>
	</div>

	<script src="{{asset('template/assets/js/jquery.min.js')}}"></script> 
    <script src="{{asset('template/assets/js/bootstrap.min.js')}}"></script> 
</boby>

</html>