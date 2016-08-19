<!-- <div class="commentaries form">
<?php echo $this->Form->create('Commentary'); ?>
	<fieldset>
		<legend><?php echo __('Add Commentary'); ?></legend>
	<?php
		echo $this->Form->input('comment');
		echo $this->Form->input('destination_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('security');
		echo $this->Form->input('environment');
		echo $this->Form->input('budget');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Commentaries'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Destinations'), array('controller' => 'destinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Destination'), array('controller' => 'destinations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Photos'), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
<article class="card shadow-1">
<?php echo $this->Form->create('Comment'); ?>
    <fieldset>
      <legend>Add Commentary</legend>
      <div class="margenesHorizontales">

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Question</label>
			          <?php echo $this->Form->input('question',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Select a destination witch you are enquiring</label>
			          <?php echo $this->Form->input('destination_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
			        </div>
	      		</div>

	      		<?php echo $this->Form->input('user_id',array('div'=>false,'label'=>false,'type'=>'hidden','value'=>$this->UserAuth->getUserId())); ?>

        <div class="margenesVerticales" style="text-align:right;margin-top:30px;float:right;">
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'forumqs';" title="regresar" value = "Atr&aacute;s" style="width: 79px;">
          <button type="submit" class="btn btn-primary">
            Guardar
          </button>
        </div>
      </div>          
    </fieldset>  
</article>
