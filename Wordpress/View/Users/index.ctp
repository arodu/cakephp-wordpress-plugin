<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('ID'); ?></th>
			<th><?php echo $this->Paginator->sort('user_login'); ?></th>
			<th><?php echo $this->Paginator->sort('user_pass'); ?></th>
			<th><?php echo $this->Paginator->sort('user_nicename'); ?></th>
			<th><?php echo $this->Paginator->sort('user_email'); ?></th>
			<th><?php echo $this->Paginator->sort('user_url'); ?></th>
			<th><?php echo $this->Paginator->sort('user_registered'); ?></th>
			<th><?php echo $this->Paginator->sort('user_activation_key'); ?></th>
			<th><?php echo $this->Paginator->sort('user_status'); ?></th>
			<th><?php echo $this->Paginator->sort('display_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['ID']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['user_login']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['user_pass']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['user_nicename']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['user_email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['user_url']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['user_registered']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['user_activation_key']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['user_status']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['display_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['ID']), array(), __('Are you sure you want to delete # %s?', $user['User']['ID'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usermeta'), array('controller' => 'usermeta', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usermetum'), array('controller' => 'usermeta', 'action' => 'add')); ?> </li>
	</ul>
</div>
