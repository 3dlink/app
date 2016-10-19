
<article class="card shadow-1">
	<?php 
		$destc = array();
		foreach ($destcities as $key => $value) {
			$destc[$key] = $value;
		}
	?>
<?php echo $this->Form->create('Terminal'); ?>
    <fieldset>
      <legend>Add Terminal</legend>
      <div class="margenesHorizontales">

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Terminal Name</label>
			          <?php echo $this->Form->input('name',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>' ')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Country</label>
			          <?php echo $this->Form->input('country_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>' ', 'id'=>'Country')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>State</label>
			          <?php echo $this->Form->input('state_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>' ', 'id'=>'State')); ?>
			        </div>
	      		</div>   	 

				<div class="col-md-6">
			        <div class="form-group">
			          <label>City</label>
			          <?php echo $this->Form->input('city_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>' ', 'id'=>'City')); ?>
			        </div>
	      		</div>  		

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Latitude</label>
			          <?php echo $this->Form->input('lat',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>' ')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Longitude</label>
			          <?php echo $this->Form->input('longitude',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>' ')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Description</label>
			          <?php echo $this->Form->input('description',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>' ')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Phone</label>
			          <?php echo $this->Form->input('phone',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>' ')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Contact</label>
			          <?php echo $this->Form->input('contact',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>' ')); ?>
			        </div>
	      		</div>

				<div class="col-md-6">
			        <div class="form-group">
			          <label>Schedule</label>
			          <?php echo $this->Form->input('schedule',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>' ')); ?>
			        </div>
	      		</div>


              <div style="clear:both;"></div>

              

              <div class="form-group col-md-12">
              		<div class="btn_add">
              			<label>Add Cities to travel to:  </label>
				        <button title="Add city" type="button" id="addCity" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button>
				    </div>
				<div class="cfather"> <!-- init cfather-->
				 	<div class="cchildren0 childrencity"> <!-- init cchildren-->
				 		<div class="form-group col-md-2">
				          <label>Cities</label>
				          <?php echo $this->Form->input('city_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>' ')); ?>
				        </div>
				        <div class="form-group col-md-2">
				          <label>Trip hours</label>
				          <?php echo $this->Form->input('hours',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>' ')); ?>
				        </div>
				        <div class="form-group col-md-2">
				          <label>Price</label>
				          <?php echo $this->Form->input('price',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>' ')); ?>
				        </div>
			            <div class="btn_remove col-md-2">
			              <label>Delete destination</label>	
			              <button title="Delete city" class="btn btn-danger delCity" type="button" data-element= "0">
			                <span class="glyphicon glyphicon-remove"></span>
			              </button>
			            </div>
				 	</div> <!-- end cchildren-->
                </div> <!-- end cfather -->

              </div> 

              <div style="clear:both;"></div>

              

              <div class="form-group col-md-12">
              		<div class="btn_add">
              			<label>Add Destinations to travel to:  </label>
				        <button title="Add destination" type="button" id="addDestination" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button>
				    </div>
				<div class="cfather"> <!-- init cfather-->
				 	<div class="dchildren0 childrendestination"> <!-- init cchildren-->
				 		<div class="form-group col-md-2">
				          <label>Destination</label>
				          <?php echo $this->Form->input('destination_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>' ')); ?>
				        </div>
				        <div class="form-group col-md-2">
				          <label>Trip hours</label>
				          <?php echo $this->Form->input('hours',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>' ')); ?>
				        </div>
				        <div class="form-group col-md-2">
				          <label>Price</label>
				          <?php echo $this->Form->input('price',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>' ')); ?>
				        </div>
			            <div class="btn_remove col-md-2">
			              <label>Delete destination</label>	
			              <button title="Delete destination" class="btn btn-danger delDestination" type="button" data-element= "0">
			                <span class="glyphicon glyphicon-remove"></span>
			              </button>
			            </div>
				 	</div> <!-- end cchildren-->
                </div> <!-- end cfather -->

              <div style="clear:both;"></div>

        <div class="margenesVerticales" style="text-align:right;margin-top:30px;float:right;">
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'terminals';" title="Go Back" value = "Back" style="width: 79px;">
          <button type="submit" class="btn btn-primary">
            Save
          </button>
        </div>
      </div>          
    </fieldset>  
</article>

