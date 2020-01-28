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
    <meta charset="UTF-8">
    <title>Admin Panel css html</title>

    <script type="text/javascript">
        $(document).ready(function(){
  $("a.mobile").click(function(){
    $(".sidebar").slideToggle('fast');
  });
  window.resize = function(event){
    if($(window).width() > 320){
      $(".sidebar").show();
    }
  };
});
    </script>

   <style type="text/css">
       
       * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html,body {
  font-family: 'Open Sans';
  height: 100%;
}

a {
  text-decoration: none;
}

div#header {
  width: 100%;
  height: 8%;
  background-color: #2c3e50; 
  margin: 0 auto;
}

.logo{
  float: left;
  margin-top: .2ex; 
  margin-left: 10px;
}

.logo a {
  font-size: 1.6em;
  color: #fff;
}

.logo a span {
  font-weight: 300;
}

div#container {
  height: 92%;
  width: 100%;
  margin: 0 auto;
}


.sidebar {
  width: 250px;
  height: 80px;
  background:#171717;
  float: left; 
}

ul#nav{

}

ul#nav li {
    list-style: none;
  height:10px;
    /*background-image: url("../images/success.png");*/
    
}
ul#nav li span{
  position:relative;
}
ul#nav li span img {
    float: left;
  display: block;
  margin-left: 1px;
  margin-top: 2px;
}
ul#nav li a {
    color: #ccc;
    display: block;
    padding: 10px;
    font-size: 0.8em;
    width: 85%;
    float: right;
    border-bottom: 1px solid #444;
    -webkit-transition: all 0.2s ease;  
    -moz-transition: all 0.2s ease;
    -ms-transition: all 0.2s ease;
    -o-transition: all 0.2s ease;
    transition: all 0.2s ease;
}

ul#nav li a:hover {
  background: #030303;
  color: #fff;
}

ul#nav li a.selected{
  background: #030303;
  color:#fff;
}


.content {
  width: auto;
  height: 100%;
  background: #95a5a6;
  margin-left: 250px;
  padding: 15px;
}

.content p {
  color: #424242;
  fonnt-size: 0.8em;
}

div#box {
  margin-top: 15px;
}

div#box .box-top {
  color: #fff;
  text-shadow: 0 1px #000;
  background: #2980b9;
  padding: 5px;
  padding-left: 15px;
  font-weight: 300;
} 

div#box .box-panel {
  padding: 15px;
  background: #fff;
  color: #333;
}



@media only screen and (max-width: 480px) {

  a.mobile {
    display: block;
    color: #fff;
    background: #000;
    text-align: center;
    padding: 7px; 
    cursor: pointer;
  }

  a.mobile:active{
    background: #474747;
  }


  .sidebar {
    width: 100%;
    display: none;
    height: auto;
  }

  .content {
    margin-left: 0;
  }


}



@media only screen and (min-width: 480px) {
  .sidebar {
    height: 92%;
    left: 0;
    display: block;
    position: absolute;
  }
  a.mobile {
    display: none;
  }
}
   </style>




</head>

<body>

    <div id="header">
        <div class="logo">
            <h1>CINEMO LITE</h1>
        </div>

    </div>


    <a class="mobile">MENU</a>


    <div id="container">

        <div class="sidebar">
            <ul id="nav">
                <li>
                    <span>
          
        </span>
                    <a class="selected" href="upload11.php">Update Movies</a>
                </li>
                <li>
                    <span>
          
        </span><a href="ticket update.php">Tickets</a>
                </li>
                <li>
                    <span>
          
        </span><a href="movie records.php">Movie Details</a>
                </li>
                <li>
                    <span>
          
        </span><a href="homepage.php">Back to Home</a>
                </li>
            </ul>

        </div>

        <div class="content">
            <h1>ADMIN PANEL &nbsp&nbsp&nbsp&nbsp<img src="admin.jpg" width="32" height="32" ></h1>
            <p>Cinemo Lite</p><br>

            <div id="box">
                <div class="box-top">Now Showing</div>
                <div class="box-panel">
                	
                	<?php
            $query = "SELECT * FROM home ORDER BY id ASC ";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                                 
                                     <img src="<?php echo $row["image1"]; ?>" width="100" height="150">
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                     <img src="<?php echo $row["image2"]; ?>" width="100" height="150">
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                     <img src="<?php echo $row["image3"]; ?>" width="100" height="150">
                                 

                    <?php
                }
            }
        ?>
                </div>
            </div>

            <div id="box">
                <div class="box-top">Upcoming Movies</div>
                <div class="box-panel">
                	
                	<?php
            $query = "SELECT * FROM upmovie ORDER BY id ASC ";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                                 
                                     <img src="<?php echo $row["upimage"]; ?>" width="100" height="150">
                                     
                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                 

                    <?php
                }
            }
        ?>
                </div>
            </div>


            <div id="box">
                <div class="box-top">Ticket Details</div>
                <div class="box-panel">
                	
                	<?php
            $query = "SELECT * FROM ticket ORDER BY id ASC ";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>

                            <div class="t">
                            	<h3>Ticket Price : Rs.<?php echo $row["mticket"]; ?></h3>
                            </div>
                        
                    <?php
                }
            }
        ?>
                </div>
            </div>


        </div>


    </div>


</body>
</html>