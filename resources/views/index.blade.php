<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sign-Up Form</title>
<style>
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
	input[type=date]{
		  width: 7%;
		  padding: 15px;
		  margin: 5px 0 22px 0;
		  display: inline-block;
		  border: none;
		  background: #f1f1f1;
	}
	input [type=radio]{
  		padding: 5px;
  		margin: 5px 0 22px 0;
  		display: inline-block;
  		border: none;
  		background: #f1f1f1;
	}

	input[type=text]:focus, input[type=password]:focus, input[type=date] {
  background-color: #ddd;
  outline: none;
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}
a {
  color: dodgerblue;
}
.showme {
  display: none;
}

.showhim:hover .showme {
  display: block;
  font-color:orange;
}
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
<script>
	function val()
	{
		var flag=0;
		if(document.frm.password.value!=document.frm.psw1.value)
			{
				flag=1;
				alert("Error in repeating the password");
			}
        //var passwordformat=new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
		if(document.frm.password.value.length<7)
			{
				flag=1;
				alert("Password length is small or doesn't follow  the password pattern");
			}
		if(document.frm.gender[0].checked==false &&  document.frm.gender[1].checked==false &&  document.frm.gender[2].checked==false)
			{
				flag=1;
				alert("Select Gender");
			}
		var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
		if(document.frm.email.value.match(mailformat))
			{

			}
		else
		{
			alert("Invalid Email Address");
			flag=1;
		}
		//if(flag!=1)
		//	{
		//		window.open('welcome.html', '_blank');
		//	}
	}
</script>
</head>

<body>
<div class="container">
    <div class="form-group col-12 p-0">
            <div>

                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
                @endif
            </div>
	    <form name="frm"  action="{{route('store')}}" method="POST">
        @csrf
	    <div class="container">
		    <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="name"><b>Full Name</b></label>
            <input type="text" placeholder="Enter Your Full Name" name="name" value="{{old ('name')}}" required>
            <span class="text-danger">@error('name') {{ $message }}@enderror</span>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" value="{{old ('email')}}"required>
            <span class="text-danger">@error('email') {{ $message }}@enderror</span>
            <label for="password"><b>Password</b></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="showhim">info<div class="showme">Password must be atleast 8 characters long</div></span>
            <input type="password" placeholder="Enter Password" name="password" required>
            <span class="text-danger">@error('password') {{ $message }}@enderror</span>
            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw1" required>
            <label for="Date Of Birth"><b>Date Of Birth</b><br/></label>
            <input type="date" placeholder="Select date of birth" name="dob" required>
            <br/><br/>
            <label for="Gender"><b>Select Your Gender</b><br/></label>
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label><br>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label><br>
                <input type="radio" id="other" name="gender" value="other">
                <label for="other">Other</label>
            <br><br>
            <label for="Description"><b>Description</b></label><br>
            <textarea rows = "5" cols = "50" name = "desc" placeholder="Type Your Desription"></textarea>
            <hr>
            <p><input type="checkbox" required> By creating an account you agree to our <a href="#">Terms & Privacy</a>.Please click on the checkbox if you agree</p>
            <Button class="btn-btn-success" onclick="val()" style="width:80px;">Register</Button>
        </div>
        </form>
        <div class="container signin">
            <p>Already have an account? <a href='login'>Sign in</a>.</p>
        </div>
  </div>
</div>
</body>
</html>
