<div class="posts view">
<h2><?php echo __('Post'); ?></h2>
	<dl>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($post['Post']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($post['User']['ID'], array('controller' => 'users', 'action' => 'view', $post['User']['ID'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Date'); ?></dt>
		<dd>
			<?php echo h($post['Post']['post_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Date Gmt'); ?></dt>
		<dd>
			<?php echo h($post['Post']['post_date_gmt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Content'); ?></dt>
		<dd>
			<?php echo h($post['Post']['post_content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Title'); ?></dt>
		<dd>
			<?php echo h($post['Post']['post_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Excerpt'); ?></dt>
		<dd>
			<?php echo h($post['Post']['post_excerpt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Status'); ?></dt>
		<dd>
			<?php echo h($post['Post']['post_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Status'); ?></dt>
		<dd>
			<?php echo h($post['Post']['comment_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ping Status'); ?></dt>
		<dd>
			<?php echo h($post['Post']['ping_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Password'); ?></dt>
		<dd>
			<?php echo h($post['Post']['post_password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Name'); ?></dt>
		<dd>
			<?php echo h($post['Post']['post_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Ping'); ?></dt>
		<dd>
			<?php echo h($post['Post']['to_ping']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pinged'); ?></dt>
		<dd>
			<?php echo h($post['Post']['pinged']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Modified'); ?></dt>
		<dd>
			<?php echo h($post['Post']['post_modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Modified Gmt'); ?></dt>
		<dd>
			<?php echo h($post['Post']['post_modified_gmt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Content Filtered'); ?></dt>
		<dd>
			<?php echo h($post['Post']['post_content_filtered']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Parent'); ?></dt>
		<dd>
			<?php echo $this->Html->link($post['PostParent']['ID'], array('controller' => 'posts', 'action' => 'view', $post['PostParent']['ID'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Guid'); ?></dt>
		<dd>
			<?php echo h($post['Post']['guid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Menu Order'); ?></dt>
		<dd>
			<?php echo h($post['Post']['menu_order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Type'); ?></dt>
		<dd>
			<?php echo h($post['Post']['post_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Mime Type'); ?></dt>
		<dd>
			<?php echo h($post['Post']['post_mime_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Count'); ?></dt>
		<dd>
			<?php echo h($post['Post']['comment_count']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Post'), array('action' => 'edit', $post['Post']['ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Post'), array('action' => 'delete', $post['Post']['ID']), array(), __('Are you sure you want to delete # %s?', $post['Post']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Postmeta'); ?></h3>
	<?php if (!empty($post['Postmetum'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Meta Id'); ?></th>
		<th><?php echo __('Post Id'); ?></th>
		<th><?php echo __('Meta Key'); ?></th>
		<th><?php echo __('Meta Value'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($post['Postmetum'] as $postmetum): ?>
		<tr>
			<td><?php echo $postmetum['meta_id']; ?></td>
			<td><?php echo $postmetum['post_id']; ?></td>
			<td><?php echo $postmetum['meta_key']; ?></td>
			<td><?php echo $postmetum['meta_value']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'postmeta', 'action' => 'view', $postmetum['meta_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'postmeta', 'action' => 'edit', $postmetum['meta_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'postmeta', 'action' => 'delete', $postmetum['meta_id']), array(), __('Are you sure you want to delete # %s?', $postmetum['meta_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Postmetum'), array('controller' => 'postmeta', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Term Relationships'); ?></h3>
	<?php if (!empty($post['TermRelationship'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Object Id'); ?></th>
		<th><?php echo __('Term Taxonomy Id'); ?></th>
		<th><?php echo __('Term Order'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($post['TermRelationship'] as $termRelationship): ?>
		<tr>
			<td><?php echo $termRelationship['object_id']; ?></td>
			<td><?php echo $termRelationship['term_taxonomy_id']; ?></td>
			<td><?php echo $termRelationship['term_order']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'term_relationships', 'action' => 'view', $termRelationship['object_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'term_relationships', 'action' => 'edit', $termRelationship['object_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'term_relationships', 'action' => 'delete', $termRelationship['object_id']), array(), __('Are you sure you want to delete # %s?', $termRelationship['object_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Term Relationship'), array('controller' => 'term_relationships', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Comments'); ?></h3>
	<?php if (!empty($post['Comment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Comment ID'); ?></th>
		<th><?php echo __('Comment Post ID'); ?></th>
		<th><?php echo __('Comment Author'); ?></th>
		<th><?php echo __('Comment Author Email'); ?></th>
		<th><?php echo __('Comment Author Url'); ?></th>
		<th><?php echo __('Comment Author IP'); ?></th>
		<th><?php echo __('Comment Date'); ?></th>
		<th><?php echo __('Comment Date Gmt'); ?></th>
		<th><?php echo __('Comment Content'); ?></th>
		<th><?php echo __('Comment Karma'); ?></th>
		<th><?php echo __('Comment Approved'); ?></th>
		<th><?php echo __('Comment Agent'); ?></th>
		<th><?php echo __('Comment Type'); ?></th>
		<th><?php echo __('Comment Parent'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($post['Comment'] as $comment): ?>
		<tr>
			<td><?php echo $comment['comment_ID']; ?></td>
			<td><?php echo $comment['comment_post_ID']; ?></td>
			<td><?php echo $comment['comment_author']; ?></td>
			<td><?php echo $comment['comment_author_email']; ?></td>
			<td><?php echo $comment['comment_author_url']; ?></td>
			<td><?php echo $comment['comment_author_IP']; ?></td>
			<td><?php echo $comment['comment_date']; ?></td>
			<td><?php echo $comment['comment_date_gmt']; ?></td>
			<td><?php echo $comment['comment_content']; ?></td>
			<td><?php echo $comment['comment_karma']; ?></td>
			<td><?php echo $comment['comment_approved']; ?></td>
			<td><?php echo $comment['comment_agent']; ?></td>
			<td><?php echo $comment['comment_type']; ?></td>
			<td><?php echo $comment['comment_parent']; ?></td>
			<td><?php echo $comment['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comments', 'action' => 'view', $comment['comment_ID'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comments', 'action' => 'edit', $comment['comment_ID'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments', 'action' => 'delete', $comment['comment_ID']), array(), __('Are you sure you want to delete # %s?', $comment['comment_ID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
