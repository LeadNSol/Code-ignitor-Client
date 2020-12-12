<?php 

//echo "<pre>";
//print_r($option_data);exit;
?>



        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col change_ps_w_ord" role="main">        
         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Admin<small>Option</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
					<?php 				
					$attributes = array('class' => 'form-horizontal form-label-left','id'=>'demo-form2');					
					echo  form_open_multipart('admin_main/option/', $attributes);
					?>
                    

                      <div class="form-group profile_ed_f_rm">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Admin Email <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="admin_email" name="admin_email" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $option_data[0]['admin_email']?>">
                        </div>
                      </div>
                   
				    <div class="form-group profile_ed_f_rm">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Site Url <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="site_url"name="site_url" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $option_data[0]['site_url']?>">
                        </div>
                      </div>
					  
					  
					   <div class="form-group profile_ed_f_rm">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Location<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea rows="3" cols="50" class="form-control col-md-7 col-xs-12" name="Location"><?php echo $option_data[0]['Location']?></textarea>
                        </div>
                      </div>
                   <div class="form-group profile_ed_f_rm">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Fax<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="Fax" name="Fax" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $option_data[0]['Fax']?>">
                        </div>
                      </div>					  
					   <div class="form-group profile_ed_f_rm">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Phone<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="Phone" name="Phone" required="required" class="form-control col-md-7 col-xs-12"value="<?php echo $option_data[0]['Phone']?>">
                        </div>
                      </div>  		   
				      <div class="form-group profile_ed_f_rm">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Alternate Phone<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="Alternate_Phone" name="Alternate_Phone"required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $option_data[0]['Alternate_Phone']?>">
                        </div>
                      </div>					  
					     <div class="form-group profile_ed_f_rm">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Paypal Id<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="Paypal_Id" name="Paypal_Id" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $option_data[0]['Paypal_Id']?>">
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

 