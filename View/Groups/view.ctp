<div class="groups view">
<h2><?php echo __('Group'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($group['Group']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($group['Group']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Destination'); ?></dt>
		<dd>
			<?php echo $this->Html->link($group['Destination']['name'], array('controller' => 'destinations', 'action' => 'view', $group['Destination']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($group['Group']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Trip'); ?></dt>
		<dd>
			<?php echo h($group['Group']['start_trip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($group['User']['name'], array('controller' => 'users', 'action' => 'view', $group['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Trip'); ?></dt>
		<dd>
			<?php echo h($group['Group']['date_trip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Limit Person'); ?></dt>
		<dd>
			<?php echo h($group['Group']['limit_person']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Joined'); ?></dt>
		<dd>
			<?php echo h($group['Group']['joined']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Group'), array('action' => 'edit', $group['Group']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Group'), array('action' => 'delete', $group['Group']['id']), array(), __('Are you sure you want to delete # %s?', $group['Group']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Destinations'), array('controller' => 'destinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Destination'), array('controller' => 'destinations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
