<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php
include('includes/head.php');
?>
<body>
	<div id="wrapper">	
<?php
include('includes/header.php');
include('includes/nav.php');
if(isset($_REQUEST["pagina"])){						
	if($_REQUEST["pagina"] != ""){
		$url = "application/".$_REQUEST["pagina"].".php";
		include($url);
	}
	else{
		include ('application/salutam.php');
	}
}
else{						
	include ('application/salutam.php');
}
include('includes/footer.php');	
?>		
	</div>
</body>
</html>
