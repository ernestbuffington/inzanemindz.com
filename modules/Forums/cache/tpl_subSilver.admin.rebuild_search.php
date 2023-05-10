<?php

// eXtreme Styles mod cache. Generated on Wed, 26 Apr 2023 21:35:20 +0000 (time=1682544920)

?><!-- $Id: rebuild_search.tpl,v 2.4.0.0 2006/06/17 19:32:23 chatasos Exp $ -->

<script>
<!--

// define some variables
var board_status_disabled = <?php echo isset($this->vars['BOARD_STATUS_DISABLED']) ? $this->vars['BOARD_STATUS_DISABLED'] : $this->lang('BOARD_STATUS_DISABLED'); ?>;

// update the description on button and disable it
function update_button(button)
{
  button.value = '<?php echo isset($this->vars['L_PROCESSING']) ? $this->vars['L_PROCESSING'] : $this->lang('L_PROCESSING'); ?>';
  button.disabled = true;

  //enable these, otherwise we get null values
  document.rebuild.start.disabled = false;
  document.rebuild.time_limit.disabled = false;
  document.rebuild.refresh_rate.disabled = false;
  document.rebuild.disable_board.disabled = false;

  return true;
}

// disable/enable the clear search options
function update_clear_search(myselect)
{
  // enable/disable radio buttons
  for (i = 0; i < 3; i++)
  {
    document.rebuild.clear_search[i].disabled = ( myselect.options[0].selected == false ) ? true : false;
  }

  if ( myselect.options[0].selected == true )
  {
    document.rebuild.post_limit.value = <?php echo isset($this->vars['POST_LIMIT_MAX']) ? $this->vars['POST_LIMIT_MAX'] : $this->lang('POST_LIMIT_MAX'); ?>;
    document.rebuild.session_posts_processing.value = <?php echo isset($this->vars['TOTAL_POSTS']) ? $this->vars['TOTAL_POSTS'] : $this->lang('TOTAL_POSTS'); ?>;
  }
  else
  {
    document.rebuild.post_limit.value = <?php echo isset($this->vars['POST_LIMIT']) ? $this->vars['POST_LIMIT'] : $this->lang('POST_LIMIT'); ?>;
    document.rebuild.session_posts_processing.value = <?php echo isset($this->vars['SESSION_POSTS_PROCESSING']) ? $this->vars['SESSION_POSTS_PROCESSING'] : $this->lang('SESSION_POSTS_PROCESSING'); ?>;
  }
}

