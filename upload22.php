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

   $file2 = $_FILES["file2"]["name"];
   $file22 = $_FILES["file22"]["name"];
   $text2 = $_POST["text2"];
   $time2 = $_POST["time2"];

   $s = "UPDATE home SET image2='$file2', mname2='$text2', mtime2='$time2', slide2='$file22' WHERE id=1;";

   if($conn->query($s) == TRUE)
    {
        echo "<center><h2>Record added successfully</h2></center>";
     }

?>
    <center><a href="admin.php"><input type="submit" value="Back"></a></center>

</body>
</html>

