<div class="comments form">
<?php echo $this->Form->create('Comment'); ?>
	<fieldset>
		<legend><?php echo __('Edit Comment'); ?></legend>
	<?php
		echo $this->Form->input('comment_ID');
		echo $this->Form->input('comment_post_ID');
		echo $this->Form->input('comment_author');
		echo $this->Form->input('comment_author_email');
		echo $this->Form->input('comment_author_url');
		echo $this->Form->input('comment_author_IP');
		echo $this->Form->input('comment_date');
		echo $this->Form->input('comment_date_gmt');
		echo $this->Form->input('comment_content');
		echo $this->Form->input('comment_karma');
		echo $this->Form->input('comment_approved');
		echo $this->Form->input('comment_agent');
		echo $this->Form->input('comment_type');
		echo $this->Form->input('comment_parent');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Comment.comment_ID')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Comment.comment_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Comments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment Parent'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Commentmeta'), array('controller' => 'commentmeta', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commentmetum'), array('controller' => 'commentmeta', 'action' => 'add')); ?> </li>
	</ul>
</div>
