<div class="forumqs view">
<h2><?php echo __('Forumq'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($forumq['Forumq']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Question'); ?></dt>
		<dd>
			<?php echo h($forumq['Forumq']['question']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Destination'); ?></dt>
		<dd>
			<?php echo $this->Html->link($forumq['Destination']['name'], array('controller' => 'destinations', 'action' => 'view', $forumq['Destination']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($forumq['User']['id'], array('controller' => 'users', 'action' => 'view', $forumq['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Forumq'), array('action' => 'edit', $forumq['Forumq']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Forumq'), array('action' => 'delete', $forumq['Forumq']['id']), array(), __('Are you sure you want to delete # %s?', $forumq['Forumq']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Forumqs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Forumq'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Destinations'), array('controller' => 'destinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Destination'), array('controller' => 'destinations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Forumas'), array('controller' => 'forumas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foruma'), array('controller' => 'forumas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Forumas'); ?></h3>
	<?php if (!empty($forumq['Foruma'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Answer'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Forumq Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($forumq['Foruma'] as $foruma): ?>
		<tr>
			<td><?php echo $foruma['id']; ?></td>
			<td><?php echo $foruma['answer']; ?></td>
			<td><?php echo $foruma['user_id']; ?></td>
			<td><?php echo $foruma['forumq_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'forumas', 'action' => 'view', $foruma['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'forumas', 'action' => 'edit', $foruma['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'forumas', 'action' => 'delete', $foruma['id']), array(), __('Are you sure you want to delete # %s?', $foruma['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Foruma'), array('controller' => 'forumas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
