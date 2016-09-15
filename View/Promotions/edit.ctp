<article class="card shadow-1">
<?php echo $this->Form->create('Promotion'); echo $this->Form->input('id');?>
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
			    <div id="content_imgs"></div>


			    <div class="col-md-12">
		        <div class="form-group">
		          <label>Description Image</label>
		          <div id="imagenes_content">
		          	<div id="img_edit" class="img_edit">
		          		<div class="col-md-6" style="text-align:center;width:260px;height:260px;background-image:url('<?php echo $this->webroot.'files/'.$this->data['Promotion']['photo1']; ?>');background-size:cover;background-repeat:no-repeat;">
		          		</div>
		          	</div>
		          	<div id="img_edit" class="img_edit">
		          		<div class="col-md-6" style="margin-left:25px;text-align:center;width:260px;height:260px;background-image:url('<?php echo $this->webroot.'files/'.$this->data['Promotion']['photo2']; ?>');background-size:cover;background-repeat:no-repeat;">
		          		</div>
		          	</div>
		          </div>
		        </div>
      		</div>				      		

        <div class="margenesVerticales" style="text-align:right;margin-top:30px;float:right;">
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'promotions';" title="Go Back" value = "Back" style="width: 79px;">
          <button type="submit" class="btn btn-primary">
            Save
          </button>
        </div>
      </div>          
    </fieldset>  
</article>


<script type="text/javascript">

	$("#photo1").dropzone({ url: WEBROOT+"start/upload/1", maxFilesize: 10, dictDefaultMessage: '<div class="col-xs-12 text-center" style="padding-bottom:20px"><img src="<?php echo $this->webroot; ?>img/file.png" alt="" /></div><p class="dropzone-add-message">Drag and drop the files you want to upload or <a  class="add-files">click here to browse</a></p>',
		success:function(data){
			$('#content_imgs').append('<input type="hidden" value='+data.xhr.response+' name="data[Promotion][photo1]">');
	  }
	});

	$("#photo2").dropzone({ url: WEBROOT+"start/upload/1", maxFilesize: 10, dictDefaultMessage: '<div class="col-xs-12 text-center" style="padding-bottom:20px"><img src="<?php echo $this->webroot; ?>img/file.png" alt="" /></div><p class="dropzone-add-message">Drag and drop the files you want to upload or <a  class="add-files">click here to browse</a></p>',
		success:function(data){
			$('#content_imgs').append('<input type="hidden" value='+data.xhr.response+' name="data[Promotion][photo2]">');
	  }
	});

</script>