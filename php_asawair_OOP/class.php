<?php
class Calculate1{
	public $count;
	function __construct($c)
	{
		$this->count=$c;
	}
	function increment()
	{
		return $this->count++;
	}
	function decrement()
	{
		return $this->count--;
	}

	function display_counter()
	{
		echo "<br/>Counter=".$this->count;
	}
	function print()
	{
		echo "Print function inside the class";
	}
	function mylist()
	{
		echo "<br/>";
		echo "<ul>";	
		echo "<li>PHP</li>";
		echo "<li>MySQL</li>";
		echo "<li>SQL</li>";

		echo "</ul>";

	}
}
/*
$obj=new Calculate1();
$obj->print();
$obj->mylist();
*/
$obj=new Calculate1(10);
$obj->increment();
$obj->display_counter();
$obj->increment();
$obj->display_counter();
$obj->increment();
$obj->display_counter();
$obj->decrement();
$obj->display_counter();
$obj->decrement();
$obj->display_counter();

?>