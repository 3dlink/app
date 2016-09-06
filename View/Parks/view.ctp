<article class="card shadow-1">
  <fieldset>

      <legend>Park<?php echo ': '; if (!empty($park)) { echo '<small>'.$client['Park']['name'].'</small>'; }?></legend>
      <div class="margenesHorizontales">
      	<div>
      		<div class="col-md-6">
      			<div class="form-group">
				<label>Nombre: </label>
         	    <?php echo h($client['Park']['name'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
				<label>Latitude:</label>
                <?php echo h($client['Park']['lat'])?>
                </select>
			       </div>
      		</div>
          <div class="col-md-6">
            <div class="form-group">
                <label>Longitude: </label>
                <?php echo h($client['Park']['longitude'])?>
            </div>
          </div>
          
        </div>
      		<div style="clear:both;"></div>
      	</div>         	
        
      	

          
      		<div class="margenesVerticales" style="text-align:right;">
	                <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'parks';" title="Go back" value = "Back" style="width: 79px;"> 	  
				  </div>
      	</div>    
</div>        
    </fieldset>  
</article>
