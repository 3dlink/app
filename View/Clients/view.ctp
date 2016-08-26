<article class="card shadow-1">
  <fieldset>

      <legend>Client<?php echo ': '; if (!empty($client)) { echo '<small>'.$client['Client']['name'].'</small>'; }?></legend>
      <div class="margenesHorizontales">
      	<div>
      		<div class="col-md-6">
      			<div class="form-group">
				<label>Nombre: </label>
         	    <?php echo h($client['Client']['name'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
				<label>Service:</label>
                <?php echo h($client['Service']['name'])?>
                </select>
			       </div>
      		</div>
          <div class="col-md-6">
            <div class="form-group">
                <label>Schedule: </label>
                <?php echo h($client['Client']['schedule'])?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                <label>Price:</label>
                <?php echo h($client['Client']['price'])?>
                </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
        		<label>Latitude: </label>
                <?php echo h($client['Client']['lat'])?>
      </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
        	<label>Longitude:</label>
                <?php echo h($client['Client']['longitude'])?>
                </select>
      </div>
          </div>
      		<div style="clear:both;"></div>
      	</div>           	
      	<div>
      		<div class="col-md-6">
      			<div class="form-group">
                <label>Payment:</label>
                <?php echo h($client['Client']['payment'])?>
			      </div>
      		</div>
      		<div style="clear:both;"></div>
      	</div>
      	
        
      	<div>
          
          <div id="content_imgs"></div>

          <div class="col-md-12">
              <div class="form-group">
                <label>Pictures</label>
                <div id="imagenes_content">
                  <div id="img_edit" class="img_edit">
                    <img src="<?php echo $this->webroot.'files/'.$client['Client']['photo_1']; ?>" style="width:25%;">
                  </div>
                </div>
                <div style="margin-top:10px;" ></div>
                <div id="imagenes_content">
                  <div id="img_edit" class="img_edit">
                    <img src="<?php echo $this->webroot.'files/'.$client['Client']['photo_2']; ?>" style="width:25%;">
                  </div>
                </div>
              </div>
          </div>
          <div class="col-md-12">
          </div>

          
      		<div class="margenesVerticales" style="text-align:right;">
	                <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'clients';" title="regresar" value = "Atr&aacute;s" style="width: 79px;"> 	  
				  </div>
      	</div>    
</div>        
    </fieldset>  
</article>
