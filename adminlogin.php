<!DOCTYPE html >
<html>
<head>
<title>ADMIN LOGIN PAGE</title>
<style type="text/css">
    #body_bg
{ 
background-color:#171717; 
}

#login-form{ 

background:#A9D0F5; 
border: 3 px solid #eeeee; 
padding:9px 9px;
 width:300px; 
 border-radius:5px; 
}
</style>
</head>
<body id="body_bg">
<div align="center" style="padding-top: 100px;">

<h3 style="color: white;"> LOGIN PAGE</h3>
    <form id="login-form" method="post" action="login1.php" >
        <table border="0.5" style="padding-top: 30px;" style="padding-bottom: : 30px;">
            <tr>
                <td><label for="user_id">User Name :</label></td>
                <td><input type="text" name="user_id" id="user_id" style="border-radius: 12px;"></td>
            </tr>
            <tr>
                <td><label for="user_pass">Password :</label></td>
                <td><input type="password" name="user_pass" id="user_pass" style="border-radius: 12px;"></input></td>
            </tr>
            
			
            <tr>
				
                <td><input type="submit" value="Submit" style="border-radius: 12px; font-weight: bold;" />
                <td><input type="reset" value="Reset" style="border-radius: 12px; font-weight: bold;"/>
				
            </tr>
        </table>
    </form>
		</div>
</body>
</html>