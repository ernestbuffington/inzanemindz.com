<?php

/************************************************************************/
/* PHP-NUKE: Advanced Content Management System                         */
/* ============================================                         */
/*                                                                      */
/* Copyright (c) 2002 by Francisco Burzi                                */
/* http://phpnuke.org                                                   */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/

/*
|-----------------------------------------------------------------------
|	COPYRIGHT (c) 2016 by lonestar-modules.com
|	AUTHOR(s) 			:	Lonestar, Ernest Allen Buffington	
|	COPYRIGHTS 			:	lonestar-modules.com
|	PROJECT 			:	File Repository
|	VERSION 			:	1.1.1
|----------------------------------------------------------------------
*/

define('IN_FILE_REPOSITORY',TRUE);

$module_name = basename(dirname(dirname(__FILE__)));
require_once('mainfile.php');

if(is_mod_admin($module_name)) 
{
	global $db, $admin_file, $currentlang, $userinfo;
    //  INCLUDE THE LANGUAGE FILE FOR THE MODULE.
	include_once(NUKE_MODULES_DIR.$module_name.'/language/lang-english.php');
    //	INCLUDE ALL THE FUNCTION WE NEED FOR THIS MODULE.
	include_once(NUKE_MODULES_DIR.$module_name.'/includes/functions.php');

	if(!isset($_SERVER['HTTP_X_REQUESTED_WITH'])):
		include_once(NUKE_BASE_DIR.'header.php');
		OpenTable();
	endif;
	
    // GLOBALISE THE SETTINGS THROUGH OUT THE ADMIN PANEL
	// $settings = _settings();

	switch($_GET['action'])
	{
		case 'categories':
		case 'deletecat':
		case 'editcat':
		case 'newcat':
		case 'savecat':
			include_once(_FILE_REPOSITORY_ADMIN.'categories.php');
			break;
		case 'files':
		case 'addfile':
		case 'attachfile':
		case 'brokenfiles':
		case 'clientuploads':
		case 'deletefile':
		case 'deleteitem':
		case 'deletescreen':
		case 'downloadfile':
		case 'editfile':
		case 'newfile':
		case 'savefile':
		case 'uploadfile':
		case 'uploadscreen':
			include_once(_FILE_REPOSITORY_ADMIN.'files.php');
			break;

		case 'settings':
		case 'settings_save':
			include_once(_FILE_REPOSITORY_ADMIN.'settings.php');
			break;

		default:
			_admin_navigation_menu();
			break;	
	}

	if (!isset($_SERVER['HTTP_X_REQUESTED_WITH'])):
		CloseTable();
		include_once(NUKE_BASE_DIR.'footer.php');
	endif;

}
else
{
   //	IF THE PERSON TRYING TO ACCESS THIS FILE IS NOT AN ADMIN,
   //	REDIRECT THEM BACK THE MAIN INDEX, JUST GET RID OF THEM LOL.
	_redirect('modules.php?name='.$module_name);
}

?>