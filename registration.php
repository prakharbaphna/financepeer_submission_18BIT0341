<?php
	session_start();


	$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,'cd');

	$email=$_POST['email'];
	$name=$_POST['user'];
	$pass=hash('sha512',$_POST['password']);

	$s=" select * from userl where email ='$email' OR name='$name'";
	$result=mysqli_query($con,$s);
	$num=mysqli_num_rows($result);

	if($num==1){
		//echo "Name Aldready taken";
		
		header("Location: signup.php");
		echo '<script>alert("username or email aldready exists")</script>';

		
	}
	else{
		$reg="insert into userl(email,name,password) values ('$email','$name','$pass')";
		mysqli_query($con,$reg);
		header("Location: login.php");

		//echo "Registration Successful";
	}


?>




