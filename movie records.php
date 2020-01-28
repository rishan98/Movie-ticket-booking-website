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


   $m1 = $_POST["m1"];
   $d1 = $_POST["d1"];

   $sql = "DELETE FROM movie1 WHERE month1='$m1' && day1='$d1' ";
    if($conn->query($sql) == TRUE)
    {
       // echo "<center><h2>Record deleted successfully</h2></center>";
     } 

    

  // $m2 = $_POST["m2"];
  // $d2 = $_POST["d2"];

   $sql = "DELETE FROM movie2 WHERE month2='$m1' && day2='$d1' ";
    if($conn->query($sql) == TRUE)
    {
       // echo "<center><h2>Record deleted successfully</h2></center>";
     } 


   
  // $m3 = $_POST["m3"];
  // $d3 = $_POST["d3"];

   $sql = "DELETE FROM movie3 WHERE month3='$m1' && day3='$d1' ";
    if($conn->query($sql) == TRUE)
    {
       // echo "<center><h2>Record deleted successfully</h2></center>";
     } 
    




?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body bgcolor="#0000">

  <div style="color: white; background-color: #696969; margin-left: 290px; margin-right: 290px;">
    <form method="POST" action="movie records.php">
    <h3>Delete Records, when :</h3>
    <b>Month :</b><input type="text" name="m1">&nbsp&nbsp&nbsp&nbsp&nbsp
    <b>Day :</b><input type="text" name="d1"><br><br>
    <input type="submit" value="Delete" style="font-weight: bold;">
    </form>
  </div><br><br><br> 

  <center><h2 style="color: white;">Movie 1</h2></center><br>
    <center><table border="1" bgcolor="white">
       <tr>
          <td width="100"><h3>ID</h3></td>
          <td width="100"><h3>Month</h3></td>
          <td width="100"><h3>Day</h3></td>
          <td width="100"><h3>Tickets</h3></td>
          <td width="100"><h3>Total price</h3></td>
          <td width="100"><h3>seats</h3></td>
          <td width="100"><h3>Name</h3></td>
          <td width="100"><h3>Mobile</h3></td>
      </tr>

      <?php
            $query = "SELECT * FROM movie1 ORDER BY id ASC ";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                                <tr>
                                  <td><b><?php echo $row["id"]; ?></b></td>
                                  <td><b><?php echo $row["month1"]; ?></b></td>
                                  <td><b><?php echo $row["day1"]; ?></b></td>
                                  <td><b><?php echo $row["ticket1"]; ?></b></td>
                                  <td><b><?php echo $row["total1"]; ?></b></td>
                                  <td><b><?php echo $row["seat1"]; ?></b></td>
                                  <td><b><?php echo $row["name1"]; ?></b></td>
                                  <td><b><?php echo $row["mobile1"]; ?></b></td>
                                </tr>
                        
                    <?php
                }
            }
        ?>

    </table></center>
    <br><br><br>


    <center><h2 style="color: white;">Movie 2</h2></center><br>
    <center><table border="1" bgcolor="white">
       <tr>
          <td width="100"><h3>ID</h3></td>
          <td width="100"><h3>Month</h3></td>
          <td width="100"><h3>Day</h3></td>
          <td width="100"><h3>Tickets</h3></td>
          <td width="100"><h3>Total price</h3></td>
          <td width="100"><h3>seats</h3></td>
          <td width="100"><h3>Name</h3></td>
          <td width="100"><h3>Mobile</h3></td>
      </tr>

      <?php
            $query = "SELECT * FROM movie2 ORDER BY id ASC ";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                                <tr>
                                  <td><b><?php echo $row["id"]; ?></b></td>
                                  <td><b><?php echo $row["month2"]; ?></b></td>
                                  <td><b><?php echo $row["day2"]; ?></b></td>
                                  <td><b><?php echo $row["ticket2"]; ?></b></td>
                                  <td><b><?php echo $row["total2"]; ?></b></td>
                                  <td><b><?php echo $row["seat2"]; ?></b></td>
                                  <td><b><?php echo $row["name2"]; ?></b></td>
                                  <td><b><?php echo $row["mobile2"]; ?></b></td>
                                </tr>
                        
                    <?php
                }
            }
        ?>

    </table></center>
    
    
    <form method="POST" action="movie records.php">
    
    <input type="hidden" name="m1">&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="hidden" name="d1"><br><br>
    
    </form>
  
    <br><br><br>


    <center><h2 style="color: white;">Movie 3</h2></center><br>
    <center><table border="1" bgcolor="white">
       <tr>
          <td width="100"><h3>ID</h3></td>
          <td width="100"><h3>Month</h3></td>
          <td width="100"><h3>Day</h3></td>
          <td width="100"><h3>Tickets</h3></td>
          <td width="100"><h3>Total price</h3></td>
          <td width="100"><h3>seats</h3></td>
          <td width="100"><h3>Name</h3></td>
          <td width="100"><h3>Mobile</h3></td>
      </tr>

      <?php
            $query = "SELECT * FROM movie3 ORDER BY id ASC ";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                                <tr>
                                  <td><b><?php echo $row["id"]; ?></b></td>
                                  <td><b><?php echo $row["month3"]; ?></b></td>
                                  <td><b><?php echo $row["day3"]; ?></b></td>
                                  <td><b><?php echo $row["ticket3"]; ?></b></td>
                                  <td><b><?php echo $row["total3"]; ?></b></td>
                                  <td><b><?php echo $row["seat3"]; ?></b></td>
                                  <td><b><?php echo $row["name3"]; ?></b></td>
                                  <td><b><?php echo $row["mobile3"]; ?></b></td>
                                </tr>
                        
                    <?php
                }
            }
        ?>

    </table></center>

    
    <form method="POST" action="movie records.php">
    
    <input type="hidden" name="m1">&nbsp&nbsp&nbsp&nbsp&nbsp
   <input type="hidden" name="d1"><br><br>
    </form>
  
    <br><br>
     

</body>
</html>