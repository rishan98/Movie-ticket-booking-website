<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="#2F4F4F" style="color: white;">
	<div>
    <center><h1>Upload Files</h1></center><br><br>	
		<table cellpadding="100" style="padding-left: 150px; background-color: #95a5a6; color: black;">
			<tr>
				<td>
				  <form method="POST" action="upload21.php" enctype="multipart/form-data">
				  	<h2>Movie 1</h2>
					<h3>Image: </h3><input type="file" name="file1"><br>
					<h3>Name: </h3><input type="text" name="text1"><br>
					<h3>Slide Image: </h3><input type="file" name="file11"><br>
					<h3>Time: </h3><input type="text" name="time1"><br><br>
					<input type="submit" name="upload" value="upload" style="font-weight: bold;">
				  </form>
					
				</td>
				<td>
					<form method="POST" action="upload22.php" enctype="multipart/form-data">
						<h2>Movie 2</h2>
					   <h3>Image: </h3><input type="file" name="file2"><br>
					   <h3>Name: </h3><input type="text" name="text2"><br>
					   <h3>Slide Image: </h3><input type="file" name="file22"><br>
					   <h3>Time: </h3><input type="text" name="time2"><br><br>
					   <input type="submit" name="upload" value="upload" style="font-weight: bold;">
					</form>
				</td>
				<td>
					<form method="POST" action="upload23.php" enctype="multipart/form-data">
						<h2>Movie 3</h2>
					   <h3>Image: </h3><input type="file" name="file3"><br>
					   <h3>Name: </h3><input type="text" name="text3"><br>
					   <h3>Slide Image: </h3><input type="file" name="file33"><br>
					   <h3>Time: </h3><input type="text" name="time3"><br><br>
					   <input type="submit" name="upload" value="upload" style="font-weight: bold;">
					</form>
				</td>
			</tr>
		</table>
    </div>
	
	<div style="background-color: #171717;">
   <center>
	<table>
		<tr>
			
			<td>
				<center><h2>Upcoming Movie update</h2></center><br><br>
	            <form method="POST" action="upcoming.php" enctype="multipart/form-data">
		       <h3>Movie Image: </h3><input type="file" name="up"><br><br>

		       <input type="submit" name="upload" value="upload" style="font-weight: bold;"><br><br>
	           </form>
			</td>
		
		</tr>
		
	</table>
   </center>
    
    
</div><br><br><br><br><br>

</body>
</html>