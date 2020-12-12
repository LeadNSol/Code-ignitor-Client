<?php
//echo"<pre>";
//print_r($home_welocme);
   $user_id=$this->uri->segment(2);
 ?>
<div class="right_col" role="main">        
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
			
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Users</h2>
                    <div class="clearfix"></div>
                  </div>
				  
				 	
				  
				  <div class="form-style-2">
				  
				  <div class="tp_edt">
						  <div class="col-sm-12">
							<div class="right_img_edt">
							<label class="up_lll">
							<img src="<?php echo site_base_url()?>uploads/offer_img/<?php echo $home_welocme[0]['image'];?>" id="blah">
							
						  </div>
					  <div class="clearfix"></div>
				  </div>
				   
				  
					<div class="form-style-2-heading">Update information</div>
						  <?php 	
                    $user_id=1;				   
					$attributes = array('class' => 'form-horizontal');					
					echo  form_open_multipart('edit_welcome', $attributes);
					?>
							<label for="field1">
							    <div class="col-sm-4">    
								  <span class="f_s_f">Title <span class="required">*</span></span>
								</div>
								<div class="col-sm-8">    
							       <input type="text" class="input-field all_admin_fld" name="title" value="<?php echo $home_welocme[0]['title'];?>" />
   								</div>
								<div class="clearfix"></div>
							</label>
							
							<label for="field2">
								<div class="col-sm-4">    
								  <span class="f_s_f">Description <span class="required">*</span></span>
								</div>
								<div class="col-sm-8">    
							       <textarea class="input-field all_admin_fld ckeditor" name="description" value="" rows="4"><?php echo $home_welocme[0]['des'];?></textarea>
   								</div>
								<div class="clearfix"></div>
							</label>
							
							
							
							
			
							
							
							<label for="field6">
								<div class="col-sm-4">    
								  <span class="f_s_f">image<span class="required">*</span></span>
								</div>
								<div class="col-sm-8">    
							      <input type="file" class="input-field all_admin_fld" name="site_image">
								  <input type="hidden" name="old_photo" value="<?php echo $home_welocme[0]['image'];?>">
   								</div>
								<div class="clearfix"></div>
							</label>
							

							<label>
							 <div class="col-sm-3"></div> 
							 <div class="col-sm-8">
							      <input type="submit" class="sum_t_f" value="Submit" />
							</div>
							
							<div class="clearfix"></div>
							</label>
					  <?php echo form_close(); ?>				
					</div>
				  
				  
				  
                 
				   <!--<form action="" method="">
                           <div class="main_admin_edit_frm">
								<div class="admin_edit_frm">
									  <div class="col-sm-4">syhrtshys</div>
									  <div class="col-sm-8">tyhtr</div>
							   </div>   
						   </div>   
							
                  </form>-->

		
				 <div class="clearfix"></div>
                </div>
              </div>
          </div>
          
        </div>
          
        </div>
        <!-- /page content -->

        <!-- footer content -->
	
	
		
		
		
		
     