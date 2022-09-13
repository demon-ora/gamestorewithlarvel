<!DOCTYPE html>
<html>
<head>
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{url('forntend/css/testonepage.css')}}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('forntend/icon/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('forntend/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('forntend/jquery/jquery.js')}}">
  <link rel="stylesheet" type="text/css" href="{{url('forntend/jquery/mixitup.min.js')}}">
  <link rel="stylesheet" type="text/css" href="{{url('forntend/bootstrap/js/bootstrap.bundle.min.js')}}">
  <link rel="stylesheet" type="text/css" href="{{url('forntend/bootstrap/js/bootstrap.min.js')}}">
	<title>test</title>
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
 
<!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  <!-- Links -->
  <ul class="navbar-nav mr-auto">
    <li class="nav-item">
      <a class="nav-link  mx-4 namee" href="home.php"><i class="fas fa-home"></i>Home</a>
    </li>
    <li class="nav-item">  
      <a class="nav-link mx-4" href="2ndpage.php"><i class="fas fa-gamepad"></i>Moded Game</a>
    </li>
    <li class="nav-item">
      <a class="nav-link   mx-4" href="3rdpage.php"><i class="fab fa-d-and-d"></i>game</a>
    </li>
  </ul>
</div>
</nav>
    <div id="divman">
		<h1 class="titlee"> Title of game</h1><br>
		<span  class="spann">
			{{$game->title}}
		</span>
		<h1 class="imgtitle">Image of game:</h1>
		<img src="{{asset('storage/imgg/'.$game->image)}}" >
		<br><br>
		<p class="game-description">Something about game:{{$game->des}}</p>
   </div>
  <p id="size">downlod this file<br>
    <a href="{{url('gamefolder/chess.apk')}}" download="" rel="noopener noreferrer" target="_blank">
    <button type="button" class="btn btn-primary">Download File</button>
   </a>
     </p>
	
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

         <footer class="bg-dark text-white foot">
     <div class="row" style="margin-right: 0px;">
      <div class="col-sm-6">
         <h4 class="footheading">ABOUT US</h4>
         <p class="footpa1">Game store is the website where you can upload game and download game Copy right under the law of right of property</p><br>
         <i class="fab fa-facebook-square fa-2x"></i>
           <i class="fab fa-twitter-square fa-2x" ></i>
           <i class="fab fa-youtube fa-2x" ></i>
           <i class="fab fa-instagram fa-2x"></i>
      </div>
      <div class="col-sm-6"> 
         <h4 class="footheading">ADDRESS</h4>
       <i class="fas fa-map-marker-alt fa-2x footi"></i>
      <p class="footpa">Shubhal,Lalitpur</p><br>
      <i class="fas fa-phone fa-2x footi"></i>
        <p class="footpa">++9846983492</p><br>
        <i class="fas fa-envelope fa-2x footi"></i>
       <p class="footpa">gamestore@gmail.com</p><br>
       </div>
    </div>
    <p  class="last">Made with <i class="fas fa-heart"></i> and <i class="fas fa-coffee"></i></p>
  </div>
  </footer>
</body>
</html>
