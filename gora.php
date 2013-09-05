<html>
<head>
<meta http-equiv="content-type" content="text/html" charset="iso-8859-2">
<meta http-equiv="refresh" content="1">
</head>

<body bgcolor=white text=black>
<table border=1 cellpadding=5 cellspacing=0 width=500 height=400>
	<tr> <td valign=top> 
	<font class=text>
		<?php
		$file = fopen("chat.txt","r");
		flock($file,1);
		while($linia=fgets($file,81))
		{
			echo $linia;	
			echo '<br>';
		}
		flock($file,3);	
		fclose($file);
		?>
		
		
	</font>
	</td></tr>
</table>
</body>
</html>