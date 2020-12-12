  <?php 
//echo"<pre>";
//print_r($car_details_byid);exit;
$id=$this->uri->segment(2);
$model_id=$car_details_byid[0]['model_name'];

            $specification=$car_details_byid[0]['specification'];
			$car_specification= json_decode($specification,true);
			//print_r($car_specification);
			
			$Features=$car_details_byid[0]['Features'];
			$car_Features= json_decode($Features,true);
			

?>   
	

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
					echo  form_open_multipart('add_offers/', $attributes);
					?>
					  
			    <div class="col-md-12 col-sm-12 col-xs-12">
					  <h2>SPECIFICATION</h2>
					  <hr>
					  <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Segment: <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <select required="required" class="form-control col-md-7 col-xs-12" name="vechile_type" id="vechile_type">
							   <option value=""Selected>Select</option>
							 <option value="Commercial" <?php if($car_details_byid[0]['Vechile_type']=='Commercial'){echo 'selected';}?>>Commercial </option>
							 <option value="Personal" <?php if($car_details_byid[0]['Vechile_type']=='Personal'){echo 'selected';}?>>Personal</option>
							 
							 </select>
							 </div>
						</div>
					  <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Model: <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <select required="required" class="form-control col-md-7 col-xs-12" name="model_name" id="model_group">
							 <option value="">select Model</option>
							 <?php foreach($all_model as $key=>$val){?>
							 <option value="<?php echo $val['model_id']?>" <?php if($car_details_byid[0]['model_name']==$val['model_id']){echo 'selected';}?>><?php echo $val['car_model_name']?></option>
							 <?php }?>
							 </select>
							 </div>
						</div>
						
						   
							
							 
							 
						
						
						
						
						 <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Segment: <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <select required="required" class="form-control col-md-7 col-xs-12" name="vechile_name" id="vechile_name">
							 <option value="">Select</option>
							
							  <option value="new" <?php if($car_details_byid[0]['car_condition']=='new'){echo 'selected';}?>>New </option>
							 <option value="used" <?php if($car_details_byid[0]['car_condition']=='used'){echo 'selected';}?>>Used</option>
							 
							 </select>
							 </div>
						</div>
						
						
						  <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Car Name: <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <select required="required" class="form-control col-md-7 col-xs-12" name="get_cat_name" id="get_cat_name">
							 <option value="">select Car Name</option>
							 <?php 
							// $car_details_byid
							 ?>
							 
							 <?php foreach($car_name as $key=>$val){
							  $specification= $val['specification'];
							  $car_specification_old= json_decode($specification,true);
							  echo  $car_name=$car_specification_old['car_name'];
							
							
							 ?>
							 <option value="<?php echo $val['car_id']?>"  <?php if($val['car_id']==$car_details_byid[0]['car_id']){echo 'selected';}?>><?php echo $car_name;?></option>
							 <?php }?>
							
							 </select>
							 </div>
						</div>
						
						
						
						
						
						
						<div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Price: <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="carprice" name="carprice" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $car_details_byid[0]['price'];?>" disabled>
						</div>
						</div>
						
						<div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Offer Price: <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="offer_price" name="offer_price" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $car_details_byid[0]['offer_price'];?>">
						</div>
						</div>
						
					
					
						
						
						
						<div class="form-group profile_ed_f_rm" style="margin-top: 25px;">
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
	
	$("#vechile_name").change(function()
	{
		//alert('ccc');
		var carconedition=$("#vechile_name").val();
		var model_name=$("#model_group").val();
		//alert(carconedition);
	//	alert(model_name);
		//$("#model_group")
		var segment=1;
		$.ajax({
				 type: "POST",
				 url: "<?php echo base_url()?>get_carname_bysegment",
				 data:{carconedition:carconedition,model_name:model_name},
				success: function(response) 
				 {	
					//alert(response);	
					$("#get_cat_name").html(response);					
				 }
				
			});
		
	});
	$("#get_cat_name").change(function()
	{
		//alert('ccc');
		var car_id=$("#get_cat_name").val();
		
		$.ajax({
				 type: "POST",
				 url: "<?php echo base_url()?>get_price_bysegment",
				 data:{car_id:car_id},
				success: function(response) 
				 {	
					//alert(response);	
					$("#carprice").val(response+' Lakhs');					
				 }
				
			});
		
	});

	
	//alert();
});
</script>
 