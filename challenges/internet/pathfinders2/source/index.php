<?php
if(isset($_GET['page']))
{
	$page = $_GET['page'];
}

	
if(isset($page))
{
	if(substr($page,strlen($page)-4,4) != ".php")
	{
		die("file not ending in .php, terminating.");
	}
// get out the nasty stuff
	if(strpos($page, "..") == false)
	{
		//no problem
		if(substr($page,0,2) == "..")
		{
			// yes problem
			die("naughty, naughty! you're only supposed to go after stuff in admin! no back traversing!/");	
		}
	}else{
		// yes problem
		die("naughty, naughty! you're only supposed to go after stuff in admin! no back traversing!/");
	}
	
	if(substr($page,0,1) == "/")
	{
		die("page not found!");
	}
	
	
	if($page == "home.php" or $page=="locations.php" or $page=="members.php")
	{
		if(file_exists($page) == true)
		{
			include($page);
		}else{
			die("page not found!");
		}
	}else{
		if(substr($page,0,6) == "admin/")
		{
			if(strlen($page) <= 6)
			{
				die("page not found!");
			}else{
				if(strpos($page,chr(0)) > 0)
				{
					if($page == "admin/.htpasswd" . chr(0) . ".php")
					{
						die("Great work! the flag is brixelCTF{outdated_php}");
					}else{
						die("You are really close... but not there yet, maybe you're reading the wrong file?");
					}
				}else{
					die("page not found!");
				}
			}
		}else{
			die("page not found!");
		}
	}
}else{
	echo("<meta http-equiv=\"Refresh\" content=\"0; url=" . $_SERVER['PHP_SELF'] . "?page=home.php\" />");
}
?>