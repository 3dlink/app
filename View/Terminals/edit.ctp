<div class="terminals form">
<?php echo $this->Form->create('Terminal'); ?>
	<fieldset>
		<legend><?php echo __('Edit Terminal'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('country');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('lat');
		echo $this->Form->input('long');
		echo $this->Form->input('schedule');
		echo $this->Form->input('description');
		echo $this->Form->input('phone');
		echo $this->Form->input('contact');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Terminal.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Terminal.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Terminals'), array('action' => 'index')); ?></li>
	</ul>
</div>
