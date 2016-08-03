<div class="comments view">
<h2><?php echo __('Comment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Destination'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comment['Destination']['name'], array('controller' => 'destinations', 'action' => 'view', $comment['Destination']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comment['User']['name'], array('controller' => 'users', 'action' => 'view', $comment['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Security'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['security']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Environment'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['environment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Budget'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['budget']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Comment'), array('action' => 'edit', $comment['Comment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Comment'), array('action' => 'delete', $comment['Comment']['id']), array(), __('Are you sure you want to delete # %s?', $comment['Comment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Destinations'), array('controller' => 'destinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Destination'), array('controller' => 'destinations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
