
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

</script>

		<section id="editeur">	
		<form action="php/template.php" method="post">
			<fieldset>
			<label>Nom de la page</label>
			<input type="text" name="nom" id="nom" placeholder="nom de la page"/>
			<label>Choix du template</label>
			<input type="radio" name="options[]" id="option" value="template1"><img src="../template/images/template0.png" alt="template" width="200"/>
			<input type="radio" name="options[]" id="option" value="template2"><img src="../images/tpl.png" alt="template" width="200"/>
			</fieldset>
		</form>
		<button id="publier" >Créer une page</button>	
		<a href="" onclick="window.location='http://localhost/max/generateurHTML/pages/'+document.getElementById('nom').value+'.html';" target="_blank" id="preview" >Aperçu</a>	
		<button id="maj" >Mettre à jour</button>
		</section>
		<iframe src="html/fileupload.html" id="iframe" name="iframe" width="550" height="60"></iframe> 
		<a href="html/fileupload.html" target="iframe" onclick="uploader();return true"><img src="images/reload.png"/></a> 
		<p id="listeImage"></p>

		
 <!--
    <aside>
		<?php //require_once('../upload/fileupload.html');?>
	</aside>
--> 
    
<!--script qui affiche l'iframe du upload après utilisation-->
<script> 
	function uploader() {
	  iframe = document.getElementById('iframe');
	  iframe.src = 'html/fileupload.html';
	  //iframe.reload(true);  
	} 
</script>

<!--script qui récupère les informations inséreés en cliquant sur le bouton publier-->
<script> 
	$("#publier").click(function(){
		var contenu= { //Fetch form data
            'content': $("#main").html(),
            'nom': $("#nom").val(),
            'option':$("#option").val()
        };
		$.post("php/envoi.php",contenu)

		.done(function() {
			alert( "la page est créée");
		})
		 
		.fail(function() {
		  alert( "erreur fatale");
		});
	});
    </script>

</body>
</html>
<!--extra/numerated-headers, table des matières-->
