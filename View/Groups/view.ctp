<!-- <div class="groups view">
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
			<?php echo $this->Html->link($group['User']['id'], array('controller' => 'users', 'action' => 'view', $group['User']['id'])); ?>
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
 -->

 <article class="card shadow-1">
  <fieldset>

      <legend>Group <?php echo ': '; if (!empty($group)) { echo '<small>'.$group['Group']['name'].'</small>'; }?></legend>
      <div class="margenesHorizontales">
      	<div>
      		<div class="col-md-6">
      			<div class="form-group">
      				<label>Name: </label>
                    <?php echo h($group['Group']['name'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
      				<label>Destination: </label>
                    <?php echo h($group['Destination']['name'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
      				<label>Description: </label>
                    <?php echo h($group['Group']['description'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
      				<label>Trip Start Day: </label>
                    <?php echo h($group['Group']['start_trip'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
      				<label>Trip Day: </label>
                    <?php echo h($group['Group']['date_trip'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
      				<label>Person's Limit: </label>
                    <?php echo h($group['Group']['limit_person'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
      				<label>People Joined: </label>
                    <?php echo h($group['Group']['joined'])?>
      			</div>
      		</div>


      		<div class="col-md-6">
      			<div class="form-group">
      				<label>This is the list of user who had joined to this group: </label>
                    
      			</div>
      		</div>
          
          
      		<div style="clear:both;"></div>
      	</div>           	
      	  <div style="clear:both;"></div>



      		<div class="margenesVerticales" style="text-align:right;">
	                <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'activities';" title="regresar" value = "Atr&aacute;s" style="width: 79px;"> 	  
			</div>
      	</div>    
</div>        
    </fieldset>  
</article>

