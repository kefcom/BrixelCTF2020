<?php
if(!isset($_POST['username']))
{
	echo "<html>\n";
	echo "<title>FEB admin</title>\n";
	echo "<body>\n";
	echo "	<form name=\"login\" method=\"POST\" action=\"admin.php\">\n";
	echo "		<p>Welcome, please log in</p>\n";
	echo "		<p>Username:&nbsp;<input type=\"text\" name=\"username\"></p>\n";
	echo "		<p>Password:&nbsp;<input type=\"password\" name=\"password\"></p>\n";
	echo "		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"submit\" value=\"log in\">\n";
	echo "	</form>\n";
	echo "</body>\n";
	echo "</html>\n";
}else{
	if(strpos($_POST['username'],"'") === false)
	{
		echo "Wrong username, get lost punk!";
		die();
	}		
	if(strpos($_POST['username'],"'",0) == 0)
	{
		if(strpos($_POST['username'],"or",0)>=1 || strpos($_POST['username'],"OR",0)>=1)
		{
			if(strpos($_POST['username'],"=",0)>1)
			{
				if(strpos($_POST['username'],"--",0)>1)
				{
					echo "That should do the trick, the flag is brixelCTF{aroundtheglobe}";
					die();
				}else{
					echo "You are close, did you forget to add comments?";
					die();
				}
			}else{
				echo "SQL syntax error!";
				die();
			}
		}else{
			echo "SQL syntax error!";
			die();		
		}			
	}else{
		echo "Wrong username, get lost punk!";
		die();
	}
}
?>