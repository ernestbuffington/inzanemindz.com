<?php

// eXtreme Styles mod cache. Generated on Wed, 26 Apr 2023 21:35:49 +0000 (time=1682544949)

?><h1><?php echo isset($this->vars['L_INSTALL_MODULE']) ? $this->vars['L_INSTALL_MODULE'] : $this->lang('L_INSTALL_MODULE'); ?></h1>

<p><?php echo isset($this->vars['L_INSTALL_MODULE_EXPLAIN']) ? $this->vars['L_INSTALL_MODULE_EXPLAIN'] : $this->lang('L_INSTALL_MODULE_EXPLAIN'); ?></p>

<?php

$switch_select_module_count = ( isset($this->_tpldata['switch_select_module.']) ) ?  sizeof($this->_tpldata['switch_select_module.']) : 0;
for ($switch_select_module_i = 0; $switch_select_module_i < $switch_select_module_count; $switch_select_module_i++)
{
 $switch_select_module_item = &$this->_tpldata['switch_select_module.'][$switch_select_module_i];
 $switch_select_module_item['S_ROW_COUNT'] = $switch_select_module_i;
 $switch_select_module_item['S_NUM_ROWS'] = $switch_select_module_count;

?>

<form method="post" action="<?php echo isset($this->vars['S_ACTION']) ? $this->vars['S_ACTION'] : $this->lang('S_ACTION'); ?>">
<table class="forumline" cellspacing="1" cellpadding="4" border="0" align="center" width="50%">
    <tr> 
      <td class="catHead" colspan="1" align="center" height="28"><span class="cattitle"><?php echo isset($this->vars['L_SELECT_MODULE']) ? $this->vars['L_SELECT_MODULE'] : $this->lang('L_SELECT_MODULE'); ?></span></td>
    </tr>
    <tr>
        <td class="row1" align="center"><span class="gen"><?php echo isset($this->vars['S_SELECT_MODULE']) ? $this->vars['S_SELECT_MODULE'] : $this->lang('S_SELECT_MODULE'); ?></span></td>
    </tr>
    <tr>
        <td class="catBottom" colspan="1" align="center"><?php echo isset($this->vars['S_SELECT_HIDDEN_FIELDS']) ? $this->vars['S_SELECT_HIDDEN_FIELDS'] : $this->lang('S_SELECT_HIDDEN_FIELDS'); ?>
        <input class="mainoption" name="submit" type="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" /></td>
    </tr>
</table></form>

<?php

} // END switch_select_module

if(isset($switch_select_module_item)) { unset($switch_select_module_item); } 

?>

<?php

$switch_upload_module_count = ( isset($this->_tpldata['switch_upload_module.']) ) ?  sizeof($this->_tpldata['switch_upload_module.']) : 0;
for ($switch_upload_module_i = 0; $switch_upload_module_i < $switch_upload_module_count; $switch_upload_module_i++)
{
 $switch_upload_module_item = &$this->_tpldata['switch_upload_module.'][$switch_upload_module_i];
 $switch_upload_module_item['S_ROW_COUNT'] = $switch_upload_module_i;
 $switch_upload_module_item['S_NUM_ROWS'] = $switch_upload_module_count;

?>

<form method="post" action="<?php echo isset($this->vars['S_ACTION']) ? $this->vars['S_ACTION'] : $this->lang('S_ACTION'); ?>" enctype="multipart/form-data">
<table class="forumline" cellspacing="1" cellpadding="4" border="0" align="center" width="50%">
    <tr> 
      <td class="catHead" colspan="1" align="center" height="28"><span class="cattitle"><?php echo isset($this->vars['L_UPLOAD_MODULE']) ? $this->vars['L_UPLOAD_MODULE'] : $this->lang('L_UPLOAD_MODULE'); ?></span></td>
    </tr>
    <tr>
        <td class="row1" align="center"><span class="gen"><input type="file" name="package" size="20" value="" class="post"></span></td>
    </tr>
    <tr>
        <td class="catBottom" colspan="1" align="center"><?php echo isset($this->vars['S_UPLOAD_HIDDEN_FIELDS']) ? $this->vars['S_UPLOAD_HIDDEN_FIELDS'] : $this->lang('S_UPLOAD_HIDDEN_FIELDS'); ?>
        <input class="mainoption" name="submit" type="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" /></td>
    </tr>
</table></form>

<?php

} // END switch_upload_module

