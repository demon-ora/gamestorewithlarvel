<!DOCTYPE html>
<html style="height: 100%; width:100%;">
<head>
	<title>GAME STORE</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="jquery/jquery.js">
	<link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.bundle.min.js">
	<link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="css/homepage.css">
	
-->
<link rel="stylesheet" type="text/css" href="{{url('forntend/css/home.css')}}">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{url('forntend/icon/all.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('forntend/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('forntend/jquery/jquery.js')}}">
  <link rel="stylesheet" type="text/css" href="{{url('forntend/jquery/mixitup.min.js')}}">
  <link rel="stylesheet" type="text/css" href="{{url('forntend/bootstrap/js/bootstrap.bundle.min.js')}}">
  <link rel="stylesheet" type="text/css" href="{{url('forntend/bootstrap/js/bootstrap.min.js')}}">
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <!-- Brand -->
  <a class="navbar-brand d-md-block d-none" href="#" >
  <img src="{{url('forntend/img/c.PNG')}}" alt="Logo" style="width:2.5rem;">
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
      <a class="nav-link active mx-4 namee" href="{{url('/home')}}"><i class="fas fa-home"></i>Home</a>
    </li>
    <li class="nav-item">  
      <a class="nav-link mx-4" href="{{url('/modedgame')}}"><i class="fas fa-gamepad"></i>Modgame</a>
    </li>
    <li class="nav-item">
      <a class="nav-link mx-4" href="{{url('/normalgame')}}"><i class="fab fa-d-and-d"></i>Game</a>
    </li>
    <li class="nav-item">
      <a class="nav-link mx-4" href="{{url('/home/logout')}}"><i class="fab fa-d-and-d"></i>Logout</a>
    </li> 
  </ul>
</nav>
<section>
 <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade car" data-ride="carousel">
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img src="{{url('forntend/img/fate.jpg')}}" class="d-block w-100 car" alt="..." >
      <div class="carousel-caption">
        <div class="typewriter">
        <h1>Welcome to my page</h1>
        <p>hope you find game you like</p>
      </div>
      </div>
    </div>
    <div class="carousel-item">
<img src="{{url('forntend/img/anime.jpg')}}" class="d-block w-100 car" alt="...">
      <div class="carousel-caption">
           <div class="typewriter">
        <h1>Welcome to my page</h1>
        <p>hope you find game you like</p>
      </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{url('forntend/img/animepic.jpg')}}" class="d-block w-100 car" alt="...">
      <div class="carousel-caption">
           <div class="typewriter">
        <h1>Welcome to my</h1>
        <p>hope you find game you like</p>
        </div>
      </div>
     </div>
    </div>
  </div>
</section>
   <marquee><h1 style="padding:0.25rem 3.125rem;"><i>Some information about game</i></h1></marquee>
<div class="container-fluid jumbotron fire">
  <div class="row">
    <div class="col-sm-6">
      <i class="fas fa-search fa-2x icon" ></i>
        <h5 class="headingpara"> Search game you like</h5><br>
          <p class="para">
           what every game you need there will be <br>game there are game of different categories <br> like arcade adventure puzzel and many more <br>so feel free to downlod game you love
          </p>
   </div>
   <div class="col-sm-6">
      <i class="fas fa-upload fa-2x icon"></i>
        <h5  class="headingpara"> Upload your game in this website</h5><br>
          <p class="para">
           upload game you have created so that other<br> people can download and play it 
          </p>
   </div>
  </div>
</div>
<hr style="border:solid 0.0625rem;" class="dis">
  <div class="typewriter">
  <h1 style="padding:2.187rem;">Latest moded game</h1>
</div>
  <div class="container-fluid ">
       <table>
        @foreach ( $gu as $game )
        <tr class="inlie">
           <td style="border: 1px solid black; background: #808080d6; text-align:center">
         <a href="{{url('/home/select')}}/{{$game->id}}"><img src="{{asset('storage/imgg/'.$game->image)}}" class="cen">
         </a><br>
      <a href="{{url('/home/select')}}/{{$game->id}}" style="color: white;">{{$game->title}}
         </a>
     </td>
     </tr>
     @endforeach
    </table>
  
  </div>
   <hr>
   <div class="typewriter">
   <h1 style="padding: 1.875rem;">Latest game</h1>
 </div>
     <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
       <table>
        @foreach ( $ga as $game )
        <tr class="inlie">
           <td style="border: 1px solid #007bff; background: #28a74585; text-align:center">
         <a href="{{url('/home/select')}}/{{$game->id}}"><img src="{{asset('storage/imgg/'.$game->image)}}" class="cen"></a>
         <br>
       <a href="{{url('/home/select')}}/{{$game->id}}" style="color: black;"> {{$game->title}}
         </a>
     </td>
     </tr>
     @endforeach
    </table>
    </div>
  </div>
</div>
<hr>
   <h1 style="text-align: center; padding:3.125rem 0px;">What people say .....</h1>
   <div class="container-fluid">
    <div class="row">
      <div class="col-sm-4">
         <img src="{{url('forntend/img/xd.PNG')}}" class="rounded-circle mx-auto d-block" alt="Cinque Terre" style="height:12.5rem;width:12.5rem;object-fit: cover"  data-aos="flip-up" > 
         <h4 class="sayheading">Prabek</h4>
         <p class="saypara">"This website is amazing! great work"</p>
      </div> 
      <div class="col-sm-4">
         <img src="{{url('forntend/img/1.webp')}}" class="rounded-circle mx-auto d-block " alt="Cinque Terre" style="height:12.5rem;width:12.5rem;object-fit: cover"  data-aos="flip-up"> 
         <h4 class="sayheading">Roshan</h4>
         <p class="saypara">"Very easy to download game and find game you like"</p>
       </div>
      <div class="col-sm-4">
        <img src="{{url('forntend/img/OIP.jfif')}}" class="rounded-circle mx-auto d-block " alt="Cinque Terre" style="height:12.5rem;width:12.5rem;object-fit: cover"  data-aos="flip-up">
        <h4 class="sayheading">Niraj</h4>
        <p class="saypara" >"Various varitery in game and love this website"</p>
      </div>
    </div>
  </div>
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
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
  AOS.init();
</script>
</body>
</html>