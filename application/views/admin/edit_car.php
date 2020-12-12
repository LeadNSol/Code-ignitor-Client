<?php 
//echo"<pre>";
///print_r($car_details_byid);exit;
$id=$this->uri->segment(2);
$model_id=$car_details_byid[0]['model_name'];

            $specification=$car_details_byid[0]['specification'];
			$car_specification= json_decode($specification,true);
			
			$Features=$car_details_byid[0]['Features'];
			$car_Features= json_decode($Features,true);
			
?>     
	 <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col change_ps_w_ord" role="main">        
         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Car</h2>
                    
                    <div class="clearfix"></div>
                  </div>
				  
				   <?php
						if(isset($flash_message)){
						   if($flash_message == TRUE)
							{
						 ?>
						 
						  <div class="alert alert-success">
							<a class="close" data-dismiss="alert">×</a>
							<strong>Well done!</strong>  Updated successfully.
						  </div>
								<?php }else { ?>
									  <div class="alert alert-danger">
										<a class="close" data-dismiss="alert">×</a>
										<strong>Oops!</strong> Please Try Again...
									  </div>     
							   <?php } } ?> 
                  <div class="x_content">
                    <br />
					<?php 				
					$attributes = array('class' => 'form-horizontal form-label-left','id'=>'demo-form2');					
					echo  form_open_multipart('edit_car/'.$id, $attributes);
					?>
					  
			    <div class="col-md-6"  style="border: 1px solid;padding: 19px 3px 19px 6px;">
					  <h2>SPECIFICATION</h2>
					  <hr>
					  <div class="col-md-12 col-sm-12 col-xs-12">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Segment: <span class="required">*</span>
						</label>
						     <select required="required" class="form-control col-md-7 col-xs-12" name="vechile_type" id="vechile_type">
							  <option value="">Select</option>
							 <option value="Commercial" <?php if($car_details_byid[0]['Vechile_type']=='Commercial'){echo 'selected';}?>>Commercial </option>
							 <option value="Personal" <?php if($car_details_byid[0]['Vechile_type']=='Personal'){echo 'selected';}?>>Personal</option>
							 
							 </select>
						</div>
					  <div class="col-md-12 col-sm-12 col-xs-12">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Model: <span class="required">*</span>
						</label>
						     <select required="required" class="form-control col-md-7 col-xs-12" name="model_name" id="model_group">
							 <option value="">select Model</option>
							 <?php foreach($all_model as $key=>$val){
								 
								 if($val['Segment']==$car_details_byid[0]['Vechile_type'])
								 {
								 ?>
							 <option value="<?php echo $val['model_id']?>" <?php if($model_id==$val['model_id']){echo 'selected';}?>><?php echo $val['car_model_name']?></option>
							 <?php }}?>
							 </select>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Condition: <span class="required">*</span>
						</label>
						     <select required="required" class="form-control col-md-7 col-xs-12" name="car_condition">
							 <option value="">Select</option>
							 <option value="new" <?php if($car_details_byid[0]['car_condition']=='new'){echo 'selected';}?>>New </option>
							 <option value="used" <?php if($car_details_byid[0]['car_condition']=='used'){echo 'selected';}?>>Used</option>
							 
							 </select>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Car Name: <span class="required">*</span>
						</label>
						     <input type="text" id="facebook_link" name="car_name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $car_specification['car_name'];?>">
						</div>
						
						<div class="col-md-12 col-sm-12 col-xs-12">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name"> Description : <span class="required">*</span>
						</label>
						     <textarea id="facebook_link" name="car_des" required="required" class="form-control col-md-7 col-xs-12" value="" rows="4"><?php echo $car_specification['car_des'];?></textarea>
						</div>
						
						
						<div class="col-md-12 col-sm-12 col-xs-12">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Fuel Type <span class="required">*</span>
						</label>
						     <input type="text" id="facebook_link" name="fuel_type" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $car_details_byid[0]['Fuel_Type'];?>">
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Engine Type <span class="required">*</span>
						</label>
						     <input type="text" id="facebook_link" name="engine_size" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $car_specification['engine_size'];?>">
						</div>
						
						<div class="col-md-12 col-sm-12 col-xs-12">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Engine Power: <span class="required">*</span>
						</label>
						     <input type="text" id="facebook_link" name="engine_power" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $car_specification['engine_power'];?>">
						    
						</div>
						
						<div class="col-md-12 col-sm-12 col-xs-12">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Mileage:<span class="required">*</span>
						</label>
						     <input type="text" id="facebook_link" name="mileage" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $car_specification['mileage'];?>">
						</div>
						
						
						
						<div class="col-md-12 col-sm-12 col-xs-12">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Price: <span class="required">*</span>
						</label>
						     <input type="text" id="facebook_link" name="price" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $car_details_byid[0]['price'];?>">
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Image: <span class="required">*</span>
						</label>
						     <input type="file"  name="site_image"  class="form-control col-md-7 col-xs-12" value="">
							 <img src="<?php echo site_base_url()?>uploads/car_image/<?php echo $car_details_byid[0]['image']?>" height="100px" width="150px">
							 <input type="hidden" name="old_img" value="/<?php echo $car_details_byid[0]['image']?>">
						</div>
				</div>
				 <div class="col-md-6"  style="border: 1px solid;padding: 19px 3px 115px 6px;">
					  <h2>FEATURES:</h2>
					  <hr>
					  <div class="col-md-12 col-sm-12 col-xs-12">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Horsepower: <span class="required">*</span>
						</label>
						     <input type="text" id="facebook_link" name="horsepower" required="required" class="form-control col-md-7 col-xs-12" value="<?php  echo $car_Features['horsepower'];?>">
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Car Torque: <span class="required">*</span>
						</label>
						     <input type="text" id="facebook_link" name="car_torque" required="required" class="form-control col-md-7 col-xs-12" value="<?php  echo $car_Features['car_torque'];?>">
						</div>
						
						
						<div class="col-md-12 col-sm-12 col-xs-12">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Fuel Tank  <span class="required">*</span>
						</label>
						     <input type="text" id="facebook_link" name="airbag" required="required" class="form-control col-md-7 col-xs-12" value="<?php  echo $car_Features['airbag'];?>">
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Brakes <span class="required">*</span>
						</label>
						     <input type="text" id="facebook_link" name="disc_brakes" required="required" class="form-control col-md-7 col-xs-12" value="<?php  echo $car_Features['disc_brakes'];?>">
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name"> Steering<span class="required">*</span>
						</label>
						     <input type="text" id="facebook_link" name="steering" required="required" class="form-control col-md-7 col-xs-12" value="<?php  echo $car_Features['steering'];?>">
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">AC <span class="required">*</span>
						</label>
						     <input type="text" id="facebook_link" name="ac" required="required" class="form-control col-md-7 col-xs-12" value="<?php  echo $car_Features['ac'];?>">
						</div>
						
						<div class="col-md-12 col-sm-12 col-xs-12">
						<label class="control-label col-md-6 col-sm-6 col-xs-12 view_le_nme" for="first-name">Seating Capacity: <span class="required">*</span>
						</label>
						     <input type="text" id="facebook_link" name="seating_capacity" required="required" class="form-control col-md-7 col-xs-12" value="<?php  echo $car_Features['seating_capacity'];?>">
						</div>
						
						<div class="col-md-12 col-sm-12 col-xs-12">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Whee Base:<span class="required">*</span>
						</label>
						     <input type="text" id="facebook_link" name="armrest" required="required" class="form-control col-md-7 col-xs-12" value="<?php  echo $car_Features['armrest'];?>">
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Gear Box : <span class="required">*</span>
						</label>
						     <input type="text" id="facebook_link" name="Seatbelt" required="required" class="form-control col-md-7 col-xs-12" value="<?php  echo $car_Features['Seatbelt'];?>">
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Ground Clearance : <span class="required">*</span>
						</label>
						     <input type="text" id="facebook_link" name="audio" required="required" class="form-control col-md-7 col-xs-12" value="<?php  echo $car_Features['audio'];?>">
						</div>
						
						<div class="col-md-12 col-sm-12 col-xs-12">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Body Colour: <span class="required">*</span>
						</label>
						     <input type="text" id="facebook_link" name="body_color" required="required" class="form-control col-md-7 col-xs-12" value="<?php  echo $car_Features['body_color'];?>">
						</div>
						
					
						
						<div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 25px;">
						<div class="col-md-4">
						     <input type="submit" value="Update" class="btn btn-danger">
							 </div>
							 <?php echo form_close(); ?>
							 <div class="col-md-8">
					  <?php
						if(isset($flash_message)){
						   if($flash_message == TRUE)
							{
						 ?>
						 
						  <div class="alert alert-success">
							<a class="close" data-dismiss="alert">×</a>
							<strong>Well done!</strong>  Updated successfully.
						  </div>
								<?php }else { ?>
									  <div class="alert alert-danger">
										<a class="close" data-dismiss="alert">×</a>
										<strong>Oops!</strong> Please Try Again...
									  </div>     
							   <?php } } ?> 
							 </div>
							 </div>
						</div>
						
				</div>
					
					
					
					  
                     
					 
                  </div>
				  
                </div>
              </div>
            </div>
          
        </div>
        <!-- /page content -->

        <!-- footer content -->
  
<style>
.change_ps_w_ord{min-height:611px !important;}
</style>
<script>
$(document).ready(function()
{
	
	$("#vechile_type").change(function()
	{
		//alert('ccc');
		var segment=$(this).val();
		$.ajax({
				 type: "POST",
				 url: "<?php echo base_url()?>get_model_bysegment",
				 data:{segment:segment},
				success: function(response) 
				 {	
					//alert(response);	
					$("#model_group").html(response);					
				 }
				
			});
		
	});
	//alert();
});
</script>
 