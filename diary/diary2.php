<?php

// create file once posted and update records
if( isset($_POST['day']) && isset($_POST['txt']) )
{
	// regular expressions 
	$day = $_POST['day'];
	$txt = $_POST['txt'];

	if( preg_match("/^[\d\/\-]{6,}+$/", $day) )
	{
		if( preg_match("/^[a-zA-Z\d\s\.\w\?\!\n\r\,]{30,}+$/",$txt) )
		{
			if( $handle = fopen('diary.txt', 'w') )
			{
				$content = fwrite($handle, $txt);
				echo "Diary successfully created...";
				fclose($handle);
			}	
			else
			{
				echo "Please try later.";
			}
		}
		else
		{
			echo "Ensure to type only letters or digits or spaces or / or ? or ! or periods and thoughts is atleast 30 characters long.";
		}
	}
	else
	{
		echo "Ensure the day has digits or / or - and is 6 characters long! ";
	}
	
}