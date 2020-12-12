    <?php 
	
		 $id=$this->uri->segment(2);
	//echo"<pre>";
		//print_r($edit_portfolio);exit;
	?>
	<!-- /top navigation -->
        <!-- page content -->
		
        <div class="right_col change_ps_w_ord" role="main">        
         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add <small>Gallery</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                   
                    <div class="u_p_l_a_img_d">
										
					
						
						<?php 	
                   // $user_id=1;				   
					$attributes = array('class' => 'form-horizontal');					
					echo  form_open_multipart('edit_portfolio/'.$id, $attributes);
					?>
                       <div class="form-group profile_ed_f_rm">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Name
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							  <input type="text"  name="name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo @$edit_portfolio[0]['name']?>">
							</div>
						  </div>
						
						<div class="form-group profile_ed_f_rm">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Address
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							  <input type="text"  name="address" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo @$edit_portfolio[0]['address']?>">
							</div>
						  </div>   
						<div class="form-group profile_ed_f_rm">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Comment
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							  <input type="text"  name="comment" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo @$edit_portfolio[0]['comment']?>">
							</div>
						  </div>   
						  
						  
						  <div class="form-group profile_ed_f_rm">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Profile Image
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							 <input type="file" id="offer_image" class="form-control col-md-7 col-xs-12" name="banner_img">
							 
							  <img src="<?php echo site_base_url();?>uploads/gallery/<?php echo @$edit_portfolio [0]['img'] ?>"height="150px" width="200px">
							    <input type="hidden" value="<?php echo @$edit_portfolio [0]['img'] ?>" name="old_photo">
							</div>
						  </div>
						 
						  <div class="clearfix"></div>
				    </div>
                     <div class="uplod_d">
						<input type="submit" value="submit" name="submit" class="uplod"/>
					</div>
                    <?php echo form_close(); ?>
                  </div>
                </div>
              </div>
            </div>
          
        </div>
        <!-- /page content -->

        <!-- footer content -->
  

  