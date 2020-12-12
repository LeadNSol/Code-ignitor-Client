<?php
					foreach ($get_testmonials as $key => $value) {
					$description=$value['description'];
					$title=$value['title'];
					$id=$value['t_id'];
						}
					
				?>
        <div class="right_col change_ps_w_ord" role="main">
         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Update <small>Term & condition</small></h2>

                    <div class="clearfix"></div>
                  </div>

				   <?php
						if(isset($flash_message)){
						   if($flash_message == TRUE)
							{
						 ?>
						 
						  <div class="alert alert-success">
							<a class="close" data-dismiss="alert">×</a>
							<strong>Well done!</strong>  Update Testmonials successfully.
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
					echo  form_open_multipart('update_term/'.$id, $attributes);
					?>
					
				        <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Title<span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="facebook_link" name="title" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $title;?>">
						</div>
				       </div>
					    <div class="form-group profile_ed_f_rm">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Description<span class="required">*</span>
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							      <textarea rows="3" cols="50" class="form-control col-md-7" name="description"><?php echo $description; ?> </textarea>
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
