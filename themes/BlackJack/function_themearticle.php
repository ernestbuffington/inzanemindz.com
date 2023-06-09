<?php 
if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    exit('Access Denied');
}

/*--------------------------*/
/* Theme Article 
/*--------------------------*/
function themearticle($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext){

  print "\n\n<!-- THEME ARTICAL CONTENT START -->\n";

  global $userinfo, $bgcolor4, $admin, $sid, $tipath, $theme_name, $appID, $my_url;
  global $digits_color, $digits_txt_color;
	
    if (!empty($topicimage)) 
    {
      $t_image = (file_exists(theme_images_dir.'topics/'.$topicimage)) ? theme_images_dir.'topics/'.$topicimage : $tipath.$topicimage;
      $topic_img = '<td width="25%" align="center" class="extra"><a href="modules.php?name=Blogs&new_topic='.$topic.'"><img src="'.$t_image.'" alt="'.$topictext.'" title="'.$topictext.'"></a></td>'.PHP_EOL;
	} 
	else 
	$topic_img = '';
	
	$notes = (!empty($notes)) ? '<br /><br /><strong>'._NOTE.'</strong> '.$notes : ''.PHP_EOL;
	$content = '';
	
	if ($aid == $informant) 
	    $content = $thetext.$notes;
	else 
	{
		if (isset($writes))
		{
			if (!empty($informant)) 
			{
				$content = (is_array($informant)) ? '<a href="modules.php?name=Your_Account&amp;op=userinfo&amp;username='.$informant[0].'">'.$informant[1].'</a> ' : '<a 
				href="modules.php?name=Your_Account&amp;op=userinfo&amp;username='.$informant.'">'.$informant.'</a> '.PHP_EOL;
			}
			else 
				$content = $anonymous.' ';
			
			$content .= _WRITES.' '.$thetext.$notes;
		} 
		else 
			$content .= $thetext.$notes;
	}

print '<section id="content">';  
if(!isset($counter)) { $counter = 9634; }
$posted = '<strong>Posted by '.get_author($aid).' '.$datetime.'</strong>'.PHP_EOL;
$reads = '(<span style="color: '.$digits_txt_color.';"> Reads :</span> <span style="color: '.$digits_color.';"><strong>'.$counter.'</strong></span> )'.PHP_EOL;

print '<div align="center" id="borderThemeArticle">'.PHP_EOL;

echo '<div align="center" id="text"><strong>'.$topictext.'</strong></div>'.PHP_EOL;

print '<div align="center" style="padding-top:1px;"><strong>'.$title.'</strong></div>'.PHP_EOL;

print '<div align="left" id="text">'.$posted.'</div>'.PHP_EOL;

print '<div align="center" style="padding-top:6px;"></div>'.PHP_EOL;

//content START
echo '<div align="left" id="text">'.PHP_EOL;
echo ''.$content.''.PHP_EOL;
//content END

print blog_signature($aid).''.PHP_EOL;

print '</div>'.PHP_EOL;
print '<br/><br/>';

echo '<div valign="bottom" align="right">'.$reads.'</div>'.PHP_EOL;

print '<div align="center" style="padding-top:14px;"></div>'.PHP_EOL;

print '</div>'.PHP_EOL;

print '<div align="center" style="padding:10px;">'.PHP_EOL;
print '</div>'.PHP_EOL;

print "<!-- THEME ARTICAL CONTENT END -->\n\n";
}

?>
