    
    <script src="<?php echo base_url() ?>js/jquery.form.js"></script>
	 <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col change_ps_w_ord" role="main">        
         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add <small>Team Member</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
				  
			     
						 <?php
						if(isset($flash_message)){
						   if($flash_message == TRUE)
							{
						 ?>
						 
						  <div class="alert alert-success">
							<a class="close" data-dismiss="alert">×</a>
							<strong>Well done!</strong>  add Chapter successfully.
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
					echo  form_open_multipart('add_chapter_details1/', $attributes);
					?>
                    




		                     <div class="form-group profile_ed_f_rm">
		               <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Sellect Class<span class="required">*</span>
		              </label>
		              <?php //print_r($main_category);?>
		              <div class="col-md-9 col-sm-9 col-xs-12">
		                  <select class="form-control col-md-7 col-xs-12" name="class_id" required="required" id="main_class">
		                     <option value="">Select</option>
		                      <?php
		                      foreach($results as $key=>$val){?>

		                            <option value="<?php echo $val['id'] ?>"><?php echo $val['name'] ?></option>
		                      <?php }?>
		                  </select>
		                 
		              </div>
		               </div>


		                     <div class="form-group profile_ed_f_rm">
		               <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Sellect Subject<span class="required">*</span>
		              </label>
		             
		              <div class="col-md-9 col-sm-9 col-xs-12">
		                  <select class="form-control col-md-7 col-xs-12" name="sub_id" required="required" id="sub_id">
		                     <option value="">Select</option>
		                    

		                            <option value=""></option>
		                     
		                  </select>
		                  
		              </div>
		               </div>
					     <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Chapter Name <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input type="text" id="facebook_link" name="name" required="required" class="form-control col-md-7 col-xs-12" value="">
						</div>
				       </div>
                          <div class="ln_solid"></div>
                      <div class="form-group profile_ed_f_rm">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 save_pr_v">
                          <input type="submit"  class="btn btn-success sve_bot" value="Save">
                        </div>
                      </div>
                         
                         <!-- <div class="form-group profile_ed_f_rm">
						   <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name"> Image 1 (525x350) <span   class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						     <input accept="video/*" type="file" name="file" id="files" class="form-control col-md-7 col-xs-12" value="">
						</div>
						
						<div id="uploaded_images"></div>
				       </div> 
				       
				       
				     
<div class="add_video_mess_btn">
<label class="myLabel02">
                        <input accept="video/*" id="file_video" name="file_video" type="file">
                        Add Video Message
                    </label>
                </div>
<div class="continue_btn">
<a href="https://www.blogger.com/null" id="continueButton" onclick="submiteCardDetails();" style="cursor: pointer;">Continue</a>
                </div>
<progress id="progressBar" max="100" style="width: 100%; display: none;" value="0"></progress>-->

				

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
<script>
	$(document).ready(function(){
//alert("trttr");
 $("#main_class").change(function(){

    var class_id =$(this).val();
   //alert(class_id);

   $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>fetchsubject",
        data: {class_id:class_id},
        success: function(data)
        {
             //alert(data);
             $("#sub_id").html(data)

        }
        });
    })
});

    </script>
    
    

<script>
$(document).ready(function(){
	$('#uploadImage').submit(function(event){
		if($('#uploadFile').val())
		{
			event.preventDefault();
			$('#loader-icon').hide();
			$('#targetLayer').hide();
			$(this).ajaxSubmit({
				target: '#targetLayer',
				beforeSubmit:function(){
					$('.progress-bar').width('50%');
				},
				uploadProgress: function(event, position, total, percentageComplete)
				{
					$('.progress-bar').animate({
						width: percentageComplete + '%'
					}, {
						duration: 1000
					});
				},
				success:function(){
					$('#loader-icon').hide();
					$('#targetLayer').hide();
					$('#progress-bar').hide();
					$('#flashhhh').css('display', "block")
					 location.reload(); 
				
					
				},
				resetForm: true
			});
		}
		return false;
	});
});

/*
function UpdateStatus(){
        	if($('#uploadFile').val())
		{
			event.preventDefault();
			$('#loader-icon').show();
			$('#targetLayer').hide();
			$(this).ajaxSubmit({
				target: '#targetLayer',
				beforeSubmit:function(){
					$('.progress-bar').width('50%');
				},
				uploadProgress: function(event, position, total, percentageComplete)
				{
					$('.progress-bar').animate({
						width: percentageComplete + '%'
					}, {
						duration: 1000
					});
				},
				success:function(){
					$('#loader-icon').hide();
					$('#targetLayer').show();
				},
				resetForm: true
			});
		}
		return false;
        
   }
    
    /*
$(document).ready(function(){
  
    
   
    
	$('#uploadImage').click(function(event){
		if($('#uploadFile').val())
		{
			event.preventDefault();
			$('#loader-icon').show();
			$('#targetLayer').hide();
			$(this).ajaxSubmit({
				target: '#targetLayer',
				beforeSubmit:function(){
					$('.progress-bar').width('50%');
				},
				uploadProgress: function(event, position, total, percentageComplete)
				{
					$('.progress-bar').animate({
						width: percentageComplete + '%'
					}, {
						duration: 1000
					});
				},
				success:function(){
					$('#loader-icon').hide();
					$('#targetLayer').show();
				},
				resetForm: true
			});
		}
		return false;
	});
});
*/
</script>
