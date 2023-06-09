<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/************************************************************************/
/* PHP-NUKE: Web Portal System                                          */
/* ===========================                                          */
/*                                                                      */
/* Copyright (c) 2002 by Francisco Burzi                                */
/* http://phpnuke.org                                                   */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/
/*         Additional security & Abstraction layer conversion           */
/*                           2003 chatserv                              */
/*      http://www.nukefixes.com -- http://www.nukeresources.com        */
/************************************************************************/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       06/26/2005
      Display Topic Icon                       v1.0.0       06/27/2005
-=[Mod]=-
      Advanced Username Color                  v1.0.5       07/29/2005
      News BBCodes                             v1.0.0       08/19/2005
 ************************************************************************/
 
/* Applied rules: Ernest Allen Buffington (TheGhost) 04/29/2023 5:30 PM
 * NullToStrictStringFuncCallArgRector
 */ 

if (!defined('MODULE_FILE')) {
   die('You can\'t access this file directly...');
}

global $cookie, $userinfo;

$optionbox = "";
$module_name = basename(dirname(__FILE__));
get_lang($module_name);

// we only show the left blocks, else the page gets messed up
$showblocks = 1;

if(!isset($op)) { $op = ''; }

if (isset($sid)) { $sid = intval($sid); } else { $sid = ""; }

if (stristr((string) $_SERVER['REQUEST_URI'],"mainfile")) {
    redirect("modules.php?name=$module_name&file=article&sid=$sid");
} elseif (empty($sid) && !isset($tid)) {
    redirect("index.php");
}

if(is_user()) {
    if(!isset($mode)) { $mode = $userinfo['umode']; }
    if(!isset($order)) { $order = $userinfo['uorder']; }
    if(!isset($thold)) { $thold = $userinfo['thold']; }
    $db->sql_query("UPDATE ".$user_prefix."_users SET umode='$mode', uorder='$order', thold='$thold' where user_id=".intval($cookie[0]));
}

if ($op == "Reply") {
    $display = "";
    if(isset($mode)) { $display .= "&mode=".$mode; }
    if(isset($order)) { $display .= "&order=".$order; }
    if(isset($thold)) { $display .= "&thold=".$thold; }
    redirect("modules.php?name=$module_name&file=comments&op=Reply&pid=0&sid=".$sid.$display);
}

$result = $db->sql_query("select catid, aid, time, title, hometext, bodytext, topic, informant, notes, acomm, haspoll, pollID, score, ratings, ticon FROM ".$prefix."_stories where sid='$sid'");
//Causes trouble, has to be fixed
$numrows = $db->sql_numrows($result);
if (!empty($sid) && $numrows != 1) {
   redirect("index.php");
}
$row = $db->sql_fetchrow($result);
$db->sql_freeresult($result);
$aaid = stripslashes((string) $row['aid']);
$catid = intval($row["catid"]);
$time = $row["time"];
$title = stripslashes((string) check_html($row["title"], "nohtml"));
/*****[BEGIN]******************************************
 [ Mod:     News BBCodes                       v1.0.0 ]
 ******************************************************/
$hometext = decode_bbcode(set_smilies(stripslashes((string) $row["hometext"])), 1, true);
$bodytext = decode_bbcode(set_smilies(stripslashes((string) $row["bodytext"])), 1, true);
$hometext = img_tag_to_resize($hometext);
$bodytext = img_tag_to_resize($bodytext);
/*****[END]********************************************
 [ Mod:     News BBCodes                       v1.0.0 ]
 ******************************************************/
$topic = intval($row["topic"]);
$informant = stripslashes((string) $row["informant"]);
$notes = stripslashes((string) $row["notes"]);
$acomm = intval($row["acomm"]);
$haspoll = intval($row["haspoll"]);
$pollID = intval($row["pollID"]);
$score = intval($row["score"]);
$ratings = intval($row["ratings"]);
/*****[BEGIN]******************************************
 [ Mod:    Display Topic Icon                  v1.0.0 ]
 ******************************************************/
$topic_icon = intval($row["ticon"]);
/*****[END]********************************************
 [ Mod:    Display Topic Icon                  v1.0.0 ]
 ******************************************************/

if (empty($aaid)) {
    redirect("modules.php?name=".$module_name);
}

$db->sql_query("UPDATE ".$prefix."_stories SET counter=counter+1 where sid='$sid'");

$artpage = 1;
$pagetitle = "- $title";
include(NUKE_BASE_DIR."header.php");
$artpage = 0;

formatTimestamp($time);
$title = stripslashes((string) check_html($title, "nohtml"));
$hometext = stripslashes((string) $hometext);
$bodytext = stripslashes((string) $bodytext);
$notes = stripslashes($notes);

if (!empty($notes)) {
    $notes = "<br /><br /><strong>"._NOTE."</strong> <i>$notes</i>";
} else {
    $notes = "";
}

if(empty($bodytext)) {
    $bodytext = "$hometext$notes";
} else {
    $bodytext = "$hometext<br /><br />$bodytext$notes";
}

