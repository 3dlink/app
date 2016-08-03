<div class="points view">
<h2><?php echo __('Point'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($point['Point']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($point['Point']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lat'); ?></dt>
		<dd>
			<?php echo h($point['Point']['lat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Long'); ?></dt>
		<dd>
			<?php echo h($point['Point']['long']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Destination'); ?></dt>
		<dd>
			<?php echo $this->Html->link($point['Destination']['name'], array('controller' => 'destinations', 'action' => 'view', $point['Destination']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($point['Point']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Schedule'); ?></dt>
		<dd>
			<?php echo h($point['Point']['schedule']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment'); ?></dt>
		<dd>
			<?php echo h($point['Point']['payment']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Point'), array('action' => 'edit', $point['Point']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Point'), array('action' => 'delete', $point['Point']['id']), array(), __('Are you sure you want to delete # %s?', $point['Point']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Points'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Point'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Destinations'), array('controller' => 'destinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Destination'), array('controller' => 'destinations', 'action' => 'add')); ?> </li>
	</ul>
</div>