if(isset($switch_upload_module_item)) { unset($switch_upload_module_item); } 

?>

<?php

$switch_install_module_count = ( isset($this->_tpldata['switch_install_module.']) ) ?  sizeof($this->_tpldata['switch_install_module.']) : 0;
for ($switch_install_module_i = 0; $switch_install_module_i < $switch_install_module_count; $switch_install_module_i++)
{
 $switch_install_module_item = &$this->_tpldata['switch_install_module.'][$switch_install_module_i];
 $switch_install_module_item['S_ROW_COUNT'] = $switch_install_module_i;
 $switch_install_module_item['S_NUM_ROWS'] = $switch_install_module_count;

?>

<form method="post" action="<?php echo isset($this->vars['S_ACTION']) ? $this->vars['S_ACTION'] : $this->lang('S_ACTION'); ?>">
<table class="forumline" cellspacing="1" cellpadding="4" border="0" align="center" width="99%">
    <tr> 
      <td class="catHead" colspan="2" align="center" height="28"><span class="cattitle"><?php echo isset($this->vars['L_INSTALL_MODULE']) ? $this->vars['L_INSTALL_MODULE'] : $this->lang('L_INSTALL_MODULE'); ?></span></td>
    </tr>
    <tr>
        <td class="row1" align="left"><span class="gen"><?php echo isset($this->vars['L_MODULE_NAME']) ? $this->vars['L_MODULE_NAME'] : $this->lang('L_MODULE_NAME'); ?></span></td>
        <td class="row2" align="left"><span class="gen"><?php echo isset($this->vars['MODULE_NAME']) ? $this->vars['MODULE_NAME'] : $this->lang('MODULE_NAME'); ?></span></td>
    </tr>
    <tr>
        <td class="row1" align="left"><span class="gen"><?php echo isset($this->vars['L_MODULE_DESCRIPTION']) ? $this->vars['L_MODULE_DESCRIPTION'] : $this->lang('L_MODULE_DESCRIPTION'); ?></span></td>
        <td class="row2" align="left"><span class="gen"><?php echo isset($this->vars['MODULE_DESCRIPTION']) ? $this->vars['MODULE_DESCRIPTION'] : $this->lang('MODULE_DESCRIPTION'); ?></span></td>
    </tr>
    <tr>
        <td class="row1" align="left"><span class="gen"><?php echo isset($this->vars['L_MODULE_VERSION']) ? $this->vars['L_MODULE_VERSION'] : $this->lang('L_MODULE_VERSION'); ?></span></td>
        <td class="row2" align="left"><span class="gen"><?php echo isset($this->vars['MODULE_VERSION']) ? $this->vars['MODULE_VERSION'] : $this->lang('MODULE_VERSION'); ?></span></td>
    </tr>
    <tr>
        <td class="row1" align="left"><span class="gen"><?php echo isset($this->vars['L_REQUIRED_STATS_VERSION']) ? $this->vars['L_REQUIRED_STATS_VERSION'] : $this->lang('L_REQUIRED_STATS_VERSION'); ?></span></td>
        <td class="row2" align="left"><span class="gen"><?php echo isset($this->vars['STATS_VERSION']) ? $this->vars['STATS_VERSION'] : $this->lang('STATS_VERSION'); ?></span></td>
    </tr>
    <tr>
        <td class="row1" align="left"><span class="gen"><?php echo isset($this->vars['L_INSTALLED_STATS_VERSION']) ? $this->vars['L_INSTALLED_STATS_VERSION'] : $this->lang('L_INSTALLED_STATS_VERSION'); ?></span></td>
        <td class="row2" align="left"><span class="gen"><?php echo isset($this->vars['INSTALLED_STATS_VERSION']) ? $this->vars['INSTALLED_STATS_VERSION'] : $this->lang('INSTALLED_STATS_VERSION'); ?></span></td>
    </tr>
    <tr>
        <td class="row1" align="left"><span class="gen"><?php echo isset($this->vars['L_MODULE_AUTHOR']) ? $this->vars['L_MODULE_AUTHOR'] : $this->lang('L_MODULE_AUTHOR'); ?></span></td>
        <td class="row2" align="left"><span class="gen"><?php echo isset($this->vars['MODULE_AUTHOR']) ? $this->vars['MODULE_AUTHOR'] : $this->lang('MODULE_AUTHOR'); ?></span></td>
    </tr>
    <tr>
        <td class="row1" align="left"><span class="gen"><?php echo isset($this->vars['L_AUTHOR_EMAIL']) ? $this->vars['L_AUTHOR_EMAIL'] : $this->lang('L_AUTHOR_EMAIL'); ?></span></td>
        <td class="row2" align="left"><span class="gen"><?php echo isset($this->vars['AUTHOR_EMAIL']) ? $this->vars['AUTHOR_EMAIL'] : $this->lang('AUTHOR_EMAIL'); ?></span></td>
    </tr>
    <tr>
        <td class="row1" align="left"><span class="gen"><?php echo isset($this->vars['L_MODULE_URL']) ? $this->vars['L_MODULE_URL'] : $this->lang('L_MODULE_URL'); ?></span></td>
        <td class="row2" align="left"><span class="gen"><?php echo isset($this->vars['MODULE_URL']) ? $this->vars['MODULE_URL'] : $this->lang('MODULE_URL'); ?></span></td>
    </tr>
    <tr>
        <td class="row1" align="left"><span class="gen"><?php echo isset($this->vars['L_UPDATE_URL']) ? $this->vars['L_UPDATE_URL'] : $this->lang('L_UPDATE_URL'); ?></span></td>
        <td class="row2" align="left"><span class="gen"><?php echo isset($this->vars['UPDATE_URL']) ? $this->vars['UPDATE_URL'] : $this->lang('UPDATE_URL'); ?></span></td>
    </tr>
    <tr> 
      <th class="thLeft">&nbsp;<?php echo isset($this->vars['L_PROVIDED_LANGUAGE']) ? $this->vars['L_PROVIDED_LANGUAGE'] : $this->lang('L_PROVIDED_LANGUAGE'); ?>&nbsp;</th>
      <th class="thRight">&nbsp;<?php echo isset($this->vars['L_INSTALL_LANGUAGE']) ? $this->vars['L_INSTALL_LANGUAGE'] : $this->lang('L_INSTALL_LANGUAGE'); ?>&nbsp;</th>
    </tr>
<?php

} // END switch_install_module

