<div class="forumas view">
<h2><?php echo __('Foruma'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($foruma['Foruma']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Answer'); ?></dt>
		<dd>
			<?php echo h($foruma['Foruma']['answer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($foruma['User']['name'], array('controller' => 'users', 'action' => 'view', $foruma['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Forumq'); ?></dt>
		<dd>
			<?php echo $this->Html->link($foruma['Forumq']['id'], array('controller' => 'forumqs', 'action' => 'view', $foruma['Forumq']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Foruma'), array('action' => 'edit', $foruma['Foruma']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Foruma'), array('action' => 'delete', $foruma['Foruma']['id']), array(), __('Are you sure you want to delete # %s?', $foruma['Foruma']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Forumas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foruma'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Forumqs'), array('controller' => 'forumqs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Forumq'), array('controller' => 'forumqs', 'action' => 'add')); ?> </li>
	</ul>
</div>
