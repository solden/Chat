<html>
<head>
<meta http-equiv="content-type" content="text/html" charset="iso-8859-2">
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

		if($action=="add")
		{
			$file = fopen("chat.txt", "r");
			flock($file,1);
			
			for($lineNr=1; true;$lineNr++)
			{
				$linia=fgets($file,81);
		
				if(!$linia)
					break;
				
				$linie[$lineNr]=$linia;
			}
			
			flock($file,3);
			fclose($file);
			
			$nLines=$lineNr;
			$file= fopen("chat.txt", "w");
			flock($file,2);
			if($nLines < 16)
				$lineNr=1;
			else
				$lineNr=2;
				
			for(;$lineNr < $nLines; $lineNr++)
				fwrite($file, $linie[lineNr]);
				
			fwrite($file, $TEKST);
			flock($file,3);
			fclose($file);
		}
		?>
	</font>
	</td></tr>
</table>
</body>
</html>