// disable/enable some options when fast mode is enabled/disabled
function check_fast_mode(mycheckbox)
{
  if ( mycheckbox.checked == true )
  {
    // disable the "starting post_id" menu
    if ( document.rebuild.start.options )
    {
      document.rebuild.start.options[0].selected = true;
    }
    document.rebuild.start.disabled = true;

    // enable/disable radio buttons
    for (i = 0; i < 3; i++)
    {
      document.rebuild.clear_search[i].disabled = ( i == 0 ) ? true : false;
      document.rebuild.clear_search[i].checked = ( i == 2 ) ? true : false;
    }

    // use the appropriate values
    document.rebuild.post_limit.value = <?php echo isset($this->vars['FAST_POST_LIMIT']) ? $this->vars['FAST_POST_LIMIT'] : $this->lang('FAST_POST_LIMIT'); ?>;
    document.rebuild.session_posts_processing.value = <?php echo isset($this->vars['TOTAL_POSTS']) ? $this->vars['TOTAL_POSTS'] : $this->lang('TOTAL_POSTS'); ?>;

    // disable the "time limit" option
    document.rebuild.time_limit.value = <?php echo isset($this->vars['FAST_TIME_LIMIT']) ? $this->vars['FAST_TIME_LIMIT'] : $this->lang('FAST_TIME_LIMIT'); ?>;
    document.rebuild.time_limit.disabled = true;

    // disable the "refresh rate" option
    document.rebuild.refresh_rate.value = <?php echo isset($this->vars['FAST_REFRESH_RATE']) ? $this->vars['FAST_REFRESH_RATE'] : $this->lang('FAST_REFRESH_RATE'); ?>;
    document.rebuild.refresh_rate.disabled = true;

    // disable the "disable board" option
    if ( board_status_disabled == false )
    {
      document.rebuild.disable_board.checked = true;
      document.rebuild.disable_board.disabled = true;
    }
  }
  else
  {
    // enable the "starting post_id" menu
    document.rebuild.start.disabled = false;

    // enable/disable radio buttons
    for (i = 0; i < 3; i++)
    {
      document.rebuild.clear_search[i].disabled = false;
      document.rebuild.clear_search[i].checked = ( i == 0 ) ? true : false;
    }

    // use the appropriate values
    document.rebuild.post_limit.value = <?php echo isset($this->vars['POST_LIMIT_MAX']) ? $this->vars['POST_LIMIT_MAX'] : $this->lang('POST_LIMIT_MAX'); ?>;
    //document.rebuild.session_posts_processing.value = <?php echo isset($this->vars['TOTAL_POSTS']) ? $this->vars['TOTAL_POSTS'] : $this->lang('TOTAL_POSTS'); ?>;

    // disable the "time limit" option
    document.rebuild.time_limit.disabled = false;
    document.rebuild.time_limit.value = <?php echo isset($this->vars['TIME_LIMIT']) ? $this->vars['TIME_LIMIT'] : $this->lang('TIME_LIMIT'); ?>;

    // disable the "refresh rate" option
    document.rebuild.refresh_rate.disabled = false;
    document.rebuild.refresh_rate.value = <?php echo isset($this->vars['REFRESH_RATE']) ? $this->vars['REFRESH_RATE'] : $this->lang('REFRESH_RATE'); ?>;

    // enable the "disable board" option
    if ( board_status_disabled == false )
    {
      document.rebuild.disable_board.disabled = false;
      document.rebuild.disable_board.checked = false;
    }
  }
}

//-->
</script>

<h1><?php echo isset($this->vars['L_REBUILD_SEARCH']) ? $this->vars['L_REBUILD_SEARCH'] : $this->lang('L_REBUILD_SEARCH'); ?></h1>

<p><?php echo isset($this->vars['L_REBUILD_SEARCH_DESC']) ? $this->vars['L_REBUILD_SEARCH_DESC'] : $this->lang('L_REBUILD_SEARCH_DESC'); ?></p>

<form name="rebuild" method="post" action="<?php echo isset($this->vars['S_REBUILD_SEARCH_ACTION']) ? $this->vars['S_REBUILD_SEARCH_ACTION'] : $this->lang('S_REBUILD_SEARCH_ACTION'); ?>" onsubmit="update_button(rebuild.submit);">
  <table cellspacing="1" cellpadding="4" border="0" align="center" class="forumline">
    <tr>
      <th colspan="2" class="thHead"><?php echo isset($this->vars['L_REBUILD_SEARCH']) ? $this->vars['L_REBUILD_SEARCH'] : $this->lang('L_REBUILD_SEARCH'); ?></th>
    </tr>
    <tr>
      <td class="row1" nowrap="nowrap">
        <?php echo isset($this->vars['L_STARTING_POST_ID']) ? $this->vars['L_STARTING_POST_ID'] : $this->lang('L_STARTING_POST_ID'); ?><br />
        <span class="gensmall"><?php echo isset($this->vars['L_STARTING_POST_ID_EXPLAIN']) ? $this->vars['L_STARTING_POST_ID_EXPLAIN'] : $this->lang('L_STARTING_POST_ID_EXPLAIN'); ?></span>
      </td>
      <td class="row1" align="center">
        <?php

