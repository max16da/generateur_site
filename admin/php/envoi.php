
<?php 
	$header=file_get_contents('../../template/header.html');
	$nav=file_get_contents('../../template/nav.html');
	$tempMain=file_get_contents('../../template/'.$_POST['option'].'.html');
	$footer=file_get_contents('../../template/footer.html');
	
	$fp=fopen('../../pages/'.$_POST["nom"].'.html','w');
	fwrite($fp,$header.$nav.$tempMain.$footer);
	fclose($fp);

?>
