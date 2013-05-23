<?php if (!defined('IN_PHPBB')) exit; ?><form method="post" action="<?php echo (isset($this->_rootref['S_POLL_ACTION'])) ? $this->_rootref['S_POLL_ACTION'] : ''; ?>" onsubmit="return wpu_poll_submit(<?php echo (isset($this->_rootref['POLL_ID'])) ? $this->_rootref['POLL_ID'] : ''; ?>, this);">
	<div class="panel">
		<div class="inner"><span class="corners-top"><span></span></span>

		<div class="content">
			<h2><?php echo (isset($this->_rootref['POLL_QUESTION'])) ? $this->_rootref['POLL_QUESTION'] : ''; ?></h2>
			<p class="author"><?php echo ((isset($this->_rootref['L_POLL_LENGTH'])) ? $this->_rootref['L_POLL_LENGTH'] : ((isset($user->lang['POLL_LENGTH'])) ? $user->lang['POLL_LENGTH'] : '{ POLL_LENGTH }')); if ($this->_rootref['S_CAN_VOTE'] && $this->_rootref['L_POLL_LENGTH']) {  ?><br /><?php } if ($this->_rootref['S_CAN_VOTE']) {  echo ((isset($this->_rootref['L_MAX_VOTES'])) ? $this->_rootref['L_MAX_VOTES'] : ((isset($user->lang['MAX_VOTES'])) ? $user->lang['MAX_VOTES'] : '{ MAX_VOTES }')); } ?></p>

			<fieldset class="polls">
			<input type="hidden" name="pollid" value="<?php echo (isset($this->_rootref['POLL_ID'])) ? $this->_rootref['POLL_ID'] : ''; ?>"></input>
			<input type="hidden" name="polltemplate" value="<?php echo (isset($this->_rootref['POLL_TEMPLATE'])) ? $this->_rootref['POLL_TEMPLATE'] : ''; ?>"></input>
			<?php $_poll_option_count = (isset($this->_tpldata['poll_option'])) ? sizeof($this->_tpldata['poll_option']) : 0;if ($_poll_option_count) {for ($_poll_option_i = 0; $_poll_option_i < $_poll_option_count; ++$_poll_option_i){$_poll_option_val = &$this->_tpldata['poll_option'][$_poll_option_i]; ?>

				<dl class="<?php if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?>voted<?php } ?>"<?php if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?> title="<?php echo ((isset($this->_rootref['L_POLL_VOTED_OPTION'])) ? $this->_rootref['L_POLL_VOTED_OPTION'] : ((isset($user->lang['POLL_VOTED_OPTION'])) ? $user->lang['POLL_VOTED_OPTION'] : '{ POLL_VOTED_OPTION }')); ?>"<?php } ?>>
					<dt><?php if ($this->_rootref['S_CAN_VOTE']) {  ?><label for="vote_<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>"><?php echo $_poll_option_val['POLL_OPTION_CAPTION']; ?></label><?php } else { echo $_poll_option_val['POLL_OPTION_CAPTION']; } ?></dt>
					<?php if ($this->_rootref['S_CAN_VOTE']) {  ?><dd style="width: auto;"><?php if ($this->_rootref['S_IS_MULTI_CHOICE']) {  ?><input type="checkbox" name="vote_id[]" id="vote_<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>" value="<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>"<?php if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?> checked="checked"<?php } ?> /><?php } else { ?><input type="radio" name="vote_id[]" id="vote_<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>" value="<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>"<?php if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?> checked="checked"<?php } ?> /><?php } ?></dd><?php } if ($this->_rootref['S_DISPLAY_RESULTS']) {  ?><dd class="resultbar"><div class="<?php if ($_poll_option_val['POLL_OPTION_PCT'] < (20)) {  ?>pollbar1<?php } else if ($_poll_option_val['POLL_OPTION_PCT'] < (40)) {  ?>pollbar2<?php } else if ($_poll_option_val['POLL_OPTION_PCT'] < (60)) {  ?>pollbar3<?php } else if ($_poll_option_val['POLL_OPTION_PCT'] < (80)) {  ?>pollbar4<?php } else { ?>pollbar5<?php } ?>" style="width:<?php echo $_poll_option_val['POLL_OPTION_PERCENT']; ?>;"><?php echo $_poll_option_val['POLL_OPTION_RESULT']; ?></div></dd>
					<dd><?php if ($_poll_option_val['POLL_OPTION_RESULT'] == 0) {  echo ((isset($this->_rootref['L_NO_VOTES'])) ? $this->_rootref['L_NO_VOTES'] : ((isset($user->lang['NO_VOTES'])) ? $user->lang['NO_VOTES'] : '{ NO_VOTES }')); } else { echo $_poll_option_val['POLL_OPTION_PERCENT']; } ?></dd><?php } ?>

				</dl>
			<?php }} if ($this->_rootref['S_DISPLAY_RESULTS']) {  ?>

				<dl>
					<dt>&nbsp;</dt>
					<dd class="resultbar"><?php echo ((isset($this->_rootref['L_TOTAL_VOTES'])) ? $this->_rootref['L_TOTAL_VOTES'] : ((isset($user->lang['TOTAL_VOTES'])) ? $user->lang['TOTAL_VOTES'] : '{ TOTAL_VOTES }')); ?> : <?php echo (isset($this->_rootref['TOTAL_VOTES'])) ? $this->_rootref['TOTAL_VOTES'] : ''; ?></dd>
				</dl>
			<?php } if ($this->_rootref['S_CAN_VOTE']) {  ?>

				<dl style="border-top: none;">
					<dt>&nbsp;</dt>
					<dd class="resultbar"><input type="submit" name="update" value="<?php echo ((isset($this->_rootref['L_SUBMIT_VOTE'])) ? $this->_rootref['L_SUBMIT_VOTE'] : ((isset($user->lang['SUBMIT_VOTE'])) ? $user->lang['SUBMIT_VOTE'] : '{ SUBMIT_VOTE }')); ?>" class="button1" /></dd>
				</dl>
			<?php } if (! $this->_rootref['S_DISPLAY_RESULTS']) {  ?>

				<dl style="border-top: none;">
					<dt>&nbsp;</dt>
					<dd class="resultbar totalvotes resultlink"><a href="<?php echo (isset($this->_rootref['U_VIEW_RESULTS'])) ? $this->_rootref['U_VIEW_RESULTS'] : ''; ?>"  onclick="return wpu_poll_results(<?php echo (isset($this->_rootref['POLL_ID'])) ? $this->_rootref['POLL_ID'] : ''; ?>);"><?php echo ((isset($this->_rootref['L_VIEW_RESULTS'])) ? $this->_rootref['L_VIEW_RESULTS'] : ((isset($user->lang['VIEW_RESULTS'])) ? $user->lang['VIEW_RESULTS'] : '{ VIEW_RESULTS }')); ?></a></dd>
				</dl>
			<?php } if ($this->_rootref['S_SHOW_LINK']) {  ?>

				<dl style="border-top: none;">
					<dt>&nbsp;</dt>
					<dd class="resultbar totalvotes topiclink"><a href="<?php echo (isset($this->_rootref['U_TOPIC_LINK'])) ? $this->_rootref['U_TOPIC_LINK'] : ''; ?>"><?php echo ((isset($this->_rootref['L_TOPIC_LINK'])) ? $this->_rootref['L_TOPIC_LINK'] : ((isset($user->lang['TOPIC_LINK'])) ? $user->lang['TOPIC_LINK'] : '{ TOPIC_LINK }')); ?></a></dd>
				</dl>
			<?php } ?>

			
			</fieldset>
		</div>
		<span class="corners-bottom"><span></span></span></div>
	</div>
</form>