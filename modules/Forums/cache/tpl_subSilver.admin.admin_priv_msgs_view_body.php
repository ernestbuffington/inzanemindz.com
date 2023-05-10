<?php

// eXtreme Styles mod cache. Generated on Wed, 26 Apr 2023 20:48:16 +0000 (time=1682542096)

?><table border="0" cellpadding="4" cellspacing="1" width="100%" class="forumline">
    <?php

$popup_switch_count = ( isset($this->_tpldata['popup_switch.']) ) ?  sizeof($this->_tpldata['popup_switch.']) : 0;
for ($popup_switch_i = 0; $popup_switch_i < $popup_switch_count; $popup_switch_i++)
{
 $popup_switch_item = &$this->_tpldata['popup_switch.'][$popup_switch_i];
 $popup_switch_item['S_ROW_COUNT'] = $popup_switch_i;
 $popup_switch_item['S_NUM_ROWS'] = $popup_switch_count;

?>
    <tr> 
      <th colspan="3" class="thHead"><?php echo isset($this->vars['L_PRIVATE_MESSAGES']) ? $this->vars['L_PRIVATE_MESSAGES'] : $this->lang('L_PRIVATE_MESSAGES'); ?></th>
    </tr>
    <?php

} // END popup_switch

if(isset($popup_switch_item)) { unset($popup_switch_item); } 

?>
    <tr> 
      <td class="row2"><?php echo isset($this->vars['L_FROM']) ? $this->vars['L_FROM'] : $this->lang('L_FROM'); ?>:</td>
      <td width="100%" class="row2" colspan="2"><?php echo isset($this->vars['FROM']) ? $this->vars['FROM'] : $this->lang('FROM'); ?><?php echo isset($this->vars['FROM_IP']) ? $this->vars['FROM_IP'] : $this->lang('FROM_IP'); ?></td>
    </tr>
    <tr> 
      <td class="row2"><?php echo isset($this->vars['L_TO']) ? $this->vars['L_TO'] : $this->lang('L_TO'); ?>:</td>
      <td width="100%" class="row2" colspan="2"><?php echo isset($this->vars['TO']) ? $this->vars['TO'] : $this->lang('TO'); ?></td>
    </tr>
    <tr> 
      <td class="row2"><?php echo isset($this->vars['L_SENT_DATE']) ? $this->vars['L_SENT_DATE'] : $this->lang('L_SENT_DATE'); ?>:</td>
      <td width="100%" class="row2" colspan="2"><?php echo isset($this->vars['DATE']) ? $this->vars['DATE'] : $this->lang('DATE'); ?></td>
    </tr>
    <tr> 
      <td class="row2"><?php echo isset($this->vars['L_SUBJECT']) ? $this->vars['L_SUBJECT'] : $this->lang('L_SUBJECT'); ?>:</td>
      <td width="100%" class="row2"><?php echo isset($this->vars['SUBJECT']) ? $this->vars['SUBJECT'] : $this->lang('SUBJECT'); ?></td>
      <td nowrap="nowrap" class="row2" align="right"> &nbsp; </td>
    </tr>
    <tr> 
      <td valign="top" colspan="3" class="row1"><span class="postbody"><?php echo isset($this->vars['MESSAGE']) ? $this->vars['MESSAGE'] : $this->lang('MESSAGE'); ?></span></td>
    </tr>
</table><br />
<?php

$popup_switch_count = ( isset($this->_tpldata['popup_switch.']) ) ?  sizeof($this->_tpldata['popup_switch.']) : 0;
for ($popup_switch_i = 0; $popup_switch_i < $popup_switch_count; $popup_switch_i++)
{
 $popup_switch_item = &$this->_tpldata['popup_switch.'][$popup_switch_i];
 $popup_switch_item['S_ROW_COUNT'] = $popup_switch_i;
 $popup_switch_item['S_NUM_ROWS'] = $popup_switch_count;

?>
<br />
<center><a href="#" onClick="JavaScript:window.close();">Close This Window</a></center>
<?php

} // END popup_switch

if(isset($popup_switch_item)) { unset($popup_switch_item); } 

?>