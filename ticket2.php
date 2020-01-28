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

   $month = $_POST["month"];
   $day = $_POST["day"];
   

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		
		.product {
			background-color: #2F4F4F;
			color: white;
			padding-left: 80px;
            border-radius: 12px;
		}

		.t {
			background-color: #696969;
			color: white;
            border-radius: 12px;
            font-size: 20px;
		}
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

        select {
            width: 80px;
            height: 30px;
            border-radius: 12px;
            font-weight: bold;
        }
        
	</style>
</head>
<body bgcolor="#171717">
	<center><h1 style="color: white;">Cinemo Lite ,Homagama.</h1></center>
    <div>
    	<?php
            $query = "SELECT * FROM home ORDER BY id ASC ";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>

                            <div class="product">
                        
                                            <h1><?php echo $row["mname2"]; ?></h1> 
                                            <h3>Show time: <?php echo $row["mtime2"]; ?></h3>
                            
    	                    <b style="font-size: 25px;"><?php echo"$month" ?></b>
                            <b style="font-size: 25px;"><?php echo"$day" ?></b>
                            <b style="font-size: 25px;">, 2020</b>
    	                    </div>
                    <?php
                }
            }
        ?>


    </div><br>


    <div>
    	<?php
            $query = "SELECT * FROM ticket ORDER BY id ASC ";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>

                            <div class="t">
                            	<center><h3>Ticket Price : Rs.<?php echo $row["mticket"]; ?></h3></center>
                            </div>
                        
                    <?php
                }
            }
        ?>

    </div><br><br><br><br>
    
    <center><h2 style="color: white;">HOW MANY TICKETS ?</h2></center><br><br>

    <center >
    	<form method="POST" action="seat2.php">
             <b style="color: white; font-size: 20px;">No.of tickets:</b>&nbsp&nbsp 
             <select name="ticket">
             	 <option>1</option>
    		     <option>2</option>
    		     <option>3</option>
    		     <option>4</option>
    		     <option>5</option>
    		     <option>6</option>
    		     <option>7</option>
    		     <option>8</option>
    		     <option>9</option>
    		     <option>10</option>
    		     <option>11</option>
    		     <option>12</option>
    		     <option>13</option>
    		     <option>14</option>
    		     <option>15</option>
             </select><br><br><br>
             <input type="hidden" name="month" value="<?php echo $_POST['month']; ?>">
             <input type="hidden" name="day" value="<?php echo $_POST['day']; ?>">
	
             <input type="submit" name="continue" value="continue" class="n">	
    	</form>

    </center>	

    
   
	

    
</body>
</html>