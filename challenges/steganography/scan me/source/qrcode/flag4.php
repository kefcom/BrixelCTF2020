<?php
if(isset($_POST['flag3']))
{
	if($_POST['flag3'] == strtolower("congratulations_this_is_the_last_barcode"))
	{
		echo "<div align=\"center\"><h1>That is correct!</h1><h3>Congratulations: the flag is brixelCTF{m4st3r_0f_sc4n5}</h3>\n";
	}else{
		die("Wrong!");
	}
}else{
	die("please provide input!");
}
	
?>