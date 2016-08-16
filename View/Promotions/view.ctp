<article class="card shadow-1">
  <fieldset>
      <legend>Promotion<?php echo ': '; if (!empty($promotion)) { echo '<small>'.$promotion['Promotion']['name'].'</small>'; }?></legend>
      <div class="margenesHorizontales">
      	<div>
      		<div class="col-md-6">
      			<div class="form-group">
      				        <label>Nombre: </label>
                      <?php echo h($promotion['Promotion']['name'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
				        <label>Client:</label>
                <?php echo h($promotion['Client']['name'])?>
                </select>
			       </div>
      		</div>
          <div class="col-md-6">
            <div class="form-group">
                <label>Price:</label>
                <?php echo h($promotion['Promotion']['price'])?>
                </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
        		<label>Description: </label>
                <?php echo h($promotion['Promotion']['description'])?>
            </div>
          </div>
      	</div>           	
      	
      	
        
      	<div>

          
      		<div class="margenesVerticales" style="text-align:right;">
	                <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'promotions';" title="regresar" value = "Atr&aacute;s" style="width: 79px;"> 	  
				  </div>
      	</div>    
</div>        
    </fieldset>  
</article>
