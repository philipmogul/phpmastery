<?php 
//Linked Lists joining 

class Node
{
	public $val = 0;
	public $next = null;

	public function __construct($val = 0, $next = null)
	{
		$this->val = $val;
		$this->next = $next;
	}

}

class joinLists
{
	public function mergeLists($list1, $list2)
	{
		$dummy = new Node;
		$current = $dummy;
		while( $list1 !== null && $list2 !== null  )
		{
			if( $list1->val < $list2->val )
			{
				$current->next = $list1;
				$list1 = $list1->next;
			}
			else
			{
				$current->next = $list2;
				$list2 = $list2->next;
			}
			$current = $current->next;
		}
		if( $list1 !== null )
		{
			$current->next = $list1;
		}
		else if( $list2 !== null )
		{

		}
		return $dummy->next;
	}

}

$obj = new joinLists;

$l1 = new Node(1, new Node(2, new Node(4)));
$l2 = new Node(1, new Node(3, new Node(4)));
$obj = new joinLists;
echo "<pre>";
print_r($obj->mergeLists($l1, $l2)); 
echo "</pre>";
