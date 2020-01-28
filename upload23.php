<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body bgcolor="#696969">
    <?php
       $ser =  "localhost";
   $user = "root";
   $pass = "";
   $db = "cinema";

   $conn = mysqli_connect($ser,$user,$pass,$db);

    //if($conn-> connect_error) {
   //   die("connection failed".$conn-> connect_error);
   // }
   // else
   // {
   //   echo "success";
   // }

   $file3 = $_FILES["file3"]["name"];
   $file33 = $_FILES["file33"]["name"];
   $text3 = $_POST["text3"];
   $time3 = $_POST["time3"];

   $s = "UPDATE home SET image3='$file3', mname3='$text3', mtime3='$time3', slide3='$file33' WHERE id=1;";

   if($conn->query($s) == TRUE)
    {
        echo "<center><h2>Record added successfully</h2></center><br><br>";
     }

?>

  <center><a href="admin.php"><input type="submit" value="Back"></a></center>
</body>
</html>

