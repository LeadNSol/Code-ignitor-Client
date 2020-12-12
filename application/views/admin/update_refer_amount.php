
      <!-- page content -->
        <div class="right_col change_ps_w_ord" role="main">        
         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Update  <small>Refer Amount</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
				  
				   <?php
						if(isset($flash_message)){
						   if($flash_message == TRUE)
							{
						 ?>
						 
						  <div class="alert alert-success">
							<a class="close" data-dismiss="alert">×</a>
							<strong>Well done!</strong> Refer amount updated successfully.
						  </div>
								<?php }else { ?>
									  <div class="alert alert-danger">
										<a class="close" data-dismiss="alert">×</a>
										<strong>Oops!</strong> Please Try Again...
									  </div>     
							   <?php } } ?> 
                  <div class="x_content">
                    <br />
					<?php 				
					$attributes = array('class' => 'form-horizontal form-label-left','id'=>'demo-form2');					
					echo  form_open_multipart('update_refer_amount/', $attributes);
					?>

					<div class="form-group profile_ed_f_rm">
		               	<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Amount<span class="required">*</span>
		             	</label>
		             
		              <div class="col-md-9 col-sm-9 col-xs-12">
		              	  <input type="text" id="subscribtion_amount" name="refer_amount" value="<?php echo $results[0]['refer_amount'];?>"  class="form-control col-md-7 col-xs-12" value=" ">
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
  
<style>
.change_ps_w_ord{min-height:611px !important;}
</style>
