<?php
/*=======================================================================
 PHP-Nuke: Advanced Web Portal System
 =======================================================================*/
/********************************************************/
/* NukeProject(tm)                                      */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://nukescripts.86it.us                           */
/* Copyright (c) 2000-2005 by NukeScripts Network       */
/********************************************************/
global $db2;
get_lang('Network_Projects');
if(!defined('NETWORK_SUPPORT_ADMIN')) { die("Illegal Access Detected!!!"); }
$result = $db2->sql_query("SELECT * FROM `".$network_prefix."_projects_status` WHERE `status_weight`>'0' ORDER BY `status_id` ASC");
$weight = 0;
while($row = $db2->sql_fetchrow($result)) {
  $xid = intval($row['status_id']);
  $weight++;
  $db2->sql_query("UPDATE `".$network_prefix."_projects_status` SET `status_weight`='$weight' WHERE `status_id`='$xid'");
}
header("Location: ".$admin_file.".php?op=ProjectStatusList");

?>