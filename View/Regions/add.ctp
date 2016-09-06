<article class="card shadow-1">
<?php echo $this->Form->create('Region'); ?>
    <fieldset>
      <legend>Add Region</legend>
      <div class="margenesHorizontales">

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Region Name</label>
			          <?php echo $this->Form->input('name',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Region name', 'id'=>'Region')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Country</label>
			          <?php echo $this->Form->input('country_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name','id'=>'Country')); ?>
			        </div>
	      		</div>	      		

        <div class="margenesVerticales" style="text-align:right;margin-top:30px;float:right;">
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'regions';" title="regresar" value = "Atr&aacute;s" style="width: 79px;">
          <button type="submit" class="btn btn-primary">
            Guardar
          </button>
        </div>
      </div>          
    </fieldset>  
</article>

<script type="text/javascript">

      $('#Country').val("")

      $('#Country').change(function(){
        var value = $(this).val();
        var back = "Country";
        var next = "Region";
        var opt = changeSelect(back,next,value);
        // alert(opt)
        // $('#region').html(opt);
      })



    function changeSelect(back,next,value){
      $.ajax({
        url: WEBROOT+'regions/list_ajax/'+back+"/"+next+"/"+value,
        type:'POST',
        dataType: 'json',
        success:function(data){
          var htmlContent = "<option>-- Select -- </option>";
          for (var i = 0; i < data.length; i++) {

            htmlContent += "<option value='"+data[i][next]['id']+"'>"+data[i][next]['name']+"</option>";
          }
          $('#'+next).html(htmlContent)
        },
        error: function(){}
      })
    }
</script>