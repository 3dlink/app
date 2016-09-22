<!-- <div class="points form">
<?php echo $this->Form->create('Point'); ?>
	<fieldset>
		<legend><?php echo __('Add Point'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('lat');
		echo $this->Form->input('longitude');
		echo $this->Form->input('destination_id');
		echo $this->Form->input('price');
		echo $this->Form->input('schedule');
		echo $this->Form->input('payment');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Points'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Destinations'), array('controller' => 'destinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Destination'), array('controller' => 'destinations', 'action' => 'add')); ?> </li>
	</ul>
</div>
 -->

<!-- <article class="card shadow-1">
<?php echo $this->Form->create('Point');?>
    <fieldset>
      <legend>Add Point</legend>
      <div class="margenesHorizontales">

		<div class="col-md-6">
	        <div class="form-group">
	          <label>Name</label>
	          <?php echo $this->Form->input('name',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'','required'=>true)); ?>
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
                <?php echo $this->Form->input('destination_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'', 'required'=>false, 'id'=>'Destination')); ?>
              </div>
        </div>

        <div class="col-md-6">
              <div class="form-group">
                <label>Nearest Terminal</label>
                <?php echo $this->Form->input('terminal_id',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Not Required', 'required'=>false, 'id'=>'Terminal')); ?>
              </div>
        </div>

        <div class="col-md-6">
              <div class="form-group">
                <label>Price</label>
                <?php echo $this->Form->input('price',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'','required'=>true)); ?>
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

        <div class="margenesVerticales" style="text-align:right;margin-top:30px;float:right;">
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'points';" title="Go Back" value = "Back" style="width: 79px;">
          <button type="submit" class="btn btn-primary" id="savebutton">
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


    $('#park').val("");
    $('#Country').val("");
    $(document).ready(function(){


      $('#Country').change(function(){
        var value = $(this).val();
        var back = "Country";
        var next = "Region";
        var opt = changeSelect(back,next,value,'destinations');
        // alert(opt)
        // $('#region').html(opt);
      })

      $('#Region').change(function(){
        var value = $(this).val();
        var back = "Region";
        var next = "State";
        var opt = changeSelect(back,next,value,'destinations');
        // $('#state').html(opt);
      })

      $('#State').change(function(){
        var value = $(this).val();
        var back = "State";
        var next = "City";
        var opt = changeSelect(back,next,value,'destinations');
        // $('#city').html(opt);
      })

      $('#City').change(function(){
        var value = $(this).val();
        var back = "City";
        var next = "Destination";
        var opt = changeSelect(back,next,value,'destinations');
        // $('#city').html(opt);
      })

      $('#City').change(function(){
        var value = $(this).val();
        var back = "City";
        var next = "Terminal";
        var opt = changeSelect(back,next,value,'terminals');
        // $('#city').html(opt);
      })

    })

    function changeSelect(back,next,value,controller){
      $.ajax({
        url: WEBROOT+controller+'/list_ajax/'+back+"/"+next+"/"+value,
        type:'POST',
        dataType: 'json',
        success:function(data){
          var htmlContent = "<option value=''>-- Select -- </option>";
          for (var i = 0; i < data.length; i++) {

            htmlContent += "<option value='"+data[i][next]['id']+"'>"+data[i][next]['name']+"</option>";
          }
          $('#'+next).html(htmlContent)
        },
        error: function(){}
      })
    }

    $('#savebutton').click(function(e){
      if($('#Destination').val() == '' && $('#Terminal').val()==''){
        alert("You have to choose either a Terminal or a Destination");
        e.preventDefault();
      }
      if($('#Destination').val() == null && $('#Terminal').val() == null){
        alert("You have to choose either a Terminal or a Destination");
        e.preventDefault();
      }
      
    })
  


</script> -->