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

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>

  <style type="text/css">
    
    .product {
      background-color: #2F4F4F;
      color: white;
      padding-left: 20px;
      border-radius: 12px;
    }

    .td1 {
      background-color: #696969;
      border-radius: 12px;
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
          font-weight: bold;
        }

        .screen
{
  width:100%;
  height:20px;
  background:#4388cc;
  color:#fff;
  line-height:20px;
  font-size:15px;
}

.smallBox::before
{
  content:".";
  width:15px;
  height:15px;
  float:left;
  margin-right:10px;
}
.greenBox::before
{
  content:"";
  background:green;
}
.redBox::before
{
  content:"";
  background:Red;
}
.emptyBox::before
{
  content="";
  box-shadow: inset 0px 2px 3px 0px rgba(0, 0, 0, .3), 0px 1px 0px 0px rgba(255, 255, 255, .8);
    background-color:#ccc;
}

.seats
{
  border:1px solid red;background:yellow;
} 



.seatGap
{
  width:40px;
}

.seatVGap
{
  height:40px;
}

table
{
  text-align:center;
}


.Displaytable
{
  text-align:center;
}
.Displaytable td, .Displaytable th {
    border: 1px solid;
    text-align: left;
}

textarea
{
  border:none;
  background:transparent;
}



input[type=checkbox] {
    width:0px;
    margin-right:18px;
}

input[type=checkbox]:before {
    content: "";
    width: 15px;
    height: 15px;
    display: inline-block;
    vertical-align:middle;
    text-align: center;
    box-shadow: inset 0px 2px 3px 0px rgba(0, 0, 0, .3), 0px 1px 0px 0px rgba(255, 255, 255, .8);
    background-color:#ccc;
}

input[type=checkbox]:checked:before {
    background-color:Green;
    font-size: 15px;
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
                        
                                            <h1 style="font-size: 40px;"><?php echo $row["mname1"]; ?></h1> 
                                            <h3>Show time: <?php echo $row["mtime1"]; ?></h3><br>
                            
                                            
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

                            <div class="td1">
                              <center>
                                <table>
                                  <tr>
                                    <td style="font-size: 20px; color: white; font-family: arial;">Total Tickets: </td>
                                    <td style="font-size: 20px; color: white; font-family: arial;"><?php echo "$ticket";?></td>
                                  </tr>
                                  <tr>
                                    <td style="font-size: 20px; color: white; font-family: arial;">Total Price: Rs.</td>
                                    <td style="font-size: 20px; color: white; font-family: arial;"><?php 
                                           $mticket = $row["mticket"];
                                           $total = ($ticket * $mticket);
                                           echo "$total.00";
                                        
                                        ?></td>
                                  </tr>
                                </table>
                              </center><br>
                            </div>
                        
                    <?php

                }
            }
        ?>

    </div><br><br><br><br>
    
    <div style="background-color: white;">
      <table border="1">
        <tr>
          <td><h3>Resevered seats</h3></td>
          <td>
            <?php
            $query = "SELECT * FROM movie1 WHERE month1='$month' && day1='$day' ORDER by seat1 ASC ";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                        
                                  <b><?php echo $row["seat1"]; ?> &nbsp&nbsp </b>
                            
                    <?php
                }
            }
        ?>

          </td>
        </tr>
      </table>
    </div>

      <center><h2 style="color: white; font-size: ">Select seat number</h2>


      </center><br>

    <div class="seatStructure">

    
    <center>
<form method="POST" action="pay1.php" style="background-color: #e9e2e2;">  
<table id="seatsBlock">
 <p id="notification"></p>
  <tr>
    <td colspan="14"><div class="screen">SCREEN</div></td>
    <td rowspan="20">
      <div class="smallBox greenBox">Selected Seat</div> <br/>
      
    </td>
    
    <br/>
  </tr>
  
  <tr>
    <td></td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td></td>
    <td>6</td>
    <td>7</td>
    <td>8</td>
    <td>9</td>
    <td>10</td>
    <td>11</td>
    <td>12</td>
</tr>
  
<tr>
    <td>A</td>
    <td><input type="checkbox" class="seats" value="A1" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="A2" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="A3" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="A4" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="A5" name="select[]"></td>
    <td class="seatGap"></td>
    <td><input type="checkbox" class="seats" value="A6" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="A7" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="A8" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="A9" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="A10" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="A11" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="A12" name="select[]"></td>
  </tr>
  
  <tr>
    <td>B</td>
    <td><input type="checkbox" class="seats" value="B1" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="B2" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="B3" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="B4" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="B5" name="select[]"></td>
    <td></td>
    <td><input type="checkbox" class="seats" value="B6" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="B7" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="B8" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="B9" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="B10" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="B11" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="B12" name="select[]"></td>
  </tr>
  
  <tr>
    <td>C</td>
    <td><input type="checkbox" class="seats" value="C1" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="C2" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="C3" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="C4" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="C5" name="select[]"></td>
    <td></td>
    <td><input type="checkbox" class="seats" value="C6" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="C7" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="C8" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="C9" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="C10" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="C11" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="C12" name="select[]"></td>
</tr>
  
<tr>
    <td>D</td>
    <td><input type="checkbox" class="seats" value="D1" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="D2" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="D3" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="D4" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="D5" name="select[]"></td>
    <td></td>
    <td><input type="checkbox" class="seats" value="D6" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="D7" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="D8" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="D9" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="D10" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="D11" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="D12" name="select[]"></td>
</tr>
  
<tr>
    <td>E</td>
    <td><input type="checkbox" class="seats" value="E1" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="E2" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="E3" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="E4" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="E5" name="select[]"></td>
    <td></td>
    <td><input type="checkbox" class="seats" value="E6" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="E7" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="E8" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="E9" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="E10" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="E11" name="select[]"></td>
    <td><input type="checkbox" class="seats" value="E12" name="select[]"></td>
</tr>
  
   

</center>
</div><br>
  
  
</table><br><br>
 <input type="hidden" name="month" value="<?php echo $_POST['month']; ?>">
      <input type="hidden" name="day" value="<?php echo $_POST['day']; ?>">
      <input type="hidden" name="ticket" value="<?php echo $_POST['ticket']; ?>">
      <input type="hidden" name="total" value="<?php echo "$total"; ?>">
      <center><input type="submit" name="submit" value="Next" class="n"></center>
      <br><br>
</form>
</div><br><br><br>
    
    
</body>
</html>