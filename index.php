<?php
	setcookie("odwiedzone","1", time()+3600*3);
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
	
	<form action=skrypt.php method=post>
	<input type=text name=skrypt>
	<input type=submit value="Wykonaj skrypt">	
	</form>
</body>
</html>