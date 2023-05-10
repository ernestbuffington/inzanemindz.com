<?php

// eXtreme Styles mod cache. Generated on Fri, 28 Apr 2023 13:58:41 +0000 (time=1682690321)

?><div align="right"><a href="javascript:self.close();void(0);" class="nav"><?php echo isset($this->vars['L_CLOSEWINDOW']) ? $this->vars['L_CLOSEWINDOW'] : $this->lang('L_CLOSEWINDOW'); ?></a></div>
<?php

$rep_stats_count = ( isset($this->_tpldata['rep_stats.']) ) ?  sizeof($this->_tpldata['rep_stats.']) : 0;
for ($rep_stats_i = 0; $rep_stats_i < $rep_stats_count; $rep_stats_i++)
{
 $rep_stats_item = &$this->_tpldata['rep_stats.'][$rep_stats_i];
 $rep_stats_item['S_ROW_COUNT'] = $rep_stats_i;
 $rep_stats_item['S_NUM_ROWS'] = $rep_stats_count;

?>
<span class="maintitle"><?php echo isset($rep_stats_item['L_REPUTATION']) ? $rep_stats_item['L_REPUTATION'] : ''; ?> <a href="<?php echo isset($rep_stats_item['U_USERID']) ? $rep_stats_item['U_USERID'] : ''; ?>"><?php echo isset($rep_stats_item['USERNAME']) ? $rep_stats_item['USERNAME'] : ''; ?></a></span><br />
<br />
<table width="100%" cellspacing="1" cellpadding="6" border="0" align="center" class="forumline">
  <tr>
  <td width="50%" colspan="2" class="row1"><span class="genmed"><?php echo isset($rep_stats_item['L_TOTALRECEIVED']) ? $rep_stats_item['L_TOTALRECEIVED'] : ''; ?>:</span></td>
  <td width="50%" colspan="2" class="row1"><span class="genmed"><?php echo isset($rep_stats_item['L_TOTALGIVEN']) ? $rep_stats_item['L_TOTALGIVEN'] : ''; ?>:</span></td>
  </tr>
  <tr>
  <td width="40%" class="row1"><span class="genmed">&nbsp;&nbsp;&nbsp;<?php echo isset($rep_stats_item['L_REPUTATION2']) ? $rep_stats_item['L_REPUTATION2'] : ''; ?></span></td>
  <td width="10%" class="row3"><span class="genmed"><font size="+1" color="<?php echo isset($rep_stats_item['STATREP_COLOR']) ? $rep_stats_item['STATREP_COLOR'] : ''; ?>"><strong><?php echo isset($rep_stats_item['STATREP_SUM']) ? $rep_stats_item['STATREP_SUM'] : ''; ?></strong></font></span></td>
  <td width="40%" class="row1"><span class="genmed">&nbsp;&nbsp;&nbsp;<?php echo isset($rep_stats_item['L_REPUTATION2']) ? $rep_stats_item['L_REPUTATION2'] : ''; ?></span></td>
  <td width="10%" class="row3"><span class="genmed"><strong><?php echo isset($rep_stats_item['STATREP_SUM_GIVEN']) ? $rep_stats_item['STATREP_SUM_GIVEN'] : ''; ?></strong></span></td>
  </tr>
  <tr>
  <td width="40%" class="row1"><span class="genmed">&nbsp;&nbsp;&nbsp;<?php echo isset($rep_stats_item['L_POSITIVE']) ? $rep_stats_item['L_POSITIVE'] : ''; ?> <?php echo isset($rep_stats_item['L_VOTES']) ? $rep_stats_item['L_VOTES'] : ''; ?></span></td>
  <td width="10%" class="row3"><span class="genmed"><font color="#008000"><strong><?php echo isset($rep_stats_item['STATREP_SUMPOS']) ? $rep_stats_item['STATREP_SUMPOS'] : ''; ?></strong></font></span></td>
  <td class="row1"><span class="genmed">&nbsp;&nbsp;&nbsp;<?php echo isset($rep_stats_item['L_POSITIVE']) ? $rep_stats_item['L_POSITIVE'] : ''; ?> <?php echo isset($rep_stats_item['L_VOTES']) ? $rep_stats_item['L_VOTES'] : ''; ?></span></td>
  <td class="row3"><span class="genmed"><font color="#008000"><?php echo isset($rep_stats_item['STATREP_SUMPOS_GIVEN']) ? $rep_stats_item['STATREP_SUMPOS_GIVEN'] : ''; ?></font></span></td>
  </tr>
  <tr>
  <td class="row1"><span class="genmed">&nbsp;&nbsp;&nbsp;<?php echo isset($rep_stats_item['L_NEGATIVE']) ? $rep_stats_item['L_NEGATIVE'] : ''; ?> <?php echo isset($rep_stats_item['L_VOTES']) ? $rep_stats_item['L_VOTES'] : ''; ?></span></td>
  <td class="row3"><span class="genmed"><font color="#FF0000"><strong><?php echo isset($rep_stats_item['STATREP_SUMNEG']) ? $rep_stats_item['STATREP_SUMNEG'] : ''; ?></strong></font></span></td>
  <td class="row1"><span class="genmed">&nbsp;&nbsp;&nbsp;<?php echo isset($rep_stats_item['L_NEGATIVE']) ? $rep_stats_item['L_NEGATIVE'] : ''; ?> <?php echo isset($rep_stats_item['L_VOTES']) ? $rep_stats_item['L_VOTES'] : ''; ?></span></td>
  <td class="row3"><span class="genmed"><font color="#FF0000"><strong><?php echo isset($rep_stats_item['STATREP_SUMNEG_GIVEN']) ? $rep_stats_item['STATREP_SUMNEG_GIVEN'] : ''; ?></strong></font></span></td>
  </tr>
</table>
<table width="100%">
  <tr>
  <td align="right"><span class="gensmall"><a href="<?php echo isset($rep_stats_item['U_GLOBALSTATS']) ? $rep_stats_item['U_GLOBALSTATS'] : ''; ?>"><?php echo isset($rep_stats_item['L_GLOBALSTATS']) ? $rep_stats_item['L_GLOBALSTATS'] : ''; ?></a></span></td>
  </tr>
</table>
<table width="100%" cellspacing="1" cellpadding="6" border="0" align="center" class="forumline">
  <tr>
  <th align="left" class="thCornerL"><?php echo isset($rep_stats_item['L_WHO']) ? $rep_stats_item['L_WHO'] : ''; ?></th>
  <th align="left" class="thCornerL"><?php echo isset($rep_stats_item['L_WHOM']) ? $rep_stats_item['L_WHOM'] : ''; ?></th>
  <th align="left" class="thTop"><?php echo isset($rep_stats_item['L_DIR']) ? $rep_stats_item['L_DIR'] : ''; ?></th>
  <th align="left" class="thTop"><?php echo isset($rep_stats_item['L_HOWMUCH']) ? $rep_stats_item['L_HOWMUCH'] : ''; ?></th>
  <th align="left" class="thTop"><?php echo isset($rep_stats_item['L_POST']) ? $rep_stats_item['L_POST'] : ''; ?></th>
  <th align="left" class="thTop"><?php echo isset($rep_stats_item['L_COMMENT']) ? $rep_stats_item['L_COMMENT'] : ''; ?></th>
  <th align="left" class="thCornerR"><?php echo isset($rep_stats_item['L_DATE']) ? $rep_stats_item['L_DATE'] : ''; ?></th>
  </tr>
  <?php

$row_count = ( isset($rep_stats_item['row.']) ) ? sizeof($rep_stats_item['row.']) : 0;
for ($row_i = 0; $row_i < $row_count; $row_i++)
{
 $row_item = &$rep_stats_item['row.'][$row_i];
 $row_item['S_ROW_COUNT'] = $row_i;
 $row_item['S_NUM_ROWS'] = $row_count;

?>
  <tr class="genmed">
  <td class="<?php echo isset($row_item['ROW']) ? $row_item['ROW'] : ''; ?>"><a href="<?php echo isset($row_item['U_USERID2']) ? $row_item['U_USERID2'] : ''; ?>"><?php echo isset($row_item['USERNAME2']) ? $row_item['USERNAME2'] : ''; ?></a></td>
  <td class="<?php echo isset($row_item['ROW']) ? $row_item['ROW'] : ''; ?>"><a href="<?php echo isset($row_item['U_USERID']) ? $row_item['U_USERID'] : ''; ?>"><?php echo isset($row_item['USERNAME']) ? $row_item['USERNAME'] : ''; ?></a></td>
  <td class="<?php echo isset($row_item['ROW']) ? $row_item['ROW'] : ''; ?>"><div align="center"><?php echo isset($row_item['REPNEG']) ? $row_item['REPNEG'] : ''; ?></div></td>
  <td class="<?php echo isset($row_item['ROW']) ? $row_item['ROW'] : ''; ?>"><div align="center"><?php echo isset($row_item['REPSUM']) ? $row_item['REPSUM'] : ''; ?></div></td>
  <td class="<?php echo isset($row_item['ROW']) ? $row_item['ROW'] : ''; ?>"><a href="<?php echo isset($row_item['U_POST']) ? $row_item['U_POST'] : ''; ?>"><?php echo isset($row_item['POST']) ? $row_item['POST'] : ''; ?></a></td>
  <td class="<?php echo isset($row_item['ROW']) ? $row_item['ROW'] : ''; ?>"><?php echo isset($row_item['REPCOMMENT']) ? $row_item['REPCOMMENT'] : ''; ?></td>
  <td class="<?php echo isset($row_item['ROW']) ? $row_item['ROW'] : ''; ?>"><?php echo isset($row_item['REPTIME']) ? $row_item['REPTIME'] : ''; ?></td>
  </tr>
  <?php

} // END row

if(isset($row_item)) { unset($row_item); } 

?>
</table>

<table width="100%" border="0" cellspacing="4" cellpadding="4">
  <tr>
  <td width="150" class="row1"><span class="gensmall"><?php echo isset($rep_stats_item['L_RECEIVEDREPUTATION']) ? $rep_stats_item['L_RECEIVEDREPUTATION'] : ''; ?></span></td>
  <td width="150" class="row3"><span class="gensmall"><?php echo isset($rep_stats_item['L_GIVENREPUTATION']) ? $rep_stats_item['L_GIVENREPUTATION'] : ''; ?></span></td>
  <td width="*"></td>
  <td><span class="nav"><?php echo isset($this->vars['PAGE_NUMBER']) ? $this->vars['PAGE_NUMBER'] : $this->lang('PAGE_NUMBER'); ?></span></td>
  <td align="right"><span class="nav"><?php echo isset($rep_stats_item['PAGINATION']) ? $rep_stats_item['PAGINATION'] : ''; ?></span></td>
  </tr>
</table>
<?php

} // END rep_stats

