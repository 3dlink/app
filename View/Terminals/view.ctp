<article class="card shadow-1">
  <fieldset>
      <legend>Terminal<?php echo ': '; if (!empty($terminal)) { echo '<small>'.$terminal['Terminal']['name'].'</small>'; }?></legend>
      <div class="margenesHorizontales">
      	<div>
      		<div class="col-md-6">
      			<div class="form-group">
      			<label>Name: </label>
                <?php echo h($terminal['Terminal']['name'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
				<label>City:</label>
                <?php echo h($terminal['City']['name'])?>
                </select>
			       </div>
      		</div>
          <div class="col-md-6">
            <div class="form-group">
                <label>State:</label>
                <?php echo h($terminal['State']['name'])?>
                </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
        		<label>Country: </label>
                <?php echo h($terminal['Country']['name'])?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
        		<label>Latitude: </label>
                <?php echo h($terminal['Terminal']['lat'])?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
        		<label>Longitude: </label>
                <?php echo h($terminal['Terminal']['longitude'])?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
        		<label>Schedule: </label>
                <?php echo h($terminal['Terminal']['schedule'])?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
        		<label>Phone: </label>
                <?php echo h($terminal['Terminal']['phone'])?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
        		<label>Contact: </label>
                <?php echo h($terminal['Terminal']['contact'])?>
            </div>
          </div>
          <div style="clear:both;"></div>
          <div class="col-md-12">
            <div class="form-group">
        		<label>Description: </label>
                <?php echo h($terminal['Terminal']['description'])?>
            </div>
          </div>
      	</div>

          <div style="clear:both;"></div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Cities for traveling to:</label>

              <table class="table table-striped">


                      <?php 
                      foreach ($terminal['City'] as $item): ?>
                      <?php if(is_array($item)){ ?>
                <tr>
                   <td><?php echo h($item['name']); ?>&nbsp;</td>
                </tr>
                    <?php }
                      endforeach; 
                    ?>
              </table>
            </div>
          </div>    

          <div class="col-md-6">
            <div class="form-group">
              <label>Destinations Available:</label>

              <table class="table table-striped">


                      <?php 
                      foreach ($terminal['Destination'] as $item): ?>
                      
                <tr>
                   <td><?php echo h($item['name']); ?>&nbsp;</td>
                </tr>
                    <?php 
                      endforeach; 
                    ?>
              </table>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Points of Interest:</label>

              <table class="table table-striped">


                      <?php 
                      foreach ($terminal['Point'] as $item): ?>
                      <?php if(is_array($item)){ ?>
                <tr>
                   <td><?php echo h($item['name']); ?>&nbsp;</td>
                </tr>
                    <?php }
                      endforeach; 
                    ?>
              </table>
            </div>
          </div>          	
      	<div style="clear:both;"></div>
      	
        
      	<div>

          
      		<div class="margenesVerticales" style="text-align:right;">
	                <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'terminals';" title="return" value = "Back" style="width: 79px;"> 	  
				  </div>
      	</div>    
</div>        
    </fieldset>  
</article>
