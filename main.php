<?php

    session_start();
    if(!isset($_SESSION["username"])){
      header("location: login.php");
        # code...
      }

    
?>

<html lang="en">
  <head>
    <script type="text/javascript">
      window.history.forward();
    </script>
    <title>Welcome</title>
    <!-- Required meta tags -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style type="text/css">
            .navbar{
                        background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0, 0.5); /* Black w/opacity/see-through */
          color: white;
          font-family: Ink Free;
            }

              .crossfade{
            
            /* The image used */
            
            background-image: url("sub2.png");
            /* Add the blur effect */
            filter: blur(0px);
            -webkit-filter: blur(1px);
            
            /* Full height */
            height: 100%; 
            
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            scroll-behavior: none;
            overflow: hidden;
            animation-name: example;
            animation-duration: 8s;
            animation-iteration-count: infinite;
      }

      .nav-link:hover{
        box-shadow: 3px 3px 10px 0 yellow;
        border-radius: 30px;
        width: 100px;
      }

      .big-text {
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
          color: white;
          
          position: absolute;
          top: 55%;
          left: 50%;
          transform: translate(-50%, -50%);
          font-size: 9000px;
          width: 70%;
          padding: 5px;
          text-align: center;
          font-family: Ink Free;
          font-weight: bold;


      .write{
         
         position: absolute;
         top: 90%;
         left: 42%;
         text-align: center;
         opacity: 0.8;
    
      }
      .read{
         position: absolute;
         top: 90%;
         left: 52%;
         text-align: center;
         opacity: 0.8;
    
      }
  </style>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Home</title>
  </head>
  <body>
    <center>
    <div style="margin-top: 300px; border:2px solid black; margin-right: 300px; margin-left: 200px; ">
      <br>
     <form id="uploadForm" action="" method="post"  enctype= "multipart/form-data">
<input type="file" name="fileToUpload" >
<input type="submit" name="submit" value="Submit"><br />
</form>
<?php
if(isset($_POST["submit"]))
{
    $target_dir = "/";
    $file = $_FILES['fileToUpload']['name'];
    $target_file = $target_dir . $file;
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    echo"<h1>FILE SAVED SUCESSFULLY....<br> DATA SAVED.....!! </h1>";
    echo "<a href='data.php'><button>GET TABLE</button></a>";

}
?>
</div>




      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>


    
    