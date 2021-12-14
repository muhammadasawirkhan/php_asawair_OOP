<?php
include("functions.php"); 
if(count($_POST)>0)
{
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	
	$result=add($num1,$num2);
	header("location:calculator-2.php?a=$num1&b=$num2&result=$result");
}


?>