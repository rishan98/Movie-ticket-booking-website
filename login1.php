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

   if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	
    // Assigning POST values to variables.
    $username = $_POST['user_id'];
    $password = $_POST['user_pass'];

    // CHECK FOR THE RECORD FROM TABLE
    $query = "SELECT * FROM admin WHERE uname='$username' and Pword='$password'";
 
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $count = mysqli_num_rows($result);

   if ($count == 1){

    //echo "Login Credentials verified";
    //echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
    header("location: admin.php");

   }else{
    echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
    //echo "Invalid Login Credentials";
   }
}

?>