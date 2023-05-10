<?php

// eXtreme Styles mod cache. Generated on Wed, 10 May 2023 01:59:04 +0000 (time=1683683944)

?><h1><?php echo isset($this->vars['L_FORUM_PRUNE']) ? $this->vars['L_FORUM_PRUNE'] : $this->lang('L_FORUM_PRUNE'); ?></h1>

<p><?php echo isset($this->vars['L_FORUM_PRUNE_EXPLAIN']) ? $this->vars['L_FORUM_PRUNE_EXPLAIN'] : $this->lang('L_FORUM_PRUNE_EXPLAIN'); ?></p>

<h2><?php echo isset($this->vars['L_FORUM']) ? $this->vars['L_FORUM'] : $this->lang('L_FORUM'); ?>: <?php echo isset($this->vars['FORUM_NAME']) ? $this->vars['FORUM_NAME'] : $this->lang('FORUM_NAME'); ?></h2>

<form method="post"    action="<?php echo isset($this->vars['S_FORUMPRUNE_ACTION']) ? $this->vars['S_FORUMPRUNE_ACTION'] : $this->lang('S_FORUMPRUNE_ACTION'); ?>">
  <table cellspacing="1" cellpadding="4" border="0" align="center" class="forumline">
    <tr> 
      <th class="thHead"><?php echo isset($this->vars['L_FORUM_PRUNE']) ? $this->vars['L_FORUM_PRUNE'] : $this->lang('L_FORUM_PRUNE'); ?></th>
    </tr>
    <tr>
      <td class="row1"><?php echo isset($this->vars['S_PRUNE_DATA']) ? $this->vars['S_PRUNE_DATA'] : $this->lang('S_PRUNE_DATA'); ?></td>
    </tr>
    <tr> 
      <td class="catBottom" align="center"><?php echo isset($this->vars['S_HIDDEN_VARS']) ? $this->vars['S_HIDDEN_VARS'] : $this->lang('S_HIDDEN_VARS'); ?>
        <input type="submit" name="doprune" value="<?php echo isset($this->vars['L_DO_PRUNE']) ? $this->vars['L_DO_PRUNE'] : $this->lang('L_DO_PRUNE'); ?>" class="mainoption">
      </td>
    </tr>
  </table>
</form>