   
	 <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col change_ps_w_ord" role="main">        
         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add <small>Exam</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
				  
				   <?php
						if(isset($flash_message)){
						   if($flash_message == TRUE)
							{
						 ?>
						 
						  <div class="alert alert-success">
							<a class="close" data-dismiss="alert">×</a>
							<strong>Well done!</strong>  add Exam successfully.
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
					echo  form_open_multipart('create_exam/', $attributes);
					?>
		                   
		              
					     <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Exam Name <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="name" name="name" required="required" placeholder="Enter exam name" class="form-control col-md-7 col-xs-12" value="">
						</div>
				       </div>
                            <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Fee Amount <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="amount" name="amount" required="required" placeholder="Enter amount" class="form-control col-md-7 col-xs-12" value="">
						</div>
				       </div>
					   <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Type <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						   <select name="type" id="typeid" onchange=extype() class="form-control col-md-7" >
                                    <option value="">Select Type</option>
                                    <option value="live">live</option>
									<option value="manual">manual</option>
						   </select>
						</div>	
						</div>
					<div id="datefield">
				      <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Exam Date 
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="date" name="date" class="form-control col-md-7 col-xs-12" value="">
						</div>
					   </div>
					</div>
					   <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Validation 
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="number" id="valid" name="valid" placeholder="Enter validation in month" class="form-control col-md-7 col-xs-12" value="">
						</div>
				       </div>
				<div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Select subject<span class="required">*</span>
						</label>
						
						<div class="col-md-9 col-sm-9 col-xs-12">
						<?php 
							foreach($all_exam as $key=>$value){
						?>
						<div class="col-md-12">
						<div class="col-md-6 col-sm-6 col-xs-6">
						 
						     <input type="checkbox"  name="subject[]"   value="<?php echo $value['s_id']; ?>">
							 <label><?php echo $value['subject_name']; ?></label>
					    </div>
						<!--<div class="col-md-6 col-sm-6 col-xs-6">
						 
						     <input type="text"  name="numquestion_<?php //echo $value['s_id']; ?>"   value="" placeholder="no questions">
							 
					    </div>-->
						</div>
						<?php }?>
						</div>
							
				</div>
					    <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Select  Image <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
                           <input type="file" name="site_image" multiple required="required" class="form-control col-md-7 col-xs-12" value="" />

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
        <!-- /page content -->
        <!-- footer content -->  
<style>
.change_ps_w_ord{min-height:611px !important;}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.js"></script>
<script>
$("#date").flatpickr({
    enableTime: true,
    dateFormat: "F, d Y H:i"
});

function extype(){
var type =$('#typeid').val();
if(type=='manual'){
	$('#datefield').hide();	
}	
}
</script>

 