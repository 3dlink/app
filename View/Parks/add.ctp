<article class="card shadow-1">
<?php echo $this->Form->create('Park'); ?>
    <fieldset>
      <legend>Add Park</legend>
      <div class="margenesHorizontales">

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Park Name</label>
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
                <label>Country</label>
                <?php echo $this->Form->input('country_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'', 'id'=>'Country')); ?>
              </div>
        </div>

        <div class="col-md-6">
              <div class="form-group">
                <label>State</label>
                <?php echo $this->Form->input('state_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'', 'id'=>'State')); ?>
              </div>
        </div>

        <div class="margenesVerticales" style="text-align:right;margin-top:30px;float:right;">
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'parks';" title="Go Back" value = "Back" style="width: 79px;">
          <button type="submit" class="btn btn-primary">
            Save
          </button>
        </div>
      </div>          
    </fieldset>  
</article>

<script type="text/javascript">

  $(document).ready(function(){

      $('#Country').change(function(){
        var value = $(this).val();
        var back = "Country";
        var next = "State";
        var opt = changeSelect(back,next,value);
        // alert(opt)
        // $('#region').html(opt);
      })

    })

    function changeSelect(back,next,value){
      $.ajax({
        url: WEBROOT+'cities/list_ajax/'+back+"/"+next+"/"+value,
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