<article class="card shadow-1">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
      <legend>Add User</legend>
      <div class="margenesHorizontales">

	            <?php echo $this->Form->input('user_group_id',array('div'=>false,'label'=>false,'type'=>'hidden','value'=>'2')); ?>

	            <?php echo $this->Form->input('active',array('div'=>false,'label'=>false,'type'=>'hidden','value'=>'1')); ?>
	            <?php echo $this->Form->input('email_verified',array('div'=>false,'label'=>false,'type'=>'hidden','value'=>'1')); ?>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>First Name</label>
			          <?php echo $this->Form->input('first_name',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>' ')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Last Name</label>
			          <?php echo $this->Form->input('last_name',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>' ')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Username</label>
			          <?php echo $this->Form->input('username',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>' ')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Password</label>
			          <?php echo $this->Form->input('password',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>' ')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Country</label>
			          <?php echo $this->Form->input('country_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>' ')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>State</label>
			          <?php echo $this->Form->input('state_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>' ')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>City</label>
			          <?php echo $this->Form->input('city_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>' ')); ?>
			        </div>
	      		</div>	      		

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Email</label>
			          <?php echo $this->Form->input('email',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>' ')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Phone</label>
			          <?php echo $this->Form->input('phone',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>' ')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Interest 1</label>
			          <?php echo $this->Form->input('interest_1',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>' ')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Interest 2</label>
			          <?php echo $this->Form->input('interest_2',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>' ')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Interest 3</label>
			          <?php echo $this->Form->input('interest_3',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>' ')); ?>
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
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'users';" title="return" value = "Back" style="width: 79px;">
          <button type="submit" class="btn btn-primary">
            Guardar
          </button>
        </div>
      </div>          
    </fieldset>  
</article>

<script type="text/javascript">

	$("#photo").dropzone({ url: WEBROOT+"start/upload/1", maxFilesize: 10, dictDefaultMessage: '<div class="col-xs-12 text-center" style="padding-bottom:20px"><img src="<?php echo $this->webroot; ?>img/file.png" alt="" /></div><p class="dropzone-add-message">Drag and drop the files here or <a  class="add-files">browse for files</a></p>',
		success:function(data){
			$('#content_imgs').append('<input type="hidden" value='+data.xhr.response+' name="data[User][photo]">');
	  }
	});

</script>