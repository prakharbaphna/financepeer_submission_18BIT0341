<?php

    session_start();
    if(!isset($_SESSION["username"])){
      header("location: login.php");
        # code...
      }
    if(!isset($_SESSION["description"])){
      header("location: readn.php");
        # code...
      }


?>      

    


<html lang="en">
  <head>

    <script type="text/javascript">
      window.history.forward();
    </script>



    
    <style type="text/css">
  body,html {
    /* to make an image of coversize, we need to make the body and html also 100%*/
          height: 100%;
        }
            .navbar{
                        background-color: rgb(0,0,0);
                         background-color: rgba(0,0,0,0.5); /* Black w/opacity/see-through */
          color: white;
            }
            .logout:hover{
              cursor: pointer;
              box-shadow: 0 0 10px 0 white;
              box-shadow: 0px 5px 10px 0 white;
              border-radius: 50px;
              text-align: center;    


            }

    .crossfade{
      background-image: url("sub4.png");
          
          /* Add the blur effect */
          filter: blur(0px);
          -webkit-filter: blur(0px);
          
          /* Full height */
          height: 100%; 
          
          /* Center and scale the image nicely */
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          scroll-behavior: none;
          overflow: hidden;
      }
      .navbar-nav:hover .nav-link{
  
        display: block;
      }
      .nav-link:hover{
        box-shadow: 0px 5px 10px 0 white;
          border-radius: 50px;
          text-align: center;
      }
      .noti {
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0, 0.6); /* Black w/opacity/see-through */
          color: white;
          
          position: absolute;   /* TO place the text above the image of the cover size */
          top: 15%;
          left: 15%;
          transform: translate(-50%, -50%);
          font-size: 20px;
          width: 25%;
          height: 550px;
          padding: 5px;
          text-align: center;
          font-family: Ink Free;
          font-size: 18px;
      }

      .bg-text{
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0, 0.6); /* Black w/opacity/see-through */
          color: white;
          
          position: absolute;   /* TO place the text above the image of the cover size */
          top: 20%;
          left: 24%;
          
          font-size: 25px;
          width: 50%;

          padding: 5px;
          text-align: center;
          font-family: MV Boli;

          height: 500px;
          width: 800px;
          overflow-y: auto;
      }

      @media only screen and (max-width: 500px){
        .bg-text{
              width: 100%;
              left: -0px;
              font-size: 20px;
        }
        .author{
          margin-left: -500px;
        }
        .dropwala{
          margin-left: -1300px;
          width: 100px;
          background-color: rgb(0,0,0);
          background-color: rgba(0,0,0,0);
        }
      }

      .lis:hover {
        color: lightblue;
      }
      .login{
        opacity: 0.8;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0,0.7);
        margin-left: 4px;
        border: 110px;
        position: absolute;
        border-color: black;
        top: 105px;
        left: 400px;
        color: black;
        border-radius: 4px;
        font-size: 20px;
        padding: 10px;
        color: white;
        font-family: Ink Free;
        font-weight: bold;


      }    

      .hor:hover{
        cursor: pointer;
        box-shadow: 5px 5px 10px 0 white;
      }      
    
    
        .logins{
        opacity: 0.9;
        background-color: white;
        margin-left: 4px;
        border: 110px;
        position: absolute;
        border-color: black;
        top: 105px;
        left: 1200px;
        color: black;
        border-radius: 4px;
        font-size: 15px; 
        padding: 10px;
        box-shadow: 10px 10px 10px 8px black;


      }      
         
    .sub:hover{
      box-shadow: 0 0 5px 0 black;
      cursor: pointer;
    }





      
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>READ</title>
    <meta http-equiv="refresh" content="900;url=logout.php" />
  </head>
  <body >
        
  
    <nav>
      <nav class="navbar navbar-expand-xl fixed-top navbar-dark ">        <!-- BAR COLOR SCHEME AND STARTING -->
        <a href="readn.php" target="_blank" class="navbar-brand" style="color: white;">
          <img src="Capture.png" width="40" height="40">
        College Diaries</a>
        <a href="main.php" class="navbar-brand">
          <img src="new.png" width="75" height="40" style="margin-left: 10px;">
        </a>

          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="menu">        
            <ul class="navbar-nav">

          <div>
          <ul class="navbar-nav"><li class="nav-item dropdown">

                <li class="nav-item">
                  <a href="#" class="nav-link" data-toggle="dropdown" style="color: white;margin-left: 1000px;">
                  </a>
                </li>             
            <a href="#" class="nav-link dropdown" data-toggle="dropdown" style="margin-left: 10px;color: white;text-align: left;width: 80px;padding: 10px;"><?php echo $_SESSION['username']; ?></a>

            <div class="dropwala">
              <div class="dropdown-menu" style="background-color: rgb(0,0,0); background-color: rgba(0,0,0,0.5); margin-top: 0px;margin-left: 1300px;">
                <a href="profilev.php" class="nav-link">Profile</a>
                <a href="#" class="nav-link">Settings</a>
    

                <form action="logout.php" method="post"><input type="submit" value="Logout" class="logout" name="logout" style="border-radius: 10px;margin-top: 10px;margin-left: 30px; background-color: white;color: black;width: 100px;opacity: 0.9;border: 1px;"></form>

              </div>
            </div>
          </ul>
        </div>
     
    </nav>
    <div class="crossfade"></div>    
  </div></nav></nav>
    
    
      <?php
          if(isset($_SESSION['description'])){
              $conn=mysqli_connect("localhost:3000","root","","cd");
              $s=$_SESSION['description'];
              $result=(mysqli_query($conn, $s));
              $num=mysqli_num_rows($result);
              while ($row=$result-> fetch_assoc()) {
                if($s){
                  echo "<div class='bg-text'><br>".$row['title']."<br><br>".$row['description']."<br><p class='author'style='margin-left:300px;margin-top: 30px;'>-".$row['user']."<br></div>";
                }
              }

        }
      ?>
    

    
  </table>





    





  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>




