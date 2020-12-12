    <?php 
	
	 $id=$this->uri->segment(2); 
		//echo"<pre>";
		//print_r($banner_img);exit;
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
                   // $user_id=1;				   
					//$attributes = array('class' => 'form-horizontal');	
	                 $attributes = array('class' => 'form-horizontal form-label-left','id'=>'demo-form2');						
					echo  form_open_multipart('edit_banner_offer/'.$id, $attributes);
					?>
                    <div class="u_p_l_a_img_d">
						<div class="col-sm-12">
							<div class="img_d_sec_bannner">
								 <img class="banner_imgset" src="<?php echo site_base_url();?>uploads/banner/<?php echo @$get_banner[0]['image']?>">
							</div>
						</div>	
                    <input type="hidden" name="old_photo" value="<?php echo @$get_banner[0]['image']?>">						
						<div class="col-sm-12 mrg_bottom26">					    
							<div class="upload_2">
								<input type="file" name="banner_img"/>							
							</div>						
							<input type="hidden" name="old_photo" value="<?php echo @$get_banner[0]['image']?>">
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
  

  