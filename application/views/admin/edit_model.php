<?php 
$id=$this->uri->segment(2);
//echo"<pre>";
//print_r($get_model);exit;
?>     
	 <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col change_ps_w_ord" role="main">        
         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Update Group Model</h2>
                    
                    <div class="clearfix"></div>
                  </div>
				  
				   <?php
						if(isset($flash_message)){
						   if($flash_message == TRUE)
							{
						 ?>
						 
						  <div class="alert alert-success">
							<a class="close" data-dismiss="alert">×</a>
							<strong>Well done!</strong>  Update Model successfully.
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
					echo  form_open_multipart('edit_model/'.$id, $attributes);
					?>
                    
					   <div class="form-group profile_ed_f_rm">
						   <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Segment<span   class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <select id="facebook_link" name="Segment" required="required" class="form-control col-md-7 col-xs-12" value="">
							 <option value="">Select</option>
							 <option value="Commercial" <?php if($get_model[0]['Segment']=='Commercial'){echo 'selected';}?>>Commercial </option>
							 <option value="Personal" <?php if($get_model[0]['Segment']=='Personal'){echo 'selected';}?>>Personal</option>
							 </select>
						</div>
				       </div>   
					   <div class="form-group profile_ed_f_rm">
						   <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Model Name <span   class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="facebook_link" name="model_name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $get_model[0]['car_model_name'];?>">
						</div>
				       </div> 
					    <div class="form-group profile_ed_f_rm">
						   <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name"> RSA Applicable<span   class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <select id="rsa" name="rsa" required="required" class="form-control col-md-7 col-xs-12">
							 <option value="">Select</option>
							 <option value="yes" <?php if($get_model[0]['rsa']=='yes'){echo 'selected';}?>>Yes </option>
							 <option value="no" <?php if($get_model[0]['rsa']=='no'){echo 'selected';}?>>No</option>
							 </select>
						</div>
				       </div>
					   
					   <div id="rsa_year" <?php if($get_model[0]['rsa']=='no'){echo 'style="display:none"';}?> >
					    <div class="form-group profile_ed_f_rm">
						   <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">1 Year<span   class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="first_year" name="first_year" class="form-control col-md-7 col-xs-12" value="<?php echo $get_model[0]['first_year']?>" <?php if($get_model[0]['rsa']=='yes'){echo 'required';}?>>
						</div>
				       </div>
					    <div class="form-group profile_ed_f_rm">
						   <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">2 Year <span   class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="second_year" name="second_year"  class="form-control col-md-7 col-xs-12" value="<?php echo $get_model[0]['second_year']?>" <?php if($get_model[0]['rsa']=='yes'){echo 'required';}?>>
						</div>
				       </div>
					    <div class="form-group profile_ed_f_rm">
						   <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">3 Year<span   class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="third_year" name="third_year"  class="form-control col-md-7 col-xs-12" value="<?php echo $get_model[0]['third_year']?>" <?php if($get_model[0]['rsa']=='yes'){echo 'required';}?>>
						</div>
				       </div>
					    <div class="form-group profile_ed_f_rm">
						   <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">4 Year <span   class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="forth_year" name="forth_year"  class="form-control col-md-7 col-xs-12" value="<?php echo $get_model[0]['forth_year']?>" <?php if($get_model[0]['rsa']=='yes'){echo 'required';}?>>
						</div>
				       </div>
					    <div class="form-group profile_ed_f_rm">
						   <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">5 Year<span   class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="fivth_year" name="fivth_year" class="form-control col-md-7 col-xs-12" value="<?php echo $get_model[0]['fivth_year']?>" <?php if($get_model[0]['rsa']=='yes'){echo 'required';}?>>
						</div>
				       </div>
					</div>
	             <div class="ln_solid"></div>
                      <div class="form-group profile_ed_f_rm">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 save_pr_v">
                          <input type="submit" class="btn btn-success sve_bot" value="Update">
                        </div>
                      </div>

                     <?php echo form_close(); ?>
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
	//alert();
$("#rsa").change(function()
{
	var rsa_val=$(this).val();
	if(rsa_val=='yes')
	{
		$("#rsa_year").show();
		$("#first_year").attr('required',"required");
		$("#second_year").attr('required',"required");
		$("#third_year").attr('required',"required");
		$("#forth_year").attr('required',"required");
		$("#fivth_year").attr('required',"required");
	}
	else{
		$("#rsa_year").hide();
		$("#first_year").removeAttr('required',"required");
		$("#second_year").removeAttr('required',"required");
		$("#third_year").removeAttr('required',"required");
		$("#forth_year").removeAttr('required',"required");
		$("#fivth_year").removeAttr('required',"required");
		
	}
		
	})

});	
	

</script>