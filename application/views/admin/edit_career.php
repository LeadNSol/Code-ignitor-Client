    <?php 
	
		$id=$this->uri->segment(2);
		//echo"<pre>";
		//print_r($get_career);exit;
	?>
	<!-- /top navigation -->
        <!-- page content -->
		
        <div class="right_col change_ps_w_ord" role="main">        
         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Update <small>Career News</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                   <?php 	
                    $user_id=1;				   
					$attributes = array('class' => 'form-horizontal');					
					echo  form_open_multipart('edit_career/'.$id, $attributes);
					?>
                    <div class="u_p_l_a_img_d">
											
						
						 <div class="form-group profile_ed_f_rm">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Title
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							  <input type="text"  name="title" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $get_career[0]['name']?>">
							</div>
						  </div>
						<div class="form-group profile_ed_f_rm">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Description
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							  <textarea  name="deccription" required="required" class="form-control col-md-7 col-xs-12 ckeditor"><?php echo $get_career[0]['description']?></textarea>
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
  

  