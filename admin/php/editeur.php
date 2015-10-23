<!--éditeur aloha-->

    <!-- ##LOAD ALOHA START## -->
    <link href="http://cdn.aloha-editor.org/latest/css/aloha.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="http://cdn.aloha-editor.org/latest/lib/vendor/jquery-1.7.2.js"></script>
	<script type="text/javascript" src="http://cdn.aloha-editor.org/latest/lib/require.js"></script>

<script>
    var Aloha = window.Aloha || ( window.Aloha = {} );
     
    Aloha.settings = {
        locale: 'en',
        plugins: {
            format: {
                config: ['removeFormat', 'address', 'command', 'details', 'dfn', 'header', 'ins', 'menu', 'nav', 'ruby', 'section', 'var', 'a', 'abbr', 'b', 'blockquote', 'br', 'caption', 'cite', 'code', 'col', 'colgroup', 'dd', 'del', 'dl', 'dt', 'em', 'h1', 'h2', 'h3', 'i', 'img', 'li', 'ol', 'p', 'pre', 'q', 'small', 'strong', 'table', 'tbody', 'td', 'tfoot', 'th', 'thead', 'tr', 'u', 'ul', 'span', 'hr', 'object', 'div' ]
            },
            link: {
                config : [ 'a' ],
            },
            list: {
                config : [ 'ul', 'ol' ],
                editables : {
                    '#title'    : [  ]
                }
            },
            image: {
                'fixedAspectRatio': true,
                'maxWidth': 1024,
                'minWidth': 10,
                'maxHeight': 786,
                'minHeight': 10,
                'globalselector': '.global',
                'ui': {
                    'oneTab': false
                },
                editables : {
                    '#title'    : [  ]
                }
            }
        },
        sidebar: {
            disabled: true
        },
        contentHandler: {
            allows: {
                elements: ['removeFormat', 'address', 'command', 'details', 'dfn', 'header', 'ins', 'menu', 'nav', 'ruby', 'section', 'var', 'a', 'abbr', 'b', 'blockquote', 'br', 'caption', 'cite', 'code', 'col', 'colgroup', 'dd', 'del', 'dl', 'dt', 'em', 'h1', 'h2', 'h3', 'i', 'img', 'li', 'ol', 'p', 'pre', 'q', 'small', 'strong', 'table', 'tbody', 'td', 'tfoot', 'th', 'thead', 'tr', 'u', 'ul', 'span', 'hr', 'object', 'div' ],
                attributes: {
                    'a': ['href', 'title', 'id', 'class', 'target', 'data-gentics-aloha-repository', 'data-gentics-aloha-object-id'],
                    'div': [ 'id', 'class'],
                    'abbr': ['title'],
                    'blockquote': ['cite'],
                    'br': ['class'],
                    'col': ['span', 'width'],
                    'colgroup': ['span', 'width'],
                    'img': ['align', 'alt', 'height', 'src', 'title', 'width', 'class'],
                    'ol': ['start', 'type'],
                    'q': ['cite'],
                    'p': ['class'],
                    'table': ['summary', 'width'],
                    'td': ['abbr', 'axis', 'colspan', 'rowspan', 'width'],
                    'th': ['abbr', 'axis', 'colspan', 'rowspan', 'scope', 'width'],
                    'ul': ['type'],
                    'span': ['class','style','lang','xml:lang']
                },
                protocols: {
                    'a': {'href': ['ftp', 'http', 'https', 'mailto', '__relative__']},
                    'blockquote': {'cite': ['http', 'https', '__relative__']},
                    'img': {'src' : ['http', 'https', '__relative__']},
                    'q': {'cite': ['http', 'https', '__relative__']}
                }
            }
        }
    };
</script>
 
<script type="text/javascript" src="http://cdn.aloha-editor.org/latest/lib/aloha.js" data-aloha-plugins="
    common/format,
    common/ui,
    common/abbr,
    common/align,
    common/block,
    common/dom-to-xhtml,
    common/characterpicker,
    common/commands,
    common/contenthandler,
    common/highlighteditables,
    common/horizontalruler,
    common/image,
    common/link,
    common/list,
    common/paste,
    common/table,
    common/undo,
    extra/captioned-image,
    extra/cite,
    extra/draganddropfiles,
    extra/flag-icons,
    extra/formatlesspaste,
    extra/headerids,
    extra/hints,
    extra/listenforcer,
    extra/metaview,
    extra/ribbon,
    extra/textcolor,
    extra/toc,
    extra/validation,
    extra/wai-lang,
    common/contenthandler"></script>
 
<!-- turn an element into editable Aloha continuous text -->
<script type="text/javascript">
Aloha.ready(function() {
    $('#main').aloha();
});

//~ script pour la création d'une nouvelle page avec attribution d'un nom de page et choix d'un template 
</script>
	<section id="menuGlobal">
		<input type="button" id="menuGauche" value="Menu"/>
		<section id="editeur">	
