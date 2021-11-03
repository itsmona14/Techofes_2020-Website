<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>
	<link rel="stylesheet" href="CSS\login.css">
</head>
<body>
<div class="arrow" >
		<a href="menu.html">
		<img src="back arrow.png">
		</a>
	</div>
<div class="container">
    <div class="row">
		<div id="container" class="col">
			<center><h2>Register</h2></center><hr>
			<form method="POST">
				<div class="form-grp">
				<input type="text" placeholder="First name" id="fname" name="fname" class="len"><br><br>
				</div>
				<div class="form-grp">
				<input type="text" placeholder="Last name" id="lname" name="lname" class="len"><br><br>
				</div>
				<div class="form-grp">
				<input type="email" placeholder="Your Email ID" id="mail" name="email" class="len"><br><br>
				</div>
				<div class="form-grp">
				<input type="phone" placeholder="Your 10 Digit Phone number" id="phone" class="len" name="phone" maxlength="10"  autocomplete="off"><br><br>
				</div>
				<div class="form-grp">
				<input type="text" placeholder="College ID or Roll no" id="c_id" name="c_id"  class="len"><br><br>
				</div>
				<div class="form-grp">
				<input type="text" placeholder="College Name" class="len" id="c_name" name="c_name" ><br><br>
			    </div>
				<div class="form-grp">
				<input type="text" placeholder=" College city" class="len" id="c_city" name="c_city"  >
			    </div><br><br>
				<center><b style="padding: 10px; width: inherit; ">NOTE:CHECK YOUR DETAILS BEFORE YOU SUBMIT</b></center><br><br>
				<center><button type="submit" id="login" onclick="validate()" name="login">LOGIN</button></center>
			</form>
		</div>
	</div>
</div>
<script src="validate.js">

</script>

</body>
</html>
<?php
if($_POST)
	{
	$db_host="localhost";
	$db_user="root";
	$db_pass="";
	$db_name="project";
	$conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$c_id=$_POST['c_id'];
	$c_name=$_POST['c_name'];
	$c_city=$_POST['c_city'];
	$insert="INSERT INTO users VALUES('$fname','$lname','$email','$phone','$c_id','$c_name','$c_city')";
	if (mysqli_query($conn,$insert))
		{
		echo "Successfully inserted";
		}
	else
		{
		echo "Failed";
		}
		
    mysqli_close($conn);
	}
?>