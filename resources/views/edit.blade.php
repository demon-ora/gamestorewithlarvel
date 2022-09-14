<!DOCTYPE html>
<html>
<head>
	<title>Game store</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href={{url('forntend/css/home.css')}}>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href={{url('forntend/icon/all.min.css')}}>
<link rel="stylesheet" type="text/css" href={{url('forntend/css/dashboarduser.css')}}>
	<link rel="stylesheet" type="text/css" href={{url('forntend/jquery/jquery.js')}}>
  <link rel="stylesheet" type="text/css" href={{url('forntend/bootstrap/css/bootstrap.min.css')}}>
  <link rel="stylesheet" type="text/css" href={{url('forntend/bootstrap/js/bootstrap.bundle.min.js')}}>
  <link rel="stylesheet" type="text/css" href={{url('forntend/bootstrap/js/bootstrap.min.js')}}>
</head> 
<body>
 <div id="wrapper">
   <!--side bar-->
   <div id="sidebar-wrapper">
     <ul class="sidebar-nav">
       <li><a href="#" class="logo"><img src={{url('forntend/img/c.PNG')}}  width="50px" height="50px">Dashboard</a></li>
       <li><a href="{{url('/dashboard')}}"><i class="fas fa-home"></i>Home</a></li>
       <li><a href="{{url('/dashboarduser')}}" ><i class="fas fa-user-alt"></i>ListUser</a></li>
       <li><a href="{{url('/dashboardgame')}}"><i class="fas fa-gamepad"></i>Game</a></li>
       <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
      </ul>
    </div>
   <!--page content-->
    <div id="page-content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
<h1>Form to Edit Data</h1>
<form action="{{url('/dashboarduser/update')}}/{{$user->id}}" method="post">
    @csrf
	<input type="hidden" name="id" value="">
	<label for="name">Name</label>
	<input type="text" name="name" id="name" value="{{$user->name}}">

	<br>
	<label for="name">email</label>
	<input type="email" name="email" id="email" value="{{$user->email}}">
	 <br>
	 <label for="name">password</label>
	<input type="password" name="password" id="password" value="">
	<button type="submit" name="btnUpdate">Update</button>
</form>
</div>
</div>
</div>
</div>
</body>
</html>