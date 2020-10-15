<?php
if (strpos($_SERVER['HTTP_USER_AGENT'],"Ask Jeeves",0) === false)
{
	echo "<html><body><div align=\"center\"><h1>Access denied! Ask Jeeves crawler allowed only!</h1></div></body></html>";
	die();
}else{
	// has ask jeeves, does it have teoma?
	if(strpos($_SERVER['HTTP_USER_AGENT'],"Teoma",0) === false)
	{
		//no
		echo "<html><body><div align=\"center\"><h1>Access denied! Ask Jeeves crawler allowed only!</h1><br>You're close, but no sigar...</div></body></html>";
		die();
	}else{
		//yes
		echo "<html><body><div align=\"center\"><h1>congratulations</h1>the flag is 'brixelCTF{askwho?}'</div></body></html>";
		die();
	}
}
?>