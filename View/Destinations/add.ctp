<!-- <div class="destinations form">
<?php echo $this->Form->create('Destination'); ?>
	<fieldset>
		<legend><?php echo __('Add Destination'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('type_id');
		echo $this->Form->input('state_id');
		echo $this->Form->input('city_id');
		echo $this->Form->input('country_id');
		echo $this->Form->input('region_id');
		echo $this->Form->input('park_id');
		echo $this->Form->input('lat');
		echo $this->Form->input('longitude');
		echo $this->Form->input('photo1');
		echo $this->Form->input('ranking');
		echo $this->Form->input('security');
		echo $this->Form->input('environment');
		echo $this->Form->input('budget');
		echo $this->Form->input('affluence');
		echo $this->Form->input('Activity');
		echo $this->Form->input('Client');
		echo $this->Form->input('Terminal');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Destinations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Regions'), array('controller' => 'regions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Region'), array('controller' => 'regions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Parks'), array('controller' => 'parks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Park'), array('controller' => 'parks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Commentaries'), array('controller' => 'commentaries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commentary'), array('controller' => 'commentaries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Forumqs'), array('controller' => 'forumqs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Forumq'), array('controller' => 'forumqs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Points'), array('controller' => 'points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Point'), array('controller' => 'points', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Terminals'), array('controller' => 'terminals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Terminal'), array('controller' => 'terminals', 'action' => 'add')); ?> </li>
	</ul>
</div>
 -->
<article class="card shadow-1">
<?php echo $this->Form->create('Destination');?>
    <fieldset>
      <legend>Add Destination</legend>
      <div class="margenesHorizontales">

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Destination Name</label>
			          <?php echo $this->Form->input('name',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Type</label>
			          <?php echo $this->Form->input('type_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>City</label>
			          <?php echo $this->Form->input('city_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>State</label>
			          <?php echo $this->Form->input('state_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Region</label>
			          <?php echo $this->Form->input('region_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Country</label>
			          <?php echo $this->Form->input('country_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Park</label>
			          <?php echo $this->Form->input('park_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Description</label>
			          <?php echo $this->Form->input('description',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
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
			          <label>Budget</label>
			          <?php echo $this->Form->input('budget',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Affluence</label>
			          <?php echo $this->Form->input('affluence',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
			        </div>
	      		</div>

	      		<div class="col-md-12 dlink-dropzone" style="margin:30px 0;">
			        <label>Photo</label>
			        <div  class="dropzone"  id ="photo"  name="mainFileUploader">
			            <div  class="fallback">
			            	<input  name="file"  type="file" />
			            </div>
			        </div>
			    </div>
			    <div id="content_imgs"></div>

        <div class="margenesVerticales" style="text-align:right;margin-top:30px;float:right;">
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'destinations';" title="regresar" value = "Atr&aacute;s" style="width: 79px;">
          <button type="submit" class="btn btn-primary">
            Guardar
          </button>
        </div>
      </div>          
    </fieldset>  
</article>

<script type="text/javascript">

	$("#photo").dropzone({ url: WEBROOT+"start/upload/1", maxFilesize: 10, dictDefaultMessage: '<div class="col-xs-12 text-center" style="padding-bottom:20px"><img src="<?php echo $this->webroot; ?>img/file.png" alt="" /></div><p class="dropzone-add-message">Arrastra aquí todos los archivos a cargar o <a  class="add-files">selecciónalos de tu computador</a></p>',
		success:function(data){
			$('#content_imgs').append('<input type="hidden" value='+data.xhr.response+' name="data[Destination][photo1]">');
	  }
	});

</script>