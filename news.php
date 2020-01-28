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

    

?>

<!DOCTYPE html>
<html>
<head>
   <title>Upcoming Movies </title>

   <style type="text/css">
      .text {
          color: white;
        }

        .btn {
   text-decoration: none;
   font-weight: bold;
   background-color: #1E90FF;
   color: white;
   border-style: solid;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}
.btn:hover {
  background-color: #000080;
  color: white;
}

  .img-responsive:hover {
  border: solid 2px white;
}
   </style>
</head>
<body bgcolor="#171717" style="margin-left: 50px; margin-right: 50px;">

   <h1 style="font-size: 50px; color: white;">Upcoming Movies</h1><hr style="color: white;"><br><br><br><br><br>

   
   <div style="margin-left: 120px; margin-right: 50px;">
        <?php
            $query = "SELECT * FROM upmovie ORDER BY id ASC ";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                                 
                                     <img src="<?php echo $row["upimage"]; ?>" class="img-responsive">
                                     
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                 

                    <?php
                }
            }
        ?>
   </div><br><br>

</body>
</html>