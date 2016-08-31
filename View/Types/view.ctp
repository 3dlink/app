<!-- <div class="types view">
<h2><?php echo __('Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($type['Type']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($type['Type']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Type'), array('action' => 'edit', $type['Type']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Type'), array('action' => 'delete', $type['Type']['id']), array(), __('Are you sure you want to delete # %s?', $type['Type']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Destinations'), array('controller' => 'destinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Destination'), array('controller' => 'destinations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Destinations'); ?></h3>
	<?php if (!empty($type['Destination'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Type Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('Region Id'); ?></th>
		<th><?php echo __('Park Id'); ?></th>
		<th><?php echo __('Lat'); ?></th>
		<th><?php echo __('Longitude'); ?></th>
		<th><?php echo __('Photo1'); ?></th>
		<th><?php echo __('Ranking'); ?></th>
		<th><?php echo __('Security'); ?></th>
		<th><?php echo __('Environment'); ?></th>
		<th><?php echo __('Budget'); ?></th>
		<th><?php echo __('Affluence'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($type['Destination'] as $destination): ?>
		<tr>
			<td><?php echo $destination['id']; ?></td>
			<td><?php echo $destination['name']; ?></td>
			<td><?php echo $destination['description']; ?></td>
			<td><?php echo $destination['type_id']; ?></td>
			<td><?php echo $destination['state_id']; ?></td>
			<td><?php echo $destination['city_id']; ?></td>
			<td><?php echo $destination['country_id']; ?></td>
			<td><?php echo $destination['region_id']; ?></td>
			<td><?php echo $destination['park_id']; ?></td>
			<td><?php echo $destination['lat']; ?></td>
			<td><?php echo $destination['longitude']; ?></td>
			<td><?php echo $destination['photo1']; ?></td>
			<td><?php echo $destination['ranking']; ?></td>
			<td><?php echo $destination['security']; ?></td>
			<td><?php echo $destination['environment']; ?></td>
			<td><?php echo $destination['budget']; ?></td>
			<td><?php echo $destination['affluence']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'destinations', 'action' => 'view', $destination['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'destinations', 'action' => 'edit', $destination['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'destinations', 'action' => 'delete', $destination['id']), array(), __('Are you sure you want to delete # %s?', $destination['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Destination'), array('controller' => 'destinations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
 -->