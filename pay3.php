<?php
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

    $ticket = $_POST["ticket"];
    $month = $_POST["month"];
    $day = $_POST["day"];
    $total = $_POST["total"];
    
    if(isset($_POST["submit"]))
          {
           $for_query = '';
           if(!empty($_POST["select"]))
           {
            foreach($_POST["select"] as $language)
            {
             $for_query .= $language . ', ';
            }
            $for_query = substr($for_query, 0, -2);
          }
        }

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

  <style type="text/css">
    .n
        {
            background-color: #1E90FF;
            color: white;
            width: 80px;
            height: 30px;
            border-radius: 12px;
            font-weight: bold;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
        }
    .n:hover {
      background-color: #000080;
      color: white;
    }

    .name {
      width: 300px;
      height: 30px;
      border-radius: 12px;
    }

    .mobile {
      width: 300px;
      height: 30px;
      border-radius: 12px;
    }

  </style>
</head>
<body bgcolor="#171717" style="color: white; padding-left: 60px; padding-top: 20px;">
    <h1 style="background-color: #2F4F4F; border-radius: 12px;">Billing Information</h1><br><br><br>

    <table cellpadding="10" style="padding-left: 200px;">
      <tr>
        <td width="500" style="background-color: #696969; border-radius: 12px;">
          <form method="POST" action="e3.php">
          <h3>Customer Name</h3>
          <input type="text" name="name" class="name" required="required"><br>

          <h3>Mobile No</h3>
          <input type="text" name="mobile" class="mobile" required="required"><br>

          <h3>Pay by</h3>
          Visa/Master:<input type="radio" name="visa" required="required"><br><br><br>
          <input type="hidden" name="month" value="<?php echo $_POST['month']; ?>">
          <input type="hidden" name="day" value="<?php echo $_POST['day']; ?>">
          <input type="hidden" name="ticket" value="<?php echo $_POST['ticket']; ?>">
          <input type="hidden" name="total" value="<?php echo "$total"; ?>">
          <input type="hidden" name="seat" value="<?php echo "$for_query" ?>">

          <input type="submit" name="OK" value="OK" class="n">
          </form>
        </td>
        <td style="background-color: white; color: black; border-radius: 12px;">
          <h2>Tickets Summary</h2><hr><br>
          <?php
            $query = "SELECT * FROM home ORDER BY id ASC ";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>

                            <div class="product">
                                            <h2 class="text">Movie Name: <?php echo $row["mname3"]; ?></h2>
                                            <h3>Show time: <?php echo $row["mtime3"]; ?></h3> 
                      
                            <div>

                    <?php
                }
            }
          ?>

        <br><br>
          
          <h3>Seat No. : <?php echo "$for_query";?></h3>
          <h3>Date: <?php echo "$month $day";?>,2020</h3>
          <h3>Tickets: <?php echo "$ticket";?></h3><br><hr>
          <h3>Amount Payable: Rs.<?php echo "$total";?></h3>

        </td>
      </tr>
    </table>

</body>
</html>