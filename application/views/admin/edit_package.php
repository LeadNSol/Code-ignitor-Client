<?php
					foreach ($get_about as $key => $value) {
					$price=$value['price'];
					$name=$value['pack_name'];
					//$class=$value['class_id'];
					$month=$value['month'];
					$id=$value['pack_id'];
						}
					
				?>
        <div class="right_col change_ps_w_ord" role="main">
         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Update <small>Package</small></h2>

                    <div class="clearfix"></div>
                  </div>

				   <?php
						if(isset($flash_message)){
						   if($flash_message == TRUE)
							{
						 ?>
						 
						  <div class="alert alert-success">
							<a class="close" data-dismiss="alert">×</a>
							<strong>Well done!</strong>  Update Package successfully.
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
					echo  form_open_multipart('update_package/'.$id, $attributes);
					?>
					<!--<div class="form-group profile_ed_f_rm">
		               <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Sellect Class<span class="required">*</span>
		              </label>
		              <?php //print_r($main_category);?>
		              <div class="col-md-9 col-sm-9 col-xs-12">
		                  <select class="form-control col-md-7 col-xs-12" name="class_id" required="required" id="main_category">
		                     <option value="">Select</option>
		                      <?php
		                      foreach($result as $key=>$val){?>

		                            <option value="<?php echo $val['id'] ?>"><?php echo $val['name'] ?></option>
		                      <?php }?>
		                  </select>
		                  <span class="error_cl" id="category_id"></span>
		              </div>
		               </div>-->
					 <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name"> Package Name<span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="name" id="facebook_link" name="name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $name;?>">
						</div>
				       </div>
					  <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Price<span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="number" id="facebook_link" name="price" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $price;?>">
						</div>
				       </div>
				         <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Duration Month<span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="number" id="facebook_link" name="duration" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $month;?>">
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
