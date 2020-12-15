<?php
$id=$this->uri->segment(2);
$sub=json_decode($results[0]['subject_ids'],true);
date_default_timezone_set('Asia/Kolkata');
//print_r($results);exit;
?>
        <!-- page content -->
        <div class="right_col change_ps_w_ord" role="main">        
         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit <small>Exam</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
				  
				   <?php
						if(isset($flash_message)){
						   if($flash_message == TRUE)
							{
						 ?>
						 
						  <div class="alert alert-success">
							<a class="close" data-dismiss="alert">×</a>
							<strong>Well done!</strong> Exam Edited successfully.
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
					echo  form_open_multipart('update_exam/'.$id, $attributes);
					?>
		                   
		              
					     <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name"> Name
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="name" name="name" class="form-control col-md-7 col-xs-12" value="<?=$results[0]['eaxm_name']?>">
						</div>
				       </div>
                            <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Amount
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="amount" name="amount" class="form-control col-md-7 col-xs-12" value="<?=$results[0]['amount']?>">
						</div>
				       </div>
					   <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Type 
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						   <select name="type" id="typeid" onchange=extype() class="form-control col-md-7" >
                                    <option value="">Select Type</option>
                                    <option value="live" <?php if($results[0]['type']=='live'){echo'selected';}?> >live</option>
									<option value="manual" <?php if($results[0]['type']=='manual'){echo'selected';}?> >manual</option>
						   </select>
						</div>	
						</div>
						
				      <div class="form-group profile_ed_f_rm" id="datefield">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Date 
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="datetime" id="date" name="date" class="form-control col-md-7 col-xs-12" value="<?=date('F, d Y H:i',strtotime($results[0]['live_date']))?>">
						</div>
					   </div>
					   <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Validation 
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="number" id="valid" name="valid" placeholder="Enter validation in month" class="form-control col-md-7 col-xs-12" value="<?=$results[0]['validation']?>">
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
						 
							 <input type="checkbox"  name="subject[]"   value="<?php echo $value['s_id']; ?>" <?php
							 foreach($sub as $id){
							 if($value['s_id']==$id){echo 'checked="checked"';}}?>>
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
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Select  Image 
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
                           <input type="file" name="site_image"  class="form-control col-md-7 col-xs-12" />
						   <img src="<?php echo base_url()?>images/<?php echo @$results[0]['image'];?>" height="100px" width="200px">
						</div>
				       </div>
					   <input type="hidden" name="old_photo" value="<?php echo @$results[0]['image'];?> ">
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
var typee='<?=$results[0]['type'];?>';
$(document).ready(function(){
	if(typee =="live"){
		$('#datefield').show();
	}else if(typee =="manual"){
		$('#datefield').hide();
	}
});	
function extype(){
var type =$('#typeid').val();
if(type=='manual'){
	$('#datefield').hide();
	
}else if(type =="live"){
		$('#datefield').show();
	}	
}

</script>

 