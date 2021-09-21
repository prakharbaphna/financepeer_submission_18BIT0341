<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="jquery.passwordstrength.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Signup</title>
  

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
  body,html {
          height: 100%;
          overflow-y: hidden;
        }

        .navbar{
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0, 0.8);
          color: white;
            }
    
      .bg-image {
          background-image: url("sub4.png");
          filter: blur(0px);
          position: relative;
          height: 100%; 
          background-repeat: no-repeat;
          background-size: cover;
      }
      .login{
        opacity: 0.8;
        background-color: white;
        border: 110px;
        position: absolute;
        border-color: black;
        top: -510px;
        left: -200px;
        color: black;
        border-radius: 4px;
        font-size: 25px;
        padding: 30px;
        box-shadow: 10px 10px 10px 5px black;
        width: 700px;
        height: 250px;

      }
      .image{
        position: absolute;
        top: 2%;
        left: 1%;
      }

      /* @media is used to change something like background color when the screen or the window size is less than given maximum width*/
      @media only screen and (max-width: 678px){
        .bg-image{
          background-size: 350%;
        }
        .login{
          margin-top: -50px;
          width: 678px;
          margin-left: 200px;
          
        }
      }


            .input-box{
              margin: 30px auto;
              width: 80%;
              position: relative;

            }
            .input-box{
              width: 100%;
              height: 40px;
              border: none;
              
              padding-left: 50px;
            }
            span{
              position: absolute;
              left: 0;
              top: 0;
              height: 40px;
              width: 40px;
              
            }
            span .fa{
              padding: 10px;
              color: black;

            }


    </style>

</head>
<body>
  <div class="bg-image"></div>
  <nav class="navbar navbar-expand-sm fixed-top navbar-dark ">
    <a href="signup.php" target="_blank" class="navbar-brand" style="color: white;font-family: Ink Free">
      <img src="Capture.png" width="40" height="40"> COLLEGE DIARIES</a>
    <a href="index.php" class="navbar-brand">
      <img src="new.png" width="95" height="40" style="margin-left: 100px;">
    </a>

  </nav>
  <center>
  <section class="container-fluid">
    <section class="row justify-content-center">
      <section class="col-12 col-sm-6 col-md-3">

        <center>
        <div class="login">
        	<h2>Forgot Password</h2>
          <form name="login" id="captcha_form" action="forgot.php" onsubmit="return validate()" method="post">

            <div class="input-box">
              <span><i class="fa fa-user icon fa-lg"></i></span>
              <input type="email" name="email" placeholder="email" style="border-radius: 6px; border: 1px;box-shadow: 0 0 20px 0 black;font-size: 15px;width: 550px;">
              <span id="email_error" class="text-danger"></span>
            </div>
              <input type="submit" class="sub" id="register" name="submit" value="Submit" style="opacity: 1;font-size: 20px;border-radius: 50px;border: 1px; cursor: pointer;background-color: white;">
          </div>
          </center>
        </form>
      </section>
    </section>
  </section>
  </center>


  <script type="text/javascript">
      
          function validate(){
          var umail=document.login.user.value;
          var upass=document.login.password.value;
          var cpass=document.login.cpassword.value;
          var len=upass.length;


          if(upass!=cpass){
            alert("The passwords donot match");
            return false;
          }
          if(upass.length<8){
            alert("The password cannot be less than 8 elements");
            return false;
         }
         else{
          true;
         }
       }
    </script>


 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        
        


</body>
</html>
