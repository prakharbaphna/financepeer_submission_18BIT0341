<?php
	session_start();


	$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,'cd');

	$email=$_POST['email'];
	$name=$_POST['user'];
	$pass1=$_POST['password'];



	$res="";
	$chars="abcdefghijklmnopqrstuvwxyz1234567890!@#$%^&*():{}?<>~+_-/|ABCDEFGHIJKLMNOPQRSTUVWXYZकखगघङछजझञटठडढणड़ढ़तथधनफबभमयरलवशषसहक्ष त्रज्ञపబఫభతదశఞపబఫభతదశఞపబఫభతదశఞ ";
	$char_array=str_split($chars);
	for($i=0;$i<30;$i++){
		$randItem=array_rand($char_array);
		$res.=$char_array[$randItem];
	}

	$res1="";
	$chars1="abcdefghijklmnopqrstuvwxyz1234567890!@#$%^&*():{}?<>~+_-/|ABCDEFGHIJKLMNOPQRSTUVWXYZकखगघङछजझञटठडढणड़ढ़तथधनफबभमयरलवशषसहक्ष त्रज्ञపబఫభతదశఞపబఫభతదశఞపబఫభతదశఞనా@fgvdf324324%F%^*$కు&స*మా(న)త్(వం#स2<मा:न;^ता!~@#%$%^%^*HGJKJ>>,h";
	$char_array1=str_split($chars1);
	for($i=0;$i<30;$i++){
		$randItem1=array_rand($char_array1);
		$res1.=$char_array1[$randItem1];
	}

	$res_hash=hash('sha512',$res);
	$res_hash1=hash('sha512',$res1);
	$pass=hash('sha512',$pass1);
	
	$salted=$res_hash.$pass.$res_hash1;



	$s=" select * from userla where email ='$email' OR name='$name'";
	$result=mysqli_query($con,$s);
	$num=mysqli_num_rows($result);

	if($num==1){
		//echo "Name Aldready taken";
		
		header("Location: signupa.php");
		echo '<script>alert("username or email aldready exists")</script>';

		
	}
	else{
		$reg="insert into userla(email,name,password) values ('$email','$name','$salted')";
		mysqli_query($con,$reg);
		header("Location: logina.php");

		//echo "Registration Successful";
	}


?>




