<?php
// Initialize the session
session_start();
  
   $ser =  "localhost";
   $user = "root";
   $pass = "";
   $db = "cinema";

   $conn = mysqli_connect($ser,$user,$pass,$db);

    //if($conn-> connect_error) {
   // 	die("connection failed".$conn-> connect_error);
   // }
   // else
   // {
   // 	echo "success";
   // }

   
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body bgcolor="#696969">
   
   <?php
      
     if (isset($_POST['upload'])) 
      {
        $up = $_FILES["up"]["name"];

      $sql = "INSERT INTO upmovie (upimage) VALUES ('$up');";
      if($conn->query($sql) == TRUE)
    {
        echo "<center><h2>Image uploaded successfully</h2></center>";
     }
      }
  ?>
      

   <center><a href="admin.php"><input type="submit" value="Back"></a></center>
</body>
</html>

	