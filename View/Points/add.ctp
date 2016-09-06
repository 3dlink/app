<!-- <div class="points form">
<?php echo $this->Form->create('Point'); ?>
	<fieldset>
		<legend><?php echo __('Add Point'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('lat');
		echo $this->Form->input('longitude');
		echo $this->Form->input('destination_id');
		echo $this->Form->input('price');
		echo $this->Form->input('schedule');
		echo $this->Form->input('payment');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Points'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Destinations'), array('controller' => 'destinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Destination'), array('controller' => 'destinations', 'action' => 'add')); ?> </li>
	</ul>
</div>
 -->
<article class="card shadow-1">
<?php echo $this->Form->create('Point');?>
    <fieldset>
      <legend>Add Point</legend>
      <div class="margenesHorizontales">

		<div class="col-md-6">
	        <div class="form-group">
	          <label>Name</label>
	          <?php echo $this->Form->input('name',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
	        </div>
	     </div>

        <div class="col-md-6">
              <div class="form-group">
                <label>Latitude</label>
                <?php echo $this->Form->input('lat',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
              </div>
        </div>

        <div class="col-md-6">
              <div class="form-group">
                <label>Longitude</label>
                <?php echo $this->Form->input('longitude',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
              </div>
        </div>

        <div class="col-md-6">
              <div class="form-group">
                <label>Destination</label>
                <?php echo $this->Form->input('destination_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
              </div>
        </div>

        <div class="col-md-6">
              <div class="form-group">
                <label>Price</label>
                <?php echo $this->Form->input('price',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
              </div>
        </div>

        <div class="col-md-6">
              <div class="form-group">
                <label>Payment</label>
                <?php echo $this->Form->input('payment',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
              </div>
        </div>

        <div class="col-md-6">
              <div class="form-group">
                <label>Schedule</label>
                <?php echo $this->Form->input('schedule',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
              </div>
        </div>

        <div class="margenesVerticales" style="text-align:right;margin-top:30px;float:right;">
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'points';" title="regresar" value = "Atr&aacute;s" style="width: 79px;">
          <button type="submit" class="btn btn-primary">
            Save
          </button>
        </div>
      </div>          
    </fieldset>  
</article>