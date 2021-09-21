<?php
      
      session_start();
      //$filename=$_FILES['image']['name'];
      //$tmpname=$_FILES['image']['tmp_name'];
      $target="images/".($_FILES['image']['name']);    

      $db=mysqli_connect("localhost","root","","cd");

      $image=$_FILES['image']['name'];
      $user=$_POST['user'];
      $title=$_POST['title'];
      $desc=$_POST['description'];
      $college=$_POST['college'];
      $genre=$_POST['genre'];

      //move_uploaded_file($tmpname, 'images/'.$filename);


      $sql="insert into writ(user,title,description,college,genre) values('$user','$title','$desc','$college','$genre')";
      $query=mysqli_query($db,$sql);

      
      if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
            $_SESSION['user']=$title;
            $_SESSION['id']=$description;
      	header("location: main.php");
      
      }
      else{
            $_SESSION['user']=$title;
            $_SESSION['id']=$description;            
      	header("location: write.php");
            
      }
?>