<article class="card shadow-1">
<?php echo $this->Form->create('Client'); ?>
    <fieldset>
      <legend>Add Client</legend>
      <div class="margenesHorizontales">

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Client Name</label>
			          <?php echo $this->Form->input('name',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Service</label>
			          <?php echo $this->Form->input('service_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
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
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'clients';" title="regresar" value = "Atr&aacute;s" style="width: 79px;">
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
			$('#content_imgs').append('<input type="hidden" value='+data.xhr.response+' name="data[Client][photo_1]">');
	  }
	});

	$("#photo2").dropzone({ url: WEBROOT+"start/upload/1", maxFilesize: 10, dictDefaultMessage: '<div class="col-xs-12 text-center" style="padding-bottom:20px"><img src="<?php echo $this->webroot; ?>img/file.png" alt="" /></div><p class="dropzone-add-message">Drag and drop the files you want to upload or <a  class="add-files">click here to browse</a></p>',
		success:function(data){
			$('#content_imgs').append('<input type="hidden" value='+data.xhr.response+' name="data[Client][photo_2]">');
	  }
	});

</script>