$start_text_input_count = ( isset($this->_tpldata['start_text_input.']) ) ?  sizeof($this->_tpldata['start_text_input.']) : 0;
for ($start_text_input_i = 0; $start_text_input_i < $start_text_input_count; $start_text_input_i++)
{
 $start_text_input_item = &$this->_tpldata['start_text_input.'][$start_text_input_i];
 $start_text_input_item['S_ROW_COUNT'] = $start_text_input_i;
 $start_text_input_item['S_NUM_ROWS'] = $start_text_input_count;

?>
        <input class="post" type="text" name="start_t" value="0" size="10" disabled="disabled" />
        <input type="hidden" name="start" value="0" />
        <?php

} // END start_text_input

if(isset($start_text_input_item)) { unset($start_text_input_item); } 

?>
        <?php

$start_select_input_count = ( isset($this->_tpldata['start_select_input.']) ) ?  sizeof($this->_tpldata['start_select_input.']) : 0;
for ($start_select_input_i = 0; $start_select_input_i < $start_select_input_count; $start_select_input_i++)
{
 $start_select_input_item = &$this->_tpldata['start_select_input.'][$start_select_input_i];
 $start_select_input_item['S_ROW_COUNT'] = $start_select_input_i;
 $start_select_input_item['S_NUM_ROWS'] = $start_select_input_count;

?>
        <select name="start" onChange="update_clear_search(this)">
          <option value="0">0 (<?php echo isset($this->vars['L_START_OPTION_BEGINNING']) ? $this->vars['L_START_OPTION_BEGINNING'] : $this->lang('L_START_OPTION_BEGINNING'); ?>)</option>
          <option value="<?php echo isset($this->vars['NEXT_START_POST_ID']) ? $this->vars['NEXT_START_POST_ID'] : $this->lang('NEXT_START_POST_ID'); ?>" selected="selected"><?php echo isset($this->vars['NEXT_START_POST_ID']) ? $this->vars['NEXT_START_POST_ID'] : $this->lang('NEXT_START_POST_ID'); ?> (<?php echo isset($this->vars['L_START_OPTION_CONTINUE']) ? $this->vars['L_START_OPTION_CONTINUE'] : $this->lang('L_START_OPTION_CONTINUE'); ?>)</option>
        </select>
        <?php

} // END start_select_input

if(isset($start_select_input_item)) { unset($start_select_input_item); } 

