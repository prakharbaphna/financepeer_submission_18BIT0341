<?php
	session_start();


	$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,'cd');

	$uname=$_POST['uname'];
	$pass=$_POST['password'];

	$pass_hash=hash('SHA512', $pass);

	$s=" select * from userla where name ='$uname' && SUBSTRING(password, 129, 128)='$pass_hash'";
	$result=mysqli_query($con,$s);
	$num=mysqli_num_rows($result);

	if($num==1){

		$_SESSION['username']=$uname;


		header("Location: maina.php");

		
	}
	 else{
	 	
	    header("Location: logina.php");
	     
	}
	   




?>