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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>Cinemo Lite</title>
    
   <script type="text/javascript">
   	  var i = 0; 			// Start Point
var images = [];	// Images Array
var time = 2500;	// Time Between Switch

  <?php
            $query = "SELECT * FROM home ORDER BY id ASC ";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>	 
    // Image List
    images[0] = "hall.jpg";
    images[1] = "<?php echo $row["slide1"]; ?>";
    images[2] = "<?php echo $row["slide2"]; ?>";
    images[3] = "<?php echo $row["slide3"]; ?>";

   <?php
                }
            }
        ?>


// Change Image
function changeImg(){
	document.slide.src = images[i];

	// Check If Index Is Under Max
	if(i < images.length - 1){
	  // Add 1 to Index
	  i++; 
	} else { 
		// Reset Back To O
		i = 0;
	}

	// Run function every x seconds
	setTimeout("changeImg()", time);
}

// Run function when page loads
window.onload=changeImg;

     
    
   </script>

<style type="text/css">
	 @import url('https://fonts.googleapis.com/css?family=Titillium+Web');
        *{
            font-family: 'Titillium Web', sans-serif;
        }
        .product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #000000;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: white;
            background-color: #000000;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #000000;
            padding: 2%;
        }
        table th{
            background-color: #000000;
        }
        .text {
          color: white;
        }


body {
  background-color:  #171717;
  
  

  
}


div.topnav {
  background-color: #191970;
  color: white;
  height: 70px;
  
  width: 1500px;
  
}

.active {
  color: white;
  text-decoration: none;
  padding-left: 50px;
  font-size: 20px;
  padding-right: 50px;

}
.topic {
   padding-left: 80px;
   font-size: 40px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.details {
  color: white;
  background-color: #191970; 
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

.p {
  position: relative;
  font-family: Arial;
  font-size: 50px;
}
.c {
  position: absolute;
  bottom: 100px;
  right: 1100px;
  color: white;

}
.i
{
  opacity: 0.6;
  filter: alpha(opacity=50);
  width: 1500px;
  height: 600px;
}

.img-responsive:hover {
  border: solid 2px white;
}

div {
	max-width: 1500px;
	min-width: 400px;
	overflow: hidden;
}

.bg-image {
  /* The image used */
  
}


</style>
</head>
<body>
    
    <div class="bg-image"></div>

	<div class="topnav"> 
  <b class="topic"><?php echo "Cinemo Lite"?></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <a class="active" href="homepage.php"><?php echo "Home"?></a>
  <a class="active" href="news.php"><?php echo "News"?></a>
  <a class="active" href="contact.php"><?php echo "Contact"?></a>
  <a class="active" href="about.php"><?php echo "About"?></a>&nbsp&nbsp&nbsp&nbsp&nbsp
  <a class="active" href="adminlogin.php" style="color: pink;"><?php echo "My account"?></a>
  
</div>
<div class="p">
  <img class="i" name="slide">
  <div class="c"><b style="font-size: 60px; padding-left: 50px;">Cinemo Lite</b><br><b style="font-size: 40px; padding-left: 50px;">Homagama</b></div>
</div><br>


<b style="font-size: 60px; color: white;">Movie Showtimes at Cinemo Lite</b><hr>
<br><br>
<div>
  	
     <?php
            $query = "SELECT * FROM home ORDER BY id ASC ";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="col-md-3">

                        <form method="post" action="connection.php?action=add&id=<?php echo $row["id"]; ?>">

                            <div class="product">
                            	<table cellspacing="100">
                            		<tr>
                            			<td>
                            				<img src="<?php echo $row["image1"]; ?>" class="img-responsive">
                                             <h3 class="text"><?php echo $row["mname1"]; ?></h3>
                                             <h3 class="text"><?php echo $row["mtime1"]; ?></h3>
                                             <input type="hidden" name="hidden_name" value="<?php echo $row["mname1"]; ?>">
                                             
                                             <a href="colomn1.php" class="btn">Buy Tickets</a>
                            			</td>
                            			<td>
                            				<img src="<?php echo $row["image2"]; ?>" class="img-responsive">
                                             <h3 class="text"><?php echo $row["mname2"]; ?></h3>
                                             <h3 class="text"><?php echo $row["mtime2"]; ?></h3>
                                             <input type="hidden" name="hidden_name" value="<?php echo $row["mname2"]; ?>">
                                             
                                             <a href="colomn2.php" class="btn">Buy Tickets</a>
                            			</td>
                            			<td>
                            				<img src="<?php echo $row["image3"]; ?>" class="img-responsive">
                                             <h3 class="text"><?php echo $row["mname3"]; ?></h3>
                                             <h3 class="text"><?php echo $row["mtime3"]; ?></h3>
                                             <input type="hidden" name="hidden_name" value="<?php echo $row["mname3"]; ?>">
                                             
                                             <a href="colomn3.php" class="btn">Buy Tickets</a>
                            			</td>
                            		</tr>
                            	</table>
                            				 
                            	
                               
                            </div>
                        </form>
                    </div>
                    <?php
                }
            }
        ?>


</div><br><br>
<div class="details">
	<h2>Theater Details</h2>
	<h4 style="color: white;"><center>Fully facilitated cinema with Digital 4k & 3D systems.<br>Book your tickets through</center></h4>
	<br><br>
	<h2>Contact Details</h2>
	<h4 style="color: white;"><center>High-level,Homagama.<br>Phone: 0114561233<br>Email :cinemolite@movie.lk</center></h4><br>
</div>
<br><br>

</body>
</html>