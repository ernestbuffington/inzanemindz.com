<?php

// eXtreme Styles mod cache. Generated on Wed, 26 Apr 2023 22:12:02 +0000 (time=1682547122)

?><h1><?php echo isset($this->vars['L_AUTH_TITLE']) ? $this->vars['L_AUTH_TITLE'] : $this->lang('L_AUTH_TITLE'); ?></h1>

<h2><?php echo isset($this->vars['L_USER_OR_GROUPNAME']) ? $this->vars['L_USER_OR_GROUPNAME'] : $this->lang('L_USER_OR_GROUPNAME'); ?>: <?php echo isset($this->vars['USERNAME']) ? $this->vars['USERNAME'] : $this->lang('USERNAME'); ?></h2>

<form method="post" action="<?php echo isset($this->vars['S_AUTH_ACTION']) ? $this->vars['S_AUTH_ACTION'] : $this->lang('S_AUTH_ACTION'); ?>">

<?php

$switch_user_auth_count = ( isset($this->_tpldata['switch_user_auth.']) ) ?  sizeof($this->_tpldata['switch_user_auth.']) : 0;
for ($switch_user_auth_i = 0; $switch_user_auth_i < $switch_user_auth_count; $switch_user_auth_i++)
{
 $switch_user_auth_item = &$this->_tpldata['switch_user_auth.'][$switch_user_auth_i];
 $switch_user_auth_item['S_ROW_COUNT'] = $switch_user_auth_i;
 $switch_user_auth_item['S_NUM_ROWS'] = $switch_user_auth_count;

?>
<p><?php echo isset($this->vars['USER_GROUP_MEMBERSHIPS']) ? $this->vars['USER_GROUP_MEMBERSHIPS'] : $this->lang('USER_GROUP_MEMBERSHIPS'); ?></p>
<?php

} // END switch_user_auth

if(isset($switch_user_auth_item)) { unset($switch_user_auth_item); } 

?>

<?php

$switch_group_auth_count = ( isset($this->_tpldata['switch_group_auth.']) ) ?  sizeof($this->_tpldata['switch_group_auth.']) : 0;
for ($switch_group_auth_i = 0; $switch_group_auth_i < $switch_group_auth_count; $switch_group_auth_i++)
{
 $switch_group_auth_item = &$this->_tpldata['switch_group_auth.'][$switch_group_auth_i];
 $switch_group_auth_item['S_ROW_COUNT'] = $switch_group_auth_i;
 $switch_group_auth_item['S_NUM_ROWS'] = $switch_group_auth_count;

?>
<p><?php echo isset($this->vars['GROUP_MEMBERSHIP']) ? $this->vars['GROUP_MEMBERSHIP'] : $this->lang('GROUP_MEMBERSHIP'); ?></p>
<?php

} // END switch_group_auth

if(isset($switch_group_auth_item)) { unset($switch_group_auth_item); } 

?>
<h2><?php echo isset($this->vars['L_PERMISSIONS']) ? $this->vars['L_PERMISSIONS'] : $this->lang('L_PERMISSIONS'); ?></h2>

<p><?php echo isset($this->vars['L_AUTH_EXPLAIN']) ? $this->vars['L_AUTH_EXPLAIN'] : $this->lang('L_AUTH_EXPLAIN'); ?></p>

  <table cellspacing="1" width="70%" cellpadding="4" border="0" align="center" class="forumline">
    <tr> 
      <th width="60%" class="thCornerL"><?php echo isset($this->vars['L_CATEGORIES']) ? $this->vars['L_CATEGORIES'] : $this->lang('L_CATEGORIES'); ?></th>
      <th class="thTop"><?php echo isset($this->vars['L_PERMISSIONS']) ? $this->vars['L_PERMISSIONS'] : $this->lang('L_PERMISSIONS'); ?></th>
    </tr>
    <?php

$categorie_count = ( isset($this->_tpldata['categorie.']) ) ?  sizeof($this->_tpldata['categorie.']) : 0;
for ($categorie_i = 0; $categorie_i < $categorie_count; $categorie_i++)
{
 $categorie_item = &$this->_tpldata['categorie.'][$categorie_i];
 $categorie_item['S_ROW_COUNT'] = $categorie_i;
 $categorie_item['S_NUM_ROWS'] = $categorie_count;

?>
    <tr> 
      <td class="<?php echo isset($categorie_item['ROW_CLASS']) ? $categorie_item['ROW_CLASS'] : ''; ?>" align="center"><?php echo isset($categorie_item['CATTITLE']) ? $categorie_item['CATTITLE'] : ''; ?></td>
      <td class="<?php echo isset($categorie_item['ROW_CLASS']) ? $categorie_item['ROW_CLASS'] : ''; ?>" align="center"><?php echo isset($categorie_item['S_AUTH']) ? $categorie_item['S_AUTH'] : ''; ?></td>
    </tr>
    <?php

} // END categorie

if(isset($categorie_item)) { unset($categorie_item); } 

?>
    <tr>
      <td colspan="2" class="catBottom" align="center"><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?> 
        <input type="submit" name="submit" value="<?php echo isset($this->vars['L_SUBMIT']) ? $this->vars['L_SUBMIT'] : $this->lang('L_SUBMIT'); ?>" class="mainoption" />
        &nbsp;&nbsp; 
        <input type="reset" value="<?php echo isset($this->vars['L_RESET']) ? $this->vars['L_RESET'] : $this->lang('L_RESET'); ?>" class="liteoption" name="reset" />
      </td>
    </tr>
  </table>
</form>