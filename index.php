<html lang="en">
  <head>
    <title>Home</title>
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
            
            background-image: url("sub4.png");
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
      @keyframes example {
        0%   {background-image: url("sub4.png");}
        20%  {background-image: url(sub2.png);}
        40%  {background-image: url(sub3.png);}
        60%  {background-image: url(sub5.png);}
        80%  {background-image: url(sub1.png);}
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
          border: 3px solid;
          position: absolute;
          top: 55%;
          left: 50%;
          transform: translate(-50%, -50%);
          font-size: 100px;
          width: 70%;
          padding: 5px;
          text-align: center;
          box-shadow: 10px 10px 10px 0px black;
          font-family: Ink Free;
          font-weight: bold;

      }

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
  	 <div class="crossfade"></div>  
     <div class="container-fluid">
        <nav>
          <nav class="navbar navbar-expand-xl fixed-top navbar-dark">
            <a href="index.php"class="navbar-brand" style="color: white">
              <img src="Capture.png" width="40" height="40"> FINANCEPEER</a>


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



    
     <div class="big-text" >
        <h1 style="font-size:150px;text-decoration: none;padding: 1px;">#FINANCEPEER</h1>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>


    
    