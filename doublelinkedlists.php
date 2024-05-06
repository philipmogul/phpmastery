<?php 
// Double Linked Lists 

class Node
{
	public $data = 0;
	public $prev = null;
	public $next = null;

	public function __construct($data)
	{
		$this->data = $data;
		$this->prev = null;
		$this->next = null;
	}

}

class dll
{
	public $head;
	public $tail;

	public function __construct()
	{
		$this->head = null;
		$this->tail = null;
	}

	public function insert($data)
	{
		$newNode = new Node($data);
		if( $this->head === null )
		{
			$this->head = $newNode;
			$this->tail = $newNode;
		}
		else
		{
			$newNode->prev = $this->tail;
			$this->tail->next = $newNode;
			$this->tail = $newNode;
		}

	}

	public function dispForward()
	{
		$current = $this->tail;
		while( $current !== null )
		{
			echo $current->data. " => ";
			$current = $current->prev;
		}
		echo "NULL\n";
	}

	public function dispBackward()
	{
		$current = $this->head;
		while( $current !== null )
		{
			echo $current->data. " => ";
			$current = $current->next;
		}
		echo "NULL\n";
	}


}

$obj = new dll;
$obj->insert(1000);
$obj->insert(2000);
$obj->insert(3000);
$obj->insert(4000);
$obj->insert(5000);
$obj->insert(6000);
$obj->insert(7000);
echo "List displayed forward = ";
$obj->dispForward();
echo "<br />List displayed backward = ";
$obj->dispBackward();
