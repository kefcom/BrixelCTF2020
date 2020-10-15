<?php
//stemmen voor SnackShack of the year contest (brixel CTF)
if(!isset($_POST['score_bammens']))
{
	die("Please use the correct form to vote!");
}
if($_POST['score_tpleintje'] == 5000)
{
	echo "<html>\n";
	echo "<title>SnackShack of the year contest</title>\n";
	echo "<body>\n";
	echo "Well done! The flag is brixelCTF{bakpau}";
	echo "</body>";
	die("</html>\n");
}else{
	echo "<html>\n";
	echo "<title>SnackShack of the year contest</title>\n";
	echo "<head><meta http-equiv=\"refresh\" content=\"5; URL='index.html'\" /></head>\n";
	echo "<body>\n";
	echo "Thank you for voting, you are now returned to the home page.\n";
	echo "</body>\n";
	die("</html>\n");	
}
?>