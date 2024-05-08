<?php 

$file = 'newfile.txt';
if( $handle = fopen($file, 'w') )
{
	$content = "This file was created and written into by php.";
	fwrite($handle, $content);
	echo "New File has been created. <br />";
	fclose($handle);
}
else
{
	echo "File could not be created.";
}


echo "<br />Content from the new file created is: <br />";


if( $handle2 = fopen($file, 'r') )
{
	$content2 = fread($handle2, filesize($file));
	echo nl2br($content2);
	fclose($handle2);
}

