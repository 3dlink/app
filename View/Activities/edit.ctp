<!-- <div class="activities form">
<?php echo $this->Form->create('Activity'); ?>
	<fieldset>
		<legend><?php echo __('Edit Activity'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('photo');
		echo $this->Form->input('Destination');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Activity.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Activity.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Activities'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Destinations'), array('controller' => 'destinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Destination'), array('controller' => 'destinations', 'action' => 'add')); ?> </li>
	</ul>
</div>
 -->
<article class="card shadow-1">
<?php echo $this->Form->create('Activity'); echo $this->Form->input('id');?>
    <fieldset>
      <legend>Add Activity</legend>
      <div class="margenesHorizontales">

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Activity Name</label>
			          <?php echo $this->Form->input('name',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
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
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'activities';" title="regresar" value = "Atr&aacute;s" style="width: 79px;">
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
			$('#content_imgs').append('<input type="hidden" value='+data.xhr.response+' name="data[Activity][photo]">');
	  }
	});

</script>
