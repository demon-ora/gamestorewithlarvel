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
          <form method="post" enctype="multipart/form-data" action="{{url('/dashboardgame')}}">
            @csrf
            <h1>Upload game</h1>
               <label> Enter title of game</label><br>
            <input type="text" name="title">
            <br>
                <input type="radio" id="normal" name="cate" value="1">
                 <label for="normal">modedgame</label><br>
                 <input type="radio" id="moded" name="cate" value="0">
                 <label for="moded">normalgame</label>
                 <br>
               <select name="gametype" class="custom-select">
              <option selected value="">Custom Select Menu</option>
              <option value="action">action</option>
              <option value="arcade">arcade</option>
              <option value="adventure">adventure</option>
              <option value="puzzel">puzzel</option>
              <option value="sport">sport</option>
             </select>
            <br><br>
               <p>Choose image of game:</p>
           <input type="file" id="myFile" name="image">
           <br><br>
              <p>Custom game:</p>
              <input type="file"  name="gameurl">
             <br>
             <label for="something">Write something about game:</label>
              <textarea class="form-control" rows="5" id="something" name="descripation"></textarea>
               <div class="mt-3">
                 <button type="submit" class="btn btn-primary" value="save" name="btnsave">Submit</button>
               </div>
           </form> 
             <hr>

 <table  style="font-size: 0.9375rem;" class="table table-striped">
   <thead class="thead-dark">
  <tr>
    <th>ID</th>
    <th>title</th>
    <th>Game catagories</th>
    <th>Game Type</th>
    <th>Image</th>
     <th>Gameurl</th>
     <th>descripation</th>
     <th>delete</th>
     <th>edit</th>
  </tr>
   </thead>
   @foreach ( $games as $game )
  <tr>
    <td>{{$game->id}}</td>
    <td>{{$game->title}}</td>
    <td>{{$game->categories}}</td>
    <td>{{$game->type}}</td>
    <td> <img src="{{asset('storage/imgg/'.$game->image)}}" height="50" width="50" style="object-fit: cover;"></td>
    <td>{{$game->url}}</td>
    <td>{{$game->des}}</td>
    <td>
      <a href="{{url('/dashboardgame/delete')}}/{{$game->id}}" onclick="return confirm('Are you sure to delete?')"><i class="fas fa-trash-alt fa-2x"></i></a></td>
     <td> <a href="{{url('/dashboardgame/edit')}}/{{$game->id}}">
      <button type="button" class="btn btn-warning">edit</button>
     </a>
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