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

   $file1 = $_FILES["file1"]["name"];
   $file11 = $_FILES["file11"]["name"];
   $text1 = $_POST["text1"];
   $time1 = $_POST["time1"];

   $s = "UPDATE home SET image1='$file1', mname1='$text1', mtime1='$time1', slide1='$file11' WHERE id=1;";

   if($conn->query($s) == TRUE)
    {
        echo "<center><h2>Record added successfully</h2></center>";
     }

?>
   <center><a href="admin.php"><input type="submit" value="Back"></a></center>

</body>
</html>


