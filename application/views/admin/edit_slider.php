<?php
	$id=$this->uri->segment(2);	
	//print_r($results);
	?>
        <div class="right_col change_ps_w_ord" role="main">
         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Update <small>Slider</small></h2>

                    <div class="clearfix"></div>
                  </div>

				   <?php
						if(isset($flash_message)){
						   if($flash_message == TRUE)
							{
						 ?>
						 
						  <div class="alert alert-success">
							<a class="close" data-dismiss="alert">×</a>
							<strong>Well done!</strong>  Update slider successfully.
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
					echo  form_open_multipart('edit_slider/'.$id, $attributes);
					?>
					
					 <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Name <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="facebook_link" name="name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $results[0]['name']?>">
						</div>
				       </div>
				        <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name"> Slider Image(w 1400,h 400) <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="file" name="site_image" multiple required="required" class="form-control col-md-7 col-xs-12"><br>
                  <td>
						 <img src="<?php echo site_base_url();?>uploads/main_cat_image/<?php echo $results[0]['image']?>"  height="100px" width="200px"></td>
						 <input type="hidden" name="old_image" value="<?php echo $results[0]['image'];?>">
                          <td>

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
