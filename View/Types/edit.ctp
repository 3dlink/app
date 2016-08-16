<article class="card shadow-1">
<?php echo $this->Form->create('Type'); echo $this->Form->input('id');?>
    <fieldset>
      <legend>Add Country</legend>
      <div class="margenesHorizontales">

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Type Name</label>
			          <?php echo $this->Form->input('name',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
			        </div>
	      		</div>

        <div class="margenesVerticales" style="text-align:right;margin-top:30px;float:right;">
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'types';" title="regresar" value = "Atr&aacute;s" style="width: 79px;">
          <button type="submit" class="btn btn-primary">
            Guardar
          </button>
        </div>
      </div>          
    </fieldset>  
</article>