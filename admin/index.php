<?php
require_once("php/editeur.php");
?>

<?php
if (isset($_GET['page'])) {
	if($_GET['page']=="index"){	
		require_once("../".$_GET['page'].".html");
	}
	else {
		require_once("../pages/".$_GET['page'].".html");
	}
}
?>


