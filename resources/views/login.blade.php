<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login Form</title>
<style>
<link  href="C:\xampp\htdocs\lifevitae\bootstrap\css" rel="stylesheet"/>
<link  href="{{asset("bootstrap/css/bootstrap.css")}} rel="stylesheet"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
.container {
  padding: 16px;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
</style>
<body>
<form action="{{route('check')}}" method="post">
@csrf
    <div class="results">
        @if(Session::get('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
        @endif
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Your Email" name="email" value="{{old ('email')}}"required>
    <span class="text-danger">@error('email') {{ $message }}@enderror</span>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <span class="text-danger">@error('password') {{ $message }}@enderror</span>
    <button type="submit">Login</button>
    <br/>
    <br/>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
  <div class="container" style="background-color:#f1f1f1">
    <p>Don't Have an account register<a href="index"> here</a></p></span>
  </div>
</form>
</body>
