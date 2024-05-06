<?php 
// Queues

class Queue
{
	private $queue;

	public function __construct()
	{
		return $this->queue = [];
	}	

	public function isEmpty()
	{
		return empty($this->queue);
	}

	public function enqueue($item)
	{	
		return array_push($this->queue, $item);
	}

	public function dequeue()
	{
		if( $this->isEmpty() )
		{
			return;
		}
		return array_shift($this->queue);
	}

	public function peek()
	{
		if( $this->isEmpty() )
		{
			return;
		}
		return $this->queue[0];
	}

	public function display()
	{
		echo "The queue is = ";
		echo implode(" => ", $this->queue);
	}

} 

$obj = new Queue;
$obj->enqueue(1000);
$obj->enqueue(2000);
$obj->enqueue(3000);
$obj->enqueue(4000);
$obj->enqueue(5000);
$obj->enqueue(6000);
$obj->enqueue(7000);
$obj->display();
echo "<br />The top value of the queue is = ";
echo $obj->peek();
echo "<br />After deleting a value from the queue, it becomes = <br />";
$obj->dequeue();
$obj->display();