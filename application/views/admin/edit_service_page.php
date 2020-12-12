<?php 
//echo "<pre>";
//print_r($get_service);
 $id=$this->uri->segment(2);
?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col change_ps_w_ord" role="main">        
         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Update<small>service</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
					<?php 				
					$attributes = array('class' => 'form-horizontal form-label-left','id'=>'demo-form2');					
					echo  form_open_multipart('edit_service_page/'.$id, $attributes);
					?>
                    

                      <div class="form-group profile_ed_f_rm">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">How Can Help<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="admin_email" name="Title" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $get_service[0]['how_can_help']?>">
                        </div>
                      </div>  
					   <div class="form-group profile_ed_f_rm">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Description<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea rows="3" cols="50" class="form-control col-md-7 col-xs-12" name="description"><?php echo $get_service[0]['description']?></textarea>
                        </div>
                      </div>
                   <div class="form-group profile_ed_f_rm">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Service Icon<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="file" id="icon" name="site_image"  class="form-control col-md-7 col-xs-12" value="" >
                         <img src="<?php echo site_base_url()?>uploads/service_banner/<?php echo $get_service[0]['service_icon']?>"  style="border: 1px solid;margin-top: 20px;padding: 10px 10px 8px 16px;">
                        </div>
						<input type="hidden" name="old_pic" value="<?php echo $get_service[0]['service_icon']?>">
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
  
<style>
.change_ps_w_ord{min-height:611px !important;}
</style>

 