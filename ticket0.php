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

  $price = $_POST["price"];

   $s = "UPDATE ticket SET mticket='$price' WHERE id=1;";

   if($conn->query($s) == TRUE)
    {
        echo "<center><h2>Record added successfully</h2></center>";
     }

?>

   <center><a href="admin.php"><input type="submit" value="Back"></a></center>

</body>
</html>
