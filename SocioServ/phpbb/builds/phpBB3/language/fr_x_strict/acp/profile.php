<?php
/** 
*
* This file is part of French phpBB translation.
*
* French phpBB translation is free software; you can redistribute it and/or
* modify it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 3 of the License, or
* any later version.
*
* French phpBB translation is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
*
*/

/** 
*
* acp_profile [French]
*
* @package language
* @version $Id: profile.php,v 1.25 2007/07/27 15:00:10 kellanved Exp $
* @translation $Id: profile.php,v 0.25 2007/07/27 22:09:24 xaphos Exp $
* @copyright (c) 2005 phpBB Group and (c) 2007 GeeksOnline.fr
* @license http://www.gnu.org/copyleft/gpl.html GNU General Public License
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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'Champ de profil personnalisé ajouté avec succès.',
	'ALPHA_ONLY'			=> 'Alphanumérique seulement',
	'ALPHA_SPACERS'			=> 'Alphanumérique et espaces',
	'ALWAYS_TODAY'			=> 'Toujours la date actuelle',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Entrez vos options maintenant',
	'BOOL_TYPE_EXPLAIN'		=> 'Défini le type, des cases à cocher ou des boutons radio. Les cases à cocher ne seront affichées que si cela est coché pour un utilisateur donné. Dans ce cas la <strong>seconde</strong> option de la langue sera utilisée. Les boutons radios seront affichés indépendamment de leur valeur.',

	'CHANGED_PROFILE_FIELD'		=> 'Champ de profil modifié avec succès.',
	'CHARS_ANY'					=> 'Tout caractère',
	'CHECKBOX'					=> 'Cases à cocher',
	'COLUMNS'					=> 'Colonnes',
	'CP_LANG_DEFAULT_VALUE'		=> 'Valeur par défaut',
	'CP_LANG_EXPLAIN'			=> 'Description du champ',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'L’explication de ce champ est visible aux utilisateurs.',
	'CP_LANG_NAME'				=> 'Nom/titre du champ visible aux utilisateurs',
	'CP_LANG_OPTIONS'			=> 'Options',
	'CREATE_NEW_FIELD'			=> 'Créer un nouveau champ',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Au moins un champ de profil personnalisé n’a pas encore été traduit. Veuillez entrer l’information requise en cliquant sur le lien “Traduire”.',

	'DEFAULT_ISO_LANGUAGE'			=> 'Langue par défaut [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'Les entrées de langue pour la langue par défaut ne sont pas renseignés pour ce champ de profil.',
	'DEFAULT_VALUE'					=> 'Valeur par défaut',
	'DELETE_PROFILE_FIELD'			=> 'Supprimer le champ de profil',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Êtes-vous sûr de vouloir supprimer ce champ de profil ?',
	'DISPLAY_AT_PROFILE'			=> 'Afficher dans le panneau de contrôle de l’utilisateur',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'L’utilisateur peut modifier ce champ de profil dans le panneau de contrôle de l’utilisateur.',
	'DISPLAY_AT_REGISTER'			=> 'Afficher dans l’écran de l’inscription',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Si cette option est activée, le champ sera affiché lors de l’inscription et pourra être modifié dans le panneau de contrôle de l’utilisateur.',
	'DISPLAY_PROFILE_FIELD'			=> 'Afficher le champ de profil',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Le champ de profil sera affiché dans tous les endroits autorisés dans les réglages de chargements. Si ce réglage est sur “Non”, cela masquera le champ des pages des sujets, des profils et de la liste des membres.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Entrez vos options maintenant, chaque option doit être dans une nouvelle ligne.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Veuillez noter que vous pouvez modifier le texte de vos options et ajouter également de nouvelles options à la fin. Il n’est pas conseillé d’ajouter de nouvelles options entre les options existantes - cela peut avoir comme conséquence que des options erronées soient attribuées à vos utilisateurs. Cela peut également se produire si vous supprimez des options entre autres. La suppression d’options depuis la fin peut avoir comme conséquences que les utilisateurs ayant assigné cet article retournent maintenant sur celui par défaut.',
	'EMPTY_FIELD_IDENT'				=> 'Champ d’identification vide',
	'EMPTY_USER_FIELD_NAME'			=> 'Veuillez entrer un nom/titre pour ce champ',
	'ENTRIES'						=> 'Entrées',
	'EVERYTHING_OK'					=> 'Tout est correct',

	'FIELD_BOOL'				=> 'Booléen (Oui/Non)',
	'FIELD_DATE'				=> 'Date',
	'FIELD_DESCRIPTION'			=> 'Description du champ',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'L’explication de ce champ est visible aux utilisateurs.',
	'FIELD_DROPDOWN'			=> 'Liste déroulante',
	'FIELD_IDENT'				=> 'Identification du champ',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'L’identification du champ sélectionné existe déjà. Veuillez choisir un autre nom.',
	'FIELD_IDENT_EXPLAIN'		=> 'L’identification du champ est le nom pour identifier le champ de profil dans la base de données et les templates.',
	'FIELD_INT'					=> 'Nombres',
	'FIELD_LENGTH'				=> 'Largeur de la barre de saisie',
	'FIELD_NOT_FOUND'			=> 'Champ de profil introuvable.',
	'FIELD_STRING'				=> 'Champ de texte seul',
	'FIELD_TEXT'				=> 'Zone de texte',
	'FIELD_TYPE'				=> 'Type de champ',
	'FIELD_TYPE_EXPLAIN'		=> 'Vous ne pourrez pas modifier le type de champ plus tard.',
	'FIELD_VALIDATION'			=> 'Validation du champ',
	'FIRST_OPTION'				=> 'Première option',

	'HIDE_PROFILE_FIELD'			=> 'Masquer le champ de profil',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Seuls les administrateurs et les modérateurs peuvent voir/remplir ce champ de profil. Si cette option est activée, le champ du profil ne sera affiché que dans les profils des utilisateurs.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'L’identification du champ ne peut contenir que minuscules de a-z et _',
	'INVALID_FIELD_IDENT_LEN'	=> 'L’identification du champ ne peut être long que de 17 caractères',
	'ISO_LANGUAGE'				=> 'Langue [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'Options spécifiques à la langue [<strong>%s</strong>]',

	'MAX_FIELD_CHARS'		=> 'Nombre maximum de caractères',
	'MAX_FIELD_NUMBER'		=> 'Nombre le plus haut autorisé',
	'MIN_FIELD_CHARS'		=> 'Nombre minimum de caractères',
	'MIN_FIELD_NUMBER'		=> 'Nombre le plus bas autorisé',

	'NO_FIELD_ENTRIES'			=> 'Aucune entrée définie',
	'NO_FIELD_ID'				=> 'Aucune ID de champ spécifiée.',
	'NO_FIELD_TYPE'				=> 'Aucun type de champ spécifié.',
	'NO_VALUE_OPTION'			=> 'Option égale à la valeur de non-saisie',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Valeur pour la non-saisie. Si ce champ est obligatoire, l’utilisateur aura une erreur s’il choisit l’option sélectionnée ici.',
	'NUMBERS_ONLY'				=> 'Chiffres seulement (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'Options basiques',
	'PROFILE_FIELD_ACTIVATED'	=> 'Champ de profil activé avec succès.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Champ de profil désactivé avec succès.',
	'PROFILE_LANG_OPTIONS'		=> 'Options spécifiques à la langue',
	'PROFILE_TYPE_OPTIONS'		=> 'Options spécifiques au type de profil',

	'RADIO_BUTTONS'				=> 'Boutons radio',
	'REMOVED_PROFILE_FIELD'		=> 'Champ de profil supprimé avec succès.',
	'REQUIRED_FIELD'			=> 'Champ obligatoire',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Force le champ du profil à être complété par les utilisateurs. Cela affichera le champ de profil à l’inscription et dans le panneau de contrôle de l’utilisateur.',
	'ROWS'						=> 'Lignes',

	'SAVE'							=> 'Sauvegarder',
	'SECOND_OPTION'					=> 'Seconde option',
	'STEP_1_EXPLAIN_CREATE'			=> 'Ici, vous pouvez entrer le premier paramètre basique de votre nouveau champ de profil. Ces informations sont obligatoires pour la seconde étape où vous pourrez définir les options restantes et où vous pourrez prévisualiser et améliorer votre champ de profil plus loin.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Ici, vous pouvez modifier les paramètres basiques de votre champ de profil. Les options nécessaires sont recalculées à la seconde étape, où vous pourrez prévisualiser et tester les réglages modifiés.',
	'STEP_1_TITLE_CREATE'			=> 'Ajouter un champ de profil',
	'STEP_1_TITLE_EDIT'				=> 'Éditer un champ de profil',
	'STEP_2_EXPLAIN_CREATE'			=> 'Ici, vous pouvez définir quelques options courantes que vous pouvez ajuster.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Ici, vous pouvez modifier quelques options courantes.<br /><strong>Veuillez noter que les modifications des champs de profil n’affecteront pas les champs de profil existants et complétés par vos utilisateurs.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Options spécifiques au type du profil',
	'STEP_2_TITLE_EDIT'				=> 'Options spécifiques au type du profil',
	'STEP_3_EXPLAIN_CREATE'			=> 'Depuis que vous avez plusieurs langues installées sur votre forum, vous devez remplir les éléments de langue restants. Le champ de profil fonctionnera avec la langue activée par défaut, vous pouvez aussi compléter les éléments restants de langue plus tard.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Depuis que vous avez plusieurs langues installées sur votre forum, vous pouvez maintenant aussi modifier ou ajouter les éléments restants de langue. Le champ de profil fonctionnera avec la langue activée par défaut.',
	'STEP_3_TITLE_CREATE'			=> 'Définitions restantes de langue',
	'STEP_3_TITLE_EDIT'				=> 'Définitions de la langue',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Entrez une phrase/valeur qui sera affichée par défaut. Laissez vide si vous souhaitez l’afficher vide en premier lieu.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Entrez un texte/valeur qui sera affiché par défaut. Laissez vide si vous souhaitez l’afficher vide en premier lieu.',
	'TRANSLATE'						=> 'Traduire',

	'USER_FIELD_NAME'	=> 'Nom/titre du champ visible aux utilisateurs',

	'VISIBILITY_OPTION'				=> 'Option de visibilité',
));

?>
