<?php
if(isset($_POST['flag1']))
{
	if($_POST['flag1'] == strtolower("code-128-easy"))
	{
		echo "<div align=\"center\"><h1>That is correct!</h1><h3>How about this one?</h3><img src=\"flag3.png\"></img><br>Paste te result below:\n";
		echo "<form name=\"sendflag\" action=\"flag3.php\" method=\"POST\"><input type=\"text\" name=\"flag2\"><br><input type=\"submit\" name=\"submit\" value=\"submit\"></form>\n";
	}else{
		die("Wrong!");
	}
}else{
	die("please provide input!");
}
	
?>