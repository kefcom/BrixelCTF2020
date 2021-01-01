<?php
if(isset($_GET['submit']))
{
	//checking time!
	if(strpos($_GET['filename'],"../") === false)
	{
		if($_GET['filename'] == $_GET['title'] . ".txt")
		{
			if(strpos($_GET['filename'],"../../") == true)
			{
				die("You're on the right track, but are you trying to be a bit naughty?");
			}else{
				if(substr($_GET['filename'],0,1) == "/")
				{
					die("You're on the right track, but are you trying to be a bit naughty?");
				}
				//normal text upload
				$thefilename = addslashes($_GET['title']) . ".txt";
				$openfile = fopen(addslashes($_GET['title']) . ".txt","w");
				fwrite($openfile,$_GET['content']);
				fclose($openfile);
				echo "your dad joke has been uploaded!<br><br><b>The joke is not in the index yet, I will review it first to keep you perverts out!</b><br><br>if you like, you can view it <a href=\"" . $thefilename . "\">here</a>";
				die();
			}
			
		}else{
			die("You're on the right track, but I'm not going to allow this in here, try that somewhere else!");
		}
	}else{
		if($_GET['filename'] == "../index.html")
		{
			if(strpos($_GET['content'],"<html><title>DadJokes, your source of lame dad jokes</title>") === false)
			{
				echo "You are definitely on the right track here... but what are you trying to accomplish?";
				die();
			}else{
				echo "Congratulations, the flag is brixelCTF{lamejoke}";
				die();
			}
		}else{
			die("You're on the right track, but are you trying to be a bit naughty?");
		}
	}
}else{
	if(isset($_POST['title']))
	{
		if(!isset($_GET['filename']))
		{
			echo "<head><meta http-equiv=\"refresh\" content=\"0; URL='submit.php?filename=" . addslashes($_POST['title']) . ".txt&title=" . addslashes($_POST['title']) . "&content=" . addslashes($_POST['content']) . "'\" /></head>\n";
		}else{
			die("Something's not right here..");
		}
	}else{
		if(isset($_GET['filename']))
		{	
			if($_GET['title'] == "")
			{
				die("please provide a title");
			}else{
				echo "<h1>review: are you sure you want to submit?</h1>\n";
				echo "<hr>\n";
				echo "Title: " . $_GET['title'] . "<br>\n";
				echo "Content: " . $_GET['content'] . "\n";
				echo "<hr><a href=\"submit.php?filename=" . $_GET['filename'] . "&title=" . $_GET['title'] . "&content=" . $_GET['content'] . "&submit=true\">YES</a>&nbsp;//&nbsp;<a href=\"submit.php\">NO</a>\n";
			}
		}else{
			echo "<html>\n<title>submit your own dad joke!</title>\n<body>\n<h1>Submit your own dad joke!</h1>\n<hr>\n<form name=\"submit\" method=\"POST\" action=\"submit.php\">\n<table align=\"center\"><tr><td align=\"right\">Title:<td align=\"left\"><input type=\"text\" name=\"title\"></tr>\n<tr><td align=\"right\">Content:<td align=\"left\"><textarea name=\"content\"></textarea></tr><tr><td colspan=2 align=\"right\"><input type=\"submit\" value=\"submit\"></tr></table></form>\n</body>\n</html>";
		}
	}
}
?>