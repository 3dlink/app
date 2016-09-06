<article class="card shadow-1">
<?php echo $this->Form->create('State'); echo $this->Form->input('id');?>
    <fieldset>
      <legend>Edit State</legend>
      <div class="margenesHorizontales">

				<div class="col-md-6">
			        <div class="form-group">
			          <label>State Name</label>
			          <?php echo $this->Form->input('name',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>' ')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Country</label>
			          <?php echo $this->Form->input('country_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>' ','id'=>'Country')); ?>
			        </div>
	      		</div>	      

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Region</label>
			          <?php echo $this->Form->input('region_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>' ','id'=>'Region')); ?>
			        </div>
	      		</div>		

        <div class="margenesVerticales" style="text-align:right;margin-top:30px;float:right;">
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'states';" title="regresar" value = "Atr&aacute;s" style="width: 79px;">
          <button type="submit" class="btn btn-primary">
            Guardar
          </button>
        </div>
      </div>          
    </fieldset>  
</article>

<script type="text/javascript">



      $('#Country').val(0)

      $('#Country').change(function(){
        var value = $(this).val();
        var back = "Country";
        var next = "Region";
        var opt = changeSelect(back,next,value);
        // alert(opt)
        // $('#region').html(opt);
      })

      $('#Region').change(function(){
        var value = $(this).val();
        var back = "Region";
        var next = "State";
        var opt = changeSelect(back,next,value);
        // $('#state').html(opt);
      })



    function changeSelect(back,next,value){
      $.ajax({
        url: WEBROOT+'states/list_ajax/'+back+"/"+next+"/"+value,
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