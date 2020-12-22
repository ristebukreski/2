<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">

</head>
<body>
<?php
$r = $g= $b = 0;

if (isset($_GET['r'])){
	$r = $_GET['r'];
}
if (isset($_GET['g'])){
	$g = $_GET['g'];
}
if (isset($_GET['b'])){
	$b = $_GET['b'];
}
	
$rgb= $r.','.$g.','.$b;


?>

<form action="color.php" method="GET">
				Red: <input type="Text" name="r" id="r" value="<?php echo $r;?>" > <br>
				Green: <input type="Text" name="g" id="g" value="<?php echo $g;?>" > <br>
				Blue: <input type="Text" name="b" id="b" value="<?php echo $b;?>" > <br>
				<input type="submit" value="Draw">
</form>


<div style="width:150px; height: 150px;
background-color: rgb(<?php echo $rgb; ?>);" />


	
</body>
</html>