if(isset($rep_stats_item)) { unset($rep_stats_item); } 

?>

<?php

$rep_globalstats_count = ( isset($this->_tpldata['rep_globalstats.']) ) ?  sizeof($this->_tpldata['rep_globalstats.']) : 0;
for ($rep_globalstats_i = 0; $rep_globalstats_i < $rep_globalstats_count; $rep_globalstats_i++)
{
 $rep_globalstats_item = &$this->_tpldata['rep_globalstats.'][$rep_globalstats_i];
 $rep_globalstats_item['S_ROW_COUNT'] = $rep_globalstats_i;
 $rep_globalstats_item['S_NUM_ROWS'] = $rep_globalstats_count;

?>
<span class="maintitle"><?php echo isset($rep_globalstats_item['L_GLOBALSTATS']) ? $rep_globalstats_item['L_GLOBALSTATS'] : ''; ?></span><br /><br />
<table width="100%" cellspacing="1" cellpadding="6" border="0" align="center" class="forumline">
  <tr>
  <td class="row1"><span class="genmed"><?php echo isset($rep_globalstats_item['L_TOTAL_GIVEN_BY_USERS']) ? $rep_globalstats_item['L_TOTAL_GIVEN_BY_USERS'] : ''; ?></span></td>
  <td class="row3"><span class="genmed"><?php echo isset($rep_globalstats_item['TOTAL_GIVEN_BY_USERS']) ? $rep_globalstats_item['TOTAL_GIVEN_BY_USERS'] : ''; ?></span></td>
  </tr>
  <tr>
  <td class="row1"><span class="genmed"><?php echo isset($rep_globalstats_item['L_ACTIVE_USER']) ? $rep_globalstats_item['L_ACTIVE_USER'] : ''; ?></span></td>
  <td class="row3"><span class="genmed"><a href="<?php echo isset($rep_globalstats_item['U_ACTIVE_USER_ID']) ? $rep_globalstats_item['U_ACTIVE_USER_ID'] : ''; ?>"><?php echo isset($rep_globalstats_item['ACTIVE_USER']) ? $rep_globalstats_item['ACTIVE_USER'] : ''; ?></a> (<?php echo isset($rep_globalstats_item['TOTAL_GIVEN_BY_ACTIVE_USER']) ? $rep_globalstats_item['TOTAL_GIVEN_BY_ACTIVE_USER'] : ''; ?>)</span></td>
  </tr>
  <tr>
  <td class="row1"><span class="genmed"><?php echo isset($rep_globalstats_item['L_BEST_REP_USER']) ? $rep_globalstats_item['L_BEST_REP_USER'] : ''; ?></span></td>
  <td class="row3"><span class="genmed"><a href="<?php echo isset($rep_globalstats_item['U_MAX_USERREP_USERID']) ? $rep_globalstats_item['U_MAX_USERREP_USERID'] : ''; ?>"><?php echo isset($rep_globalstats_item['MAX_USERREP_USERNAME']) ? $rep_globalstats_item['MAX_USERREP_USERNAME'] : ''; ?></a> (<?php echo isset($rep_globalstats_item['L_REPUTATION']) ? $rep_globalstats_item['L_REPUTATION'] : ''; ?>: <strong><?php echo isset($rep_globalstats_item['MAX_USERREP']) ? $rep_globalstats_item['MAX_USERREP'] : ''; ?></strong>)</span></td>
  </tr>
  <tr>
  <td class="row1"><span class="genmed"><?php echo isset($rep_globalstats_item['L_WORST_REP_USER']) ? $rep_globalstats_item['L_WORST_REP_USER'] : ''; ?></span></td>
  <td class="row3"><span class="genmed"><a href="<?php echo isset($rep_globalstats_item['U_MIN_USERREP_USERID']) ? $rep_globalstats_item['U_MIN_USERREP_USERID'] : ''; ?>"><?php echo isset($rep_globalstats_item['MIN_USERREP_USERNAME']) ? $rep_globalstats_item['MIN_USERREP_USERNAME'] : ''; ?></a> (<?php echo isset($rep_globalstats_item['L_REPUTATION']) ? $rep_globalstats_item['L_REPUTATION'] : ''; ?>: <strong><?php echo isset($rep_globalstats_item['MIN_USERREP']) ? $rep_globalstats_item['MIN_USERREP'] : ''; ?></strong>)</span></td>
  </tr>
  <tr>
  <td class="row1"><span class="genmed"><?php echo isset($rep_globalstats_item['L_MAX_GIVEN_SUM']) ? $rep_globalstats_item['L_MAX_GIVEN_SUM'] : ''; ?></span></td>
  <td class="row3"><span class="genmed"><strong><?php echo isset($rep_globalstats_item['MAX_REPSUM']) ? $rep_globalstats_item['MAX_REPSUM'] : ''; ?></strong> (<a href="<?php echo isset($rep_globalstats_item['U_MAX_REPSUM_USERID']) ? $rep_globalstats_item['U_MAX_REPSUM_USERID'] : ''; ?>"><?php echo isset($rep_globalstats_item['MAX_REPSUM_USERNAME']) ? $rep_globalstats_item['MAX_REPSUM_USERNAME'] : ''; ?></a>)</span></td>
  </tr>
</table>
<br />
<table width="100%" cellspacing="1" cellpadding="6" border="0" align="center" class="forumline">
  <tr>
  <th align="left" class="thCornerL"><?php echo isset($rep_globalstats_item['L_WHO']) ? $rep_globalstats_item['L_WHO'] : ''; ?></th>
  <th align="left" class="thCornerL"><?php echo isset($rep_globalstats_item['L_WHOM']) ? $rep_globalstats_item['L_WHOM'] : ''; ?></th>
  <th align="left" class="thTop"><?php echo isset($rep_globalstats_item['L_DIR']) ? $rep_globalstats_item['L_DIR'] : ''; ?></th>
  <th align="left" class="thTop"><?php echo isset($rep_globalstats_item['L_HOWMUCH']) ? $rep_globalstats_item['L_HOWMUCH'] : ''; ?></th>
  <th align="left" class="thTop"><?php echo isset($rep_globalstats_item['L_POST']) ? $rep_globalstats_item['L_POST'] : ''; ?></th>
  <th align="left" class="thTop"><?php echo isset($rep_globalstats_item['L_COMMENT']) ? $rep_globalstats_item['L_COMMENT'] : ''; ?></th>
  <th align="left" class="thCornerR"><?php echo isset($rep_globalstats_item['L_DATE']) ? $rep_globalstats_item['L_DATE'] : ''; ?></th>
  </tr>
  <?php

$row_count = ( isset($rep_globalstats_item['row.']) ) ? sizeof($rep_globalstats_item['row.']) : 0;
for ($row_i = 0; $row_i < $row_count; $row_i++)
{
 $row_item = &$rep_globalstats_item['row.'][$row_i];
 $row_item['S_ROW_COUNT'] = $row_i;
 $row_item['S_NUM_ROWS'] = $row_count;

?>
  <tr class="genmed">
  <td class="row1"><a href="<?php echo isset($row_item['U_USERID2']) ? $row_item['U_USERID2'] : ''; ?>"><?php echo isset($row_item['USERNAME2']) ? $row_item['USERNAME2'] : ''; ?></a></td>
  <td class="row1"><a href="<?php echo isset($row_item['U_USERID']) ? $row_item['U_USERID'] : ''; ?>"><?php echo isset($row_item['USERNAME']) ? $row_item['USERNAME'] : ''; ?></a></td>
  <td class="row1"><div align="center"><?php echo isset($row_item['REPNEG']) ? $row_item['REPNEG'] : ''; ?></div></td>
  <td class="row1"><div align="center"><?php echo isset($row_item['REPSUM']) ? $row_item['REPSUM'] : ''; ?></div></td>
  <td class="row1"><a href="<?php echo isset($row_item['U_POST']) ? $row_item['U_POST'] : ''; ?>"><?php echo isset($row_item['POST']) ? $row_item['POST'] : ''; ?></a></td>
  <td class="row1"><?php echo isset($row_item['REPCOMMENT']) ? $row_item['REPCOMMENT'] : ''; ?></td>
  <td class="row1"><?php echo isset($row_item['REPTIME']) ? $row_item['REPTIME'] : ''; ?></td>
  </tr>
  <?php

} // END row

if(isset($row_item)) { unset($row_item); } 

?>
</table>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr>
  <td><span class="nav"><?php echo isset($this->vars['PAGE_NUMBER']) ? $this->vars['PAGE_NUMBER'] : $this->lang('PAGE_NUMBER'); ?></span></td>
  <td align="right"><span class="nav"><?php echo isset($rep_globalstats_item['PAGINATION']) ? $rep_globalstats_item['PAGINATION'] : ''; ?></span></td>
  </tr>
</table>
<?php

} // END rep_globalstats

