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

/************************************************************************
   Nuke-Evolution: Server Info Administration
   ============================================
   Copyright (c) 2005 by The Nuke-Evolution Team

   Filename      : username.php
   Author(s)     : Technocrat (www.Nuke-Evolution.com)
   Version       : 1.0.0
   Date          : 05.19.2005 (mm.dd.yyyy)

   Notes         : Evo User Block Username Administration
************************************************************************/

if (!defined('ADMIN_FILE')) {
   die ("Illegal File Access");
}

include_once(NUKE_BASE_DIR.'header.php');
OpenTable();
echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=evo-userinfo\">" .$lang_evo_userblock['ADMIN']['ADMIN_HEADER']. "</a></div>\n";
echo "<br /><br />";
echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" .$lang_evo_userblock['ADMIN']['ADMIN_RETURN']. "</a> ]</div>\n";
CloseTable();
echo "<br />";
title(_EVO_USERINFO. "&nbsp;-&nbsp;" .$lang_evo_userblock['USERNAME']['USERNAME']);
OpenTable();
if(!empty($_POST['center'])) {
    $values = array('center' => Fix_Quotes($_POST['center']));
    evouserinfo_write_addon('username', $values);
    echo "<div align=\"center\">\n";
    echo $lang_evo_userblock['ADMIN']['SAVED'];
    echo "</div>";
    global $admin_file;
    echo "<meta http-equiv=\"refresh\" content=\"3;url=$admin_file.php?op=evo-userinfo\">";
} else {
    echo "<div align=\"center\">\n";
    echo "<form name=\"good_afternoon\" method=\"post\" action=\"".$admin_file.".php?op=evo-userinfo&amp;file=username\">";
    $radio[] = array('value' => 'yes', 'text' => $lang_evo_userblock['YES'], 'name' => 'center', 'checked' => ($evouserinfo_addons['username_center'] == 'yes') ? 'CHECKED' : '');
    $radio[] = array('value' => 'no', 'text' => $lang_evo_userblock['NO'], 'name' => 'center', 'checked' => ($evouserinfo_addons['username_center'] == 'yes') ? '' : 'CHECKED');
    echo $lang_evo_userblock['USERNAME']['CENTER']."<br />";
    echo evouserinfo_radio($radio);
    echo "<br /><input type=\"submit\" value=\"".$lang_evo_userblock['ADMIN']['SAVE']."\">";
    echo "</form>";
    echo "</div>";
}
CloseTable();
include_once(NUKE_BASE_DIR.'footer.php');

?>