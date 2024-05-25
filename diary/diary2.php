<?php

// create file once posted and update records
if( isset($_POST['day']) && isset($_POST['txt']) )
{
	// regular expressions 
	$day = $_POST['day'];
	$txt = $_POST['txt'];

	if( preg_match("/^[\d\/\-]{6,}+$/", $day) )
	{
		if( preg_match("/^[]{30,}+$/",$txt) )
		{
			echo "Create file...";
		}
		else
		{
			echo "Ensure to type only letters or digits or / or ? or ! or periods and thoughts is atleast 30 characters long.";
		}
	}
	else
	{
		echo "Ensure the day has digits or / or - and is 6 characters long! ";
	}
	
}