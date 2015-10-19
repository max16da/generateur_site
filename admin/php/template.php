<!--copier un template et l'afficher
-->

<?php 

if (!isset($_POST["titre"]) && !isset($_POST['options']) || !empty($_POST["titre"])){
	foreach($_POST['options'] as $valeur) {
		copy("../../template/".$valeur.".html","../../pages/".htmlspecialchars($_POST["titre"]).".html"); 
	}
	//~ header('Location: editeur.php');
	//~ exit();	
}
else {
	echo "saisie incorrecte";
} 
?>


