<div class="posts index">
	<h2><?php echo __('Posts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('ID'); ?></th>
			<th><?php echo $this->Paginator->sort('post_author'); ?></th>
			<th><?php echo $this->Paginator->sort('post_date'); ?></th>
			<th><?php echo $this->Paginator->sort('post_date_gmt'); ?></th>
			<th><?php echo $this->Paginator->sort('post_content'); ?></th>
			<th><?php echo $this->Paginator->sort('post_title'); ?></th>
			<th><?php echo $this->Paginator->sort('post_excerpt'); ?></th>
			<th><?php echo $this->Paginator->sort('post_status'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_status'); ?></th>
			<th><?php echo $this->Paginator->sort('ping_status'); ?></th>
			<th><?php echo $this->Paginator->sort('post_password'); ?></th>
			<th><?php echo $this->Paginator->sort('post_name'); ?></th>
			<th><?php echo $this->Paginator->sort('to_ping'); ?></th>
			<th><?php echo $this->Paginator->sort('pinged'); ?></th>
			<th><?php echo $this->Paginator->sort('post_modified'); ?></th>
			<th><?php echo $this->Paginator->sort('post_modified_gmt'); ?></th>
			<th><?php echo $this->Paginator->sort('post_content_filtered'); ?></th>
			<th><?php echo $this->Paginator->sort('post_parent'); ?></th>
			<th><?php echo $this->Paginator->sort('guid'); ?></th>
			<th><?php echo $this->Paginator->sort('menu_order'); ?></th>
			<th><?php echo $this->Paginator->sort('post_type'); ?></th>
			<th><?php echo $this->Paginator->sort('post_mime_type'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_count'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($posts as $post): ?>
	<tr>
		<td><?php echo h($post['Post']['ID']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($post['User']['ID'], array('controller' => 'users', 'action' => 'view', $post['User']['ID'])); ?>
		</td>
		<td><?php echo h($post['Post']['post_date']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['post_date_gmt']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['post_content']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['post_title']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['post_excerpt']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['post_status']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['comment_status']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['ping_status']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['post_password']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['post_name']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['to_ping']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['pinged']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['post_modified']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['post_modified_gmt']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['post_content_filtered']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($post['PostParent']['ID'], array('controller' => 'posts', 'action' => 'view', $post['PostParent']['ID'])); ?>
		</td>
		<td><?php echo h($post['Post']['guid']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['menu_order']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['post_type']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['post_mime_type']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['comment_count']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $post['Post']['ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $post['Post']['ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $post['Post']['ID']), array(), __('Are you sure you want to delete # %s?', $post['Post']['ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post Parent'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Postmeta'), array('controller' => 'postmeta', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Postmetum'), array('controller' => 'postmeta', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Term Relationships'), array('controller' => 'term_relationships', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Term Relationship'), array('controller' => 'term_relationships', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
	</ul>
</div>
