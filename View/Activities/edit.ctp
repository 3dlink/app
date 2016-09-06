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


			    <div class="col-md-12">
		        <div class="form-group">
		          <label>Description Image</label>
		          <div id="imagenes_content">
		          	<div id="img_edit" class="img_edit">
		          		<div class="col-md-6" style="text-align:center;width:260px;height:260px;background-image:url('<?php echo $this->webroot.'files/'.$this->data['Activity']['photo']; ?>');background-size:cover;background-repeat:no-repeat;">
		          		</div>
		          	</div>
		          </div>
		        </div>
      		</div>

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

	$("#photo").dropzone({ url: WEBROOT+"start/upload/1", maxFilesize: 10, dictDefaultMessage: '<div class="col-xs-12 text-center" style="padding-bottom:20px"><img src="<?php echo $this->webroot; ?>img/file.png" alt="" /></div><p class="dropzone-add-message">Drag and drop the files you want to upload or <a  class="add-files">click here to browse</a></p>',
		success:function(data){
			$('#content_imgs').append('<input type="hidden" value='+data.xhr.response+' name="data[Activity][photo]">');
	  }
	});

</script>
