<div class="usermeta view">
<h2><?php echo __('Usermetum'); ?></h2>
	<dl>
		<dt><?php echo __('Umeta Id'); ?></dt>
		<dd>
			<?php echo h($usermetum['Usermetum']['umeta_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usermetum['User']['ID'], array('controller' => 'users', 'action' => 'view', $usermetum['User']['ID'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Key'); ?></dt>
		<dd>
			<?php echo h($usermetum['Usermetum']['meta_key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Value'); ?></dt>
		<dd>
			<?php echo h($usermetum['Usermetum']['meta_value']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Usermetum'), array('action' => 'edit', $usermetum['Usermetum']['umeta_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Usermetum'), array('action' => 'delete', $usermetum['Usermetum']['umeta_id']), array(), __('Are you sure you want to delete # %s?', $usermetum['Usermetum']['umeta_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Usermeta'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usermetum'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
