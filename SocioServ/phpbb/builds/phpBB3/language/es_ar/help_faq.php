<?php
/** 
*
* help_faq.php [Spanish [es_AR]]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group 
* @author 2007-07-31 - Larveando Team (team@larveando.com.ar)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

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
//
// TRANSLATORS NOTE FOR ES_AR LANGUAGE (by Larveando Team)
// There are some translation issues were taken having in mind a better user navigation experience. I.e:
// 'You' was translated as a coloquial 'Vos' instead a more serious 'Su'. Idem 'Your'. In general, a coloquial style was adopted.
// The board speaks in first person. 'Avatar could not be uploaded' was translated as 'No puedo subir el avatar', instead 'No se puede subir el avatar'
// Some common used expressions like Topic, Post (as context used), Ban, Cookies, FAQ, OnLine, Home, Login (as context used), logs etc 
// where _not_ translated in lack of a better common word to use.
// Board was translated 'Sitio' (Site) with uppercase in alussion to the entire system in lack of a better common word to use.
//
$help = array(
	array(
		0	=> '--',
		1	=> 'Problemas acerca del ingreso y registro',
	),
	array(
		0	=> '¿Por qué no puedo ingresar?',
		1	=> 'Existen varias razones por lo cuál esto puede suceder. Primero, asegurate que tu nombre de usuario y contraseña se encuentren correctamente escritos. Si lo estan, comunicate con un administrador para asegurarte de que no has sido banneado. También es posible que el foro esté mal configurado por su dueño y/o tenga fallos en la programación, por lo que necesita ser reparado.',
	),
	array(
		0	=> '¿Por qué me tengo que registrar?',
		1	=> 'No estás obligado a hacerlo, la decisión la toman los administradores y moderadores. En algunos casos necesitarás registrarte para publicar temas y respuestas. Sin embargo; estar registrado te dará acceso a contenidos adicionales y/o ventajas que como usuario invitado no difrutarías, como tener tu gráfico personalizado (avatar), mensajes privados, suscripción a grupos de usuarios, etc. Tan sólo te tomará unos segundos, es muy recomendable.',
	),
	array(
		0	=> '¿Por qué mi sesión de usuario expira automáticamente?',
		1	=> 'Si no activás la casilla <em>Ingresar automáticamente</em> cuando ingresas al foro, tus datos se guardan en una cookie segura, que se elimina al salir de la página o en cierto tiempo. Esto previene que tu cuenta pueda ser usada por alguien más. Para que el sistema te reconozca automáticamente sólo activá la casilla al ingresar. No es recomendable si accedés al foro desde una computadora compartida, e.j. biblioteca, cyber cafes, computadoras de universidades, etc. Si no ves la casilla, significa que el administrador del foro ha deshabilitado la opción.',
	),
	array(
		0	=> '¿Cómo evito que mi nombre de usuario aparezca en las listas de usuarios conectados?',
		1	=> 'Dentro del Panel de Control de Usuario, en “Preferencias de Foros”, encontraras la opción <em>Ocultar mi status online</em>. Habilita la opción con <em>SI</em> y solamente serás visto por administradores, moderadores y tú mismo. Serás contado como un usuario oculto.',
	),
	array(
		0	=> '¡Perdí mi contraseña!',
		1	=> '¡No te asustes, calma!. Si tu contraseña no puede ser recuperada podés desactivarla o cambiarla. Visitá la página de ingreso (login) y hacé click en <em>Olvidé mi contraseña</em>. Seguí las instrucciones y estarás conectado nuevamente en muy poco tiempo.',
	),
	array(
		0	=> '¡Me registré y no puedo ingresar!',
		1	=> 'Primero, verificá tu nombre de usuario y contraseña. Si todo está correcto, hay dos posibles razones. Si el Sistema de Protección Infantil (COPPA) esta activado y cuando te registraste elegiste la opción <em>Soy menor de 13 años</em> entonces tendrás que seguir algunas instrucciones que se te darán para activar la cuenta. Algunos foros disponen que las cuentas deben ser activadas, ya sea por ti mismo o por un administrador, antes de que puedas identificarte; esta información se te brindará al finalizar el proceso de registración. Si se te envió un e-mail, seguí las instrucciones. Si no recibiste ningún e-mail, seguramente la dirección de correo electrónico que proporcionaste no es correcta o tal vez haya sido capturada por un filtro de spam. Si estas seguro que la dirección de e-mail que proporcinaste es correcta, enviá un mensaje al administrador.',
	),
	array(
		0	=> '¡Hace un tiempo me registré, pero ahora no puedo ingresar!',
		1	=> 'Verificá el mensaje que se te envia al registrarte, chequeá tu nombre de usuario y contraseña y volvé a intentarlo. Es posible que un administrador haya desactivado o borrado tu cuenta por alguna razón. También, algunos foros periódicamente remueven sus usuarios que no publicaron mensajes por cierto periodo de tiempo para reducir el peso de la base de datos. Si es así registrate de nuevo y participá de las discuciones.',
	),
	array(
		0	=> '¿Qué es COPPA?',
		1	=> 'COPPA, o Acta de Privacidad y Protección de Niños menores de 13 años del año 1998, es una ley de los Estados Unidos donde se solicita a los sitios de Internet, los cuales son potenciales recolectores de información, que el registro de niños sea escrito y ratificado con el concentimiento de los padres o con algún otro método de reconocimiento de guardia legal, que permita recolectar información personal identificable de un menor de edad.',
	),
	array(
		0	=> '¿Por qué no me puedo registrar?',
		1	=> 'Es posible que el administrador del foro haya banneado tu dirección IP o deshabilitara el nombre de usuario con el cual estas intentando registrarte. También pudo haber deshabilitado el registro de nuevos usuarios. Ponte en contacto con el administrador del sitio.',
	),
	array(
		0	=> '¿Cuál es la función de “Borrar todas las cookies del Sitio”?',
		1	=> '“Borrar todas las cookies del Sitio” borra las cookies creadas por phpBB, las cuales te mantienen autorizado para acceder a determinados recursos del foro y estar conectado al mismo. También proveen funciones como leer el seguimiento de la navegación del foro por el usuario si el administrador ha habilitado la opción. Si estás teniendo problemas con el ingreso o salida del foro, borrar las cookies seguramente ayudará.',
	),
	array(
		0	=> '--',
		1	=> 'Preferencias de usuario y configuraciones',
	),
	array(
		0	=> '¿Cómo puedo cambiar mi configuración?',
		1	=> 'Si sos un usuario registrado, todos tus datos y configuraciones están archivados en nuestra base de datos. Para modificarlos, visitá el Panel de Control de Usuario; el link se encuentra en la parte superior de las páginas del foro. Este sistema te permitirá cambiar tus datos y preferencias.',
	),
	array(
		0	=> '¡El tiempo en los foros no es correcto!',
		1	=> 'Las horas no son correctas, es posible que estés viendo las horas correspondientes a otra zona horaria. Si este es el caso, visitá el Panel de Control de Usuario y definí tu zona horaria de acuerdo a tu ubicación, e.j. Londres, París, Nueva York, Sydney, etc. Recordá que cambiar la zona horaria, como las demás preferencias, debes estar registrado. Si no lo estás, este es un buen momento para hacerlo.',
	),
	array(
		0	=> '¡Cambié la zona horaria en mi perfil, pero el tiempo sigue siendo incorrecto!',
		1	=> 'Si estás seguro que de la zona horaria es correcta al igual que el horario de verano establecido, y la hora sigue siendo incorrecta, entonces la hora almacenada en el servidor es incorrecta. Por favor comunicate con un administrador para corregir el problema.',
	),
	array(
		0	=> '¡Mi idioma no está en la lista!',
		1	=> 'Esto se puede deber a que el administrador no ha instalado el paquete de tu idioma para el foro o nadie ha creado una traducción. Preguntale al administrador si puede instalar el paquete del idioma que necesitas. Si el paquete no existe, sentíte libre de hacer una traducción. Podes encontrar más información en el sitio de phpBB (ver el link al final de la página).',
	),
	array(
		0	=> '¿Cómo puedo poner una imágen abajo de mi nombre de usuario?',
		1	=> 'Hay dos imágenes que pueden aparecer debajo de tu nombre de usuario cuando estes viendo los mensajes. Dependiendo de la plantilla que utilice el foro, la primera imagen está asociada a la posición (rank) del usuario, generalmente en forma de estrellas, bloques o puntos, indicando la cantidad de mensajes que publicaste o el status dentro del foro. La segunda, usualmente una imagen más grande, es conocida como avatar y generalmete es única o personal para cada usuario. Es el administrador quien decide si se pueden usar o no y en que tamaño y peso pueden ser publicadas. En caso de que no este disponible la opción de avatar, comunicate con un administrador y pedí que sea activada.',
	),
	array(
		0	=> '¿Cómo puedo cambiar mi rank?',
		1	=> 'Ranks, los cuales aparecen debajo del nombre de usuario, indican la cantidad de publicaciones realizadas por el usuario o la posición del mismo dentro del foro, e.j. moderadores y administradores. En general, no podés cambiar tu rank directamente ya que está determinado por el administrador. Por favor, no abuses de postear innecesariamente sólo para incrementar tu rank. La mayoría de los foros no toleran esta acción y moderadores o administradores reducirán el número de publicaciones realizadas, hasta incluso pueden bannearte.',
	),
	array(
		0	=> '¡Cuando hago click sobre el link de e-mail de un usuario me pide que me registre!',
		1	=> 'Solo usuarios registrados pueden enviar e-mail a otros usuarios a través del foro, si el administrador habilitara la opción. Esto es para prevenir el uso malicioso del sistema de e-mail por usuarios anónimos.',
	),
	array(
		0	=> '--',
		1	=> 'Publicación de mensajes',
	),
	array(
		0	=> '¿Cómo puedo publicar un mensaje en el foro?',
		1	=> 'Para publicar un nuevo tema en el foro registrate como miembro, haciendo click en el link de registro, generalmente arriba de cada página. Seguramente necesites registrarte antes de poder publicar y reponder. Abajo de cada foro encontrarás una lista de acciones permitidas. Ejemplo: Podéss publicar nuevos temas, Podés votar en las encuestas, etc.',
	),
	array(
		0	=> '¿Cómo puedo editar o borrar un mensaje?',
		1	=> 'A menos que seas administrador o moderador, solo podés borrar o editar tus propios mensajes. Para editarlos debes hacer click en en botón <em>editar</em>, a veces esta opción solo es válida durante un cierto periodo de tiempo. Si alguien respondió tu tema, encontrarás un pequeño texto en el tuyo diciendo que ha sido modificado y las veces que lo has hecho. No aparece si fue un moderador o el administrador el que lo editó, aunque la mayoria de las veces dejan un mensaje aclaratorio. Los usuarios normales no podrán borrar sus temas luego de que alguien haya respondido el mismo.',
	),
	array(
		0	=> '¿Cómo puedo agregar una firma a mi mensaje?',
		1	=> 'Para añadir una firma a tus mensajes debes crearla en el Panel de Control de Usuario. Una vez creada, activás la opción <em>Añadir firma</em> cuando publiques un mensaje. Puedes asignar una firma por defecto a todos tus mensajes activando la casilla correcta en tu perfil. Para dejar de añadirla en los mensajes, debes desactivar la la opción <em>Añadir firma</em> dentro del perfil.',
	),
	array(
		0	=> '¿Cómo creo una encuesta?',
		1	=> 'Cuando iniciás un nuevo tema o editas el primer mensaje del mismo, debes hacer click en la etiqueta “Agregar Encuesta” debajo del formulario de publicación; si no la visualizas, significa que no posees los permisos apropiados para crear encuestas. Ingresá un título y al menos dos opciones en el campo apropiado, asegurandote de que cada opción se encuentre en la correspondiente línea del formulario. También puedes elegir el número de opciones que el usuario puede seleccionar en la etiqueta “Opciones por usuario”, el tiempo límite en días para la encuesta (0 para duración infinita) y por último la opción de permitir a lo usuarios cambiar su votos.',
	),
	array(
		0	=> '¿Por qué no puedo añadir más opciones a la encuesta?',
		1	=> 'El límite para opciones de una encuesta es fijado por el administrador. Si sientes que necesitas añadir más opciones de las permitidas a la encuesta, comunicate con el administrador del foro.',
	),
	array(
		0	=> '¿Cómo edito o borro una encuesta?',
		1	=> 'Como en los mensajes, las encuestas solo pueden ser modifiacadas por su creador original, un moderador o un administrador. Para editar una encuesta, hace click para editar el primer mensaje del tema; este siempre esta asociado a la encuesta. Si nadie ha votado, los usuarios pueden borrar la encuesta o editar las opciones. Sin embargo, si algún miembro ha votado, solo moderadores o administradordes pueden editar o borrar la encuesta. Esto evita que las encuestas sean cambiadas a mitad de la votación.',
	),
	array(
		0	=> '¿Por qué no puedo acceder a algún foro?',
		1	=> 'Algunos foros pueden estar limitados para ciertos usuarios o grupos y para visualizar, leer, publicar o llevar a cabo otra acción allí necesitas una autorización especial. Comunicate con un moderador o administrdor del foro para que se te conceda el acceso.',
	),
	array(
		0	=> '¿Por qué no puedo agregar archivos adjuntos?',
		1	=> 'Los permisos para adjuntar archivos son individuales para cada foro, grupo, usuario y son cedidos por el administrador. Tal vez el administrador no permite adjuntar archivos en el foro en que te encuentras ó solo ciertos grupos pueden hacerlo. Comunicate con un administrador si no estás seguro de por qué no puedes adjuntar archivos.',
	),
	array(
		0	=> '¿Por qué recibí una advertencia?',
		1	=> 'Los administradores de cada foro tienen su propio conjunto de reglas para su sitio. Si has roto alguna regla, tal vez recibas una advertencia. Por favor recuerda que esto es una decisión del administrador del foro, y phpBB Group no tiene nada que ver con las advertencias dadas en este sitio. Comunicate con el administrador del foro si no estas seguro de por qué fuiste advertido.',
	),
	array(
		0	=> '¿Cómo puedo reportar un mensaje a un moderador?',
		1	=> 'Si el administrador lo permite, deberías ver un botón para reportar mensajes cerca del mismo. Haciendo click sobre el botón, el foro te llevará y guiará a través de ciertos pasos necesarios para reportar el mensaje.',
	),
	array(
		0	=> '¿Para qué sirve el boton "Guardar" en la publicación de temas?',
		1	=> 'Esto te permitirá guardar borradores que serán completados y enviados más tarde. Para recargar un borrador guardado, visitá el Panel de Control de Usuario.',
	),
	array(
		0	=> '¿Por qué mis mensajes necesitan ser aprobados?',
		1	=> 'El administrador del foro tal vez ha decidido que los mensajes publicados en el foro, en el que estas posteando, necesiten ser revisados antes de aprobarlos. También es posible que el administrador te haya ubicado en un grupo de usuarios cuyos mensajes necesitan ser revisados antes de aprobarlos. Por favor comunicate con el adminsitrador para más información al respecto.',
	),
	array(
		0	=> '¿Cómo hago para reactivar un tema?',
		1	=> 'Podés hacerlo dándole click al link que dice the “Reactivar tema” cuando estés viendo el mismo, puedes “reactivar” el tema al principio de la primer página. Sin embargo, si no lo visualizás, entonces el tema reactivado ha sido deshabilitado o el tiempo para poder reactivarlo no ha sido alcanzado aún. También es posible reactivar un tema respondiendo al mismo, sin embargo leé las reglas del foro antes de hacerlo.',
	),
	array(
		0	=> '--',
		1	=> 'Formatos y tipos de temas',
	),
	array(
		0	=> '¿Qué es el código BBCode?',
		1	=> 'BBcode es una implementación especial de HTML, ofrece un gran control de formato de los objetos particulares de las publicaciones. El uso de BBCode debe ser habilitado por el administrador, pero también puede ser deshabilitado del formulario de posteo. BBCode a si mismo es similar en estilo al HTML, pero los tags se encuentran encerrados entre corchetes [ y ] en lugar de &lt; y &gt;. Para más información puedes ver el manual de BBCode. El enlace aparece cada vez que vas a publicar un mensaje.',
	),
	array(
		0	=> '¿Puedo usar HTML?',
		1	=> 'No. No es posible publicar en HTML. Muchos de los formatos y acciones que se pueden ejecutar utilizando HTML pueden ser aplicados utilizando BBCodes.',
	),
	array(
		0	=> '¿Qué son los emoticones?',
		1	=> 'Los emoticones son pequeñas imagenes que pueden ser utilizadas para expresar un sentimiento con un pequeño código, e.j. :) denota felicidad, mientras que :( denota tristeza. La lista completa de emoticones puede verse en el formulario de publicación. Tratá de no abusar del uso de emoticones, pues pueden hacer que un post se vuelva muy díficil de leer y un moderador remueva el tema o los emoticones del mensaje. El administrador puede fijar un límite para el número de emoticones a utilizarse en un mensaje.',
	),
	array(
		0	=> '¿Puedo publicar imágenes?',
		1	=> 'Si, las imágenes se pueden mostrar en tus mensajes. Si el administrador permite adjuntar archivos, podés subir la imágen directamente al foro. De otra manera, debes guardar primero tu foto en un servidor de acceso público, e.j. http://www.ejemplo.com/mi-imagen.gif. No podés publicar imágenes que se encuentren en tu computadora (a menos que sea un servidor de acceso público) ni tampoco las que se encuentren guardadas bajo mecánismos de autentificación, e.j. hotmail o yahoo correo, sitios protegidos por contraseñas, etc. Para exhibir imágenes utilizá el BBCode cuya etiqueta es [img].',
	),
	array(
		0	=> '¿Qué son los anuncios globales?',
		1	=> 'Los anuncios globales contienen información importante y deberías leerlos cada vez que sea posible. Éstos aparecerán al principio de cada foro y en el Panel de Control de Usuario. Los permisos para anuncios globales son otorgados por el administrador.',
	),
	array(
		0	=> '¿Qué son los anuncios?',
		1	=> 'Los anuncios muchas veces contienen información importante sobre el foro que te encuentras leyendo y deberías leerlos cada vez que sea posible. Los anuncios aparecen al principio de cada página en el foro donde se publicaron. Como en los anuncios glabales, los permisos para anuncios son otorgados por el administrador.',
	),
	array(
		0	=> '¿Qué son los temas fijos o adheridos?',
		1	=> 'Los temas fijos o adheridos aparecen en el foro por debajo de los anuncios y solo en la primer página. Muchas veces son importantes por lo que deberías leerlos cada vez que sea posible. Como en los anuncios glabales y anuncios, los permisos para fijar un tema son otorgados por el administrador.',
	),
	array(
		0	=> '¿Qué son los temas cerrados?',
		1	=> 'Los temas cerrados son temas donde los usuarios ya no pueden responder y las encuestas allí contenidas terminaron automáticamente. Los topics pueden ser cerrados por muchas razones. Esta decisión es tomada por un administrador o un moderador. Tal vez puedas cerrar tus propios temas dependiendo de los permisos que te hayan concedido los administradores.',
	),
	array(
		0	=> '¿Qué son los íconos para los temas?',
		1	=> 'Son imágenes elegidas por el autor del tema para indicar el contenido del mismo. La posibilidad de usar íconos en los mensajes depende de los permisos otorgados por el administrador.',
	),
	array(
		0	=> '--',
		1	=> 'Niveles de usuario y grupos',
	),
	array(
		0	=> '¿Qué son los Administradores?',
		1	=> 'Los Administradores son los miembros asignados con el mayor nivel de control sobre el foro entero. Estos miembros pueden controlar todas las acciones y configuraciones del foro, incluyendo configuraciones de permisos, banneo de usuarios, creación de grupos usuarios y moderadores, etc. Dependen del fundador del foro y de los permisos que éste les ha dado. Ellos también tienen todas las capacidades de moderación en cada uno de los foros, dependiendo de las configuraciones realizadas por el fundador del sitio.',
	),
	array(
		0	=> '¿Qué son los Moderadores?',
		1	=> 'Los Moderadores son individuos (o grupos de individuos) que cuidan el foro día a día. Tienen la autoridad para editar o borrar mensajes, cerrarlos, abrirlos, moverlos, borrar y separar temas en el foro que moderan. Generalmente, los moderadores están presentes para evitar que los usuarios se salgan del tema tratado o publiquen spam y/o contenido malicioso.',
	),
	array(
		0	=> '¿Qué son los Grupos de Usuarios?',
		1	=> 'Los Grupos de Usuarios son conjuntos de usuarios que dividen a la comunidad en sectores manejables con los cuales puede trabajar los administradores del foro. Cada usuario puede pertenecer a varios grupos y cada grupo puede tener diferentes permisos. Esto provee de una fácil manera, a los administradores, de cambiar los permisos para muchos usuarios a la vez, tales como cambiar permiso de moderador o garantizar el acceso a foros privados a los usuarios.',
	),
	array(
		0	=> '¿Donde están los Grupos de Usuarios y como me les puedo unir?',
		1	=> 'Podés ver todos los Grupos de usuarios a través del link "Grupos de Usuarios". Si deseas unirte a algún grupo, podés proceder haciendo click en el botón apropiado. No todos los grupos tienen libre acceso. Sin embargo, algunos requieren aprobación para poder unirse, otros están cerrados y algunos son ocultos. Si el grupo se encuentra abierto, podés unirte haciendo click en el botón correspondiente. Si el grupo requiere de aprobación para unirse, podés solicitar la membresía haciendo click en el botón correspondiente. El responsable del grupo deberá aprobar tu solicitud y seguramente te preguntará por qué deseas hacerlo. Por favor no molestes continuamente al Responsable de Grupo si rechaza tu solicitud; seguramente tenga sus razones.',
	),
	array(
		0	=> '¿Cómo me convierto en Responsable del Grupo?',
		1	=> 'El Responsable de un grupo es asignado por el administrador al crear el grupo. Si estás intersado en crear un grupo de usuarios, tu primer punto de contacto debe ser el administrador; prueba enviandole un mensaje privado.',
	),
	array(
		0	=> '¿Por qué algunos Grupos de Usuarios aparecen en diferentes colores?',
		1	=> 'El administrador del foro tiene la posibilidad de asignar un color a los miembros de un grupo para hacer más fácil su identificación.',
	),
	array(
		0	=> '¿Qué es un “Grupo de Usuarios predeterminado”?',
		1	=> ' Si sos miembro de mas de un grupo tu grupo por omision se usa para determinar que color y rango se mostrara por omision. El administrador del Sitio debe darte permisos para cambiar tu grupo por omision mediante tu Panel de Control de Usuario.',
	),
	array(
		0	=> '¿Qué es el link “El equipo”?',
		1	=> 'Esta página te provee la lista completa de los miembros del staff, incluyendo los administradores y moderadores del foro y otros detalles, como los foros que se encargan de moderar cada uno.',
	),
	array(
		0	=> '--',
		1	=> 'Mensajería privada',
	),
	array(
		0	=> '¡No puedo enviar un mensaje privado!',
		1	=> 'Hay tres razones posibles; no estas registrado y/o no identificado, el administrador del foro ha desabilitado la opción de mensajes privados para todos los usuarios, ó el administrador ha deshabilidato para vos la opción de enviar mensajes. Comunicate con un administrador para más información.',
	),
	array(
		0	=> '¡Sigo recibiendo mensajes privados no deseados!',
		1	=> 'Podés bloquear a un usuario para que no te pueda enviar mensajes dentro de las opciones del Panel de Control de Usuario. Si estás recibiendo mensajes maliciosos u ofensivos de un usuario en particular comunicate con un administrador, es él quien tiene el poder para evitar que un usuario no pueda enviar mensajes privados a todos los demás.',
	),
	array(
		0	=> '¡Recibí spam o correos maliciosos de alguien en este foro!',
		1	=> 'Estamos apenados de oír eso. Como característica el formulario de e-mail incluye protectores para controlar quién ha enviado tales mensajes, por lo tanto, podés enviarle un e-mail al administrador del foro una copia completa del mensaje que recibiste. Es muy importante que incluya la cabecera porque contiene los datos del usuario que envió el e-mail. El administrador puede tomar acciones.',
	),
	array(
		0	=> '--',
		1	=> 'Amigos y Enemigos',
	),
	array(
		0	=> '¿Qué es la lista de Mis Amigos y Enemigos?',
		1	=> 'Podés utilizar la lista para organizar otros miembros del foro. Los miembros añadidos a tu lista de Amigos podrán verse en en Panel de Control de Usuario para un rápido acceso a ver si están conectados y poder así enviarles un mensaje privado. Según la plantilla que utilice el foro, los mensajes de estos usuarios pueden visualizarse resaltados. Si añadís un usuario a tu lista de Enemigos, todos sus mensajes serán ocultados.',
	),
	array(
		0	=> '¿Cómo puedo agregar ó borrar usuarios de mi lista de Amigos y Enemigos?',
		1	=> 'Podés añadir usuarios a tu lista de dos maneras. En cada perfil de usuario hay un link para añadirlo a tu lista de Amigos y/o Enemigos. Otra alternativa es desde el Panel de Control de Usuario, añadiendo un usuario directamente ingresando su nombre. También podés remover usuarios de tu lista desde esta misma página.',
	),
	array(
		0	=> '--',
		1	=> 'Búsqueda en los foros',
	),
	array(
		0	=> '¿Cómo puedo buscar en uno o varios foros?',
		1	=> 'Ingresando un término de búsqueda en el campo correspondiente del buscardor del index, foro ó en los temas. Podés acceder a búsquedas avanzadas haciendo click en el link “Busqueda Avanzada” que está disponible en todas las páginas del foro. La manera de acceder a la búsqueda depende del estilo utilizado.',
	),
	array(
		0	=> '¿Por qué mi búsqueda me devuelve ningún resultado?',
		1	=> 'Probablemente tu búsqueda fue muy general e incluye muchos términos comunes que no son indexados por phpBB3. Sé más específico y utilizá las opciones disponibles en la búsqueda avanzada.',
	),
	array(
		0	=> '¿Por qué mi búsqueda me devuelve una página en blanco?',
		1	=> 'La búsqueda devolvió muchos resultados para ser procesados por el servidor. Utiliza “Busqueda Avanzada” y se más específico en los términos y foros a buscar.',
	),
	array(
		0	=> '¿Cómo busco miembros?',
		1	=> 'Visitá el link “Miembros” y hace click en el link “Buscar un usuario”.',
	),
	array(
		0	=> '¿Como puedo encontrar mis propios mensajes y temas?',
		1	=> 'Podés encontrar tus mensajes haciendo click en  “Mostrar tus posts” en el Panel de Control de Usuario o a través de tu propio perfil. Para buscar tus temas, utilizá la página de búsqueda avanzada y completa las opciones apropiadas.',
	),
	array(
		0	=> '--',
		1	=> 'Suscripción y Señalado de temas',
	),
	array(
		0	=> '¿Cúal es la diferencia entre señalar y suscribirme a un tema?',
		1	=> 'Señalar un tema en phpBB3 es como señalar ó marcar un sitio en tu navegador. No se te avisa cuando hay una actualización o respuesta, pero puedes seguir visitando el tema para ver las modificaciones más tarde. Al suscribirte, a diferencia de señalar, se te avisará, de diversos métodos, de actualizaciones en los temas y foros que hayas seleccionado.',
	),
	array(
		0	=> '¿Cómo me suscribo a un foro o tema específico?',
		1	=> 'Para suscribirte a un foro en especial, debés hacer click en el link “Suscribir Foro”. Para suscribirte a un tema, debes activar la casilla “Subscribir” cuando respondes el mismo ó hacer click en el link “Subscribir topic”.',
	),
	array(
		0	=> '¿Cómo borro mis suscripciones?',
		1	=> 'Para eliminar tus suscripciones, debés ingresar al Panel de Control de usuario y  hacer clik en la etiqueta “Organizar suscripciones”.',
	),
	array(
		0	=> '--',
		1	=> 'Archivos Adjuntos',
	),
	array(
		0	=> '¿Qué archivos adjuntos son permitidos en este foro?',
		1	=> 'Cada foro puede permitir o no cierto tipos de archivos adjuntos. Si no estás seguro de que tipos de archivos se pueden cargar comunicate con un administrador para obtener más información.',
	),
	array(
		0	=> '¿Cómo encuentro todos mis archivos adjuntos?',
		1	=> 'Para encontrar la lista de tus archivos adjuntos, debes ingresar al Panel de Control de Usuario y hacer click en la etiqueta “Organizar adjuntos”.',
	),
	array(
		0	=> '--',
		1	=> 'Acerca de phpBB3',
	),
	array(
		0	=> '¿Quién programó este foro?',
		1	=> 'Esta aplicación (en su forma original) es desarrollada, publicada y contiene derechos de autor pertenecientes a <a href="http://www.phpbb.com/">phpBB Group</a>. Está hecho bajo la GNU Licencia Pública General y es de libre distribución. Ver el link para más detalles.',
	),
	array(
		0	=> '¿Por qué este foro no tiene X cosa?',
		1	=> 'Este foro fué escrito y licenciado a través de phpBB Group. Si creés que debería tener alguna otra opción o característica visitá phpbb.com y mirá lo que el phpBB Group tiene que decir. Por favor no publiques temas solicitando nuevas características en los foros de phpBB.com, ya que el Grupo usa sourceforge para manejar la programación de nuevas características. Por favor, leé los foros y mirá cual es nuestra posición con respecto a nuevas características, si es que la hay, y luego seguí los procedimientos allí descriptos.',
	),
	array(
		0	=> '¿A quién puedo contactar acerca de abusos o usos ilegales relacionados con este foro?',
		1	=> 'Cada uno de los administradores que figuran en la lista del staff donde dice “El Equipo” es un contacto apropiado para enviar tus quejas. Si así no obtienés respuesta deberías tratar de contactar al dueño del dominio (efectúe una <a href="http://www.google.com/search?q=whois">búsqueda whois</a>) o, si este foro corre sobre un dominio grátis (Yahoo!, free.fr, f2s.com, etc.), el departamento o administración de abusos de ese servicio. Por favor, tené en cuenta que el Grupo phpBB <strong>carece de cualquier tipo de control</strong> y no puede ser de ninguna manera responsable sobre cómo, donde o por quién este sistema de foros es usado. No tiene ningún sentido contactar al Grupo phpBB en relación a asuntos legales (difamación, responsabilidad, deformación de comentarios, etc.) que no sean con respecto al sitio phpbb.com o la discreción misma del software phpBB. Si enviás correo al Grupo phpBB <strong>respecto del uso de terceras partes</strong> de este software esté dispuesto a recibir una respuesta cortante o directamente no recibir respuesta.',
	),
);

?>