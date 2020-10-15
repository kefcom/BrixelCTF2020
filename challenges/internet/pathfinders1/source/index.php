<?php
if(isset($_GET['page']))
{
	$page = $_GET['page'];
}

	
if(isset($page))
{
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
				if(file_exists($page) == true)
				{
					if($page == "admin/.htaccess")
					{
						include("admin/safe_htaccess");
					}else{
						include($page);
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