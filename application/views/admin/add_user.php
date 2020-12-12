<?php
//echo"<pre>";
//print_r($results);exit;
?>
	 <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col change_ps_w_ord" role="main">
         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add <small>SubCategory</small></h2>

                    <div class="clearfix"></div>
                  </div>

				   <?php
						if(isset($flash_message)){
						   if($flash_message == TRUE)
							{
						 ?>

						  <div class="alert alert-success">
							<a class="close" data-dismiss="alert">×</a>
							<strong>Well done!</strong>  Add User successfully.
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
					echo  form_open_multipart('add_user_details/', $attributes);
					?>


                        <div class="form-group profile_ed_f_rm">
		               <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Sellect Class<span class="required">*</span>
		              </label>
		              <?php //print_r($main_category);?>
		              <div class="col-md-9 col-sm-9 col-xs-12">
		                  <select class="form-control col-md-7 col-xs-12" name="class_id" required="required" id="main_category">
		                     <option value="">Select</option>
		                      <?php
		                      foreach($results as $key=>$val){?>

		                            <option value="<?php echo $val['id'] ?>"><?php echo $val['name'] ?></option>
		                      <?php }?>
		                  </select>
		                  <span class="error_cl" id="category_id"></span>
		              </div>
		               </div>
					     <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">First name<span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="facebook_link" name="fast_name" required="required" class="form-control col-md-7 col-xs-12" value="">
						</div>
				       </div>

					     <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Last name<span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="facebook_link" name="last_name" required="required" class="form-control col-md-7 col-xs-12" value="">
						</div>
				       </div>

					     <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Email<span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="facebook_link" name="email" required="required" class="form-control col-md-7 col-xs-12" value="">
						</div>
				       </div>

					     <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Phone<span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="facebook_link" name="phone" required="required" class="form-control col-md-7 col-xs-12" value="">
						</div>
				       </div>

					     <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Password<span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="facebook_link" name="password" required="required" class="form-control col-md-7 col-xs-12" value="">
						</div>
				       </div>
					    <div class="form-group profile_ed_f_rm">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Login Type<span class="required">*</span>
							</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
		                  <select class="form-control col-md-7 col-xs-12" name="login_type" required="required" id="main_category">
		                     <option value="">Select</option>
		                            <option>facebook</option>
		                             <option>Phone Number</option>
		                              <option>Google</option>
		                          </select>
		
                         </div>
                 		</div>
                         <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Social Key<span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="facebook_link" name="social_key" required="required" class="form-control col-md-7 col-xs-12" value="">
						</div>
				       </div>
				         <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Mac Id<span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="facebook_link" name="mac_id" required="required" class="form-control col-md-7 col-xs-12" value="">
						</div>
				       </div>
				       <!--<div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">user Image <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="file" id="facebook_link" name="site_image" class="form-control col-md-7 col-xs-12" height="200" width="200" value="">
						</div>
				       </div>-->
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
