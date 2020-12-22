<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">

</head>
<body>

<?php
	if (isset($_GET['cookie'])){
		$oper = $_GET['cookie']; 
		switch ($oper) {
			case "1":
			if (isset($_POST["sId"]) && !empty($_POST["sId"])) {
				$cookie_name = "sIndex";
				$cookie_value = $_POST['sId'];
				setcookie($cookie_name, $cookie_value, time() + (60), "/");
		
				echo "cookie is set";  

				echo '<form action="cookie.php?cookie=2" method="post" >';
				echo '<button type="submit" >Delete</button>';
				echo '<a href="cookie.php?cookie=3">Read value</a><br>';				
				echo '</form>';	
			}	
			break;
			case "2":
				setcookie("sIndex", "", time() - 3600);
				echo "Cookie is deleted.";
				echo '<a href="cookie.php">Try again</a><br>';
			break;
			case "3":
				if(count($_COOKIE) > 0) {
					echo "Cookies are enabled.<br>";
					echo "Value is: " . $_COOKIE["sIndex"];
					echo '<form action="cookie.php?cookie=2" method="post" >';
					echo '<a href="cookie.php">Modify</a><br>';
					echo '<button type="submit" >Delete</button>';				
					echo '</form>';	
						
				} else {
					echo "Cookies are empty.<br>";
					echo '<a href="cookie.php">Try Again</a><br>';
				}
			break;
			default:
				setcookie("sIndex", "", time() - 3600);
				echo '<form action="cookie.php?cookie=1" method="post">';
				echo 'Your ID: <input type="Text" name="sId" id="sID"> <br>';
				echo '<strong><div id="result" >&nbsp;</div></strong>';
				echo '<input type="submit" value="enter">';
				echo '</form>';
				
		}
			exit();
		}
		
	else{  
		echo '<form action="cookie.php?cookie=1" method="post">';
		echo '	Your ID: <input type="Text" name="sId" id="sID"> <br>';
		echo '<strong><div id="result" >&nbsp;</div></strong>';
		echo '<input type="submit" value="enter">';
		echo '</form>';
	}
	
?>

	
</body>
</html>