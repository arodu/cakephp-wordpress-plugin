<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($user['User']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Login'); ?></dt>
		<dd>
			<?php echo h($user['User']['user_login']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Pass'); ?></dt>
		<dd>
			<?php echo h($user['User']['user_pass']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Nicename'); ?></dt>
		<dd>
			<?php echo h($user['User']['user_nicename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['user_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Url'); ?></dt>
		<dd>
			<?php echo h($user['User']['user_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Registered'); ?></dt>
		<dd>
			<?php echo h($user['User']['user_registered']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Activation Key'); ?></dt>
		<dd>
			<?php echo h($user['User']['user_activation_key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Status'); ?></dt>
		<dd>
			<?php echo h($user['User']['user_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['display_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['ID']), array(), __('Are you sure you want to delete # %s?', $user['User']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usermeta'), array('controller' => 'usermeta', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usermetum'), array('controller' => 'usermeta', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Comments'); ?></h3>
	<?php if (!empty($user['Comment'])): ?>
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
	<?php foreach ($user['Comment'] as $comment): ?>
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
<div class="related">
	<h3><?php echo __('Related Posts'); ?></h3>
	<?php if (!empty($user['Post'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('ID'); ?></th>
		<th><?php echo __('Post Author'); ?></th>
		<th><?php echo __('Post Date'); ?></th>
		<th><?php echo __('Post Date Gmt'); ?></th>
		<th><?php echo __('Post Content'); ?></th>
		<th><?php echo __('Post Title'); ?></th>
		<th><?php echo __('Post Excerpt'); ?></th>
		<th><?php echo __('Post Status'); ?></th>
		<th><?php echo __('Comment Status'); ?></th>
		<th><?php echo __('Ping Status'); ?></th>
		<th><?php echo __('Post Password'); ?></th>
		<th><?php echo __('Post Name'); ?></th>
		<th><?php echo __('To Ping'); ?></th>
		<th><?php echo __('Pinged'); ?></th>
		<th><?php echo __('Post Modified'); ?></th>
		<th><?php echo __('Post Modified Gmt'); ?></th>
		<th><?php echo __('Post Content Filtered'); ?></th>
		<th><?php echo __('Post Parent'); ?></th>
		<th><?php echo __('Guid'); ?></th>
		<th><?php echo __('Menu Order'); ?></th>
		<th><?php echo __('Post Type'); ?></th>
		<th><?php echo __('Post Mime Type'); ?></th>
		<th><?php echo __('Comment Count'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Post'] as $post): ?>
		<tr>
			<td><?php echo $post['ID']; ?></td>
			<td><?php echo $post['post_author']; ?></td>
			<td><?php echo $post['post_date']; ?></td>
			<td><?php echo $post['post_date_gmt']; ?></td>
			<td><?php echo $post['post_content']; ?></td>
			<td><?php echo $post['post_title']; ?></td>
			<td><?php echo $post['post_excerpt']; ?></td>
			<td><?php echo $post['post_status']; ?></td>
			<td><?php echo $post['comment_status']; ?></td>
			<td><?php echo $post['ping_status']; ?></td>
			<td><?php echo $post['post_password']; ?></td>
			<td><?php echo $post['post_name']; ?></td>
			<td><?php echo $post['to_ping']; ?></td>
			<td><?php echo $post['pinged']; ?></td>
			<td><?php echo $post['post_modified']; ?></td>
			<td><?php echo $post['post_modified_gmt']; ?></td>
			<td><?php echo $post['post_content_filtered']; ?></td>
			<td><?php echo $post['post_parent']; ?></td>
			<td><?php echo $post['guid']; ?></td>
			<td><?php echo $post['menu_order']; ?></td>
			<td><?php echo $post['post_type']; ?></td>
			<td><?php echo $post['post_mime_type']; ?></td>
			<td><?php echo $post['comment_count']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'posts', 'action' => 'view', $post['ID'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'posts', 'action' => 'edit', $post['ID'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'posts', 'action' => 'delete', $post['ID']), array(), __('Are you sure you want to delete # %s?', $post['ID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Usermeta'); ?></h3>
	<?php if (!empty($user['Usermetum'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Umeta Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Meta Key'); ?></th>
		<th><?php echo __('Meta Value'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Usermetum'] as $usermetum): ?>
		<tr>
			<td><?php echo $usermetum['umeta_id']; ?></td>
			<td><?php echo $usermetum['user_id']; ?></td>
			<td><?php echo $usermetum['meta_key']; ?></td>
			<td><?php echo $usermetum['meta_value']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'usermeta', 'action' => 'view', $usermetum['umeta_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'usermeta', 'action' => 'edit', $usermetum['umeta_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'usermeta', 'action' => 'delete', $usermetum['umeta_id']), array(), __('Are you sure you want to delete # %s?', $usermetum['umeta_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Usermetum'), array('controller' => 'usermeta', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
