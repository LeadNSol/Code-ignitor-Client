<?php
					foreach ($get_user as $key => $value) {
					$first_name=$value['first_name'];
					$last_name=$value['last_name'];
					$email=$value['email'];
					$password=$value['password'];
					$phone=$value['phone'];
					$log_type=$value['login_type'];
					$social_key=$value['social_key'];
					$mac_id=$value['mac_id'];
					$image=$value['user_image'];
					$id=$value['u_id'];
						}
					
				?>
        <div class="right_col change_ps_w_ord" role="main">
         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Update <small>Category</small></h2>

                    <div class="clearfix"></div>
                  </div>

				   <?php
						if(isset($flash_message)){
						   if($flash_message == TRUE)
							{
						 ?>
						 
						  <div class="alert alert-success">
							<a class="close" data-dismiss="alert">×</a>
							<strong>Well done!</strong>  Update Home successfully.
						  </div>
								<?php }else { ?>
									  <div class="alert alert-danger">
										<a class="close" data-dismiss="alert">×</a>
										<strong>Oops!</strong> Please Try Again...
									  </div>     
							   <?php } } ?> 
                  <div class="x_content">
                    <br />

                    <div class="u_p_l_a_img_d">
					<?php
                    $user_id=1;
					$attributes = array('class' => 'form-horizontal');
					echo  form_open_multipart('update_user/'.$id, $attributes);
					?>
					
					<div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">First name<span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="facebook_link" name="fast_name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $first_name;?>">
						</div>
				       </div>

					     <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Last name<span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="facebook_link" name="last_name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $last_name ;?>">
						</div>
				       </div>

					     <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Email<span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="facebook_link" name="email" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $email;?>">
						</div>
				       </div>

					     <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Phone<span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="facebook_link" name="phone" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $phone;?>">
						</div>
				       </div>

					     <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Password<span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="facebook_link" name="password" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $password ;?>">
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
						     <input type="text" id="facebook_link" name="social_key" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $social_key ;?>">
						</div>
				       </div>
				         <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Mac Id<span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="facebook_link" name="mac_id" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $mac_id;?>">
						</div>
				       </div>
				       <!--<div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">user Image <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="file" id="facebook_link" name="site_image"  class="form-control col-md-7 col-xs-12" height="200" width="200" value="">
						      <img src="<?php echo site_base_url();?>images/<?php echo $image;?>"  height="100px" width="200px">
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
