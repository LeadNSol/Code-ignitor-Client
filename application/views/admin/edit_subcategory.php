<?php
//echo"<pre>";
//print_r($sub_categoryfetch);exit;
$id = $this->uri->segment(2);
?>
	 <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col change_ps_w_ord" role="main">
         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add <small>SubCategory</small></h2>

                    <div class="clearfix"></div>
                  </div>

				   <?php
						if(isset($flash_message)){
						   if($flash_message == TRUE)
							{
						 ?>

						  <div class="alert alert-success">
							<a class="close" data-dismiss="alert">×</a>
							<strong>Well done!</strong>  Updated successfully.
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
					echo  form_open_multipart('edit_subcategory/'.$id, $attributes);
					?>

					     <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Main Catagory<span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">

						    <select id="facebook_link" name="main_category" required="required" class="form-control col-md-7 col-xs-12">
						    	<?php foreach ($results as $row){?>

							     	<option value="<?php echo $row['main_cat_id']?>" <?php if($sub_categoryfetch[0]['main_category']==$row['main_cat_id']){echo 'selected';}?>><?php echo $row['name']?></option>
							     	  <?php } ?>
							     </select>
						</div>
				       </div>
					    <div class="form-group profile_ed_f_rm">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Subcatagory Type<span class="required">*</span>
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							     <select id="facebook_link" name="type" required="required" class="form-control col-md-7 col-xs-12">
							     	<option value="male"<?php if($sub_categoryfetch[0]['type']=='male'){echo 'selected';}?>>Male</option>
							     	<option value="female" <?php if($sub_categoryfetch[0]['type']=='female'){echo 'selected';}?>>FeMale</option>
							     </select>
							</div>
                         </div>
                         <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Subcatagory Name<span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="facebook_link" name="subcategory_name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $sub_categoryfetch[0]['subcategory_name'];?>">
						</div>
				       </div>
				       <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Image <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="file" id="facebook_link" name="site_image"  class="form-control col-md-7 col-xs-12" height="200" width="200" value="">
						</div>
            <img src="<?php echo site_base_url();?>uploads/main_cat_image/<?php echo $sub_categoryfetch[0]['site_image']?>" width="200px">
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
