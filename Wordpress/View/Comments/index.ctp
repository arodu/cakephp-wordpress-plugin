<div class="comments index">
	<h2><?php echo __('Comments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('comment_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_post_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_author'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_author_email'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_author_url'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_author_IP'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_date'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_date_gmt'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_content'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_karma'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_approved'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_agent'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_type'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_parent'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($comments as $comment): ?>
	<tr>
		<td><?php echo h($comment['Comment']['comment_ID']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($comment['Post']['ID'], array('controller' => 'posts', 'action' => 'view', $comment['Post']['ID'])); ?>
		</td>
		<td><?php echo h($comment['Comment']['comment_author']); ?>&nbsp;</td>
		<td><?php echo h($comment['Comment']['comment_author_email']); ?>&nbsp;</td>
		<td><?php echo h($comment['Comment']['comment_author_url']); ?>&nbsp;</td>
		<td><?php echo h($comment['Comment']['comment_author_IP']); ?>&nbsp;</td>
		<td><?php echo h($comment['Comment']['comment_date']); ?>&nbsp;</td>
		<td><?php echo h($comment['Comment']['comment_date_gmt']); ?>&nbsp;</td>
		<td><?php echo h($comment['Comment']['comment_content']); ?>&nbsp;</td>
		<td><?php echo h($comment['Comment']['comment_karma']); ?>&nbsp;</td>
		<td><?php echo h($comment['Comment']['comment_approved']); ?>&nbsp;</td>
		<td><?php echo h($comment['Comment']['comment_agent']); ?>&nbsp;</td>
		<td><?php echo h($comment['Comment']['comment_type']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($comment['CommentParent']['comment_ID'], array('controller' => 'comments', 'action' => 'view', $comment['CommentParent']['comment_ID'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($comment['User']['ID'], array('controller' => 'users', 'action' => 'view', $comment['User']['ID'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $comment['Comment']['comment_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $comment['Comment']['comment_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $comment['Comment']['comment_ID']), array(), __('Are you sure you want to delete # %s?', $comment['Comment']['comment_ID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Comment'), array('action' => 'add')); ?></li>
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
