    <?php 
	
		 $id=$this->uri->segment(2);
		 
		 
	//echo"<pre>";
		//print_r($galery_data);exit;
	?>
	<!-- /top navigation -->
        <!-- page content -->
		
        <div class="right_col change_ps_w_ord" role="main">        
         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Update <small>Gallery</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                   
                    <div class="u_p_l_a_img_d">
										
					
						
						<?php 	
                   // $user_id=1;				   
					$attributes = array('class' => 'form-horizontal');					
					echo  form_open_multipart('edit_gallery/'.$id, $attributes);
					?>
                       <div class="form-group profile_ed_f_rm">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Offer Name
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							  <input type="text"  name="name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo @$galery_data[0]['name']?>">
							</div>
						  </div>
						
						   
						
						  
						  <div class="form-group profile_ed_f_rm">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Offer Image
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							 <input type="file" id="offer_image" class="form-control col-md-7 col-xs-12" name="banner_img">
							 
							   <img src="<?php echo site_base_url();?>uploads/gallery/<?php echo @$galery_data[0]['img_url'] ?>" height="100px",width="150px">
							</div>
							<input type="hidden" name="old_photo" value="<?php echo @$galery_data[0]['img_url'] ?>"/>
						  </div>
						
						  <div class="clearfix"></div>
				    </div>
                     <div class="uplod_d">
						<input type="submit" value="Update" name="submit" class="uplod"/>
					</div>
                    <?php echo form_close(); ?>
                  </div>
                </div>
              </div>
            </div>
          
        </div>
        <!-- /page content -->

        <!-- footer content -->
  

  