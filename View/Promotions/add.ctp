<!-- <div class="promotions form">
<?php echo $this->Form->create('Promotion'); ?>
	<fieldset>
		<legend><?php echo __('Add Promotion'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('price');
		echo $this->Form->input('client_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Promotions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
 -->
<article class="card shadow-1">
<?php echo $this->Form->create('Promotion'); ?>
    <fieldset>
      <legend>Add Promotion</legend>
      <div class="margenesHorizontales">

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Promotion Name</label>
			          <?php echo $this->Form->input('name',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'State name')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Client</label>
			          <?php echo $this->Form->input('client_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Price</label>
			          <?php echo $this->Form->input('price',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
			        </div>
	      		</div>

				<div class="col-md-12">
			        <div class="form-group">
			          <label>Description</label>
			          <?php echo $this->Form->input('description',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
			        </div>
	      		</div>	


				<div class="col-md-12 dlink-dropzone" style="margin:30px 0;">
	        		<label>Picture 1</label>
	        		<div  class="dropzone"  id ="photo1"  name="mainFileUploader">
            		<div  class="fallback">
            			<input  name="file"  type="file" />
            		</div>
	        		</div>
	      		</div>


	      		<div id="content_imgs"></div>


				<div class="col-md-12 dlink-dropzone" style="margin:30px 0;">
	        		<label>Picture 2</label>
	        		<div  class="dropzone"  id ="photo2"  name="mainFileUploader">
            		<div  class="fallback">
            			<input  name="file"  type="file" />
            		</div>
	        		</div>
	      		</div>


	      		<div id="content_imgs"></div>				      		

        <div class="margenesVerticales" style="text-align:right;margin-top:30px;float:right;">
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'promotions';" title="regresar" value = "Atr&aacute;s" style="width: 79px;">
          <button type="submit" class="btn btn-primary">
            Guardar
          </button>
        </div>
      </div>          
    </fieldset>  
</article>


<script type="text/javascript">

	$("#photo1").dropzone({ url: WEBROOT+"start/upload/1", maxFilesize: 10, dictDefaultMessage: '<div class="col-xs-12 text-center" style="padding-bottom:20px"><img src="<?php echo $this->webroot; ?>img/file.png" alt="" /></div><p class="dropzone-add-message">Drag and drop the files you want to upload or <a  class="add-files">click here to browse</a></p>',
		success:function(data){
			$('#content_imgs').append('<input type="hidden" value='+data.xhr.response+' name="data[Promotion][photo_1]">');
	  }
	});

	$("#photo2").dropzone({ url: WEBROOT+"start/upload/1", maxFilesize: 10, dictDefaultMessage: '<div class="col-xs-12 text-center" style="padding-bottom:20px"><img src="<?php echo $this->webroot; ?>img/file.png" alt="" /></div><p class="dropzone-add-message">Drag and drop the files you want to upload or <a  class="add-files">click here to browse</a></p>',
		success:function(data){
			$('#content_imgs').append('<input type="hidden" value='+data.xhr.response+' name="data[Promotion][photo_2]">');
	  }
	});

</script>