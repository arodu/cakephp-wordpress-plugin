<div class="usermeta form">
<?php echo $this->Form->create('Usermetum'); ?>
	<fieldset>
		<legend><?php echo __('Edit Usermetum'); ?></legend>
	<?php
		echo $this->Form->input('umeta_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('meta_key');
		echo $this->Form->input('meta_value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Usermetum.umeta_id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Usermetum.umeta_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Usermeta'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