if(isset($switch_install_module_item)) { unset($switch_install_module_item); } 

?>
<?php

$languages_count = ( isset($this->_tpldata['languages.']) ) ?  sizeof($this->_tpldata['languages.']) : 0;
for ($languages_i = 0; $languages_i < $languages_count; $languages_i++)
{
 $languages_item = &$this->_tpldata['languages.'][$languages_i];
 $languages_item['S_ROW_COUNT'] = $languages_i;
 $languages_item['S_NUM_ROWS'] = $languages_count;

?>
    <tr>
        <td class="row1" align="left"><span class="gen"><?php echo isset($languages_item['MODULE_LANGUAGE']) ? $languages_item['MODULE_LANGUAGE'] : ''; ?></span></td>
        <td class="row2" align="left"><input type="checkbox" name="checked_languages[]" value="<?php echo isset($languages_item['MODULE_LANGUAGE']) ? $languages_item['MODULE_LANGUAGE'] : ''; ?>" checked="checked"></td>
    </tr>
<?php

} // END languages

if(isset($languages_item)) { unset($languages_item); } 

?>
<?php

$switch_install_module_count = ( isset($this->_tpldata['switch_install_module.']) ) ?  sizeof($this->_tpldata['switch_install_module.']) : 0;
for ($switch_install_module_i = 0; $switch_install_module_i < $switch_install_module_count; $switch_install_module_i++)
{
 $switch_install_module_item = &$this->_tpldata['switch_install_module.'][$switch_install_module_i];
 $switch_install_module_item['S_ROW_COUNT'] = $switch_install_module_i;
 $switch_install_module_item['S_NUM_ROWS'] = $switch_install_module_count;

?>    
    <tr>
        <td class="catBottom" colspan="2" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?>
        <input class="mainoption" name="submit" type="submit" value="<?php echo isset($this->vars['L_INSTALL']) ? $this->vars['L_INSTALL'] : $this->lang('L_INSTALL'); ?>" /></td>
    </tr>
</table></form>

<?php

} // END switch_install_module

if(isset($switch_install_module_item)) { unset($switch_install_module_item); } 

?>