<div class="terminals view">
<h2><?php echo __('Terminal'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($terminal['Terminal']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($terminal['Terminal']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo h($terminal['Terminal']['country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($terminal['Terminal']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($terminal['Terminal']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lat'); ?></dt>
		<dd>
			<?php echo h($terminal['Terminal']['lat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Long'); ?></dt>
		<dd>
			<?php echo h($terminal['Terminal']['long']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Schedule'); ?></dt>
		<dd>
			<?php echo h($terminal['Terminal']['schedule']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($terminal['Terminal']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($terminal['Terminal']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact'); ?></dt>
		<dd>
			<?php echo h($terminal['Terminal']['contact']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Terminal'), array('action' => 'edit', $terminal['Terminal']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Terminal'), array('action' => 'delete', $terminal['Terminal']['id']), array(), __('Are you sure you want to delete # %s?', $terminal['Terminal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Terminals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Terminal'), array('action' => 'add')); ?> </li>
	</ul>
</div>
