<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Animated regestation Form</title>
    <link rel="stylesheet" href={{url('forntend/css/stylee.css')}}>
  </head>
  <body>
<form  class="box" action="{{url('/')}}/regestation" method="post">
    @csrf
  <h1>regestation form</h1>
  <input type="text" name="name" placeholder="name" value="{{old('name')}}"><span>@error('name'){{$message}}
  @enderror</span>
  <input type="email" name="email" placeholder="type your email"value="{{old('email')}}" ><span>@error('email'){{$message}}
    @enderror</span>
  <input type="password" name="password" placeholder="password"><span>@error('password'){{$message}}
    @enderror</span>
 <input type="submit" name="login" value="submit">
</form>
 </body>
 </html>