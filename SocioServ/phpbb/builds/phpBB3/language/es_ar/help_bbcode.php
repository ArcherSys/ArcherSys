<?php
/** 
*
* help_bbcode [Spanish [es_AR]]
*
* @package language
* @copyright (c) 2005 phpBB Group 
* @author 2007-07-31 - Larveando Team (team@larveando.com.ar)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
*/

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$help = array(
	array(
		0 => '--',
		1 => 'Introducci&oacute;n'
	),
	array(
		0 => '&iquest;Qu&eacute; es el c&oacute;digo BBCode?',
		1 => 'BBCode es una implementaci&oacute;n especial del HTML, la forma en la que BBCode se usa es determinada por el administrador. Adem&aacute;s se puede deshabilitar la opci&oacute;n de BBCode en un mensaje, desactivando la casilla correspondiente en el formulario de mensajes. BBCode a si mismo es similar en estilo al HTML, pero los tags se encuentran encerrados entre corchetes [ y ] en lugar de < y > y ofrece un gran control sobre qu&eacute; y c&oacute;mo se visualiza algo. Dependiendo del estilo que utilice el foro, ver&aacute;s que es mucho m&aacute;s f&aacute;cil adicionar BBCodes a tus mensajes desde el &aacute;rea superior de la interfase del formulario de publicaci&oacute;n. Seguramente encontr&aacute;s la siguiente gu&iacute;a muy &uacute;til.'
	),
	array(
		0 => '--',
		1 => 'Formato de texto'
	),
	array(
		0 => '&iquest;C&oacute;mo crear texto en negritas, cursiva o subrayado?',
		1 => 'BBCode incluye etiquetas que te permitir&aacute;n r&aacute;pidamente cambiar el estilo de los textos. Esta acci&oacute;n se puede llevar adelante del siguiente modo: <ul><li>Para crear un texto en negrita debes encerrarlo entre <strong>[b][/b]</strong>, ej. <br /><br /><strong>[b]</strong>Hola<strong>[/b]</strong><br /><br />se convierte en <strong>Hola</strong></li><li>Para subrayar hay que usar <strong>[u][/u]</strong>, por ejemplo:<br /><br /><strong>[u]</strong>Buenos D&iacute;as<strong>[/u]</strong><br /><br />se convierte en <span style="text-decoration: underline">Buenos D&iacute;as</span></li><li>Para escribir en cursiva utilizar <strong>[i][/i]</strong>, ej.<br /><br />Esto es <strong>[i]</strong>Genial!<strong>[/i]</strong><br /><br />se convierte en Esto es <i>Genial!</i></li></ul>'
	),
	array(
		0 => '&iquest;C&oacute;mo cambiar el color o tama&ntilde;o de texto?',
		1 => 'Para cambiar el color o tama&ntilde;o de un archivo se pueden utilizar las siguientes etiquetas. Igualmente hay que tener en cuenta que la apariencia final del texto va a depender del sistema y navegador que estes usando: <ul><li>Para cambiar el color de un texto debes ubicarlo entre <strong>[color=][/color]</strong>. Puedes espec&iacute;ficar el color utilizando su nombre (ej. rojo, azul, amarillo, etc.) o mediante la escritura de su c&oacute;digo hexadecimal, ej. #FFFFFF, #000000. Por ejemplo, para crear un texto en color rojo puedes usar:<br /><br /><strong>[color=red]</strong>Hola!<strong>[/color]</strong><br /><br />o<br /><br /><strong>[color=#FF0000]</strong>Hola!<strong>[/color]</strong><br /><br />ambos se convierten en <span style="color:red">Hola!</span></li><li>Para cambiar el tama&ntilde;o del texto se debe seguir un camino similar utilizando <strong>[size=][/size]</strong>. Esta etiqueta depende de la plantilla utilizada por el foro y/o seleccionada por el usuario, pero lo recomendable es escribir el valor n&uacute;merico del tama&ntilde;o de texto en porcentaje, empezando por 20 hasta llegar a 200 (muy grande). Por ejemplo:<br /><br /><strong>[size=30]</strong>Peque&ntilde;o<strong>[/size]</strong><br /><br />ser&aacute; <span style="font-size:30%;">Peque&ntilde;o</span><br /><br />mientras que:<br /><br /><strong>[size=200]</strong>Grande!<strong>[/size]</strong><br /><br />ser&aacute; <span style="font-size:200%;">Grande!</span></li></ul>'
	),
	array(
		0 => '&iquest;Puedo combinar las etiquetas de formato?',
		1 => 'Si, por supuesto, por ejemplo para llamar la atenci&oacute;n de alguien puedes escribir:<br /><br /><strong>[size=150][color=red][b]</strong>MIRAME!<strong>[/b][/color][/size]</strong><br /><br />se convierte en <span style="color:red;font-size:250%;"><strong>MIRAME!</strong></span><br /><br />No recomendamos escribir demasiados textos como el del ejemplo! Recuerda que est&aacute; en t&iacute;, como usuario, el asegurarte que las etiquetas se encuentren correctamente cerradas. Por ejemplo lo siguiente es incorrecto:<br /><br /><strong>[b][u]</strong>Esto est&aacute; mal<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => 'Haciendo citas de texto o c&oacute;digo'
	),
	array(
		0 => 'Citar texto en las respuestas',
		1 => 'Hay dos formas de citar un texto, haciendo o no referencia.<ul><li>Cuando utilizas la funci&oacute;n Citar para responder un tema debes de notar que el texto es agregado a la ventana de respuesta encerrado entre las etiquetas <strong>[quote=&quot;&quot;][/quote]</strong>. Este m&eacute;todo te permite citar textos haciendo referencia a la persona que lo ha escrito! Por ejemplo para citar una pieza de texto que ha redactado Mr. Blobby debes escribir:<br /><br /><strong>[quote=&quot;Mr. Blobby&quot;]</strong>El texto que redact&oacute; Mr. Blobby va aqu&iacute;<strong>[/quote]</strong><br /><br />El texto resultante a&ntilde;adir&aacute; autom&aacute;ticamente, Mr. Blobby escribi&oacute;: antes del texto actual. Recuerda que <strong>si &oacute; si</strong> debes incluir las comillas &quot;&quot; encerrando el nombre del usuario citado, no son opcionales.</li><li>El segundo m&eacute;todo te permite citar un texto ocultando su redactor. Para hacerlo debes encerrar el texto entre las etiquetas <strong>[quote][/quote]</strong>. Cuando veas el mensaje ver&aacute;s que solamente se muestra el mensaje sin hacer referencia al autor.</li></ul>'
	),
	array(
		0 => 'Escribiendo c&oacute;digo o texto de otro tama&ntilde;o',
		1 => 'Si deseas incluir alguna clase de c&oacute;digo dentro de tus textos debes encasillarlo entre las etiquetas <strong>[code][/code]</strong>, ej.<br /><br /><strong>[code]</strong>&quot;Esto es un c&oacute;digo&quot;<strong>[/code]</strong><br /><br />Todos los formatos incluidos entre las etiquetas <strong>[code][/code]</strong> son conservados al visualizar el mensaje. Se pueden resaltar sintaxis PHP usando <strong>[code=php][/code]</strong> y es recomenddo cuando se publican ejemplos de c&oacute;digos en PHP para mejorar su lectura.'
	),
	array(
		0 => '--',
		1 => 'Creando listas'
	),
	array(
		0 => 'Creando una lista desordenada',
		1 => 'BBCode soporta dos tipos de listas, ordenas y desordenadas. Son esencialmente iguales a las listas HTML. Una lista desordenada muestra cada &iacute;tem uno desp&uacute;es del otro identificado con una vi&ntilde;eta. Para crear una lista desordenada debes utilizar <strong>[list][/list]</strong> definiendo cada item usando <strong>[*]</strong>. Por ejemplo, para armar una lista de tus colores favoritos tienes que escribir:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Rojo<br /><strong>[*]</strong>Azul<br /><strong>[*]</strong>Amarillo<br /><strong>[/list]</strong><br /><br />Se generar&aacute; la siguiente lista:<ul><li>Rojo</li><li>Azul</li><li>Amarillo</li></ul>'
	),
	array(
		0 => 'Creando una lista ordenada',
		1 => 'El segundo tipo de lista, la ordenada, te permite controlar que va luego de cada &iacute;tem. Para crear una lista ordenada debes usar <strong>[list=1][/list]</strong> para crear una lista n&uacute;merica o alternaivamente <strong>[list=a][/list]</strong> una lista alfabetica. Como en las listas desordenadas, los &iacute;tems deben ser identificados usando <strong>[*]</strong>. Por ejemplo:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Ir de compras<br /><strong>[*]</strong>Comprar una computadora nueva<br /><strong>[*]</strong>Llevar la computadora a arreglar cuando se rompe<br /><strong>[/list]</strong><br /><br />generar&aacute; lo siguiente:<ol style="list-style-type: arabic-numbers"><li>Ir de compras</li><li>Comprar una computadora nueva</li><li>Llevar a arreglar la computadora cuando se rompe</li></ol>para una lista alfabetica deber&iacute;as usar:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Primer respuesta posible<br /><strong>[*]</strong>Segunda respuesta posible<br /><strong>[*]</strong>Tercer respuesta posible<br /><strong>[/list]</strong><br /><br />creando<ol style="list-style-type: lower-alpha"><li>Primer respuesta posible</li><li>Segunda respuesta posible</li><li>Tercer respuesta posible</li></ol>'
	),
	array(
		0 => '--',
		1 => 'Creando enlaces'
	),
	array(
		0 => 'Creando un hiperv&iacute;nculo a otro sitio',
		1 => 'phpBB BBCode soporta muchas maneras de crear enlaces a otro sitio.<ul><li>La primera de ella es utilizando las etiquetas <strong>[url=][/url]</strong>, cualquier cosa que escribas luego del signo = ser&uacute; interpretado por el BBCode como una direcci&oacute;n URL. Por ejemplo para crear un enlace a phpBB.com puedes escribir:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Visita phpBB!<strong>[/url]</strong><br /><br />Se generar&aacute; el siguiente enlace, <a href="http://www.phpbb.com/">Visita phpBB!</a> El enlace se abrir&aacute; en una nueva ventana o no, dependiendo de la configuraci&oacute;n del navegador.</li><li>Si prefieres que el enlace aparezca como una simple direcci&oacute;n URL debes usar:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />Se genera de esta forma lo siguiente, <a href="http://www.phpbb.com/">http://www.phpbb.com/</a></li><li>Phpbb incluye una caracter&iacute;stica llamada <i>Links M&aacute;gicos</i>, con lo que se convertir&aacute; el enlace en una direcci&oacute;n URL autom&aacute;ticamente sin necesidad de utilizar ninguna etiqueta. Por ejemplo, tipeando www.phpbb.com en tu mensaje aparecer&aacute; <a href="http://www.phpbb.com/">www.phpbb.com</a> cuando lo publiques.</li><li>Lo mismo ocurre con las direcciones de e-mail, puedes utilizar las etiquetas:<br /><br /><strong>[email]</strong>nadie@dominio.dir<strong>[/email]</strong><br /><br />lo cual se visualizar&aacute; <a href="mailto:nadie@dominio.dir">nadie@dominio.dir</a> o puedes simplemente escribir nadie@dominio.dir dentro de tu mensaje, convirti&eacute;ndose en un enlace.</li></ul>Puedes incluir direcciones URL dentro de los dem&aacute;s BBCodes, como en <strong>[img][/img]</strong> (ver pr&oacute;xima explicaci&oacute;n), <strong>[b][/b]</strong>, etc. Tambi&eacute;n recuerda que est&aacute; en ti asegurarte de que todas las etiquetas est&eacute;n cerradas y ordenadas correctamente, por ejemplo:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br />is <span style="text-decoration: underline">not</span> correct which may lead to your post being deleted so take care.'
	),
	array(
		0 => '--',
		1 => 'Publicando im&aacute;genes y archivos en mensajes'
	),
	array(
		0 => 'Agregando una imagen al mensaje',
		1 => 'phpBB BBCode incluye una etiqueta para poder incorporar im&aacute;genes en los mensajes. Dos cosas importantes para cuando utilices esta etiqueta son; muchos usuarios no aprecian muchas im&aacute;genes dentro de un mensajem y, segundo, &eacute;stas deben estar disponibles en Internet (no puden existir solo en tu computadora, a nebos que se trate de un servidor web!). Para publicar una imagen debes encerrar su direcci&oacute;n URL entre las etiquetas <strong>[img][/img]</strong>. Por ejemplo:<br /><br /><strong>[img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img]</strong><br /><br />Tambi&eacute;n puedes incluir la direcci&oacute;n URL de una imagen entre las etiquetas <strong>[url][/url]</strong> si es que as&iacute; lo deseas, ej.<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img][/url]</strong><br /><br />se convierte en:<br /><br /><a href="http://www.google.com/"><img src="http://www.google.com/intl/en_ALL/images/logo.gif" alt="" /></a>'
	),
	array(
		0 => 'Agregando archivos adjuntos al mensaje',
		1 => 'Los archivos adjuntos ahora pueden ser ubicados en cualquier parte de un mensaje utilizando el nuevo BBCode <strong>[attachment=][/attachment]</strong>, si la funci&oacute;n est&aacute; habilitada por el administrador del foro y si posees los permisos necesarios. Dentro de la pantalla donde escribes los mensajes, encontraras un bot&oacute;n para incluir los archivos adjuntados en el mismo.'
	),
	array(
		0 => '--',
		1 => 'Otros'
	),
	array(
		0 => '&iquest;Puedo agregar mis propias etiquetas?',
		1 => 'Si eres un administrador de este foro y posees los permisos apropiados, puedes agregar nuevos BBCodes desde el Panel del Administrador.'
	)
);

?>