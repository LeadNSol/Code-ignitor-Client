    <?php 
	
		$id=$this->uri->segment(2);
		//echo"<pre>";
		//print_r($menu_data);exit;
	?>
	<!-- /top navigation -->
        <!-- page content -->
		
        <div class="right_col change_ps_w_ord" role="main">        
         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Update <small>Banner</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                   <?php 			   
					$attributes = array('class' => 'form-horizontal');					
					echo  form_open_multipart('admin_main/edit_menu/'.$id, $attributes);
					?>
                    <div class="u_p_l_a_img_d">
						<div class="col-sm-12">
							<div class="img_d_sec_bannner">
								 <img class="banner_imgset" src="<?php echo site_base_url();?>uploads/menu_item/<?php echo $menu_data[0]['image']?>">
							</div>
						</div>					
						<div class="col-sm-12 mrg_bottom26">					    
							<div class="upload_2">
								<input type="file" name="banner_img"/>							
							</div>						
							<input type="hidden" name="old_photo" value="<?php echo $menu_data[0]['image']?>">
						</div>
						 <div class="form-group profile_ed_f_rm">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Menu Name
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							  <input type="text"  name="menu_name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $menu_data[0]['Name']?>">
							</div>
						  </div>
						  <div class="form-group profile_ed_f_rm">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Price
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							  <input type="text"  name="price" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $menu_data[0]['price']?>">
							</div>
						  </div>
						  
						   <div class="form-group profile_ed_f_rm">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">First Item
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							  <input type="text"  name="first_item" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $menu_data[0]['first_item']?>">
							</div>
						  </div>
						  
						   <div class="form-group profile_ed_f_rm">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">2nd Item
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							  <input type="text"  name="second_item" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $menu_data[0]['second']?>">
							</div>
						  </div>
						  
						   <div class="form-group profile_ed_f_rm">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">3rd Item
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							  <input type="text"  name="third_item" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $menu_data[0]['third']?>">
							</div>
						  </div>
						   <div class="form-group profile_ed_f_rm">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">4th Item
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							  <input type="text"  name="forth_item" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $menu_data[0]['forth']?>">
							</div>
						  </div>
						   <div class="form-group profile_ed_f_rm">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">5th Item
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							  <input type="text"  name="fiveth_item" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $menu_data[0]['fivth']?>">
							</div>
						  </div>
						   <div class="form-group profile_ed_f_rm">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">6th Item
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							  <input type="text"  name="sixth_item" required="required" class="form-control col-md-7 col-xs-12" value="<?php  echo $menu_data[0]['sixth']?>">
							</div>
						  </div>
						   <div class="form-group profile_ed_f_rm">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">7th Item
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							  <input type="text"  name="seventh_item" required="required" class="form-control col-md-7 col-xs-12" value="<?php  echo $menu_data[0]['seventh']?>">
							</div>
						  </div> 
						  <div class="form-group profile_ed_f_rm">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">8th Item
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							  <input type="text"  name="eight_item" required="required" class="form-control col-md-7 col-xs-12" value="<?php  echo $menu_data[0]['eighth']?>">
							</div>
						  </div>
						  
						<div class="form-group profile_ed_f_rm">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Description
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							  <textarea  name="deccription" required="required" class="form-control col-md-7 col-xs-12 ckeditor"><?php  echo $menu_data[0]['description']?></textarea>
							</div>
						  </div>
						
						  <div class="clearfix"></div>
				    </div>
                     <div class="uplod_d">
						<input type="submit" value="Upload" name="submit" class="uplod"/>
					</div>
                    <?php echo form_close(); ?>
                  </div>
                </div>
              </div>
            </div>
          
        </div>
        <!-- /page content -->

        <!-- footer content -->
  

  