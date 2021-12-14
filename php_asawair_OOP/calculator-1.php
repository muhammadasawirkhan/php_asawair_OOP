<?php
$result=""; 
$a="";
$b="";
if(isset($_GET['result']))
{
	$result=$_GET['result'];
	$a=$_GET['a'];
	$b=$_GET['b'];
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculator-1</title>
</head>
<body>
<h1>Calculator</h1>
<form action="calculate.php" method="post">
Enter Number1:
<input type="text" name="num1"  value="<?php echo $a;?>">
<br/>
Enter Number2:
<input type="text" name="num2"  value="<?php echo $b;?>"/>
<br/>
Result:
<input type="text" name="result" value="<?php echo $result;?>"/>
<br/>
<input type="submit" value="+"/>
<input type="submit" value="-"/>
</form>
</body>
</html>