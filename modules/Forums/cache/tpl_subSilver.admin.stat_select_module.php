<?php

// eXtreme Styles mod cache. Generated on Wed, 26 Apr 2023 21:35:49 +0000 (time=1682544949)

?><h1><?php echo isset($this->vars['L_SELECT_MODULE_TITLE']) ? $this->vars['L_SELECT_MODULE_TITLE'] : $this->lang('L_SELECT_MODULE_TITLE'); ?></h1>

<p><?php echo isset($this->vars['L_SELECT_MODULE_EXPLAIN']) ? $this->vars['L_SELECT_MODULE_EXPLAIN'] : $this->lang('L_SELECT_MODULE_EXPLAIN'); ?></p>

<form method="post" name="post" action="<?php echo isset($this->vars['S_ACTION']) ? $this->vars['S_ACTION'] : $this->lang('S_ACTION'); ?>">
<table cellspacing="1" cellpadding="4" border="0" align="center" class="forumline">
    <tr>
        <th class="thHead" align="center"><?php echo isset($this->vars['L_MODULE_SELECT']) ? $this->vars['L_MODULE_SELECT'] : $this->lang('L_MODULE_SELECT'); ?></th>
    </tr>
    <tr>
        <td class="row1" align="center"><?php echo isset($this->vars['S_MODULE_SELECT']) ? $this->vars['S_MODULE_SELECT'] : $this->lang('S_MODULE_SELECT'); ?><?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?>&nbsp;<input type="submit" name="select_module" value="<?php echo isset($this->vars['L_EDIT']) ? $this->vars['L_EDIT'] : $this->lang('L_EDIT'); ?>" class="mainoption" /></td>
    </tr>
</table></form>