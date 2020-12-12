    
	 <!-- /top navigation -->


<?php 
foreach ($results1 as $key => $values) {

			         $email=$values['email'];
					$student_id=$values['u_id'];
					$name=$values['first_name'];
					$subscription=$values['subscription'];
				  $class_id=$values['Class_id'];


}
 ?>       <!-- page content -->
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
							<strong>Well done!</strong>  add Team Member successfully.
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
					echo  form_open_multipart('add_subscription_details/', $attributes);
					?>
	                     <div class="form-group profile_ed_f_rm">
		               <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Select Class<span class="required">*</span>
		              </label>
		              <?php //print_r($main_category);?>
		              <div class="col-md-9 col-sm-9 col-xs-12">
		                  <select class="form-control col-md-7 col-xs-12" name="pack_id" required="required" id="pack_id">
		                     <option value="">Select</option>
		                      <?php
		                      foreach($allclasses as $key=>$val){?>

		                            <option value="<?php echo $val['id'] ?>"><?php echo $val['name'];?></option>
		                      <?php }?>
		                  </select>
		                 
		              </div>
		               </div>
		               <div class="form-group profile_ed_f_rm">
		               <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Select Subject<span class="required">*</span>
		              </label>
		              <?php //print_r($main_category);?>
		              <div class="col-md-9 col-sm-9 col-xs-12">
		                  <select class="form-control col-md-7 col-xs-12" name="subject_id" required="required" id="subject_id">
		                     <option value="">Select</option>
		                     
		                  </select>
		                 
		              </div>
		               </div>
						   <div class="form-group profile_ed_f_rm">
		               <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Amount<span class="required">*</span>
		              </label>
		             
		              <div class="col-md-9 col-sm-9 col-xs-12">
		              	  <input type="text" id="subscribtio_amount" name="subscribtio_amount" required="required" readonly  class="form-control col-md-7 col-xs-12" value=" ">
		                 <input type="hidden"id="expairy_date" name="expairy_date">
		                  
		              </div>
		               </div>

		                     <!--<div class="form-group profile_ed_f_rm">
		               <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Package Price<span class="required">*</span>
		              </label>
		             
		              <div class="col-md-9 col-sm-9 col-xs-12">
		              	  <input type="text" id="price" name="price" required="required" readonly class="form-control col-md-7 col-xs-12" value="">
		                 
		                  
		              </div>
		               </div>-->

		            <div class="form-group profile_ed_f_rm">
		               <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">User Name<span class="required">*</span>
		              </label>
		             
		              <div class="col-md-9 col-sm-9 col-xs-12">
		              	  <input type="text" id="user_name" name="user_name" required="required" readonly  placeholder='User Name' class="form-control col-md-7 col-xs-12" value="<?php echo $name;?> ">
		                 <input type="text"  name="user_id" placeholder='User Id' value="<?php echo $student_id;?> " >
		                  <input type="text"  name="subscription" placeholder='Subscription' value="<?php echo $subscription;?> " >
		                  <input type="text"  name="class_id" placeholder='Class Id' value="<?php echo $class_id;?> " >
		                   <input type="text"  name="end_date" id="expairy_date" placeholder='End Date' value="">
		                   <input type="text"  name="start_date"  placeholder='State Date' value="<?php echo date('Y-m-d'); ?>">
		                  
		              </div>
		               </div>

		                     <div class="form-group profile_ed_f_rm">
		               <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">User Email<span class="required">*</span>
		              </label>
		             
		              <div class="col-md-9 col-sm-9 col-xs-12">
		              	  <input type="text" id="user_email" name="user_email" required="required" readonly  class="form-control col-md-7 col-xs-12" value="<?php echo $email;?> ">
		                 
		                  
		              </div>
		               </div>
		               <div class="form-group profile_ed_f_rm">
		               <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Order Id<span class="required">*</span>
		              </label>
		             
		              <div class="col-md-9 col-sm-9 col-xs-12">
		              	  <input type="text" id="order_id" name="order_id" required="required"   class="form-control col-md-7 col-xs-12">
		                 
		                  
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
<script>
	$(document).ready(function(){
       $("#pack_id").change(function(){
		   //alert("okkkkkkkkkkkkkkkkkkkkkkkk");
		   var class_id = $(this).val();
		  // alert(class_id);
		  
		  $.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>fetchsubject_byid",
			data: {class_id:class_id},
			success: function(data) 
			{
					 //alert(data);
					 $("#subject_id").html(data)
			}
			});
	   });
	   
	   $("#subject_id").change(function(){
		   //alert("okkkkkkkkkkkkkkkkkkkkkkkk");
		   var subject_id = $(this).val();
		  // alert(class_id);		  
		  $.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>fetchamountsubject_byid",
			data: {subject_id:subject_id},
			success: function(data) 
			{
					// alert(data);
					var myarr = data.split("_");
                    $("#subscribtio_amount").val(myarr[0])
                    $("#expairy_date").val(myarr[1])
					//$("#subscribtio_amount").val(data)
			}
			});
	   })
});

    </script>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	