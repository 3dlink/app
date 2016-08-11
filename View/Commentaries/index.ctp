<div class="commentaries index">
	<h2><?php echo __('Commentaries'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('comment'); ?></th>
			<th><?php echo $this->Paginator->sort('destination_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('security'); ?></th>
			<th><?php echo $this->Paginator->sort('environment'); ?></th>
			<th><?php echo $this->Paginator->sort('budget'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($commentaries as $commentary): ?>
	<tr>
		<td><?php echo h($commentary['Commentary']['id']); ?>&nbsp;</td>
		<td><?php echo h($commentary['Commentary']['comment']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($commentary['Destination']['name'], array('controller' => 'destinations', 'action' => 'view', $commentary['Destination']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($commentary['User']['id'], array('controller' => 'users', 'action' => 'view', $commentary['User']['id'])); ?>
		</td>
		<td><?php echo h($commentary['Commentary']['security']); ?>&nbsp;</td>
		<td><?php echo h($commentary['Commentary']['environment']); ?>&nbsp;</td>
		<td><?php echo h($commentary['Commentary']['budget']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $commentary['Commentary']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $commentary['Commentary']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $commentary['Commentary']['id']), array(), __('Are you sure you want to delete # %s?', $commentary['Commentary']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Commentary'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Destinations'), array('controller' => 'destinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Destination'), array('controller' => 'destinations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Photos'), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
	</ul>
</div>
