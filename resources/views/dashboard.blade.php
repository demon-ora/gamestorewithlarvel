<!DOCTYPE html>
<html>
<head>
	<title>Game store</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href={{url('forntend/bootstrap/css/bootstrap.min.css')}}>
  <link rel="stylesheet" type="text/css" href={{url('forntend/bootstrap/js/bootstrap.bundle.min.js')}}>
  <link rel="stylesheet" type="text/css" href={{url('forntend/bootstrap/js/bootstrap.min.js')}}>
<link rel="stylesheet" type="text/css" href={{url('forntend/css/home.css')}}>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href={{url('forntend/icon/all.min.css')}}>
<link rel="stylesheet" type="text/css" href={{url('forntend/css/dashboard.css')}}>
	<link rel="stylesheet" type="text/css" href={{url('forntend/jquery/jquery.js')}}>
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['website', 'calculation'],
          ['user',    {{$users}}],
          ['game',    {{$games}}],
        ]);

        var options = {
          title: 'game and user chart',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
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
       <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
      </ul>
    </div>
   <!--page content-->
    <div id="page-content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <a href="#" class="btn btn-success" id="menu-toggle">toggle menu</a>
            <div class="container jumbotron" style="text-align: center;">
             <div class="badge">
               <a href="{{url('/dashboarduser')}}">
                <h1>user</h1>
                <p>go to user page</p>
               </a>
              </div>
              <div class="badge" style="display: inline-block; margin-left:0px; background:lightgreen; " >
               <a href="{{url('/dashboardgame')}}">
                 <h1>game</h1>
                 <p>go to game page</p>
               </a>
             </div>
           </div>
           <div id="piechart_3d" style="width: 56.25rem; height: 31.25rem;" class="container-fluid"></div>
           <hr>
           <p style="text-align:center">2021 Dashboard<i class="fas fa-heart"></i>desgin byy me</p>
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