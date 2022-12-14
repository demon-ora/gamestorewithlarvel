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
      <li><a href="#" class="logo"><img src={{url('forntend/img/c.PNG')}} width="50px" height="50px">Dashboard</a></li>
      <li><a href="{{url('/dashboard')}}"><i class="fas fa-home" ></i>Home</a></li>
      <li><a href="{{url('/dashboarduser')}}"><i class="fas fa-user-alt"></i>User</a></li>
      <li><a href="{{url('/dashboardgame')}}"><i class="fas fa-gamepad"></i>Game</a></li>
      <li><a href="{{url('/dashboard/logout')}}"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
     </ul>
   </div>
   <!--page content-->
    <div id="page-content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <a href="#" class="btn btn-success" id="menu-toggle">toggle menu</a>
            <br>
            <a href="{{url('/')}}/regestation"  style="text-decoration: none;"  >Add user</a>

 
 <table class="table table-striped">
      <thead class="thead-dark">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>password</th>
     <th>delete</th>
     <th>update</th>
  </tr>
</thead>
@foreach ( $users as $user )
  <tr>
    <td>{{$user->id}}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->password}}</td>
    <td>
      <a href="{{url('/dashboarduser/delete')}}/{{$user->id}}" onclick="return confirm('Are you sure to delete?')"><i class="fas fa-trash-alt fa-2x"></i></a></td>
     <td> <a href="{{url('/dashboarduser/edit')}}/{{$user->id}}"><button type="button" class="btn btn-warning">edit</button></a>
    </td>
  </tr>
  @endforeach
 </table>
         </div>
       </div>
      </div>
    </div>
  <!--menu toggle script-->
    <script>
      $("#menu-toggle").click(function(e){
       e.preventDefault();
      $("#wrapper").toggleClass("menuDisplayed");

      })
   </script>
  </body>
</html>