<article class="card shadow-1">
<?php echo $this->Form->create('Destination'); echo $this->Form->input('id');?>
    <fieldset>
      <legend>Edit Destination</legend>
      <div class="margenesHorizontales">

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Destination Name</label>
			          <?php echo $this->Form->input('name',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Type</label>
			          <?php echo $this->Form->input('type_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Country</label>
			          <?php echo $this->Form->input('country_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Region</label>
			          <?php echo $this->Form->input('region_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>State</label>
			          <?php echo $this->Form->input('state_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>City</label>
			          <?php echo $this->Form->input('city_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Park</label>
			          <?php echo $this->Form->input('park_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'','required'=>false, 'id'=>'park')); ?>
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
			          <label>Budget</label>
			          <?php echo $this->Form->input('budget',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Affluence</label>
			          <?php echo $this->Form->input('affluence',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Environment</label>
			          <?php echo $this->Form->input('environment',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Security</label>
			          <?php echo $this->Form->input('security',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'')); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Description</label>
			          <?php echo $this->Form->input('description',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'')); ?>
			        </div>
	      		</div>

	      		<div class="col-md-12 dlink-dropzone" style="margin:30px 0;">
			        <label>Photo</label>
			        <div  class="dropzone"  id ="photo"  name="mainFileUploader">
			            <div  class="fallback">
			            	<input  name="file"  type="file" />
			            </div>
			        </div>
			    </div>
			    <div id="content_imgs"></div>

			    <div class="col-md-12">
		        <div class="form-group">
		          <label>Description Image</label>
		          <div id="imagenes_content">
		          	<div id="img_edit" class="img_edit">
		          		<div class="col-md-6" style="text-align:center;width:260px;height:260px;background-image:url('<?php echo $this->webroot.'files/'.$this->data['Destination']['photo1']; ?>');background-size:cover;background-repeat:no-repeat;">
		          		</div>
		          	</div>
		          </div>
		        </div>
      		<div style="clear:both;"></div>

		        <div></div>

        <div class="margenesVerticales" style="text-align:right;margin-top:30px;float:right;">
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'destinations';" title="Go Back" value = "Back" style="width: 79px;">
          <button type="submit" class="btn btn-primary">
            Save
          </button>
        </div>
      </div>          
    </fieldset>  
</article>

<script type="text/javascript">

	$("#photo").dropzone({ url: WEBROOT+"start/upload/1", maxFilesize: 10, dictDefaultMessage: '<div class="col-xs-12 text-center" style="padding-bottom:20px"><img src="<?php echo $this->webroot; ?>img/file.png" alt="" /></div><p class="dropzone-add-message">Arrastra aquí todos los archivos a cargar o <a  class="add-files">selecciónalos de tu computador</a></p>',
		success:function(data){
			$('#content_imgs').append('<input type="hidden" value='+data.xhr.response+' name="data[Destination][photo1]">');
	  }
	});

	$('#park').val("")
	$('#Country').val("")
    $(document).ready(function(){


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

      $('#State').change(function(){
        var value = $(this).val();
        var back = "State";
        var next = "City";
        var opt = changeSelect(back,next,value);
        // $('#city').html(opt);
      })

    })

    function changeSelect(back,next,value){
      $.ajax({
        url: WEBROOT+'destinations/list_ajax/'+back+"/"+next+"/"+value,
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