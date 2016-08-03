<div class="promotions view">
<h2><?php echo __('Promotion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($promotion['Promotion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($promotion['Promotion']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($promotion['Promotion']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($promotion['Promotion']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($promotion['Client']['name'], array('controller' => 'clients', 'action' => 'view', $promotion['Client']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Promotion'), array('action' => 'edit', $promotion['Promotion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Promotion'), array('action' => 'delete', $promotion['Promotion']['id']), array(), __('Are you sure you want to delete # %s?', $promotion['Promotion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Promotions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Promotion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
