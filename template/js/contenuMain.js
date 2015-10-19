function publier(){
	var contenu= { //Fetch form data
		'content': $("#main").html() //Store name fields value
        };
		$.post("../php/envoi.php",contenu)

		.done(function() {
			alert( "la page est créée");
		})
		 
		.fail(function() {
		  alert( "erreur fatale");
		});
}
