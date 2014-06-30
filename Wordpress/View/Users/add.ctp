<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('user_login');
		echo $this->Form->input('user_pass');
		echo $this->Form->input('user_nicename');
		echo $this->Form->input('user_email');
		echo $this->Form->input('user_url');
		echo $this->Form->input('user_registered');
		echo $this->Form->input('user_activation_key');
		echo $this->Form->input('user_status');
		echo $this->Form->input('display_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usermeta'), array('controller' => 'usermeta', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usermetum'), array('controller' => 'usermeta', 'action' => 'add')); ?> </li>
	</ul>
</div>