<!--Bouton de mise à jour de la page courante-->
		<input type="button" id="maj" value="Enregistrer"/>
        <a href="http://localhost/max/generateurHTMLcopie/pages/<?php echo $_GET['page']; ?>.html" target="onglet" id="view">Aperçu</a>	

	<!--Création de l'interface de téléchargement d'images-->
			<iframe src="html/fileupload.html" id="iframe" name="iframe"></iframe> 
			<a href="html/fileupload.html" target="iframe" onclick="uploader();"><img src="images/reload.png"/></a> 
			<p id="listeImage"></p>
				
			<input type="button" id="listePage" value="Liste des pages"/>
				<ul id="liste">
				</ul>
				
			<input type="button" id="Image" value="Liste des images uploader"/>
				<ul id="image">
				</ul>
				
			<button id="ajouter" onclick="nouvellePage('formulaire');" >Créer une page</button>
			<section id="formulaire">
			<form id="form" method="post">
				<fieldset>
				<label>Nom de la page</label>
				<input type="text" name="nom" id="nom" placeholder="nom de la page"/>
				<label>Choix du template</label>
				<section id="radio">
					<div class="radio"><input type="radio" name="options" value="template1"/><img src="../template/images/screenshotTemplate1.png" alt="template1" /></div>
					<div class="radio"><input type="radio" name="options" value="template2"/><img src="../template/images/screenshotTemplate2.png" alt="template2" /></div>	
				</section>
				<input type="button" id="publier" value="Créer la page"/>
				</fieldset>	
			</form>	
			</section>
			
			<section id="enregistrement">
				<p>Voulez-vous enregistrer la page courante ?</p>
				<input type="button" id="enregistrer" value="Enregistrer"/>
				<input type="button" id="revenir" value="Revenir à la page"/>
			</section>
			
		</section>
	</section>
<script src="js/ajoutpage.js"></script>
<!--script qui affiche l'iframe du upload après utilisation-->
<script> 
	function uploader() {
	  iframe = document.getElementById('iframe');
	  iframe.src = 'html/fileupload.html';
	} 

<!--script qui récupère les informations inséreés en cliquant sur le bouton publier-->
		//~ $("#publier").click(function(){
		//~ var nomSansEspace=$('#nom').val().replace(/\s/g,"");
		//~ var contenu= { 
            //~ 'nom': nomSansEspace,
          //  //~ 'nom':$("#nom").val(),
            //~ 'option':$("#form input[type='radio']:checked").val()
        //~ };
        //~ $.post("php/envoi.php",contenu)
		//~ .done(function() {	
		//	//~ if (!$('#nom').val().replace(/[^a-z0-9_\-]+/,'').length) {	//teste si le nom de page n'est pas vide		
			//~ if ((nomSansEspace.length==0) || ($('input[type=radio]:checked').length==0)) {        //($('input[name=options]:checked').val().length==0)
				//~ alert("saisissez un nom de page et choisir un template");
			//~ }
			//~ else  {
				//~ window.location="http://localhost/max/generateurHTMLcopie/admin/index.php?page="+nomSansEspace;			
			//~ }
			//~ })
		 //~ 
		//~ .fail(function() {
		  //~ alert( "erreur fatale");
		//~ });
	//~ });

		$("#publier").click(function(){
		$("#enregistrement").show(); 	
		$("#enregistrer").click(function(){			
			var nomSansEspace=$('#nom').val().replace(/\s/g,"");
			var contenu= { 
            'nom': nomSansEspace,
            'option':$("#form input[type='radio']:checked").val()
			};
			console.log(contenu);
			$.post("php/envoi.php",contenu)
			.done(function() {	
	
			if ((nomSansEspace.length==0) || ($('input[type=radio]:checked').length==0)) {        //($('input[name=options]:checked').val().length==0)
				alert("saisissez un nom de page et choisir un template");
			}
			else  {
				window.location="http://localhost/max/generateurHTMLcopie/admin/index.php?page="+nomSansEspace;			
			}
			})
			
		});
		 $("#revenir").click(function(){	
			 $("#enregistrement").hide();
			 $("#formulaire").hide();
			});
		});	
<!--script qui met à jour les nouvelles modifications effectuées sur la page courante-->
	$("#maj").click(function(){		
		var contenuMain= { //Fetch form data
			'nom':"<?php echo $_GET['page']; ?>",
            'content': $("#main").html()
        };   
		$.post("php/majour.php",contenuMain)

		.done(function() {	
		})
		 
		.fail(function() {
		  alert( "erreur fatale");
		});

	});
	
//affiche le menu de gauche quand bouton menu appuyé
	$("#menuGauche").click(function(){		
		$("#editeur").toggle({
			display:"block"
		});
	});
	

	$("#listePage").click(function(){		
		$.post("php/listePages.php", function( data ) {
			$("#liste").html(data);
			$(".gif").on("click",function(){
				$.post("php/corbeille.php", function( data ) {
					$(this.id);
		
				})
			});
	}, "html")});
		

	//~ $("#listePage").click(function(){		
		//~ $.post("php/listePages.php", function( data ) {
			//~ $("#liste").html(data);
			//~ $(".gif").on("click",function(){
				//~ var file= {
					//~ 'filename': $(this.id)
				//~ };
				//~ console.log($(this.id));
				//~ $.post("php/corbeille.php", file) 
			//~ });
	//~ }, "html")});

 
//~ var $test=$('#listePage')
//~ function test1()  {
	//~ console.log("test1");
//~ }
//~ $test.on("click",test1);	

	$("#Image").click(function(){		
		$.post("php/listeImages.php", function( data ) {
			$("#image").html(data);
	}, "html")});
		
</script>


<!--extra/numerated-headers, table des matières-->
