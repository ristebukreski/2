<html>
<head>
<title>User Registration</title>
</head>
<body> 
<form action="Register.php" method="post" >
<table border="0" >
<tr>
<td>Name:
</td>
</tr>
<tr>
<td>
<input type="text" name="fname"><br>
</td>
</tr>
<tr>
<td>Address:
</td>
</tr>
<tr>
<td>
<input type="text" name="address"><br>
</td>
</tr>
<tr>
<td>Age
</td>
</tr>
<tr>
<td>
<input type="text" name="age"><br>
</td>
</tr>
<tr>
<td>Proffesion
</td>
</tr>
<tr>
<td>
<input type="text" name="proffesion"><br>
</td>
</tr>
<tr>
<td>Ressidential status
</td>
</tr>
<tr>
<td>
<input type="radio" name="status" value="Resident" checked> Resident&nbsp;
  <input type="radio" name="status" value="Non-Resident"> Non-Resident
</td>
</tr>
</table>
  <input type="submit" value="Submit">
</form>
<br> 


<?php
if (isset($_POST['fname'])){ 

$hostname='localhost';
$username='root';
$password='example';
$database='test';

$fname;
$address;
$age;
$proffesion;
$status;

	if (isset($_POST['fname'])){		
		$fname = $_POST['fname'];		
	}
	if (isset($_POST['address'])){		
		$address = $_POST['address'];		
	}
	if (isset($_POST['age'])){		
		$age = $_POST['age'];		
	}
	if (isset($_POST['proffesion'])){		
		$proffesion = $_POST['proffesion'];		
	}	
	if (isset($_POST['status'])){		
		$status = $_POST['status'];		
	}	

	$mysqli = new mysqli($hostname, $username, $password, $database);
	if ($mysqli->connect_errno) {
		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	
    $sql = "INSERT INTO reservation (FullName, Address, Age, Profession, rStatus) VALUES ('".$fname."','".$address."','".$age."','".$proffesion."','".$status."');";
	//echo $sql;
    
	if(mysqli_query($mysqli,$sql)){
		echo "<br>";
        echo "New record created successfully";
    }else{
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    
	//$mysqli->close();
	mysqli_close($mysqli);
}
?>
</body>
 </html>