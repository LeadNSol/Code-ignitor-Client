<?php 
//echo "<pre>";
//print_r($home_welocme1);
//exit;
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
					echo  form_open_multipart('edit_welcome1/'.$id, $attributes);
					?>
                    

                      <div class="form-group profile_ed_f_rm">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Title<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="admin_email" name="title" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $home_welocme1[0]['title']?>">
                        </div>
                      </div>  
					   <div class="form-group profile_ed_f_rm">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Description<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea rows="3" cols="50" class="form-control col-md-7 col-xs-12 ckeditor" name="description"><?php echo $home_welocme1[0]['des']?></textarea>
                        </div>
                      </div>
                   <div class="form-group profile_ed_f_rm">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Icon<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="file" id="icon" name="site_image"  class="form-control col-md-7 col-xs-12" value="" >
                         <img src="<?php echo site_base_url()?>uploads/offer_img/<?php echo $home_welocme1[0]['image']?>"  style="border: 1px solid;margin-top: 20px;padding: 10px 10px 8px 16px;    width: 150px;">
                        </div>
						<input type="hidden" name="old_photo" value="<?php echo $home_welocme1[0]['image']?>">
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

 