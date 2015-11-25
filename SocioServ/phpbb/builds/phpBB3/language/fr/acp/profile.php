<?php
/**
*
* acp_profile [Standard french]
*
* @package language
* @version $Id: profile.php,v 1.25 2007/07/27 15:00:10 kellanved Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*/
/**
* CONTRIBUTORS
* Translation made by phpBB-fr.com and phpBB.biz Teams
* http://www.phpbb-fr.com
* http://www.phpbb.biz
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

$lang = array_merge($lang, array(
   'ADDED_PROFILE_FIELD'   	=> 'Le champ personnalisé a été ajouté.',
   'ALPHA_ONLY'   			=> 'Alphanumérique uniquement',
   'ALPHA_SPACERS'   		=> 'Alphanumérique et espaces',
   'ALWAYS_TODAY'   		=> 'Toujours la date actuelle',
   
   'BOOL_ENTRIES_EXPLAIN'   => 'Saisissez vos options',
   'BOOL_TYPE_EXPLAIN'   	=> 'Détermine le type, cases à cocher ou boutons radio. Les cases à cocher seront affichées uniquement si cela est coché pour un utilisateur donné. Dans ce cas, la <strong>seconde</strong> option de langue sera utilisée. Les boutons radios seront affichés indépendamment de leur valeur.',
	
   'CHANGED_PROFILE_FIELD' 			=> 'Le champ du profil a été modifié.',
   'CHARS_ANY'   					=> 'Tout caractère',
   'CHECKBOX'   					=> 'Case à cocher',
   'COLUMNS'   						=> 'Colonnes',
   'CP_LANG_DEFAULT_VALUE'  		=> 'Valeur par défaut',
   'CP_LANG_EXPLAIN'   				=> 'Description du champ',
   'CP_LANG_EXPLAIN_EXPLAIN'   		=> 'L\'explication du champ présenté à l\'utilisateur.',
   'CP_LANG_NAME'   				=> 'Nom du champ/titre présenté à l\'utilisateur',
   'CP_LANG_OPTIONS'   				=> 'Options',
   'CREATE_NEW_FIELD'   			=> 'Créer un nouveau champ',
   'CUSTOM_FIELDS_NOT_TRANSLATED'   => 'Au moins un champ personnalisé du profil n\'a pas encore été traduit. Saisissez l\'information nécessaire en cliquant sur le lien “Traduire”.',
   
   'DEFAULT_ISO_LANGUAGE'   			=> 'Langue par défaut [%s]',
   'DEFAULT_LANGUAGE_NOT_FILLED'   		=> 'Les clés de langue de la langue par défaut ne sont pas remplies pour ce champ du profil',
   'DEFAULT_VALUE'   					=> 'Valeur par défaut',
   'DELETE_PROFILE_FIELD'   			=> 'Supprimer un champ du profil',
   'DELETE_PROFILE_FIELD_CONFIRM'   	=> 'Voulez-vous réellement supprimer ce champ du profil?',
   'DISPLAY_AT_PROFILE'   				=> 'Afficher dans les réglages du profil de l\'utilisateur',
   'DISPLAY_AT_PROFILE_EXPLAIN'   		=> 'L\'utilisateur peut modifier ce champ dans les réglages de son profil.',
   'DISPLAY_AT_REGISTER'   				=> 'Afficher à l\'inscription',
   'DISPLAY_AT_REGISTER_EXPLAIN'   		=> 'Si cette option est activée, le champ sera affiché lors de l\'inscription et pourra être modifié lors de l\'édition du profil.',
   'DISPLAY_PROFILE_FIELD'   			=> 'Afficher le champ dans le profil',
   'DISPLAY_PROFILE_FIELD_EXPLAIN'   	=> 'Le champ de profil sera visible dans tous les endroits autorisés. Si ce réglage est sur “Non”, cela masquera le champ des pages de sujets, des profils et de la liste des membres.',
   'DROPDOWN_ENTRIES_EXPLAIN'   		=> 'Indiquez vos options, une seule par ligne.',
   
   'EDIT_DROPDOWN_LANG_EXPLAIN'   	=> 'Notez que vous pouvez modifier le texte de vos options et ajouter de nouvelles options en fin de liste. Il est déconseillé d\'insérer de nouvelles options entre celles existantes - cela pourrait entraîner l\'attribution de mauvaises options à vos utilisateurs. Ceci peut se produire également si vous supprimez des options parmi d\'autres. La suppression des options depuis la fin de la liste a pour conséquence, pour les utilisateurs les ayant appliquées, le retour à la valeur par défaut.',
   'EMPTY_FIELD_IDENT'   			=> 'L\'identification de champ est vide',
   'EMPTY_USER_FIELD_NAME'   		=> 'Saisissez un nom/titre pour le champ',
   'ENTRIES'   						=> 'Entrées',
   'EVERYTHING_OK'   				=> 'Tout est correct',
   
   'FIELD_BOOL'   				=> 'Booléen (Oui/Non)',
   'FIELD_DATE'   				=> 'Date',
   'FIELD_DESCRIPTION'   		=> 'Description du champ',
   'FIELD_DESCRIPTION_EXPLAIN'  => 'L\'explication du champ présenté à l\'utilisateur.',
   'FIELD_DROPDOWN'   			=> 'Liste déroulante',
   'FIELD_IDENT'   				=> 'Identification du champ',
   'FIELD_IDENT_ALREADY_EXIST'  => 'L\'identification de champ choisie existe déjà. Entrez un autre nom.',
   'FIELD_IDENT_EXPLAIN'   		=> 'L\'identification de champ est un nom qui vous permet d\'identifier le champ du profil dans la base de données et les thèmes.',
   'FIELD_INT'   				=> 'Nombres',
   'FIELD_LENGTH'   			=> 'Longueur de la boîte des entrées',
   'FIELD_NOT_FOUND'   			=> 'Le champ du profil est introuvable.',
   'FIELD_STRING'   			=> 'Champ de texte simple',
   'FIELD_TEXT'   				=> 'Zone de texte',
   'FIELD_TYPE'   				=> 'Type de champ',
   'FIELD_TYPE_EXPLAIN'   		=> 'Vous ne pourrez pas modifier le type de champ plus tard.',
   'FIELD_VALIDATION'   		=> 'Validation du champ',
   'FIRST_OPTION'   			=> 'Première option',
   
   'HIDE_PROFILE_FIELD'   			=> 'Masquer le champ',
   'HIDE_PROFILE_FIELD_EXPLAIN'   	=> 'Seuls les administrateurs et les modérateurs peuvent voir/remplir ce champ. Si l\'option est activée, ce champ ne sera affiché que dans le profil des utilisateurs.',
   
   'INVALID_CHARS_FIELD_IDENT'   	=> 'L\'identification de champ ne peut contenir que des minuscules a-z et _',
   'INVALID_FIELD_IDENT_LEN'   		=> 'La longueur de l\'identification de champ ne peut dépasser 17 caractères',
   'ISO_LANGUAGE'   				=> 'Langue [%s]',
   
   'LANG_SPECIFIC_OPTIONS'   => 'Options spécifiques de langue [<strong>%s</strong>]',
   
   'MAX_FIELD_CHARS'   	=> 'Nombre maximum de caractères',
   'MAX_FIELD_NUMBER' 	=> 'Nombre maximal autorisé',
   'MIN_FIELD_CHARS'   	=> 'Nombre minimum de caractères',
   'MIN_FIELD_NUMBER'   => 'Nombre minimal autorisé',
   
   'NO_FIELD_ENTRIES'   		=> 'Aucune entrée définie',
   'NO_FIELD_ID'   				=> 'Aucun ID de champ spécifié.',
   'NO_FIELD_TYPE'   			=> 'Aucun type de champ spécifié.',
   'NO_VALUE_OPTION'   			=> 'Valeur équivalente à une non-saisie',
   'NO_VALUE_OPTION_EXPLAIN'   	=> 'Valeur de non-saisie. Si le champ est obligatoire, une erreur est affichée lorsque cette valeur est saisie par l\'utilisateur.',
   'NUMBERS_ONLY'   			=> 'Uniquement des chiffres (0-9)',
   
   'PROFILE_BASIC_OPTIONS'   		=> 'Options de base',
   'PROFILE_FIELD_ACTIVATED'   		=> 'Le champ du profil a été activé.',
   'PROFILE_FIELD_DEACTIVATED'   	=> 'Le champ du profil a été désactivé.',
   'PROFILE_LANG_OPTIONS'   		=> 'Options spécifiques de langue',
   'PROFILE_TYPE_OPTIONS'   		=> 'Options spécifiques du type de profil',
   
   'RADIO_BUTTONS'   			=> 'Boutons radio',
   'REMOVED_PROFILE_FIELD'   	=> 'Champ du profil supprimé.',
   'REQUIRED_FIELD'   			=> 'Champ obligatoire',
   'REQUIRED_FIELD_EXPLAIN'   	=> 'Oblige l\'utilisateur à remplir ou à préciser le champ. Ce champ sera affiché à l\'inscription et à l\'édition du profil.',
   'ROWS'   					=> 'Lignes',
   
   'SAVE'   						=> 'Sauvegarder',
   'SECOND_OPTION'   				=> 'Deuxième option',
   'STEP_1_EXPLAIN_CREATE'   		=> 'Ici vous pouvez saisir les premiers paramètres de base du nouveau champ du profil. Ces informations sont requises pour la seconde étape où vous pourrez régler les options restantes et améliorer davantage votre champ de profil.',
   'STEP_1_EXPLAIN_EDIT'   			=> 'Ici vous pouvez modifier les paramètres de base de votre champ de profil. Les options appropriées sont recalculées dans la seconde étape.',
   'STEP_1_TITLE_CREATE'			=> 'Ajouter un champ de profil',
   'STEP_1_TITLE_EDIT'   			=> 'Editer un champ de profil',
   'STEP_2_EXPLAIN_CREATE'   		=> 'Ici vous pouvez définir quelques options courantes que vous pouvez vouloir ajuster.',
   'STEP_2_EXPLAIN_EDIT'   			=> 'Ici vous pouvez modifier quelques options courantes.<br /><strong>Notez que les modifications faites aux champs de profil n\'affecteront pas les valeurs déjà saisies par les utilisateurs.</strong>',
   'STEP_2_TITLE_CREATE'   			=> 'Options spécifiques du type de profil',
   'STEP_2_TITLE_EDIT'   			=> 'Options spécifiques du type de profil',
   'STEP_3_EXPLAIN_CREATE'   		=> 'Comme vous avez plus d\'une langue installée, vous devez aussi remplir les éléments de langue restants. Le champ de profil fonctionnera avec la langue activée par défaut, vous pourrez également remplir ces éléments restants plus tard.',
   'STEP_3_EXPLAIN_EDIT'   			=> 'Comme vous avez plus d\'une langue installée, vous pouvez également modifier ou ajouter les éléments de langue restants. Le champ de profil fonctionnera avec la langue activée par défaut.',
   'STEP_3_TITLE_CREATE'   			=> 'Définitions de langue restantes',
   'STEP_3_TITLE_EDIT'   			=> 'Définitions de langue',
   'STRING_DEFAULT_VALUE_EXPLAIN'   => 'Saisissez une phrase, une valeur par défaut à afficher. Laissez vide si vous préférez ne rien afficher en premier.',
   
   'TEXT_DEFAULT_VALUE_EXPLAIN'   	=> 'Saisissez un texte, une valeur par défaut à afficher. Laissez vide si vous préférez ne rien afficher en premier.',
   'TRANSLATE'   					=> 'Traduire',
   
   'USER_FIELD_NAME'   	=> 'Nom/titre du champ affiché à l\'utilisateur',
   
   'VISIBILITY_OPTION'   => 'Option de visibilité',
));

?>