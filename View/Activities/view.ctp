<article class="card shadow-1">
  <fieldset>

      <legend>Activities: <?php echo ': '; if (!empty($activity)) { echo '<small>'.$activity['Activity']['name'].'</small>'; }?></legend>
      <div class="margenesHorizontales">
      	<div>
      		<div class="col-md-6">
      			<div class="form-group">
      				        <label>Name: </label>
                      <?php echo h($activity['Activity']['name'])?>
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
                    <img src="<?php echo $this->webroot.'files/'.$activity['Activity']['photo']; ?>" style="width:25%;">
                  </div>
                </div>
              </div>
          </div>

      		<div class="margenesVerticales" style="text-align:right;">
	                <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'activities';" title="Go back" value = "Back" style="width: 79px;"> 	  
			</div>
      	</div>    
</div>        
    </fieldset>  
</article>

