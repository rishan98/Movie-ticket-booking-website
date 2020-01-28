<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body bgcolor="#171717">
  <center>
    <table>
      <tr>
        <td style="background-color: white; border-radius: 12px;">
  
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
    
     $ticket = $_POST["ticket"];
    $month = $_POST["month"];
    $day = $_POST["day"];
    $total = $_POST["total"];
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $seat = $_POST["seat"];

    $sql = "INSERT INTO movie2 (month2,day2,ticket2,total2,name2,mobile2,seat2) values ('$month','$day','$ticket','$total','$name','$mobile','$seat');";

    if($conn->query($sql) == TRUE)
    {
        echo "<center><h2>Payment is successfull.</h2></center>";
     }

?>
    <center><h4>Ticket invoice has been sent to your phone.</h4></center>
    <center><a href="homepage.php"><input type="submit" value="Back to homepage"></a></center>


      </td>
    </tr>
  </table>
</center> 


</body>
</html>

