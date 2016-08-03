<div class="destinations view">
<h2><?php echo __('Destination'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($destination['Destination']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($destination['Destination']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($destination['Destination']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($destination['Destination']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($destination['Destination']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo h($destination['Destination']['country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lat'); ?></dt>
		<dd>
			<?php echo h($destination['Destination']['lat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Long'); ?></dt>
		<dd>
			<?php echo h($destination['Destination']['long']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo1'); ?></dt>
		<dd>
			<?php echo h($destination['Destination']['photo1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ranking'); ?></dt>
		<dd>
			<?php echo h($destination['Destination']['ranking']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Security'); ?></dt>
		<dd>
			<?php echo h($destination['Destination']['security']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Environment'); ?></dt>
		<dd>
			<?php echo h($destination['Destination']['environment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Budget'); ?></dt>
		<dd>
			<?php echo h($destination['Destination']['budget']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Affluence'); ?></dt>
		<dd>
			<?php echo h($destination['Destination']['affluence']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($destination['Category']['name'], array('controller' => 'categories', 'action' => 'view', $destination['Category']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Destination'), array('action' => 'edit', $destination['Destination']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Destination'), array('action' => 'delete', $destination['Destination']['id']), array(), __('Are you sure you want to delete # %s?', $destination['Destination']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Destinations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Destination'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Forumqs'), array('controller' => 'forumqs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Forumq'), array('controller' => 'forumqs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Points'), array('controller' => 'points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Point'), array('controller' => 'points', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Comments'); ?></h3>
	<?php if (!empty($destination['Comment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Destination Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Security'); ?></th>
		<th><?php echo __('Environment'); ?></th>
		<th><?php echo __('Budget'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($destination['Comment'] as $comment): ?>
		<tr>
			<td><?php echo $comment['id']; ?></td>
			<td><?php echo $comment['comment']; ?></td>
			<td><?php echo $comment['destination_id']; ?></td>
			<td><?php echo $comment['user_id']; ?></td>
			<td><?php echo $comment['security']; ?></td>
			<td><?php echo $comment['environment']; ?></td>
			<td><?php echo $comment['budget']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comments', 'action' => 'view', $comment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comments', 'action' => 'edit', $comment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments', 'action' => 'delete', $comment['id']), array(), __('Are you sure you want to delete # %s?', $comment['id'])); ?>
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
	<h3><?php echo __('Related Forumqs'); ?></h3>
	<?php if (!empty($destination['Forumq'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Question'); ?></th>
		<th><?php echo __('Destination Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($destination['Forumq'] as $forumq): ?>
		<tr>
			<td><?php echo $forumq['id']; ?></td>
			<td><?php echo $forumq['question']; ?></td>
			<td><?php echo $forumq['destination_id']; ?></td>
			<td><?php echo $forumq['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'forumqs', 'action' => 'view', $forumq['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'forumqs', 'action' => 'edit', $forumq['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'forumqs', 'action' => 'delete', $forumq['id']), array(), __('Are you sure you want to delete # %s?', $forumq['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Forumq'), array('controller' => 'forumqs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Groups'); ?></h3>
	<?php if (!empty($destination['Group'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Destination Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Start Trip'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date Trip'); ?></th>
		<th><?php echo __('Limit Person'); ?></th>
		<th><?php echo __('Joined'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($destination['Group'] as $group): ?>
		<tr>
			<td><?php echo $group['id']; ?></td>
			<td><?php echo $group['name']; ?></td>
			<td><?php echo $group['destination_id']; ?></td>
			<td><?php echo $group['description']; ?></td>
			<td><?php echo $group['start_trip']; ?></td>
			<td><?php echo $group['user_id']; ?></td>
			<td><?php echo $group['date_trip']; ?></td>
			<td><?php echo $group['limit_person']; ?></td>
			<td><?php echo $group['joined']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'groups', 'action' => 'view', $group['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'groups', 'action' => 'edit', $group['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'groups', 'action' => 'delete', $group['id']), array(), __('Are you sure you want to delete # %s?', $group['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Points'); ?></h3>
	<?php if (!empty($destination['Point'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Lat'); ?></th>
		<th><?php echo __('Long'); ?></th>
		<th><?php echo __('Destination Id'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Schedule'); ?></th>
		<th><?php echo __('Payment'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($destination['Point'] as $point): ?>
		<tr>
			<td><?php echo $point['id']; ?></td>
			<td><?php echo $point['name']; ?></td>
			<td><?php echo $point['lat']; ?></td>
			<td><?php echo $point['long']; ?></td>
			<td><?php echo $point['destination_id']; ?></td>
			<td><?php echo $point['price']; ?></td>
			<td><?php echo $point['schedule']; ?></td>
			<td><?php echo $point['payment']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'points', 'action' => 'view', $point['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'points', 'action' => 'edit', $point['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'points', 'action' => 'delete', $point['id']), array(), __('Are you sure you want to delete # %s?', $point['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Point'), array('controller' => 'points', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