<script type="text/javascript">

	var destcit = "";
	var destdest = "";
	$(document).ready(function(){

      $('#Country').change(function(){
        var value = $(this).val();
        var back = "Country";
        var next = "State";
        var opt = changeSelect(back,next,value);        
        // alert(opt)
        // $('#region').html(opt);
      })

      $('#Country').change(function(){
        var value = $(this).val();
        var back = "Country";
        var next = "City";
        var opt = changeDest(back,next,value);
      })

      $('#Country').change(function(){
        var value = $(this).val();
        var back = "Country";
        var next = "Destination";
        var opt = changeDestDest(back,next,value);
      })

      $('#State').change(function(){
        var value = $(this).val();
        var back = "State";
        var next = "City";
        var opt = changeSelect(back,next,value);
        // $('#city').html(opt);
      })

    })

    function changeDest(back,next,value){
    	$.ajax({
    		url: WEBROOT+'cities/list_ajax/'+back+"/"+next+"/"+value,
    		type: 'POST',
    		dataType: 'json',
    		success: function(data){
    			//for(var i = 0; i < data.length; i++){
    				destcit = data;
    			//}

    			$('#'+next).html(destcit)
    			var options = "";
    			for(i=0; i<=destcit.length; i++){
			  			if(typeof destcit[i]!= "undefined"){
			  			options += '<option value='+destcit[i]['City']['id']+'>'+destcit[i]['City']['name']+'</option>'
			  			}
			  	}
    			$('#TerminalCityId').html(options);
    		},
    		error: function(){}    		
    	})
    }

    function changeDestDest(back,next,value){
    	$.ajax({
    		url: WEBROOT+'destinations/list_ajax/'+back+"/"+next+"/"+value,
    		type: 'POST',
    		dataType: 'json',
    		success: function(data){
    			//for(var i = 0; i < data.length; i++){
    				destdest = data;
    			//}

    			$('#'+next).html(destdest)
    			var options = "";
    			for(i=0; i<=destdest.length; i++){
			  			if(typeof destdest[i]!= "undefined"){
			  			options += '<option value='+destdest[i]['City']['id']+'>'+destdest[i]['City']['name']+'</option>'
			  			}
			  	}
    			$('#TerminalCityId').html(options);
    		},
    		error: function(){}    		
    	})
    }

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

    $('#addCity').click(function(){

			  		var options = "";

			  		for(i=0; i<=destcit.length; i++){
			  			if(typeof destcit[i]!= "undefined"){
			  			options += '<option value='+destcit[i]['City']['id']+'>'+destcit[i]['City']['name']+'</option>'
			  			}
			  		}

    				var count = $('.childrencity').length + 1;
    	            htmlContent = '<div style="clear:both;"></div>'+
    	            '<div class="childrencity cchildren'+count+'">'+
		            '<div class="form-group col-md-2">'+
	                '<label>Cities</label>'+
	                '<select class="form-control">'+
	                 options+
	                '</select>'+
			        '</div>'+
			        '<div class="form-group col-md-2">'+
			          '<label>Trip hours</label>'+
			          '<?php echo $this->Form->input("hours",array("div"=>false,"label"=>false,"class"=>"form-control","placeholder"=>" ")); ?>'+
			        '</div>'+
			        '<div class="form-group col-md-2">'+
			          '<label>Price</label>'+
			          '<?php echo $this->Form->input("price",array("div"=>false,"label"=>false,"class"=>"form-control","placeholder"=>" ")); ?>'+
			        '</div>'+
		            '<div class="btn_remove col-md-2">'+
		              '<label>Delete destination</label>'+	
		              '<button title="Delete city" class="btn btn-danger delCity" data-element="'+count+'" type="button">'+
		                '<span class="glyphicon glyphicon-remove"></span>'+
		              '</button>'+
		            '</div>'+
		            '</div>';
    $('.cfather').append(htmlContent);

    })

	$(document).on('click', '.delCity', function(){

		$('.cchildren'+$(this).data('element')).remove();

	} )

	$('#addDestination').click(function(){

			  		var options = "";

			  		for(i=0; i<=destdest.length; i++){
			  			if(typeof destdest[i]!= "undefined"){
			  			options += '<option value='+destdest[i]['Destination']['id']+'>'+destdest[i]['Destination']['name']+'</option>'
			  			}
			  		}

    				var count = $('.childrendestination').length + 1;
    	            htmlContent = '<div style="clear:both;"></div>'+
    	            '<div class="childrendestination dchildren'+count+'">'+
		            '<div class="form-group col-md-2">'+
	                '<label>Destinations</label>'+
	                '<select class="form-control">'+
	                 options+
	                '</select>'+
			        '</div>'+
			        '<div class="form-group col-md-2">'+
			          '<label>Trip hours</label>'+
			          '<?php echo $this->Form->input("hours",array("div"=>false,"label"=>false,"class"=>"form-control","placeholder"=>" ")); ?>'+
			        '</div>'+
			        '<div class="form-group col-md-2">'+
			          '<label>Price</label>'+
			          '<?php echo $this->Form->input("price",array("div"=>false,"label"=>false,"class"=>"form-control","placeholder"=>" ")); ?>'+
			        '</div>'+
		            '<div class="btn_remove col-md-2">'+
		              '<label>Delete destination</label>'+	
		              '<button title="Delete destination" class="btn btn-danger delDestination" data-element="'+count+'" type="button">'+
		                '<span class="glyphicon glyphicon-remove"></span>'+
		              '</button>'+
		            '</div>'+
		            '</div>';
    $('.cfather').append(htmlContent);

    }) 

	$(document).on('click', '.delDestination', function(){

		$('.dchildren'+$(this).data('element')).remove();

	} )

</script>