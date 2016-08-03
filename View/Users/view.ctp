<!-- <div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($user['User']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo h($user['User']['country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($user['User']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($user['User']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ranking'); ?></dt>
		<dd>
			<?php echo h($user['User']['ranking']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($user['User']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Interest 1'); ?></dt>
		<dd>
			<?php echo h($user['User']['interest_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Interest 2'); ?></dt>
		<dd>
			<?php echo h($user['User']['interest_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Interest 3'); ?></dt>
		<dd>
			<?php echo h($user['User']['interest_3']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Forumas'), array('controller' => 'forumas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foruma'), array('controller' => 'forumas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Forumqs'), array('controller' => 'forumqs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Forumq'), array('controller' => 'forumqs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Comments'); ?></h3>
	<?php if (!empty($user['Comment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Destination Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Security'); ?></th>
		<th><?php echo __('Environment'); ?></th>
		<th><?php echo __('Budget'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Comment'] as $comment): ?>
		<tr>
			<td><?php echo $comment['id']; ?></td>
			<td><?php echo $comment['comment']; ?></td>
			<td><?php echo $comment['destination_id']; ?></td>
			<td><?php echo $comment['user_id']; ?></td>
			<td><?php echo $comment['security']; ?></td>
			<td><?php echo $comment['environment']; ?></td>
			<td><?php echo $comment['budget']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comments', 'action' => 'view', $comment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comments', 'action' => 'edit', $comment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments', 'action' => 'delete', $comment['id']), array(), __('Are you sure you want to delete # %s?', $comment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Forumas'); ?></h3>
	<?php if (!empty($user['Foruma'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Answer'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Forumq Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Foruma'] as $foruma): ?>
		<tr>
			<td><?php echo $foruma['id']; ?></td>
			<td><?php echo $foruma['answer']; ?></td>
			<td><?php echo $foruma['user_id']; ?></td>
			<td><?php echo $foruma['forumq_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'forumas', 'action' => 'view', $foruma['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'forumas', 'action' => 'edit', $foruma['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'forumas', 'action' => 'delete', $foruma['id']), array(), __('Are you sure you want to delete # %s?', $foruma['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Foruma'), array('controller' => 'forumas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Forumqs'); ?></h3>
	<?php if (!empty($user['Forumq'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Question'); ?></th>
		<th><?php echo __('Destination Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Forumq'] as $forumq): ?>
		<tr>
			<td><?php echo $forumq['id']; ?></td>
			<td><?php echo $forumq['question']; ?></td>
			<td><?php echo $forumq['destination_id']; ?></td>
			<td><?php echo $forumq['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'forumqs', 'action' => 'view', $forumq['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'forumqs', 'action' => 'edit', $forumq['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'forumqs', 'action' => 'delete', $forumq['id']), array(), __('Are you sure you want to delete # %s?', $forumq['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Forumq'), array('controller' => 'forumqs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Groups'); ?></h3>
	<?php if (!empty($user['Group'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Destination Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Start Trip'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date Trip'); ?></th>
		<th><?php echo __('Limit Person'); ?></th>
		<th><?php echo __('Joined'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Group'] as $group): ?>
		<tr>
			<td><?php echo $group['id']; ?></td>
			<td><?php echo $group['name']; ?></td>
			<td><?php echo $group['destination_id']; ?></td>
			<td><?php echo $group['description']; ?></td>
			<td><?php echo $group['start_trip']; ?></td>
			<td><?php echo $group['user_id']; ?></td>
			<td><?php echo $group['date_trip']; ?></td>
			<td><?php echo $group['limit_person']; ?></td>
			<td><?php echo $group['joined']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'groups', 'action' => 'view', $group['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'groups', 'action' => 'edit', $group['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'groups', 'action' => 'delete', $group['id']), array(), __('Are you sure you want to delete # %s?', $group['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
 -->

 <article class="card shadow-1">
  <fieldset>

      <legend>User<?php echo ': '; if (!empty($user)) { echo '<small>'.$user['User']['username'].'</small>'; }?></legend>
      <div class="margenesHorizontales">
      	<div>
      		<div class="col-md-6">
      			<div class="form-group">
      				<label>First Name: </label>
                    <?php echo h($user['User']['first_name'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
				    <label>Last Name:</label>
                	<?php echo h($user['User']['last_name'])?>
                </div>
      		</div>
          <div class="col-md-6">
            <div class="form-group">
                <label>Email: </label>
                <?php echo h($user['User']['email'])?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                <label>Phone:</label>
                <?php echo h($user['User']['phone'])?>
                </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
        <label>Country: </label>
                <?php echo h($user['User']['country'])?>
      </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
        <label>State:</label>
                <?php echo h($user['User']['state'])?>
                </select>
      </div>
          </div>
      		<div style="clear:both;"></div>
      	</div>           	
      	<div>
      		<div class="col-md-6">
      			<div class="form-group">
                <label>Interest 1:</label>
                <?php echo h($user['User']['interest_1'])?>
			      </div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
                <label>Interest 2:</label>
                <?php echo h($user['User']['interest_2'])?>
			      </div>
      		</div>
      		<div style="clear:both;"></div>
      	</div>
      	<div>
      		<div class="col-md-6">
      			<div class="form-group">
                <label>Interest 3:</label>
                <?php echo h($user['User']['interest_3'])?>
			      </div>
      		</div>
      		<div style="clear:both;"></div>
      	</div>
      	<div>
          <div id="content_imgs"></div>

          <div class="col-md-12">
              <div class="form-group">
                <label>Imagen actual</label>
                <div id="imagenes_content">
                  <div id="img_edit" class="img_edit">
                    <img src="<?php echo $this->webroot.'files/'.$user['User']['photo']; ?>" style="width:25%;">
                  </div>
                </div>
              </div>
          </div>

      		<div class="margenesVerticales" style="text-align:right;">
	                <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'users';" title="regresar" value = "Atr&aacute;s" style="width: 79px;"> 	  
				  </div>
      	</div>    
</div>        
    </fieldset>  
</article>

