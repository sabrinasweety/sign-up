<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body style="background-color: blanchedalmond; align-items:center; display:flex; flex-direction:column; text-align:center; justify-content:center">
    <h1 style="background-color: white; padding:10px;">Login Here</h1>
    <div class="form-container" style="background-color: white; height:200px; width:200px;padding:50px;margin:50px; box-shadow:0 0 10px rgb(1,1,.1);">
    <form action="{{route('dologin')}}" method="POST">
        @csrf
  <div class="form-group">
    <label for="email">Email address</label></br>
    <input type="email" class="form-control" id="email"  placeholder="Enter email" name="email">
   
  </div>
  <div class="form-group">
    <label for="password">Password</label></br>
    <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
</div>
<div class="form-group">
    <button type="submit" style="background-color:blue; border-radius:5px;  color:white;padding:10px; margin:40px; box-shadow:0 0 10px rgb(1,1,.01);cursor:pointer; " >Login</button>
</div>
    </form>

</body>
</html>