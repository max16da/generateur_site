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


		<section id="editeur">	
<!--Bouton de mise à jour de la page courante-->
		<input type="button" id="maj" value="Mettre à jour"/>
			<button id="ajouter" onclick="nouvellePage('form');" >Créer une page</button>
			<form id="form" method="post">
				<fieldset>
				<label>Nom de la page</label>
				<input type="text" name="nom" id="nom" placeholder="nom de la page"/>
				<label>Choix du template</label>
				<input type="radio" name="options" value="template1" ><img src="../template/images/screenshotTemplate1.png" alt="template1" width="150"/>
				<input type="radio" name="options" value="template2"><img src="../template/images/screenshotTemplate2.png" alt="template2" width="150"/>			
				<input type="button" id="publier" value="Créer la page"/>
				</fieldset>
				
			</form>	

		</section>
	
<script src="js/ajoutpage.js"></script>
<!--script qui affiche l'iframe du upload après utilisation-->



<!--script qui met à jour les nouvelles modifications effectuées sur la page courante-->
<script> 
	$("#maj").click(function(){		
		var contenuMain= { //Fetch form data
			'nom':  $("#nom").val(),
            'content': $("#main").html()
        };   
		$.post("php/majour.php",contenuMain)

		.done(function() {	
			alert("hig");
		})
		 
		.fail(function() {
		  alert( "erreur fatale");
		});

	});
	
</script>



<!--extra/numerated-headers, table des matières-->
