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
<!-- <body> -->
 <div id="wrapper">
   <!--side bar-->
   <div id="sidebar-wrapper" style="position: fixed;">
     <ul class="sidebar-nav">
       <li><a href="#" class="logo"><img src={{url('forntend/img/c.PNG')}} width="50px" height="50px">Dashboard</a></li>
       <li><a href="dashboard.php"><i class="fas fa-home"></i>Home</a></li>
       <li><a href="dashboarduser.php" ><i class="fas fa-user-alt"></i>User</a></li>
       <li><a href="dashboardgamee.php"><i class="fas fa-gamepad"></i>ADDGame</a></li>
       <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
      </ul>
    </div>
   <!--page content-->
    <div id="page-content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
   <form method="post" enctype="multipart/form-data" action="{{url('/dashboardgame/update')}}/{{$game->id}}">
           @csrf
    <h1>Edit game</h1>
            <input type="hidden" name="id" value="">
           <label> Enter title of game</label><br>
            <input type="text" name="title" value="{{$game->title}}">
             <br>
                <input type="radio" id="normal" name="cate" value="1"
                {{$game->categories == 1 ? "checked" : ""}} >
                 <label for="normal">modedgame</label><br>
                 <input type="radio" id="moded" name="cate" value="0" 
                 {{$game->categories == 0 ? "checked" : ""}}
                >
                 <label for="moded">normalgame</label><br>
                
               <select name="gametype" class="custom-select">
              <option selected value="">Custom Select Menu</option>
              <option value="action"
              {{$game->type == "action" ? "selected" : ""}}
              >action</option>
              <option value="arcade"
              {{$game->type == "arcade" ? "selected" : ""}}
              >arcade</option>
              <option value="adventure"
              {{$game->type == "adventure" ? "selected" : ""}}
              >adventure</option>
              <option value="puzzel"
              {{$game->type == "puzzel" ? "selected" : ""}}
              >puzzel</option>
              <option value="sport"
              {{$game->type == "sport" ? "selected" : ""}}
              >sport</option>
             </select>
             <br><br>
               <p>Choose image of game:</p>
           <input type="file" id="myFile" name="image" value="{{$game->image}}" >
              {{-- <input type="hidden" id="myFile" name="oldimage" value="" > --}}
          <br><br>
              <p>Custom game:</p>
              <input type="file" id="myFile" name="gameurl" value="{{$game->url}}">

              {{-- <input type="hidden" id="customFile" name="oldgameurl" value=""> --}}
               <br>
             <label for="something">Write something about game:</label>
              <textarea class="form-control" rows="5" id="something" name="descripation">{{$game->des}}</textarea>
               <div class="mt-3">
                 <button type="submit" class="btn btn-primary" value="save" name="btnupdate">Submit</button>
               </div>
           </form> 
           </div>
       </div>
      </div>
    </div>
 </body>
 </html>
 