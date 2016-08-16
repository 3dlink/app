<!-- <div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('user_group_id');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('salt');
		echo $this->Form->input('email');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('email_verified');
		echo $this->Form->input('active');
		echo $this->Form->input('ip_address');
		echo $this->Form->input('phone');
		echo $this->Form->input('commentary_id');
		echo $this->Form->input('country_id');
		echo $this->Form->input('state_id');
		echo $this->Form->input('city_id');
		echo $this->Form->input('ranking');
		echo $this->Form->input('photo');
		echo $this->Form->input('interest_1');
		echo $this->Form->input('interest_2');
		echo $this->Form->input('interest_3');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List User Groups'), array('controller' => 'user_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Group'), array('controller' => 'user_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Commentaries'), array('controller' => 'commentaries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commentary'), array('controller' => 'commentaries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Forumas'), array('controller' => 'forumas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foruma'), array('controller' => 'forumas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Forumqs'), array('controller' => 'forumqs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Forumq'), array('controller' => 'forumqs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Login Tokens'), array('controller' => 'login_tokens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Login Token'), array('controller' => 'login_tokens', 'action' => 'add')); ?> </li>
	</ul>
</div>
 -->
<article class="card shadow-1">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
      <legend>Add User</legend>
      <div class="margenesHorizontales">

				<div class="col-md-6">
			        <div class="form-group">
			          <label>First Name</label>
			          <?php echo $this->Form->input('first_name',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'State name')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Last Name</label>
			          <?php echo $this->Form->input('last_name',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'State name')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Username</label>
			          <?php echo $this->Form->input('username',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'State name')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Password</label>
			          <?php echo $this->Form->input('password',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'State name')); ?>
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
			          <label>State</label>
			          <?php echo $this->Form->input('state_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'State name')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>City</label>
			          <?php echo $this->Form->input('city_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'State name')); ?>
			        </div>
	      		</div>	      		

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Email</label>
			          <?php echo $this->Form->input('email',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'State name')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Phone</label>
			          <?php echo $this->Form->input('phone',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'State name')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Interest 1</label>
			          <?php echo $this->Form->input('interest_1',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'State name')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Interest 2</label>
			          <?php echo $this->Form->input('interest_2',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'State name')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Interest 3</label>
			          <?php echo $this->Form->input('interest_3',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'State name')); ?>
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
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'users';" title="regresar" value = "Atr&aacute;s" style="width: 79px;">
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