?>
      </td>
    </tr>
    <tr>
      <td class="row2" nowrap="nowrap">
        <?php echo isset($this->vars['L_CLEAR_SEARCH_TABLES']) ? $this->vars['L_CLEAR_SEARCH_TABLES'] : $this->lang('L_CLEAR_SEARCH_TABLES'); ?><br />
        <span class="gensmall"><?php echo isset($this->vars['L_CLEAR_SEARCH_TABLES_EXPLAIN']) ? $this->vars['L_CLEAR_SEARCH_TABLES_EXPLAIN'] : $this->lang('L_CLEAR_SEARCH_TABLES_EXPLAIN'); ?></span>
      </td>
      <td class="row2" align="left">
        <input type="radio" name="clear_search" value="0" <?php echo isset($this->vars['CLEAR_SEARCH_DISABLED']) ? $this->vars['CLEAR_SEARCH_DISABLED'] : $this->lang('CLEAR_SEARCH_DISABLED'); ?> checked="checked" /><span class="gensmall"><?php echo isset($this->vars['L_CLEAR_SEARCH_NO']) ? $this->vars['L_CLEAR_SEARCH_NO'] : $this->lang('L_CLEAR_SEARCH_NO'); ?></span><br />
        <input type="radio" name="clear_search" value="1" <?php echo isset($this->vars['CLEAR_SEARCH_DISABLED']) ? $this->vars['CLEAR_SEARCH_DISABLED'] : $this->lang('CLEAR_SEARCH_DISABLED'); ?> /><span class="gensmall"><?php echo isset($this->vars['L_CLEAR_SEARCH_DELETE']) ? $this->vars['L_CLEAR_SEARCH_DELETE'] : $this->lang('L_CLEAR_SEARCH_DELETE'); ?></span><br />
        <input type="radio" name="clear_search" value="2" <?php echo isset($this->vars['CLEAR_SEARCH_DISABLED']) ? $this->vars['CLEAR_SEARCH_DISABLED'] : $this->lang('CLEAR_SEARCH_DISABLED'); ?> /><span class="gensmall"><?php echo isset($this->vars['L_CLEAR_SEARCH_TRUNCATE']) ? $this->vars['L_CLEAR_SEARCH_TRUNCATE'] : $this->lang('L_CLEAR_SEARCH_TRUNCATE'); ?></span>
      </td>
    </tr>
    <tr>
      <td class="row1" nowrap="nowrap">
        <?php echo isset($this->vars['L_NUM_OF_POSTS']) ? $this->vars['L_NUM_OF_POSTS'] : $this->lang('L_NUM_OF_POSTS'); ?><br /><span class="gensmall"><?php echo isset($this->vars['L_NUM_OF_POSTS_EXPLAIN']) ? $this->vars['L_NUM_OF_POSTS_EXPLAIN'] : $this->lang('L_NUM_OF_POSTS_EXPLAIN'); ?></span>
      </td>
      <td class="row1" align="center">
        <input class="post" type="text" name="session_posts_processing" value="<?php echo isset($this->vars['SESSION_POSTS_PROCESSING']) ? $this->vars['SESSION_POSTS_PROCESSING'] : $this->lang('SESSION_POSTS_PROCESSING'); ?>" size="10" />
      </td>
    </tr>
    <tr>
      <td class="row2" nowrap="nowrap">
        <?php echo isset($this->vars['L_POSTS_PER_CYCLE']) ? $this->vars['L_POSTS_PER_CYCLE'] : $this->lang('L_POSTS_PER_CYCLE'); ?><br />
        <span class="gensmall"><?php echo isset($this->vars['L_POSTS_PER_CYCLE_EXPLAIN']) ? $this->vars['L_POSTS_PER_CYCLE_EXPLAIN'] : $this->lang('L_POSTS_PER_CYCLE_EXPLAIN'); ?></span>
      </td>
      <td class="row2" align="center">
        <input class="post" type="text" name="post_limit" value="<?php echo isset($this->vars['POST_LIMIT']) ? $this->vars['POST_LIMIT'] : $this->lang('POST_LIMIT'); ?>" size="10" />
      </td>
    </tr>
    <tr>
      <td class="row1" nowrap="nowrap">
        <?php echo isset($this->vars['L_TIME_LIMIT']) ? $this->vars['L_TIME_LIMIT'] : $this->lang('L_TIME_LIMIT'); ?><br />
        <span class="gensmall"><?php echo isset($this->vars['L_TIME_LIMIT_EXPLAIN']) ? $this->vars['L_TIME_LIMIT_EXPLAIN'] : $this->lang('L_TIME_LIMIT_EXPLAIN'); ?></span>
      </td>
      <td class="row1" align="center">
        <input class="post" type="text" name="time_limit" value="<?php echo isset($this->vars['TIME_LIMIT']) ? $this->vars['TIME_LIMIT'] : $this->lang('TIME_LIMIT'); ?>" size="10" />
      </td>
    </tr>
    <tr>
      <td class="row2" nowrap="nowrap">
        <?php echo isset($this->vars['L_REFRESH_RATE']) ? $this->vars['L_REFRESH_RATE'] : $this->lang('L_REFRESH_RATE'); ?><br />
        <span class="gensmall"><?php echo isset($this->vars['L_REFRESH_RATE_EXPLAIN']) ? $this->vars['L_REFRESH_RATE_EXPLAIN'] : $this->lang('L_REFRESH_RATE_EXPLAIN'); ?></span>
      </td>
      <td class="row2" align="center">
        <input class="post" type="text" name="refresh_rate" value="<?php echo isset($this->vars['REFRESH_RATE']) ? $this->vars['REFRESH_RATE'] : $this->lang('REFRESH_RATE'); ?>" size="10" />
      </td>
    </tr>
    <tr>
      <td class="row1" nowrap="nowrap">
        <?php echo isset($this->vars['L_DISABLE_BOARD']) ? $this->vars['L_DISABLE_BOARD'] : $this->lang('L_DISABLE_BOARD'); ?><br />
        <span class="gensmall"><?php echo isset($this->vars['L_DISABLE_BOARD_EXPLAIN']) ? $this->vars['L_DISABLE_BOARD_EXPLAIN'] : $this->lang('L_DISABLE_BOARD_EXPLAIN'); ?></span>
      </td>
      <td class="row1" align="center">
        <input class="post" type="checkbox" name="disable_board" <?php echo isset($this->vars['BOARD_DISABLED']) ? $this->vars['BOARD_DISABLED'] : $this->lang('BOARD_DISABLED'); ?> />
      </td>
    </tr>
    <tr>
      <td class="row2" nowrap="nowrap">
        <?php echo isset($this->vars['L_FAST_MODE']) ? $this->vars['L_FAST_MODE'] : $this->lang('L_FAST_MODE'); ?><br />
        <span class="gensmall"><?php echo isset($this->vars['L_FAST_MODE_EXPLAIN']) ? $this->vars['L_FAST_MODE_EXPLAIN'] : $this->lang('L_FAST_MODE_EXPLAIN'); ?></span>
      </td>
      <td class="row2" align="center">
        <input class="post" type="checkbox" name="fast_mode" onClick="check_fast_mode(this)" />
      </td>
    </tr>
    <?php

