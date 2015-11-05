<!DOCTYPE html>
<html>	
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="admin/css/styleAdmin.css"/>
		<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
	</head>
	
	<body>
		<header>
			<section id="header">
				<img src="http://www.lepoint.fr/images/2012/12/05/debat-jeux-video_585761.jpg" alt="jeu"/>
				<h1>Generateur de page html</h1>
			</section>
		</header>
		<main>
		<input type="button" value="Créer son site internet en ligne" id="creationSite"/>
		<form method="post" action="admin/php/creationSite.php" id="formulaire">
			<label>Nom du site</label><input type="text" name="nomSite" id="nomSite" />
<!--
			<label>Choix du thème principal du site</label>
			<section class="radioChoix">
				<div class="radio"><input type="radio" name="theme" /><img src="template/images/screenshotTemplate1.png" alt="theme1" /></div>
				<div class="radio"><input type="radio" name="theme" /><img src="template/images/screenshotTemplate2.png" alt="theme2" /></div>
			</section>
-->
			<label>Choix du themplate de la page d'accueil du site</label>
			<section class="radioChoix">
				<div class="radio"><input type="radio" name="option" value="template1" checked/><img src="template/images/screenshotTemplate1.png" alt="theme1" /></div>
				<div class="radio"><input type="radio" name="option" value="template2" /><img src="template/images/screenshotTemplate2.png" alt="theme2" /></div>
			</section>
			<label>Nom utilisateur</label><input type="text" id="utilisateur"/><input type="button" value="Confirmer" id="confirmer"/>
			<input type="submit" value="Valider" id="valider"/>
		</form>
		</main>
<footer>
	copyright
</footer>

<script>
	$("#creationSite").click(function(){	
		$("#formulaire").css({display:"block"})	
	});
	
	$("#confirmer").click(function(){	
		var contenu= {
			'nomUtilisateur':$("#utilisateur").val()
		};
		$.post("admin/index.php",contenu);
	});

</script>
	</body>
	
</html>

