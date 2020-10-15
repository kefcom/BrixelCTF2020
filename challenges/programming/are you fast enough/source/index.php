<?php
session_start();
$diff = 1; //in seconds
if(!isset($_POST['inputfield']))
{
	$_SESSION['pageload'] = time();
	function generateRandomString($length = 10) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
	$rndstring =  generateRandomString();
	$_SESSION['randomstring'] = $rndstring;
	
	echo "<html><body><div align=\"center\"><h1>Are you fast enough?</h1></div><hr><div align=\"center\">copy the random string below into the input form and submit within " . $diff . " second(s) to win!</div><br><br><div id=\"rndstring\" align=\"center\">" . $rndstring . "</div><br><form name=\"enterstring\" method=\"POST\" action=\"" . $_SERVER['PHP_SELF'] . "\"><div align=\"center\"><input type=\"text\" id=\"inputfield\" name=\"inputfield\"><input type=\"submit\" id=\"submitbutton\" value=\"enter\"></div></form></body></html>";
	die();
}else{
	if($_POST['inputfield'] == $_SESSION['randomstring'])
	{
		$timenow = time();
		echo "<html><body><div align=\"center\"><h1>Are you fast enough?</h1></div><hr><div align=\"center\">You took: " . ($timenow - $_SESSION['pageload']) . " second(s) to complete the task.</div>";
		if (($timenow - $_SESSION['pageload']) < $diff)
		{
			echo "<br><div align=\"center\">Congratulations, you completed the task in under " . $diff . " seconds!</div><div algin=\"center\">The flag is: <b>brixelCTF{sp33d_d3m0n}</b></div>";
		}else{
			echo "<br><div align=\"center\">unfortunately this is not quick enough :( <a href=\"" . $_SERVER['PHP_SELF'] . "\">try again?</a></div>";	
		}
		echo "</body></html>";
		die();
	}else{
		die("step 1: copy the EXACT string.... step2: be on time, but let's focus on step one for now...");
	}
}


?>