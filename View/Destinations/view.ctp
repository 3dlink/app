<article class="card shadow-1">
  <fieldset>

      <legend>Destination<?php echo ': '; if (!empty($destination)) { echo '<small>'.$destination['Destination']['name'].'</small>'; }?></legend>
      <div class="margenesHorizontales">
      	<div>
      		<div class="col-md-6">
      			<div class="form-group">
      				        <label>Name: </label>
                      <?php echo h($destination['Destination']['name'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
      				        <label>Type: </label>
                      <?php echo h($destination['Type']['name'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
      				<label>City: </label>
                    <?php echo h($destination['City']['name'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
      				<label>State: </label>
                    <?php echo h($destination['State']['name'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
      				<label>Region: </label>
                    <?php echo h($destination['Region']['name'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
      				<label>Country: </label>
                    <?php echo h($destination['Country']['name'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
      				<label>Park: </label>
                    <?php echo h($destination['Park']['name'])?>
      			</div>
      		</div>

      		<div class="col-md-12">
      			<div class="form-group">
      				<label>Description: </label>
                    <?php echo h($destination['Destination']['description'])?>
      			</div>
      		</div>
      		
      		<div class="col-md-6">
      			<div class="form-group">
      				<label>Latitude: </label>
                    <?php echo h($destination['Destination']['lat'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
      				<label>Longitude: </label>
                    <?php echo h($destination['Destination']['longitude'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
      				<label>Ranking: </label>
                    <?php echo h($destination['Destination']['ranking'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
      				<label>Security: </label>
                    <?php echo h($destination['Destination']['security'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
      				<label>Environment: </label>
                    <?php echo h($destination['Destination']['environment'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
      				<label>Budget: </label>
                    <?php echo h($destination['Destination']['budget'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
      				<label>Affluence: </label>
                    <?php echo h($destination['Destination']['affluence'])?>
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
                    <img src="<?php echo $this->webroot.'files/'.$destination['Destination']['photo1']; ?>" style="width:25%;">
                  </div>
                </div>
              </div>
          </div>

  		<div class="col-md-6">
  			<div class="form-group">
  				  <label>Some comments about this destination from other users: </label>
            </div>
  		</div>


  				<div class="margenesHorizontales">
  					<table class="table table-striped">
                  <th>Comment</th>
                  <th>Security</th>
                  <th>Environment</th>
                  <th>Budget</th>
                  <th>Username</th>
  						<?php foreach ($comments as $item): ?>
        				<tr>
        				<td><?php echo h($item['comment']); ?>&nbsp;</td>
  						<td><?php echo h($item['security']); ?>&nbsp;</td>
  						<td><?php echo h($item['environment']); ?>&nbsp;</td>
  						<td><?php echo h($item['budget']); ?>&nbsp;</td>
  						<td><?php echo h($item['User']['username']); ?>&nbsp;</td>
  						</tr>
  						<?php endforeach; ?>
					</table>
  				</div>



  				<div>
				<?php echo $this->Form->create('Commentary'); ?>
				<div class="col-md-12">
			        <div class="form-group">
			          <label>Add a comment about this destination</label>
			        </div>
			         <div class="col-md-12">


						<div class="col-md-6">
					        <div class="form-group">
					          <label>Comment</label>
					          <?php echo $this->Form->input('comment',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
					        </div>
			      		</div>

						<div class="col-md-6">
					        <div class="form-group">
					          <label>Security</label>
					          <?php echo $this->Form->input('security',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
					        </div>
			      		</div>

						<div class="col-md-6">
					        <div class="form-group">
					          <label>Environment</label>
					          <?php echo $this->Form->input('environment',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
					        </div>
			      		</div>

						<div class="col-md-6">
					        <div class="form-group">
					          <label>Budget</label>
					          <?php echo $this->Form->input('budget',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
					        </div>
			      		</div>

			          <?php echo $this->Form->input('user_id',array('div'=>false,'label'=>false,'type'=>'hidden','value'=>$this->UserAuth->getUserId())); ?>
	      			  <?php echo $this->Form->input('destination_id',array('div'=>false,'label'=>false,'type'=>'hidden','value'=>$destination['Destination']['id'])); ?>

					    
					    <button type="submit" class="btn btn-primary">
				            	Submit
				        </button>
			          
			        </div>
	      		</div>
	      		</div>



      		<div class="margenesVerticales" style="text-align:right;">
	                <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'destinations';" title="regresar" value = "Atr&aacute;s" style="width: 79px;"> 	  
			</div>
      	</div>    
</div>        
    </fieldset>  
</article>
