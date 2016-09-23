<article class="card shadow-1">
  <fieldset>

      <legend>Park<?php echo ': '; if (!empty($park)) { echo '<small>'.$park['Park']['name'].'</small>'; }?></legend>
      <div class="margenesHorizontales">
      	<div>
      		<div class="col-md-6">
      			<div class="form-group">
				<label>Nombre: </label>
         	    <?php echo h($park['Park']['name'])?>
      			</div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group">
				    <label>Latitude:</label>
                <?php echo h($park['Park']['lat'])?>
                </select>
			       </div>
      		</div>
          <div class="col-md-6">
            <div class="form-group">
                <label>Longitude: </label>
                <?php echo h($park['Park']['longitude'])?>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
                <label>Country: </label>
                <?php echo h($park['Country']['name'])?>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
                <label>State: </label>
                <?php echo h($park['State']['name'])?>
            </div>
          </div>
          
        </div>
      		<div style="clear:both;"></div>
      	</div>         	
        
        <div style="clear:both;"></div>

        <div class="col-md-6">
        <div class="form-group">
            <label>Some points of interests on this city: </label>
            </div>
      </div>


          <div class="margenesHorizontales">
            <table class="table table-striped">
                  <th>Name</th>
                  <th>Schedule</th>
                  <th>Price</th>
              <?php foreach ($points as $item): ?>
                <tr>
                <?php if(is_array($item)){ ?>  
                <td><?php echo h($item['Point']['name']); ?>&nbsp;</td>
                <td><?php echo h($item['Point']['schedule']); ?>&nbsp;</td>
                <td><?php echo h($item['Point']['price']); ?>&nbsp;</td>
                </tr>
              <?php }
              endforeach; 
              ?>
          </table>
          </div>

        <div>
            <?php echo $this->Form->create('Point'); ?>
            <div class="col-md-12">
                  <div class="form-group">
                    <label>Add a point of interest in this destination</label>
                  </div>
                <div class="col-md-12">


                <div class="col-md-6">
                      <div class="form-group">
                        <label>Name</label>
                        <?php echo $this->Form->input('name',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'')); ?>
                      </div>
                </div>

                <div class="col-md-6">
                      <div class="form-group">
                        <label>Latitude</label>
                        <?php echo $this->Form->input('lat',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'')); ?>
                      </div>
                </div>

                <div class="col-md-6">
                      <div class="form-group">
                        <label>Longitude</label>
                        <?php echo $this->Form->input('longitude',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'')); ?>
                      </div>
                </div>

                <div class="col-md-6">
                      <div class="form-group">
                        <label>Price</label>
                        <?php echo $this->Form->input('price',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'')); ?>
                      </div>
                </div>

                <div class="col-md-6">
                      <div class="form-group">
                        <label>Payment</label>
                        <?php echo $this->Form->input('payment',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'','options'=>array('0'=>'Select','Cash'=>'Cash','Debit'=>'Debit','Credit Card'=>'Credit Card','All'=>'All'))); ?>
                      </div>
                </div>

                <div class="col-md-6">
                      <div class="form-group">
                        <label>Schedule</label>
                        <?php echo $this->Form->input('schedule',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'')); ?>
                      </div>
                </div>



                <?php echo $this->Form->input('country_id',array('div'=>false,'label'=>false,'type'=>'hidden','value'=>$park['Park']['country_id'])); ?>


                <?php echo $this->Form->input('state_id',array('div'=>false,'label'=>false,'type'=>'hidden','value'=>$park['Park']['state_id'])); ?>


                <?php echo $this->Form->input('park_id',array('div'=>false,'label'=>false,'type'=>'hidden','value'=>$park['Park']['id'])); ?>

                  
                <button type="submit" class="btn btn-primary">
                          Submit
                </button>
                <div style="clear:both;"></div>
                    
                </div>
            </div>
          </div>
      	

          
      		<div class="margenesVerticales" style="text-align:right;">
	                <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'parks';" title="Go back" value = "Back" style="width: 79px;"> 	  
				  </div>
      	</div>    
</div>        
    </fieldset>  
</article>