if(empty($informant)) {
    $informant = $anonymous;
}
/*****[END]********************************************
 [ Mod:    Advanced Username Color             v1.0.5 ]
 ******************************************************/
getTopics($sid);

if ($catid != 0) {
    $row2 = $db->sql_fetchrow($db->sql_query("select title from ".$prefix."_stories_cat where catid='$catid'"));
    $title1 = stripslashes((string) check_html($row2["title"], "nohtml"));
    $title = "<a href=\"modules.php?name=$module_name&amp;file=categories&amp;op=newindex&amp;catid=$catid\"><font class=\"storycat\">$title1</font></a>: $title";
}

/*****[BEGIN]******************************************
 [ Mod:    Display Topic Icon                  v1.0.0 ]
 ******************************************************/
if($topic_icon == 1) {
    $topicimage = '';
}
/*****[END]********************************************
 [ Mod:    Display Topic Icon                  v1.0.0 ]
 ******************************************************/

echo "<table width=\"100%\" border=\"0\"><tr><td valign=\"top\" width=\"100%\">\n";
themearticle($aaid, $informant, $datetime, $title, $bodytext, $topic, $topicname, $topicimage, $topictext);

include_once("modules/$module_name/associates.php");

if (((empty($mode) OR ($mode != "nocomments")) OR ($acomm == 0)) OR ($articlecomm == 1)) {
    @include_once("modules/$module_name/comments.php");
}

echo "</td><td>&nbsp;</td><td valign=\"top\">\n";



if ($multilingual == 1) {
    $querylang = "AND (blanguage='$currentlang' OR blanguage='')";
} else {
    $querylang = "";
}

/* Determine if the article has attached a poll */
if ($haspoll == 1) {
    $url = sprintf("modules.php?name=Surveys&amp;op=results&amp;pollID=%d", $pollID);
    $boxContent = "<form action=\"modules.php?name=Surveys\" method=\"post\">";
    $boxContent .= "<input type=\"hidden\" name=\"pollID\" value=\"".$pollID."\">";
    $boxContent .= "<input type=\"hidden\" name=\"forwarder\" value=\"".$url."\">";
    $row3 = $db->sql_fetchrow($db->sql_query("SELECT pollTitle, voters FROM ".$prefix."_poll_desc WHERE pollID='$pollID'"));
    $pollTitle = stripslashes((string) check_html($row3["pollTitle"], "nohtml"));
    $voters = $row3["voters"];
    $boxTitle = _ARTICLEPOLL;
    $boxContent .= "<span class=\"content\"><strong>$pollTitle</strong></span><br /><br />\n";
    $boxContent .= "<table border=\"0\" width=\"100%\">";
    for($i = 1; $i <= 12; $i++) {
    $result4 = $db->sql_query("SELECT pollID, optionText, optionCount, voteID FROM ".$prefix."_poll_data WHERE (pollID='$pollID') AND (voteID='$i')");
    $row4 = $db->sql_fetchrow($result4);
    $numrows = $db->sql_numrows($result4);
    $db->sql_freeresult($result4);
    if($numrows != 0) {
        $optionText = $row4["optionText"];
        if(!empty($optionText)) {
        $boxContent .= "<tr><td valign=\"top\"><input type=\"radio\" name=\"voteID\" value=\"".$i."\"></td><td width=\"100%\"><span class=\"content\">$optionText</span></td></tr>\n";
        }
    }
    }
    $boxContent .= "</table><br /><center><span class=\"content\"><input type=\"submit\" value=\""._VOTE."\"></span><br />";
    for($i = 0; $i < 12; $i++) {
    $row5 = $db->sql_fetchrow($db->sql_query("SELECT optionCount FROM ".$prefix."_poll_data WHERE (pollID='$pollID') AND (voteID='$i')"));
    $optionCount = $row5["optionCount"];
    $sum = (int)$sum+$optionCount;
    }
    $boxContent .= "<span class=\"content\">[ <a href=\"modules.php?name=Surveys&amp;op=results&amp;pollID=$pollID&amp;mode=".$userinfo['umode']."&amp;order=".$userinfo['uorder']."&amp;thold=".$userinfo['thold']."\"><strong>"._RESULTS."</strong></a> | <a href=\"modules.php?name=Surveys\"><strong>"._POLLS."</strong></a> ]<br />";

    if ($pollcomm) {
    $result6 = $db->sql_query("select * from ".$prefix."_pollcomments where pollID='$pollID'");
    $numcom = $db->sql_numrows($result6);
    $db->sql_freeresult($result6);
    $boxContent .= "<br />"._VOTES.": <strong>$sum</strong><br />"._PCOMMENTS." <strong>$numcom</strong>\n\n";
    } else {
        $boxContent .= "<br />"._VOTES." <strong>$sum</strong>\n\n";
    }
    $boxContent .= "</span></center></form>\n\n";
    themesidebox($boxTitle, $boxContent, "poll1");
}

