<?php

	if(file_exist("c"))
	{
		$file= fopen("c","r");
		$ile=fgets($file,1000);
		$ile++;	
		fclose($file);
		
	}
	else
		ile=1;
		
	$file = fopen("c","w")
	fwrite($file,$ile);
	fclose($file);
	
	header("Content-type: image/gif");
	$image = ImageCreate(20*strlen($ile),20);
	
	$kopia = ImageCreateFromGif("obrazek.gif");
	
	ImageGif($kopia);
?>
