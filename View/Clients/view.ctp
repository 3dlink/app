<div class="clients view">
<h2><?php echo __('Client'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($client['Client']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($client['Client']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Service'); ?></dt>
		<dd>
			<?php echo $this->Html->link($client['Service']['name'], array('controller' => 'services', 'action' => 'view', $client['Service']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Schedule'); ?></dt>
		<dd>
			<?php echo h($client['Client']['schedule']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($client['Client']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lat'); ?></dt>
		<dd>
			<?php echo h($client['Client']['lat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Long'); ?></dt>
		<dd>
			<?php echo h($client['Client']['long']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo 1'); ?></dt>
		<dd>
			<?php echo h($client['Client']['photo_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo 2'); ?></dt>
		<dd>
			<?php echo h($client['Client']['photo_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment'); ?></dt>
		<dd>
			<?php echo h($client['Client']['payment']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Client'), array('action' => 'edit', $client['Client']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Client'), array('action' => 'delete', $client['Client']['id']), array(), __('Are you sure you want to delete # %s?', $client['Client']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Promotions'), array('controller' => 'promotions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Promotion'), array('controller' => 'promotions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Promotions'); ?></h3>
	<?php if (!empty($client['Promotion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($client['Promotion'] as $promotion): ?>
		<tr>
			<td><?php echo $promotion['id']; ?></td>
			<td><?php echo $promotion['name']; ?></td>
			<td><?php echo $promotion['description']; ?></td>
			<td><?php echo $promotion['price']; ?></td>
			<td><?php echo $promotion['client_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'promotions', 'action' => 'view', $promotion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'promotions', 'action' => 'edit', $promotion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'promotions', 'action' => 'delete', $promotion['id']), array(), __('Are you sure you want to delete # %s?', $promotion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Promotion'), array('controller' => 'promotions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
