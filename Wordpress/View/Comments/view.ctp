<div class="comments view">
<h2><?php echo __('Comment'); ?></h2>
	<dl>
		<dt><?php echo __('Comment ID'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['comment_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comment['Post']['ID'], array('controller' => 'posts', 'action' => 'view', $comment['Post']['ID'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Author'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['comment_author']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Author Email'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['comment_author_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Author Url'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['comment_author_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Author IP'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['comment_author_IP']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Date'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['comment_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Date Gmt'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['comment_date_gmt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Content'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['comment_content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Karma'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['comment_karma']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Approved'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['comment_approved']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Agent'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['comment_agent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Type'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['comment_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Parent'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comment['CommentParent']['comment_ID'], array('controller' => 'comments', 'action' => 'view', $comment['CommentParent']['comment_ID'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comment['User']['ID'], array('controller' => 'users', 'action' => 'view', $comment['User']['ID'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Comment'), array('action' => 'edit', $comment['Comment']['comment_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Comment'), array('action' => 'delete', $comment['Comment']['comment_ID']), array(), __('Are you sure you want to delete # %s?', $comment['Comment']['comment_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Commentmeta'); ?></h3>
	<?php if (!empty($comment['Commentmetum'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Meta Id'); ?></th>
		<th><?php echo __('Comment Id'); ?></th>
		<th><?php echo __('Meta Key'); ?></th>
		<th><?php echo __('Meta Value'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($comment['Commentmetum'] as $commentmetum): ?>
		<tr>
			<td><?php echo $commentmetum['meta_id']; ?></td>
			<td><?php echo $commentmetum['comment_id']; ?></td>
			<td><?php echo $commentmetum['meta_key']; ?></td>
			<td><?php echo $commentmetum['meta_value']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'commentmeta', 'action' => 'view', $commentmetum['meta_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'commentmeta', 'action' => 'edit', $commentmetum['meta_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'commentmeta', 'action' => 'delete', $commentmetum['meta_id']), array(), __('Are you sure you want to delete # %s?', $commentmetum['meta_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Commentmetum'), array('controller' => 'commentmeta', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
