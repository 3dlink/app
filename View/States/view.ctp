<div class="states view">
<h2><?php echo __('State'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($state['State']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($state['State']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Region'); ?></dt>
		<dd>
			<?php echo $this->Html->link($state['Region']['name'], array('controller' => 'regions', 'action' => 'view', $state['Region']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country Id'); ?></dt>
		<dd>
			<?php echo h($state['State']['country_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit State'), array('action' => 'edit', $state['State']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete State'), array('action' => 'delete', $state['State']['id']), array(), __('Are you sure you want to delete # %s?', $state['State']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Regions'), array('controller' => 'regions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Region'), array('controller' => 'regions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Destinations'), array('controller' => 'destinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Destination'), array('controller' => 'destinations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Terminals'), array('controller' => 'terminals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Terminal'), array('controller' => 'terminals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Cities'); ?></h3>
	<?php if (!empty($state['City'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($state['City'] as $city): ?>
		<tr>
			<td><?php echo $city['id']; ?></td>
			<td><?php echo $city['name']; ?></td>
			<td><?php echo $city['state_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cities', 'action' => 'view', $city['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cities', 'action' => 'edit', $city['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cities', 'action' => 'delete', $city['id']), array(), __('Are you sure you want to delete # %s?', $city['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Destinations'); ?></h3>
	<?php if (!empty($state['Destination'])): ?>
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
	<?php foreach ($state['Destination'] as $destination): ?>
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
<div class="related">
	<h3><?php echo __('Related Terminals'); ?></h3>
	<?php if (!empty($state['Terminal'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('Lat'); ?></th>
		<th><?php echo __('Longitude'); ?></th>
		<th><?php echo __('Schedule'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Contact'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($state['Terminal'] as $terminal): ?>
		<tr>
			<td><?php echo $terminal['id']; ?></td>
			<td><?php echo $terminal['name']; ?></td>
			<td><?php echo $terminal['country_id']; ?></td>
			<td><?php echo $terminal['city_id']; ?></td>
			<td><?php echo $terminal['state_id']; ?></td>
			<td><?php echo $terminal['lat']; ?></td>
			<td><?php echo $terminal['longitude']; ?></td>
			<td><?php echo $terminal['schedule']; ?></td>
			<td><?php echo $terminal['description']; ?></td>
			<td><?php echo $terminal['phone']; ?></td>
			<td><?php echo $terminal['contact']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'terminals', 'action' => 'view', $terminal['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'terminals', 'action' => 'edit', $terminal['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'terminals', 'action' => 'delete', $terminal['id']), array(), __('Are you sure you want to delete # %s?', $terminal['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Terminal'), array('controller' => 'terminals', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($state['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Group Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Salt'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Email Verified'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Ip Address'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Commentary Id'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('Ranking'); ?></th>
		<th><?php echo __('Photo'); ?></th>
		<th><?php echo __('Interest 1'); ?></th>
		<th><?php echo __('Interest 2'); ?></th>
		<th><?php echo __('Interest 3'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($state['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['user_group_id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['salt']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['first_name']; ?></td>
			<td><?php echo $user['last_name']; ?></td>
			<td><?php echo $user['email_verified']; ?></td>
			<td><?php echo $user['active']; ?></td>
			<td><?php echo $user['ip_address']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['modified']; ?></td>
			<td><?php echo $user['phone']; ?></td>
			<td><?php echo $user['commentary_id']; ?></td>
			<td><?php echo $user['country_id']; ?></td>
			<td><?php echo $user['state_id']; ?></td>
			<td><?php echo $user['city_id']; ?></td>
			<td><?php echo $user['ranking']; ?></td>
			<td><?php echo $user['photo']; ?></td>
			<td><?php echo $user['interest_1']; ?></td>
			<td><?php echo $user['interest_2']; ?></td>
			<td><?php echo $user['interest_3']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), array(), __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
