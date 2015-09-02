<?php


$aSieveDomains = array('imap.mail.google.com', 'imap.domain2.com','imap.comcast.net');


return array(
	
	
'sieve' => false,
	
'sieve.autoresponder' => true,
	
'sieve.forward' => true,
	
'sieve.filters' => true,
	
'sieve.config.host' => '',
	
'sieve.config.port' => '',
	
'sieve.config.filters-folder-charset' => 'utf-8',
 // [utf7-imap, utf-8]
	
'sieve.config.domains' => $aSieveDomains,


	'links.importing-contacts' => 'http://www.afterlogic.com/wiki/Importing_contacts_(WebMail_Lite)'

	
);