$last_saved_info_count = ( isset($this->_tpldata['last_saved_info.']) ) ?  sizeof($this->_tpldata['last_saved_info.']) : 0;
for ($last_saved_info_i = 0; $last_saved_info_i < $last_saved_info_count; $last_saved_info_i++)
{
 $last_saved_info_item = &$this->_tpldata['last_saved_info.'][$last_saved_info_i];
 $last_saved_info_item['S_ROW_COUNT'] = $last_saved_info_i;
 $last_saved_info_item['S_NUM_ROWS'] = $last_saved_info_count;

?>
    <tr>
      <td class="row3" colspan="2" align="center">
        <span class="gensmall"><?php echo isset($this->vars['LAST_SAVED_PROCESSING']) ? $this->vars['LAST_SAVED_PROCESSING'] : $this->lang('LAST_SAVED_PROCESSING'); ?></span>
      </td>
    </tr>
    <?php

} // END last_saved_info

if(isset($last_saved_info_item)) { unset($last_saved_info_item); } 

?>
    <tr>
      <td class="catBottom" colspan="2" align="center">
        <input type="hidden" name="sid" value="<?php echo isset($this->vars['SESSION_ID']) ? $this->vars['SESSION_ID'] : $this->lang('SESSION_ID'); ?>" />
        <?php echo isset($this->vars['S_HIDDEN_FIELDS']) ? $this->vars['S_HIDDEN_FIELDS'] : $this->lang('S_HIDDEN_FIELDS'); ?>
        <input class="mainoption" type="submit" name="submit" value="<?php echo isset($this->vars['L_REBUILD_SEARCH']) ? $this->vars['L_REBUILD_SEARCH'] : $this->lang('L_REBUILD_SEARCH'); ?>" />
      </td>
    </tr>
  </table>
</form>

<div align="center"><span class="copyright"><?php echo isset($this->vars['L_REBUILD_SEARCH']) ? $this->vars['L_REBUILD_SEARCH'] : $this->lang('L_REBUILD_SEARCH'); ?> <?php echo isset($this->vars['REBUILD_SEARCH_VERSION']) ? $this->vars['REBUILD_SEARCH_VERSION'] : $this->lang('REBUILD_SEARCH_VERSION'); ?></span></div>

<br clear="all" />