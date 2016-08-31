<article class="card shadow-1">
  <fieldset>

      <legend>User: <?php echo ': '; if (!empty($user)) { echo '<small>'.$user['User']['username'].'</small>'; }?></legend>
      <div class="margenesHorizontales">
      	<div>
      		<div class="col-md-6">
      			<div class="form-group">
      				<label>Username: </label>
                    <?php echo h($user['User']['username'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
      				<label>Email: </label>
                    <?php echo h($user['User']['email'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
      				<label>First Name: </label>
                    <?php echo h($user['User']['first_name'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
      				<label>Last Name: </label>
                    <?php echo h($user['User']['last_name'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
      				<label>City: </label>
                    <?php echo h($user['City']['name'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
      				<label>State: </label>
                    <?php echo h($user['State']['name'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
      				<label>Country: </label>
                    <?php echo h($user['Country']['name'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
      				<label>Phone: </label>
                    <?php echo h($user['User']['phone'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
      				<label>Interest 1: </label>
                    <?php echo h($user['User']['interest_1'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
      				<label>Interest 2: </label>
                    <?php echo h($user['User']['interest_2'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
      				<label>Interest 3: </label>
                    <?php echo h($user['User']['interest_3'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
      				<label>Ranking: </label>
                    <?php echo h($user['User']['ranking'])?>
      			</div>
      		</div>
      		
          
          
      		<div style="clear:both;"></div>
      	</div>           	
      	  <div style="clear:both;"></div>


          <div id="content_imgs"></div>

          <div class="col-md-12">
              <div class="form-group">
                <label>Photo</label>
                <div id="imagenes_content">
                  <div id="img_edit" class="img_edit">
                    <img src="<?php echo $this->webroot.'files/'.$user['User']['photo']; ?>" style="width:25%;">
                  </div>
                </div>
              </div>
          </div>

      		<div class="margenesVerticales" style="text-align:right;">
	                <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'users';" title="return" value = "Back" style="width: 79px;"> 	  
			</div>
      	</div>    
</div>        
    </fieldset>  
</article>