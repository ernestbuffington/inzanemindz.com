<?php

// eXtreme Styles mod cache. Generated on Wed, 10 May 2023 01:59:12 +0000 (time=1683683952)

?><h1><?php echo isset($this->vars['L_FORUM_PRUNE']) ? $this->vars['L_FORUM_PRUNE'] : $this->lang('L_FORUM_PRUNE'); ?></h1>

<p><?php echo isset($this->vars['L_PRUNE_RESULT']) ? $this->vars['L_PRUNE_RESULT'] : $this->lang('L_PRUNE_RESULT'); ?></p>

<table cellspacing="1" cellpadding="4" border="0" align="center" class="forumline">
    <tr>
        <th class="thCornerL"><?php echo isset($this->vars['L_FORUM']) ? $this->vars['L_FORUM'] : $this->lang('L_FORUM'); ?></th>
        <th class="thTop"><?php echo isset($this->vars['L_TOPICS_PRUNED']) ? $this->vars['L_TOPICS_PRUNED'] : $this->lang('L_TOPICS_PRUNED'); ?></th>
        <th class="thCornerR"><?php echo isset($this->vars['L_POSTS_PRUNED']) ? $this->vars['L_POSTS_PRUNED'] : $this->lang('L_POSTS_PRUNED'); ?></th>
    </tr>
    <?php

$prune_results_count = ( isset($this->_tpldata['prune_results.']) ) ?  sizeof($this->_tpldata['prune_results.']) : 0;
for ($prune_results_i = 0; $prune_results_i < $prune_results_count; $prune_results_i++)
{
 $prune_results_item = &$this->_tpldata['prune_results.'][$prune_results_i];
 $prune_results_item['S_ROW_COUNT'] = $prune_results_i;
 $prune_results_item['S_NUM_ROWS'] = $prune_results_count;

?>
    <tr>
        <td class="<?php echo isset($prune_results_item['ROW_CLASS']) ? $prune_results_item['ROW_CLASS'] : ''; ?>" align="center"><?php echo isset($prune_results_item['FORUM_NAME']) ? $prune_results_item['FORUM_NAME'] : ''; ?></td>
        <td class="<?php echo isset($prune_results_item['ROW_CLASS']) ? $prune_results_item['ROW_CLASS'] : ''; ?>" align="center"><?php echo isset($prune_results_item['FORUM_TOPICS']) ? $prune_results_item['FORUM_TOPICS'] : ''; ?></td>
        <td class="<?php echo isset($prune_results_item['ROW_CLASS']) ? $prune_results_item['ROW_CLASS'] : ''; ?>" align="center"><?php echo isset($prune_results_item['FORUM_POSTS']) ? $prune_results_item['FORUM_POSTS'] : ''; ?></td>
    </tr>
    <?php

} // END prune_results

if(isset($prune_results_item)) { unset($prune_results_item); } 

?>
</table>

<br />