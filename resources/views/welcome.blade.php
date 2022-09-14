<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href={{url('forntend/css/style.css')}}>
	<title>Array Login Form</title>
</head>
<body>
	@if (session()->has('error'))
		<span style="background-color: white;color:firebrick">{{session()->get('error')}}</span>
	@elseif (session()->has('errorno'))
	<span style="background-color: white;color:firebrick">{{session()->get('errorno')}}</span>
	@endif
<form action="{{url('/')}}" method="post" class="box">
    @csrf
	<h1>Login Form</h1>
	<div class="form-element">
		<label style="color:white">email</label>
		<input type="email" name="email" placeholder="enter email">
	</div>
	<div class="form-element">
		<label style="color:white">Password</label>
		<input type="password" name="password" placeholder="enter password">
	</div>
	<div class="form-element">
		<input type="submit" value="Login" name="login">
	</div>
	<button><a href={{url('/regestation')}}>create account</a></button>
</form>
</body>
</html>