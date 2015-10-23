<html>
<body>
<?php
$nomOrigine = $_FILES['monfichier']['name'];
$elementsChemin = pathinfo($nomOrigine);
$extensionFichier = $elementsChemin['extension'];
$extensionsAutorisees = array("jpeg", "jpg", "gif", "png");
if (!(in_array($extensionFichier, $extensionsAutorisees))) {
    echo "Le fichier n'a pas l'extension attendue";
} else {    
    // Copie dans le repertoire du script avec un nom incluant l'heure a la seconde pres 
    $repertoireDestination = dirname(__FILE__)."/images/";
    $nomDestination = "fichier_du_".date("YmdHis").".".$extensionFichier;

    if (move_uploaded_file($_FILES["monfichier"]["tmp_name"], 
                                     $repertoireDestination.$nomDestination)) {
		echo "<script>parent.document.getElementById('listeImage').textContent='http://".$_SERVER['SERVER_NAME']."/max/generateurHTMLcopie/admin/php/images/".$nomDestination."';</script>";
    } else {
        echo "Le fichier n'a pas été uploadé (trop gros ?) ou ".
                "le déplacement du fichier temporaire a échoué".
                " vérifiez l'existence du répertoire ".$repertoireDestination;
    }
}
?>

</body>
</html>
