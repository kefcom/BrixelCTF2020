<?php
if(isset($_POST['flag2']))
{
	if($_POST['flag2'] == strtolower("5449000133335"))
	{
		echo "<div align=\"center\"><h1>That is correct!</h1><h3>How about this one?</h3><img src=\"flag4.gif\"></img><br>Paste te result below:\n";
		echo "<form name=\"sendflag\" action=\"flag4.php\" method=\"POST\"><input type=\"text\" name=\"flag3\"><br><input type=\"submit\" name=\"submit\" value=\"submit\"></form>\n";
	}else{
		die("Wrong!");
	}
}else{
	die("please provide input!");
}
	
?>