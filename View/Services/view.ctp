<div class="services view">
<h2><?php echo __('Service'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($service['Service']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($service['Service']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Service'), array('action' => 'edit', $service['Service']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Service'), array('action' => 'delete', $service['Service']['id']), array(), __('Are you sure you want to delete # %s?', $service['Service']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Clients'); ?></h3>
	<?php if (!empty($service['Client'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Service Id'); ?></th>
		<th><?php echo __('Schedule'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Lat'); ?></th>
		<th><?php echo __('Long'); ?></th>
		<th><?php echo __('Photo 1'); ?></th>
		<th><?php echo __('Photo 2'); ?></th>
		<th><?php echo __('Payment'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($service['Client'] as $client): ?>
		<tr>
			<td><?php echo $client['id']; ?></td>
			<td><?php echo $client['name']; ?></td>
			<td><?php echo $client['service_id']; ?></td>
			<td><?php echo $client['schedule']; ?></td>
			<td><?php echo $client['price']; ?></td>
			<td><?php echo $client['lat']; ?></td>
			<td><?php echo $client['long']; ?></td>
			<td><?php echo $client['photo_1']; ?></td>
			<td><?php echo $client['photo_2']; ?></td>
			<td><?php echo $client['payment']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'clients', 'action' => 'view', $client['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'clients', 'action' => 'edit', $client['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'clients', 'action' => 'delete', $client['id']), array(), __('Are you sure you want to delete # %s?', $client['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
