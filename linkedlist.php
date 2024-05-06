<?php 
// Linked Lists 

class Node
{
	public $data;
	public $next;

	public function __construct($data)
	{
		$this->data = $data;
		$this->next = null;
	}
}

class linkedList
{
	public $head;

	public function __construct()
	{
		$this->head = null;
	}

	public function insert($data)
	{
		$newNode = new Node($data);

		if( $this->head === null )
		{
			$this->head = $newNode;
		}
		else
		{
			$current = $this->head;
			while( $current->next != null )
			{
				$current = $current->next;
			}
			$current->next = $newNode;
		}
	}

	public function displayList()
	{
		$current = $this->head;
		while( $current != null )
		{
			echo $current->data. " => ";
			$current = $current->next;
		}
		echo "NULL\n";

	}
}

$obj = new linkedList;
echo "The Linked List is => ";
$obj->insert(1000);
$obj->insert(2000);
$obj->insert(3000);
$obj->insert(4000);
$obj->insert(5000);
$obj->insert(6000);
$obj->insert(7000);
$obj->displayList();
