<html>
<head>
<meta http-equiv="content-type" content="text/html" charset="iso-8859-2">
</head>
<body bgcolor=white text=black>

	<form action=dol.php method=get name="formularz">
	<input type=text size=80 maxlength=80 name="tekst">
	
	
	<?php
		if($_GET['action'] == "no")
		{	
		 $i = $_GET['imie'];
		  echo ("Twoje imię to $i");
		}
		else
		{
		if($_GET['action']=="add")
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
				fwrite($file, $linie[$lineNr]);
				
			$imie = $_GET['imie']; 
			$tekst = $_GET['tekst'];
			fwrite($file, "$imie : $tekst\n");
			flock($file,3);
			fclose($file);
		}
		}
	$imie = $_GET['imie'];
	echo ("<input type=hidden name=\"imie\" value=$imie>");

	?>
	<input type=hidden name="action" value="add">
	</form>
	
	<script language="JavaScript">
	<!-- document.tekst.focus(); -->
	</script>
</body>
</html>