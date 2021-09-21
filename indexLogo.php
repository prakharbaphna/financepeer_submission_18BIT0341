<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Floating Icons on Left Border</title> -->
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <nav class="social">
      <ul>
        <li><a href="#"><i class="fab fa-facebook-f"></i><span>Facebook</span></a></li>
        <li><a href="#"><i class="fab fa-twitter"></i><span>Twitter</span></a></li>
        <li><a href="#"><i class="fab fa-instagram"></i><span>Instagram</span></a></li>
        <li><a href="#"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a></li>
        <li><a href="#"><i class="fab fa-github"></i><span>Github</span></a></li>
        <li><a href="#"><i class="fab fa-youtube"></i><span>Youtube</span></a></li>
      </ul>
    </nav>

  <div class="crossfade"></div>  
     <div class="container-fluid">
        <nav>
          <nav class="navbar navbar-expand-xl fixed-top navbar-dark">
            <a href="index.php"class="navbar-brand" style="color: white">
              <img src="Capture.png" width="40" height="40"> College Diaries</a>


            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">



              <ul class="navbar-nav">
                <li class="nav-item">
                  <a href="#" class="nav-link" data-toggle="dropdown" style="color: white;margin-left: 1050px;">
                  </a>
                </li> 

                <li class="nav-item" style="color: white;margin-left: 50px;">
                  <a href="signup.php" class="nav-link" style="color: white;font-size: 25px;">Signup
                  </a>
                </li>

     
                <li class="nav-item">
                  <a href="login.php" class="nav-link" style="color: white;font-size: 25px;margin-left: 50px;">Signin</a>
                </li>
              </ul>
            </div>
          </nav>
        </nav>


      </div>



  </body>
</html>

--------css--------

<style type="text/css">
  @import url('https://fonts.googleapis.com/css?family=Montserrat:600&display=swap');
  *{
    margin: 0;
    padding: 0;
    list-style: none;
    text-decoration: none;
    box-sizing: border-box;
  }
  body{
    font-family: 'Montserrat', sans-serif;
    background: url(bg.jpeg);
    background-position: center;
    background-size: cover;
    height: 100vh;
  }
  .social{
    position: fixed;
    width: 70px;
    margin-top: 150px;
    transition: all 0.3s linear;
    box-shadow: 2px 2px 8px 0px rgba(0,0,0,.4);
  }
  .social li{
    height: 60px;
    position:relative;
  }
  .social li a{
    color: white;
    display: block;
    height: 100%;
    width: 100%;
    line-height: 60px;
    padding-left:25%;
    border-bottom: 1px solid rgba(0,0,0,.4);
    transition: all .3s linear;
  }
  .social li:nth-child(1) a{
    background: #4267B2;
  }
  .social li:nth-child(2) a{
    background: #1DA1F2;
  }
  .social li:nth-child(3) a{
    background: #E1306C;
  }
  .social li:nth-child(4) a{
    background: #2867B2;
  }
  .social li:nth-child(5) a{
    background: #333;
  }
  .social li:nth-child(6) a{
    background: #ff0000;
  }
  .social li a i{
    position:absolute;
    top: 17px;
    left: 20px;
    font-size: 27px;
  }
  ul li a span{
    display: none;
    font-weight: bold;
    letter-spacing: 1px;
    text-transform: uppercase;
  }
  a:hover {
    z-index:1;
    width: 200px;
    border-bottom: 1px solid rgba(0,0,0,.5);
    box-shadow: 0 0 1px 1px rgba(0,0,0,.3);
  }
  ul li:hover a span{
    padding-left: 30%;
    display: block;
  }

</style>


