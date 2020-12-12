<?php
//echo"<pre>";
// print_r($member_details);
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
				  <?php 				
					$attributes = array('class' => 'form-horizontal');					
					echo  form_open_multipart('admin_main/more_details/'.$user_id, $attributes);
					?>
					
					
				 <div class="form-style-2-heading">Provide your information</div>
						<form action="" method="post">
							<label for="field1">
							    <div class="col-sm-4">    
								  <span class="f_s_f">Contact Persion <span class="required">*</span></span>
								</div>
								<div class="col-sm-8">    
							       <?php echo @$results[0]['contact_person'];?>
   								</div>
								<div class="clearfix"></div>
							</label>
							
							<label for="field2">
								<div class="col-sm-4">    
								  <span class="f_s_f">Phone No <span class="required">*</span></span>
								</div>
								<div class="col-sm-8">    
							       <?php echo $results[0]['phone_no'];?>
   								</div>
								<div class="clearfix"></div>
							</label>
							
							
							<label for="field3">
								<div class="col-sm-4">    
								  <span class="f_s_f">Email <span class="required">*</span></span>
								</div>
								<div class="col-sm-8">    
							      <?php echo $results[0]['email'];?>
   								</div>
								<div class="clearfix"></div>
							</label>
							<label for="field3">
								<div class="col-sm-4">    
								  <span class="f_s_f">Booking Date <span class="required">*</span></span>
								</div>
								<div class="col-sm-8">    
							      <?php echo $results[0]['booking_Date'];?>
   								</div>
								<div class="clearfix"></div>
							</label>
							<label for="field3">
								<div class="col-sm-4">    
								  <span class="f_s_f">Address <span class="required">*</span></span>
								</div>
								<div class="col-sm-8">    
							      <?php echo $results[0]['address'];?>
   								</div>
								<div class="clearfix"></div>
							</label>
							<label for="field3">
								<div class="col-sm-4">    
								  <span class="f_s_f">Pincode <span class="required">*</span></span>
								</div>
								<div class="col-sm-8">    
							      <?php echo $results[0]['pincode'];?>
   								</div>
								<div class="clearfix"></div>
							</label>
							<label for="field3">
								<div class="col-sm-4">    
								  <span class="f_s_f">Order Number <span class="required">*</span></span>
								</div>
								<div class="col-sm-8">    
							      <?php echo $results[0]['order_number'];?>
   								</div>
								<div class="clearfix"></div>
							</label>
							<label for="field3">
								<div class="col-sm-4">    
								  <span class="f_s_f">transaction id <span class="required">*</span></span>
								</div>
								<div class="col-sm-8">    
							      <?php echo $results[0]['transaction_id'];?>
   								</div>
								<div class="clearfix"></div>
							</label>
							<label for="field3">
								<div class="col-sm-4">    
								  <span class="f_s_f">Order Status<span class="required">*</span></span>
								</div>
								<div class="col-sm-8">    
							      <?php echo $results[0]['order_status'];?>
   								</div>
								<div class="clearfix"></div>
							</label>
							<label for="field3">
								<div class="col-sm-4">    
								  <span class="f_s_f">Payment Type<span class="required">*</span></span>
								</div>
								<div class="col-sm-8">    
							      <?php echo $results[0]['payment_type'];?>
   								</div>
								<div class="clearfix"></div>
							</label>
							<label for="field3">
								<div class="col-sm-4">    
								  <span class="f_s_f">State<span class="required">*</span></span>
								</div>
								<div class="col-sm-8">    
							      <?php echo $results[0]['state'];?>
   								</div>
								<div class="clearfix"></div>
							</label>
							<label for="field3">
								<div class="col-sm-4">    
								  <span class="f_s_f">City<span class="required">*</span></span>
								</div>
								<div class="col-sm-8">    
							      <?php echo $results[0]['city'];?>
   								</div>
								<div class="clearfix"></div>
							</label>
							<label for="field3">
								<div class="col-sm-4">    
								  <span class="f_s_f">Locality<span class="required">*</span></span>
								</div>
								<div class="col-sm-8">    
							      <?php echo $results[0]['locality'];?>
   								</div>
								<div class="clearfix"></div>
							</label>
							<label for="field3">
								<div class="col-sm-4">    
								  <span class="f_s_f">Amount<span class="required">*</span></span>
								</div>
								<div class="col-sm-8">    
							      <?php echo $results[0]['amount'];?>
   								</div>
								<div class="clearfix"></div>
							</label>	
					  </form>				
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
                <div>
	<a href="#"> <span class="Action_icon_1"><i class="" aria-hidden="true"></i></span>Print</a>
							</div
              </div>
          </div>
          
        </div>
          
        </div>
        <!-- /page content -->

        <!-- footer content -->
     