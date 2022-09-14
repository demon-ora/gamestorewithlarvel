<!DOCTYPE html>
<html style="height: 100%;">
<head>
  <title>GAME STORE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{url('forntend/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('forntend/jquery/jquery.js')}}">
  <link rel="stylesheet" type="text/css" href="{{url('forntend/bootstrap/js/bootstrap.bundle.min.js')}}">
  <link rel="stylesheet" type="text/css" href="{{url('forntend/bootstrap/js/bootstrap.min.js')}}">
  <link rel="stylesheet" type="text/css" href="{{url('forntend/css/homepage.css')}}">
  

<link rel="stylesheet" type="text/css" href="{{url('forntend/css/2ndpage.css')}}">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{url('forntend/icon/all.min.css')}}">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <!-- Brand -->
  <a class="navbar-brand d-md-block d-none" href="#" class="firsta">
  <img src="img/c.png" alt="Logo" style="width:2.5rem;" class="logopic">
  Game store
</a>
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
      <a class="nav-link active  mx-4" href="2ndpage.php"><i class="fas fa-gamepad"></i>Moded Game</a>
    </li>
    <li class="nav-item">
      <a class="nav-link   mx-4" href="3rdpage.php"><i class="fab fa-d-and-d"></i>game</a>
    </li>
    

    <!-- Dropdown -->
       <li class="nav-item dropdown mx-4">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><i class="fas fa-user-alt"></i>
        Account
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="logout.php">logout</a>
          <a class="dropdown-item" href="userdashboard.php">User Dashboard</a>
      </div>
    </li>
  </ul>
</div>
</nav>
<div class="btn-group btn-group-lg btn-block " >
   <button type="button"  data-filter=".all" class="btn btn-secondary">ALL</button>
    <button type="button"  data-filter=".Arcade" class="btn btn-info">Arcade</button>
    <button type="button"  data-filter=".Adventure" class="btn btn-success">Adventure</button>
    <button type="button"  data-filter=".puzzel" class="btn btn-secondary">puzzel</button>
    <button type="button"  data-filter=".sport" class="btn btn-info">sport</button>
    <button type="button"  data-filter=".action" class="btn btn-success">action</button>
  </div>
  <div class="container game" style="margin: 0px ;display: inline; padding: 0;">
      <div class="mix action all xd" >
        @foreach ($g as $game )
           <div class="card" style="width: 23rem; display: inline-block; border:1px solid black">
  <a href="{{url('/home/select')}}/{{$game->id}}a" class="aa"><img src="{{asset('storage/imgg/'.$game->image)}}"  class="fine card-img-top" style="object-fit: cover;"></a>
   <div class="card-body">
    <h1 class="card-text" style="text-align: center;">{{$game->title}}</h1>
  </div>
</div>
@endforeach     
      </div>
        <div class="mix Arcade all xd" >
      @foreach ($ga as $game )
               <div class="card" style="width: 23rem; display: inline-block; border:1px solid black">
  <a href="{{url('/home/select')}}/{{$game->id}}a" class="aa"><img src="{{asset('storage/imgg/'.$game->image)}}"  class="fine card-img-top" style="object-fit: cover;"></a>
   <div class="card-body">
    <h1 class="card-text" style="text-align: center;">{{$game->title}}</h1>
  </div>
</div>
@endforeach
      </div>
        <div class="mix puzzel all xd">
 
            @foreach ($ag as $game )
                <div class="card" style="width: 23rem; display: inline-block; border:1px solid black">
  <a href="{{url('/home/select')}}/{{$game->id}}a" class="aa"><img src="{{asset('storage/imgg/'.$game->image)}}"  class="fine card-img-top" style="object-fit: cover;"></a>
   <div class="card-body">
    <h1 class="card-text" style="text-align: center;">{{$game->title}}</h1>
  </div>
</div>
@endforeach
      </div>
       <div class="mix Adventure all xd" >
      
        @foreach ($gam as $game )
                <div class="card" style="width: 23rem; display: inline-block; border:1px solid black">
  <a href="{{url('/home/select')}}/{{$game->id}}a" class="aa"><img src="{{asset('storage/imgg/'.$game->image)}}"  class="fine card-img-top" style="object-fit: cover;"></a>
   <div class="card-body">
    <h1 class="card-text" style="text-align: center;">{{$game->title}}</h1>
  </div>
</div>
@endforeach 
      </div>
       <div class="mix sport all xd" >
    
        @foreach ($games as $game )
              <div class="card" style="width: 23rem; display: inline-block; border:1px solid black">
  <a href="{{url('/home/select')}}/{{$game->id}}a" class="aa"><img src="{{asset('storage/imgg/'.$game->image)}}"  class="fine card-img-top" style="object-fit: cover;"></a>
   <div class="card-body">
    <h1 class="card-text" style="text-align: center;">{{$game->title}}</h1>
  </div>
</div>
@endforeach
      </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
      var mixer = mixitup('.game');
    })
  </script>
  <script type="text/javascript" src="{{url('forntend/jquery/mixitup.min.js')}}"></script>
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