<article class="card shadow-1">
<?php echo $this->Form->create('User'); echo $this->Form->input('id');?>
    <fieldset>
      <legend>Edit User</legend>
      <div class="margenesHorizontales">

				<div class="col-md-6">
			        <div class="form-group">
			          <label>First Name</label>
			          <?php echo $this->Form->input('first_name',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'First Name')); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Last Name</label>
			          <?php echo $this->Form->input('last_name',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Last Name')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Username</label>
			          <?php echo $this->Form->input('username',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Username')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Email</label>
			          <?php echo $this->Form->input('email',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Email')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Verified Email</label>
			          <?php echo $this->Form->input('email',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Verified Email')); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Phone</label>
			          <?php echo $this->Form->input('phone',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Phone')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Country</label>
			          <?php echo $this->Form->input('country',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Country')); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>State</label>
			          <?php echo $this->Form->input('state',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'State')); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Place of Interest 1</label>
			          <?php echo $this->Form->input('interest_1',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Place 1')); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Place of Interest 2</label>
			          <?php echo $this->Form->input('interest_2',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Place 2')); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Place of Interest 3</label>
			          <?php echo $this->Form->input('interest_3',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Place 3')); ?>
			        </div>
	      		</div>

	      		<div class="col-md-12 dlink-dropzone" style="margin:30px 0;">
	        		<label>Photo</label>
			        <div class="dropzone" id ="photo" name="mainFileUploader">
		            <div class="fallback">
		            	<input name="file" type="file"/>
		            </div>
			        </div>
	      		</div>


	      <div id="content_imgs"></div>

        <div class="margenesVerticales" style="text-align:right;margin-top:30px;float:right;">
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'Users';" title="regresar" value = "Atr&aacute;s" style="width: 79px;">
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
			$('#content_imgs').append('<input type="hidden" value='+data.xhr.response+' name="data[User][photo]">');
	  }
	});

</script>
