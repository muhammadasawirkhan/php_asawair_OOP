<?php
include("functions-1.php"); 
if(count($_POST)>0)
{
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$obj=new Calculator();
	//echo $_POST['btn2'];
	
	//echo $_POST['btn2'];
	//exit;
	if(isset($_POST['btn1']))
	{
	$result=$obj->add($num1,$num2);
	}
	if(isset($_POST['btn2']))
	{
		$result=$obj->subtract($num1,$num2);
	
	}
	header("location:calculator-2.php?a=$num1&b=$num2&result=$result");
}


?>