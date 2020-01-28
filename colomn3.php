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
	<title></title>

	<style type="text/css">
		
		.text {
			color: white;
			padding-left: 40px;
			font-size: 50px;
			background-color: #264d73;
            border-radius: 12px;
		}

        .n {
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
        .im {
            border-color: white;
            opacity: 0.6;
            filter: alpha(opacity=50);
            width: 1500px;
            height: 600px;
        }

        select {
            width: 100px;
            height: 30px;
            border-radius: 12px;
            font-weight: bold;
        }
        
	</style>
</head>
<body bgcolor="#171717">
    <div>
    	<?php
            $query = "SELECT * FROM home ORDER BY id ASC ";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    

                        

                            <div class="product">
                            	
                            				<center><img class="im" src="<?php echo $row["slide3"]; ?>"></center><br>
                                            <h1 class="text"><?php echo $row["mname3"]; ?></h1> 
                                            

                            <div>
    	
    	                   
                        
                    
                    <?php
                }
            }
        ?>


    </div><br><br>

    <div style="color: white;">
      <form method="POST" action="ticket3.php">
    	<center><h2 style="font-family: arial;">Enter Date</h2></center><br><br>
    	<center><b style="font-size: 20px; font-family: arial;">Month: </b> <select name="month">

    		     <option>January</option>
    		     <option>February</option>
    		     <option>March</option>
    		     <option>April</option>
    		     <option>May</option>
    		     <option>June</option>
    		     <option>July</option>
    		     <option>August</option>
    		     <option>September</option>
    		     <option>October</option>
    		     <option>November</option>
    		     <option>December</option>
    		
    	       </select>&nbsp&nbsp&nbsp&nbsp

    	<b style="font-size: 20px; font-family: arial;">Day: </b> <select name="day">
    		     
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
    		     <option>16</option>
    		     <option>17</option>
    		     <option>18</option>
    		     <option>19</option>
    		     <option>20</option>
    		     <option>21</option>
    		     <option>22</option>
    		     <option>23</option>
    		     <option>24</option>
    		     <option>25</option>
    		     <option>26</option>
    		     <option>27</option>
    		     <option>28</option>
    		     <option>29</option>
    		     <option>30</option>
    	     </select><br><br><br>

    	<input type="submit" name="next" value="Next" class="n"></center>
      </form>
    </div>
    <br><br><br><br><br><br><br>


</body>
</html>