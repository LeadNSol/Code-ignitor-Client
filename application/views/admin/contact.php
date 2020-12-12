<?php 
//echo"<pre>";
//print_r($get_contact);exit;
?>     
	 <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col change_ps_w_ord" role="main">        
         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>About<small>us</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
				  
				   <?php
						if(isset($flash_message)){
						   if($flash_message == TRUE)
							{
						 ?>
						 
						  <div class="alert alert-success">
							<a class="close" data-dismiss="alert">×</a>
							<strong>Well done!</strong>  Contact us updated successfully.
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
					echo  form_open_multipart('admin_main/contact_us/', $attributes);
					?>
                    
					 <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Email Address <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="email" id="contact_email" name="contact_email" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $get_contact[0]['email'] ?>">
						</div>
				    </div>
					<div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Mobile Number<span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="contact_mobile" name="contact_mobile" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $get_contact[0]['moblie'] ?>">
						</div>
				    </div>				  
                      <div class="form-group profile_ed_f_rm">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Working Hour<span class="required">*</span>
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
					     		  <input type="text" id="working_hour" name="working_hour" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $get_contact[0]['working_hour'] ?>">
							</div>
                      </div>
                   <div class="form-group profile_ed_f_rm">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Latitude<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="lat" name="lat" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $get_contact[0]['lat'] ?>">
                        </div>
                      </div>
					  <div class="form-group profile_ed_f_rm">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Longitude <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="lng" name="lng" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $get_contact[0]['lng'] ?>">
                        </div>
                      </div>
					  <div class="form-group profile_ed_f_rm">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Get Directions<span class="required">*</span>
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							      <textarea rows="3" cols="50" class="form-control col-md-7 col-xs-12 ckeditor" name="direction"><?php echo $get_contact[0]['get_direction'] ?></textarea>
							</div>
                      </div>
					  
					  <div class="form-group profile_ed_f_rm">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Address<span class="required">*</span>
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							      <textarea rows="3" cols="50" class="form-control col-md-7 col-xs-12 ckeditor" name="address"><?php echo $get_contact[0]['address'] ?></textarea>
							</div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group profile_ed_f_rm">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 save_pr_v">
                          <input type="submit" class="btn btn-success sve_bot" value="Save">
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

 