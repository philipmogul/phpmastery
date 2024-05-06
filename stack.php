<?php 
// Stacks 

class Stack
{
	private $stack; 

	public function __construct()
	{
		return $this->stack = [];
	}

	public function isEmpty()
	{
		return empty($this->stack);
	}

	public function push($item)
	{
		return array_push($this->stack, $item);
	}

	public function pop()
	{
		if( $this->isEmpty() )
		{
			return;
		}
		return array_pop($this->stack);
	}

	public function peek()
	{
		if( $this->isEmpty() )
		{
			return;
		}
		return end($this->stack);
	}

	public function display()
	{
		echo "The Stack is = ";
		echo implode(" => ", $this->stack);
	}



}

$obj = new Stack;
$obj->push(1000);
$obj->push(2000);
$obj->push(3000);
$obj->push(4000);
$obj->push(5000);
$obj->push(6000);
$obj->push(7000);
$obj->display();
echo "<br />First Element in Stack = ";
echo $obj->peek();
echo "<br />List after deleting last Element = ";
$obj->pop();
echo "<br />";
$obj->display();
