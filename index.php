<?php 
require_once("Components.php");
$cmp = new Components(); 

echo("<!DOCTYPE html>"
)
?>

<!DOCTYPE html>
<html class="h-100">
<head>
	<title>Components for PHP</title>
	<meta charset="utf-8">
	<meta name="viewport">
	<?php 
	echo($cmp->getLink("stylesheet", "text/css", "https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css", "integrity='sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l' crossorigin='anonymous'")); 
	?>
</head>
<body class="d-flex flex-column h-100">

	<?php
	include_once("Components/Navbar.php");
	include_once("Components/Main.php");
	include_once("Components/Footer.php");
	?>

	<?php 
	echo($cmp->getScript("https://code.jquery.com/jquery-3.5.1.slim.min.js", "integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'"));
	echo($cmp->getScript("https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js", "integrity='sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN' crossorigin='anonymous'"));
	echo($cmp->getScript("https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js", "integrity='sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF' crossorigin='anonymous' "));
	?>

</body>
</html>