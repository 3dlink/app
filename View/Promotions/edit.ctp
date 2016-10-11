<article class="card shadow-1">
<?php echo $this->Form->create('Promotion'); echo $this->Form->input('id');?>
    <fieldset>
      <legend>Edit Promotion</legend>
      <div class="margenesHorizontales">

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Promotion Name</label>
			          <?php echo $this->Form->input('name',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'State name')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Client</label>
			          <?php echo $this->Form->input('client_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Price</label>
			          <?php echo $this->Form->input('price',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
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
			          <label>Region</label>
			          <?php echo $this->Form->input('region_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'', 'id'=>'Region')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>State</label>
			          <?php echo $this->Form->input('state_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'', 'id'=>'State')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>City</label>
			          <?php echo $this->Form->input('city_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'', 'id'=>'City')); ?>
			        </div>
	      		</div>

	      		<div class="col-md-6">
			        <div class="form-group">
			          <label>Destination</label>
			          <?php echo $this->Form->input('destination_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'', 'id'=>'Destination')); ?>
			        </div>
	      		</div>

				<div class="col-md-12">
			        <div class="form-group">
			          <label>Description</label>
			          <?php echo $this->Form->input('description',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
			        </div>
	      		</div>	


				<div class="col-md-12 dlink-dropzone" style="margin:30px 0;">
	        		<label>Picture 1</label>
	        		<div  class="dropzone"  id ="photo1"  name="mainFileUploader">
            		<div  class="fallback">
            			<input  name="file"  type="file" />
            		</div>
	        		</div>
	      		</div>


	      		<div id="content_imgs"></div>


				<div class="col-md-12 dlink-dropzone" style="margin:30px 0;">
	        		<label>Picture 2</label>
	        		<div  class="dropzone"  id ="photo2"  name="mainFileUploader">
            		<div  class="fallback">
            			<input  name="file"  type="file" />
            		</div>
	        		</div>
	      		</div>


	      		<div id="content_imgs"></div>
			    <div id="content_imgs"></div>


			    <div class="col-md-12">
		        <div class="form-group">
		          <label>Description Image</label>
		          <div id="imagenes_content">
		          	<div id="img_edit" class="img_edit">
		          		<div class="col-md-6" style="text-align:center;width:260px;height:260px;background-image:url('<?php echo $this->webroot.'files/'.$this->data['Promotion']['photo1']; ?>');background-size:cover;background-repeat:no-repeat;">
		          		</div>
		          	</div>
		          	<div id="img_edit" class="img_edit">
		          		<div class="col-md-6" style="margin-left:25px;text-align:center;width:260px;height:260px;background-image:url('<?php echo $this->webroot.'files/'.$this->data['Promotion']['photo2']; ?>');background-size:cover;background-repeat:no-repeat;">
		          		</div>
		          	</div>
		          </div>
		        </div>
      		</div>				      		

        <div class="margenesVerticales" style="text-align:right;margin-top:30px;float:right;">
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'promotions';" title="Go Back" value = "Back" style="width: 79px;">
          <button type="submit" class="btn btn-primary">
            Save
          </button>
        </div>
      </div>          
    </fieldset>  
</article>


<script type="text/javascript">

	$("#photo1").dropzone({ url: WEBROOT+"start/upload/1", maxFilesize: 10, dictDefaultMessage: '<div class="col-xs-12 text-center" style="padding-bottom:20px"><img src="<?php echo $this->webroot; ?>img/file.png" alt="" /></div><p class="dropzone-add-message">Drag and drop the files you want to upload or <a  class="add-files">click here to browse</a></p>',
		success:function(data){
			$('#content_imgs').append('<input type="hidden" value='+data.xhr.response+' name="data[Promotion][photo1]">');
	  }
	});

	$("#photo2").dropzone({ url: WEBROOT+"start/upload/1", maxFilesize: 10, dictDefaultMessage: '<div class="col-xs-12 text-center" style="padding-bottom:20px"><img src="<?php echo $this->webroot; ?>img/file.png" alt="" /></div><p class="dropzone-add-message">Drag and drop the files you want to upload or <a  class="add-files">click here to browse</a></p>',
		success:function(data){
			$('#content_imgs').append('<input type="hidden" value='+data.xhr.response+' name="data[Promotion][photo2]">');
	  }
	});

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

      $('#City').change(function(){
        var value = $(this).val();
        var back = "City";
        var next = "Destination";
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