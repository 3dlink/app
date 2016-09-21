<article class="card shadow-1">
  <fieldset>

      <legend>Question<?php echo ': '; if (!empty($forumq)) { echo '<small>'.$forumq['Forumq']['question'].'</small>'; }?></legend>
      <div class="margenesHorizontales">
      	<div>
      		<div class="col-md-6">
  			<div class="form-group">
  				  <label>This question was refering to this destination: </label>
                  <?php echo h($forumq['Destination']['name'])?>
  			</div>
  		</div>
  		<div style="clear:both;"></div>
  		<div class="col-md-6">
  			<div class="form-group">
  				  <label>Some Answers from other users: </label>
            </div>
  		</div>


  				<div class="margenesHorizontales">
  					
  					
  					<table class="table table-striped">

                  <th>Answer</th>
                  <th>By</th>
                  <th>Date</th>
                  <th></th>
                  
                  <th></th>
  									  						
        				<?php foreach ($answers as $item): ?>
        				<tr>
        				<td><?php echo h($item['answer']); ?>&nbsp;</td>
  						  <td><?php echo h($item['User']['username']); ?>&nbsp;</td>
                <td><?php echo h($item['adate']); ?>&nbsp;</td>
  						</tr>
  						<?php endforeach; ?>
	
  					</table>

  				</div>

  				<div>
				<?php echo $this->Form->create('Foruma'); ?>
				<div class="col-md-12">
			        <div class="form-group">
			          <label>Answer to this question</label>
			          <?php echo $this->Form->input('answer',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>


                <?php
                  $today = date("F j, Y, g:i a");
                ?>

                <?php echo $this->Form->input('adate',array('div'=>false,'label'=>false,'type'=>'hidden','value'=>$today)); ?>


	      			  <?php echo $this->Form->input('user_id',array('div'=>false,'label'=>false,'type'=>'hidden','value'=>$this->UserAuth->getUserId())); ?>
	      			  <?php echo $this->Form->input('forumq_id',array('div'=>false,'label'=>false,'type'=>'hidden','value'=>$forumq['Forumq']['id'])); ?>
			          <button type="submit" class="btn btn-primary">
		            	Submit
		              </button>
			        </div>
	      		</div>
	      		</div>
          
      		<div style="clear:both;"></div>
      	</div>           	
      	  <div style="clear:both;"></div>


      		<div class="margenesVerticales" style="text-align:right;">
	                <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'forumqs';" title="Go Back" value = "Back" style="width: 79px;">
			</div>
      	</div>    
</div>        
    </fieldset>  
</article>