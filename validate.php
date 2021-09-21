<?php
	session_start();


	$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,'cd');

	$uname=$_POST['uname'];
	$pass1=$_POST['password'];

	$pass=hash('SHA512', $pass1);

	$s=" select * from userl where name ='$uname' && password ='$pass' ";
	//$s1=" select name from userl where email ='$email' && password ='$pass' ";
	$result=mysqli_query($con,$s);
	$num=mysqli_num_rows($result);
	

	if($num==1){

		$_SESSION['username']=$uname;


		header("Location: main.php");

		
	}
	 else{
	 	
	    echo "invalid credentials";
	     
	}
	   




?>