$boxtitle = ""._RELATED."";
$boxstuff = "<span class=\"content\">";
$result8 = $db->sql_query("select name, url from ".$prefix."_related where tid='$topic'");
while ($row8 = $db->sql_fetchrow($result8)) {
    $name = stripslashes((string) $row8["name"]);
    $url = stripslashes((string) $row8["url"]);
    $boxstuff .= "<strong><big>&middot;</big></strong>&nbsp;<a href=\"$url\" target=\"new\">$name</a><br />\n";
}
$db->sql_freeresult($result8);

$boxstuff .= "<strong><big>&middot;</big></strong>&nbsp;<a href=\"modules.php?name=Search&amp;topic=$topic\">"._MOREABOUT." $topictext</a><br />\n";
$boxstuff .= "<strong><big>&middot;</big></strong>&nbsp;<a href=\"modules.php?name=Search&amp;author=$aaid\">"._NEWSBY." $aaid</a>\n";

$boxstuff .= "</span><br /><hr noshade width=\"95%\" size=\"1\"><center><span class=\"content\"><strong>"._MOSTREAD." $topictext:</strong><br />\n";

global $multilingual, $currentlang;
    if ($multilingual == 1) {
        $querylang = "AND (alanguage='$currentlang' OR alanguage='')"; /* the OR is needed to display stories who are posted to ALL languages */
    } else {
        $querylang = "";
    }
$row9 = $db->sql_fetchrow($db->sql_query("select sid, title from ".$prefix."_stories where topic='$topic' $querylang order by counter desc limit 0,1"));
$topstory = intval($row9["sid"]);
$ttitle = stripslashes((string) check_html($row9["title"], "nohtml"));

$boxstuff .= "<a href=\"modules.php?name=$module_name&amp;file=article&amp;sid=$topstory\">$ttitle</a></span></center><br />\n";
themesidebox($boxtitle, $boxstuff, "newstopic");

if ($ratings != 0) 
{
    $rate = substr($score / $ratings, 0, 4);
    $r_image = round($rate);

    if ($r_image == 1):
        $the_image = the_rating('large',1,_BAD);
    elseif ($r_image == 2):
        $the_image = the_rating('large',2,_REGULAR);
    elseif ($r_image == 3):
        $the_image = the_rating('large',3,_GOOD);
    elseif ($r_image == 4):
        $the_image = the_rating('large',4,_VERYGOOD);
    elseif ($r_image == 5):
        $the_image = the_rating('large',5,_EXCELLENT);
    endif;

} else {
    $rate = 0;
    $the_image = "</center><br />";
}

$ratetitle = ""._RATEARTICLE."";
$ratecontent = "<center>"._AVERAGESCORE.": <strong>$rate</strong><br />"._VOTES.": <strong>$ratings</strong>$the_image";
$ratecontent .= "<form action=\"modules.php?name=$module_name\" method=\"post\"><center>"._RATETHISARTICLE."</center><br />";
$ratecontent .= "<input type=\"hidden\" name=\"sid\" value=\"$sid\">";
$ratecontent .= "<input type=\"hidden\" name=\"op\" value=\"rate_article\">";
$ratecontent .= '<input type="radio" name="score" value="5"> '.the_rating('small',5,_EXCELLENT).'<br />';
$ratecontent .= '<input type="radio" name="score" value="4"> '.the_rating('small',4,_VERYGOOD).'<br />';
$ratecontent .= '<input type="radio" name="score" value="3"> '.the_rating('small',3,_GOOD).'<br />';
$ratecontent .= '<input type="radio" name="score" value="2"> '.the_rating('small',2,_REGULAR).'<br />';
$ratecontent .= '<input type="radio" name="score" value="5"> '.the_rating('small',1,_BAD).'<br /><br />';
$ratecontent .= "<center><input type=\"submit\" value=\""._CASTMYVOTE."\"></center></form>";
themesidebox($ratetitle, $ratecontent, "newsvote");

$optiontitle = ""._OPTIONS."";
$optionbox = "<br />";
$optionbox .= '&nbsp;<i class="fa fa-print"></i>&nbsp;<a href="modules.php?name='.the_module().'&amp;file=print&amp;sid='.$sid.'">'._PRINTER.'</a><br />'."\n";
$optionbox .= '&nbsp;<i class="fa fa-envelope"></i> <a href="modules.php?name='.the_module().'&amp;file=friend&amp;op=FriendSend&amp;sid='.$sid.'">'._FRIEND.'</a><br /><br />'."\n";
if (is_mod_admin($module_name)) {
    $optionbox .= '<div class="acenter">'.$customlang['global']['admin'].'<br />[ <a href="'.$admin_file.'.php?op=adminStory">'.$customlang['global']['add'].'</a> | <a href="'.$admin_file.'.php?op=EditStory&amp;sid='.$sid.'">'.$customlang['global']['edit'].'</a> | <a href="'.$admin_file.'.php?op=RemoveStory&amp;sid='.$sid.'">'.$customlang['global']['delete'].'</a> ]</div>';
}
themesidebox($optiontitle, $optionbox, "newsopt");

echo "</td></tr></table>\n";


include_once(NUKE_BASE_DIR.'footer.php');

?>