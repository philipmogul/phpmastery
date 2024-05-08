<?php 
// regular expressions 

if( isset($_POST['upload']) )
{
	$output = "Thankyou for submitting";

	if( !empty($_POST['uname']) && !empty($_POST['uemail']) && !empty($_POST['uphone']) )
	{
		$output .= "<br />Checking if the values respect our regular expressions. <br />";
		if( preg_match("/^[a-zA-Z\.\d\_]+$/", $_POST['uname']) )
		{
			$output .= "Username respects our regular expressions. <br />";
			if( preg_match("/^[a-zA-Z\d\.]+@[a-zA-Z\.\d]+\.[a-z]{2,}+$/", $_POST['uemail']) )
			{
				$output .= "Email respects our regular expressions. <br />";

				if( preg_match("/^[\d]+$/", $_POST['uphone']) )
				{
					$output = "<br />Congratulations!!! All regular expressions respected!!!<br />";
				}
				else
				{
					$output .= "The phone number does not respect our regular expressions.<br />";
				}
			}	
			else
			{
				$output .= "The email does not obey our regular expressions.";
			}

		}
		else
		{
			$output .= "The username is not obeying our regular expressions.";
		}

	}
	else
	{
		$output .= "<br />Ensure, the username, email and phonenumber is not empty.";
	}

}
else
{
	$output = "Enter username, email and phonenumber above.";
}

?>


<br />
<form method="post">
	<input type="text" name="uname" placeholder="Username"><br />
	<input type="text" name="uemail" placeholder="Email" ><br />
	<input type="text" name="uphone" placeholder="Phone number"><br />
	<input type="submit" value="Upload" name="upload"> <br />
	<p><?php echo $output; ?></p>
</form>
