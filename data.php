<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container box">
          
          
           <table border="2">
    <thead>
      <tr>
        <th>USER ID</th>
        <th>ID</th>
        <th>TITLE</th>
        <th>BODY</th>
      </tr>
    </thead>
    <tbody>
      <?php 

          $con=mysqli_connect('localhost','root','');
          mysqli_select_db($con,'cd');
          if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
          $table_data = '';
          $data = file_get_contents('./data.json'); //Read the JSON file in PHP
          $array = json_decode($data, true); 
          // print_r($array);
      foreach($array as $key => $item):

          $uid=$item['userId'];
          $id=$item['id'];
          $title=$item['title'];
          $body=$item['body'];
          $reg="insert into tbl_employee(userId,id,title,body) values ($uid,$id,'$title','$body')";
			mysqli_query($con,$reg);
        ?>
        <tr>
          <td><?PHP echo $item['userId']; ?></td>
          <td><?PHP echo $item['id']; ?></td>
          <td><?PHP echo $item['title']; ?></td>
          <td><?PHP echo $item['body']; ?></td>
          </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

     <br />
         </div>
</body>
</html>>