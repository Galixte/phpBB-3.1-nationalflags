<?php
/**
*
* National Flags extension for the phpBB Forum Software package.
* French translation by Galixte (http://www.galixte.com)
*
* @copyright (c) 2015 RMcGirr83
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

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
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_FLAGS_EXPLAIN'					=> 'Sur cette page il est possible d’ajouter, modifier et supprimer les différents drapeaux.',
	'ACP_NO_UPLOAD'						=> '<br><strong>Pour utiliser ses propres images il est nécessaire de les envoyer dans le répertoire : ./ext/rmcgirr83/nationalflags/flags avant d’ajouter tout nouveau drapeau.  Chaque fichier image envoyé doit comporter un nom en minuscules, tel que par exemple : fr.gif</strong>.',
	'ACP_FLAGS_DONATE'					=> 'Pour soutenir le développement de cette extension, il est possible de faire un <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=S4UTZ9YNKEDDN&item_name=National%20Flags" onclick="window.open(this.href); return false;"><strong>don</strong></a>.',
	'ACP_FLAG_USERS'					=> 'Nombre d’utilisateurs',

	//Add/Edit Flags
	'FLAG_DEFAULT'						=> 'Drapeau par défaut',
	'FLAG_DEFAULT_EXPLAIN'				=> 'Propose un drapeau en première position du sélecteur de drapeaux du profil de l’utilisateur si celui-ci n’en a pas encore sélectionné un.',
	'FLAG_EDIT'							=> 'Modifier un drapeau',
	'FLAG_NAME'							=> 'Nom du drapeau',
	'FLAG_NAME_EXPLAIN'					=> 'Le nom du drapeau. Le titre du drapeau sera affiché comme indiqué ici.',
	'FLAG_IMG'							=> 'Nom de l’image',
	'FLAG_IMG_EXPLAIN'					=> 'Le nom de l’image, tel que par exemple : fr.gif. Les nouvelles images doivent être téléchargées dans le répertoire : ext/rmcgirr83/nationalflags/flags.',
	'FLAG_IMAGE'						=> 'Image du drapeau',
	'FLAG_ADD'							=> 'Ajouter un nouveau drapeau',
	'FLAG_UPLOAD'						=> 'Envoyer un drapeau',
	'FLAG_UPLOAD_NOTICE'				=> 'L’envoi de fichier image va écraser un fichier image déjà présent sur le serveur si celui-ci existe. Ce système <strong>est</strong> sensible à la casse.',
	'FLAG_UPLOAD_NO_OVERWRITE'			=> 'Il n’est pas possible d’écraser un fichier image déjà existant et portant le même nom et extension, comme indiqué ci-dessous.',
	'FLAG_FOUND'						=> 'Drapeau trouvé',
	'IMAGES_ON_SERVER'					=> 'Noms d’image sur le serveur',

	//Settings
	'FLAGS_REQUIRED'					=> 'Champ obligatoire',
	'FLAGS_REQUIRED_EXPLAIN'			=> 'Permet d’obliger à sélectionner son drapeau aux nouveaux utilisateurs enregistrés et aux utilisateurs qui consultent leur profil.',
	'FLAGS_DISPLAY_MSG'					=> 'Afficher un message',
	'FLAGS_DISPLAY_MSG_EXPLAIN'			=> 'Permet d’afficher un message demandant à sélectionner un drapeau aux utilisateurs.',
	'FLAGS_NUM_DISPLAY'					=> 'Nombre de drapeaux',
	'FLAGS_NUM_DISPLAY_EXPLAIN'			=> 'Permet de saisir le nombre de drapeaux à afficher sur la page de l’index du forum.',
	'FLAGS_ON_INDEX'					=> 'Afficher sur l’index',
	'FLAGS_ON_INDEX_EXPLAIN'			=> 'Permet d’afficher les drapeaux des utilisateurs sur la page de l’index du forum.',
	'FLAGS_DISPLAY_OPTIONS'				=> 'Options d’affichage',
	'FLAGS_DISPLAY_VIEWFORUM'			=> 'Afficher les drapeaux sur la page de la vue des sujets dans les forums',
	'FLAGS_DISPLAY_FORUMROW'			=> 'Afficher les drapeaux sur la page de l’index du forum',
	'FLAGS_DISPLAY_SEARCH'				=> 'Afficher les drapeaux sur la page de la recherche de messages',
	'FLAGS_DISPLAY_MEMBERLIST'			=> 'Afficher les drapeaux sur la page de la liste des membres',
	'FLAGS_DISPLAY_TO_GUESTS'			=> 'Afficher les drapeaux aux invités',
	'FLAGS_DISPLAY_TO_GUESTS_EXPLAIN'	=> 'Permet d’afficher les drapeaux aux invités et aux robots.',

	'FLAGS_VIEWTOPIC_POSITION'			=> 'Emplacement du drapeau',
	'FLAGS_VIEWTOPIC_POSITION_EXPLAIN'	=> 'Permet de choisir l’emplacement des drapeaux.',
	'FLAG_POSITION_AFTER_AVATAR'		=> 'Après l’avatar de l’utilisateur', //1
	'FLAG_POSITION_BEFORE_AVATAR'		=> 'Avant l’avatar de l’utilisateur', //2
	'FLAG_POSITION_AFTER_USER_NAME'		=> 'Après le nom de l’utilisateur', //3
	'FLAG_POSITION_BEFORE_USER_NAME'	=> 'Avant le nom de l’utilisateur', //4
	'FLAG_POSITION_ABOVE_RANK'			=> 'Au-dessus du rang de l’utilisateur', //5
	'FLAG_POSITION_BELOW_RANK'			=> 'En dessous du rang de l’utilisateur', //6
	'FLAG_POSITION_AFTER_PROFILE_FIELDS'	=> 'Après les champs personnalisés du profil', //7
	'FLAG_POSITION_BEFORE_PROFILE_FIELDS'	=> 'Avant les champs personnalisés du profil', //8
	'FLAG_POSITION_AFTER_CONTACT_FIELDS'	=> 'Après les champs des contacts', //0

	//Logs, messages and errors

	'MSG_FLAGS_DELETED'					=> 'Ce drapeau a été supprimé.',
	'MSG_CONFIRM'						=> '<strong>Êtes-vous sûr de vouloir supprimer ce drapeau ?</strong>',
	'MSG_FLAG_CONFIRM_DELETE'			=> array(
		1	=> '<br><strong>%d</strong> utilisateur a sélectionné ce drapeau et devra en choisir un autre si celui-ci est supprimé.',
		2	=> '<br><strong>%d</strong> utilisateurs ont sélectionné ce drapeau et devront en choisir un autre si celui-ci est supprimé.',
	),
	'MSG_FLAG_EDITED'					=> 'Le drapeau a été modifié.',
	'MSG_FLAG_ADDED'					=> 'Le nouveau drapeau a été ajouté.',
	'FLAG_ERROR_NO_FLAG_NAME'			=> 'Aucun nom de drapeau indiqué, ceci est un champ obligatoire.',
	'FLAG_ERROR_NO_FLAG_IMG'			=> 'Aucune image de drapeau indiquée, ceci est un champ obligatoire.',
	'FLAG_ERROR_NOT_EXIST'				=> 'Le drapeau sélectionné n’existe pas.',
	'FLAG_CONFIG_SAVED'					=> '<strong>Les paramètres des drapeaux nationaux ont été modifiés.</strong>',
	'FLAG_NAME_EXISTS'					=> 'Un drapeau portant ce nom existe déjà',
	'FLAG_SETTINGS_CHANGED'				=> 'Les paramètres des drapeaux nationaux ont été modifiés.',
	'FLAG_IMAGE_GENERAL_UPLOAD_ERROR'	=> 'Impossible d’envoyer le drapeau vers %s. Le fichier image doit déjà exister.',
	'FLAG_IMAGE_DISALLOWED_CONTENT'			=> 'Le transfert a été interrompu car le fichier image a été identifié comme une menace potentielle.',
	'FLAG_IMAGE_DISALLOWED_EXTENSION'		=> 'Ce fichier image ne peut être affiché car l’extension de fichier <strong>%s</strong> n’est pas autorisée.',
	'FLAG_IMAGE_EMPTY_FILEUPLOAD'			=> 'Le fichier est vide.',
	'FLAG_IMAGE_EMPTY_REMOTE_DATA'			=> 'Le fichier sélectionné ne peut être envoyé car les données semblent être incorrectes ou corrompues.',
	'FLAG_IMAGE_IMAGE_FILETYPE_MISMATCH'	=> 'Le type de fichier ne correspond pas : l’extension attendue est : %1$s alors que l’extension fournie est : %2$s.',
	'FLAG_IMAGE_INVALID_FILENAME'			=> '%s est un nom de fichier invalide.',
	'FLAG_IMAGE_NOT_UPLOADED'				=> 'Le fichier ne peut pas être transféré.',
	'FLAG_IMAGE_PARTIAL_UPLOAD'				=> 'Le fichier ne peut pas être totalement transféré.',
	'FLAG_IMAGE_PHP_SIZE_NA'				=> 'Le poids du fichier est trop grand.<br>La limite de poids des fichiers acceptés sur le serveur est paramétrée dans le fichier php.ini et n’a pu être obtenue.',
	'FLAG_IMAGE_PHP_SIZE_OVERRUN'			=> 'Le poids du fichier est trop grand.<br>La limite de poids des fichiers acceptés sur le serveur est paramétrée dans le fichier php.ini et a été atteinte.',
	'FLAG_IMAGE_REMOTE_UPLOAD_TIMEOUT'		=> 'Le fichier image ne peut être transféré car l’erreur suivant a été retournée : « Temps d’attente dépassé ».',
	'FLAG_IMAGE_UNABLE_GET_IMAGE_SIZE'		=> 'Les dimensions du fichier image n’ont pu être déterminées.',
	'FLAG_IMAGE_URL_INVALID'				=> 'L’adresse du fichier image est invalide.',
	'FLAG_IMAGE_URL_NOT_FOUND'				=> 'Le fichier image n’a pu être trouvé.',
	'FLAG_IMAGE_WRONG_FILESIZE'				=> 'Le poids du fichier image doit être compris entre 0 et %1d %2s.',
	'FLAG_IMAGE_WRONG_SIZE'					=> 'Le fichier image doit posséder des dimensions strictement égales à %3$s pixels en largeur et %4$s pixels en hauteur. Les dimensions du fichier envoyé sont de %5$s pixels en largeur et %6$s pixels en hauteur.',
	'FLAGS_REQUIRE_540'			=> 'Cette extension requiert une version de PHP au moins égale à 5.4.0 et une version de phpBB équivalente ou supérieure 3.1.4-RC1. Merci de mettre à jour votre version de PHP et/ou de phpBB avant d’utiliser cette extension.',
));