if(isset($rep_globalstats_item)) { unset($rep_globalstats_item); } 

?>

<?php

$rep_add_count = ( isset($this->_tpldata['rep_add.']) ) ?  sizeof($this->_tpldata['rep_add.']) : 0;
for ($rep_add_i = 0; $rep_add_i < $rep_add_count; $rep_add_i++)
{
 $rep_add_item = &$this->_tpldata['rep_add.'][$rep_add_i];
 $rep_add_item['S_ROW_COUNT'] = $rep_add_i;
 $rep_add_item['S_NUM_ROWS'] = $rep_add_count;

?>
<span class="maintitle"><?php echo isset($rep_add_item['L_REPUTATIONGIVING']) ? $rep_add_item['L_REPUTATIONGIVING'] : ''; ?> <a href="<?php echo isset($rep_add_item['U_USERID']) ? $rep_add_item['U_USERID'] : ''; ?>"><?php echo isset($rep_add_item['USERNAME']) ? $rep_add_item['USERNAME'] : ''; ?></a></span><br />
<span class="genmed">
<form action="modules.php?name=Forums&amp;file=reputation&amp;a=post" method="post" name="rep_form" id="rep_form">
<strong><?php echo isset($rep_add_item['L_YOUHAVEPOINTS']) ? $rep_add_item['L_YOUHAVEPOINTS'] : ''; ?>: <font size="+1"><?php echo isset($rep_add_item['REPSUM']) ? $rep_add_item['REPSUM'] : ''; ?></strong></font><br />

<table width="100%" cellspacing="1" cellpadding="6" border="0" align="center" class="forumline">
  <tr>
  <th align="left" class="thCornerR"><?php echo isset($rep_add_item['L_DESCR']) ? $rep_add_item['L_DESCR'] : ''; ?></th>
  <th align="left" class="thCornerR"><?php echo isset($rep_add_item['L_FORM']) ? $rep_add_item['L_FORM'] : ''; ?></th>
  </tr>
<?php

$switch_adv_mode_count = ( isset($rep_add_item['switch_adv_mode.']) ) ? sizeof($rep_add_item['switch_adv_mode.']) : 0;
for ($switch_adv_mode_i = 0; $switch_adv_mode_i < $switch_adv_mode_count; $switch_adv_mode_i++)
{
 $switch_adv_mode_item = &$rep_add_item['switch_adv_mode.'][$switch_adv_mode_i];
 $switch_adv_mode_item['S_ROW_COUNT'] = $switch_adv_mode_i;
 $switch_adv_mode_item['S_NUM_ROWS'] = $switch_adv_mode_count;

?>
  <tr class="genmed">
  <td class="row1"><?php echo isset($rep_add_item['L_ENTERREPSUM']) ? $rep_add_item['L_ENTERREPSUM'] : ''; ?><br />
  <span class="gensmall"><?php echo isset($rep_add_item['L_ENTERREPSUM_EXPLAIN']) ? $rep_add_item['L_ENTERREPSUM_EXPLAIN'] : ''; ?></span></td>
  <td class="row3"><input type="text" name="rep_sum_to_give" size="10"></td>
  </tr>
<?php

} // END switch_adv_mode

if(isset($switch_adv_mode_item)) { unset($switch_adv_mode_item); } 

?>
  <tr class="genmed">
  <td class="row1"><?php echo isset($rep_add_item['L_CHOOSEDIR']) ? $rep_add_item['L_CHOOSEDIR'] : ''; ?><br />
  <span class="gensmall"><?php echo isset($rep_add_item['L_CHOOSEDIR_EXPLAIN']) ? $rep_add_item['L_CHOOSEDIR_EXPLAIN'] : ''; ?></span></td>
  <td class="row3"><input type="radio" name="rep_neg_to_give" value="0" checked><img src="modules/Forums/images/reputation_pos.gif" alt="" border="0" align="middle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="rep_neg_to_give" value="1"><img src="modules/Forums/images/reputation_neg.gif" alt="" border="0" align="middle"></td>
  </tr>
  <tr class="genmed">
  <td class="row1"><?php echo isset($rep_add_item['L_ENTERCOMMENT']) ? $rep_add_item['L_ENTERCOMMENT'] : ''; ?><br />
  <span class="gensmall"><?php echo isset($rep_add_item['L_ENTERCOMMENT_EXPLAIN']) ? $rep_add_item['L_ENTERCOMMENT_EXPLAIN'] : ''; ?></span></td>
  <td class="row3"><textarea cols="50" rows="4" name="rep_comment_to_give"></textarea></a></td>
  </tr>
  <tr class="genmed">
  <td class="row1">&nbsp;</td>
  <td class="row3"><input type="submit" name="submit" value="<?php echo isset($rep_add_item['L_GIVE']) ? $rep_add_item['L_GIVE'] : ''; ?>">
  <input type="hidden" name="user_id_to_give" value="<?php echo isset($rep_add_item['USER_ID_TO_GIVE']) ? $rep_add_item['USER_ID_TO_GIVE'] : ''; ?>">
  <input type="hidden" name="post_id_to_give" value="<?php echo isset($rep_add_item['POST_ID_TO_GIVE']) ? $rep_add_item['POST_ID_TO_GIVE'] : ''; ?>">
  <input type="hidden" name="ccode" value="<?php echo isset($rep_add_item['CCODE']) ? $rep_add_item['CCODE'] : ''; ?>">
  <?php echo isset($this->vars['SIMPLE_HIDDEN']) ? $this->vars['SIMPLE_HIDDEN'] : $this->lang('SIMPLE_HIDDEN'); ?>
  </form></td>
  </tr>
</table>
<?php

} // END rep_add

if(isset($rep_add_item)) { unset($rep_add_item); } 

?>
<br /><div align="center"><span class="copyright">Powered by Users Reputations system v1.0.0 &copy; 2006 <a href="http://granik.com" target="_blank" class="copyright">Anton Granik</a></span></div>