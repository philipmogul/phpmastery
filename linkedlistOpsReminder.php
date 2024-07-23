<?php 

// Revision of linked lists and its operations 

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

class lL
{
	public $head; 
    
    public function __construct()
    {
    	$this->head = null;
    }
    
    public function inL($data)
    {
    	$newNode = new Node($data);
        
        if( $this->head === null )
        {
        	$this->head = $newNode;
        }
        else
        {
        	$curr = $this->head;
            while( $curr->next !== null )
            {
            	$curr = $curr->next;
            }
            $curr->next = $newNode;
        }
    }
    
    public function dL()
    {
    	echo "<h3>The Linked List Created Is Displayed Below. :-)</h3><hr />";
    	$curr = $this->head;
        while( $curr !== null )
        {
        	echo $curr->data. " , ";
            $curr = $curr->next;
        }
        echo "NULL\n";
    }
    
    
}

$obj = new lL;
$obj->inL(10);
$obj->inL(100);
$obj->inL(20);
$obj->inL(20000);
$obj->inL(770);
$obj->inL(7700);
$obj->inL(77000);
$obj->inL(17000);
$obj->dL();


 
