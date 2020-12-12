<?php 
/*$this->load->model('module');
$admin_details=$this->module->get_admindata(); 
$user_email=$admin_details[0]['email'];*/
//echo"<pre>";
//print_r($banner_img);exit;

?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col change_ps_w_ord" role="main">        
         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Update<small>Banner</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    
               <table id="datatable-buttons1" class="table table-striped table-bordered c_clg">
                      <thead>
                        <tr>                      
                          
                          <th class="c_clg">Image</th>
						                    
                          <th style="width:223px;text-align: center;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
					   <?php 
					  foreach($banner_img as $key=>$val)
					  {
					  
					  ?>
                        <tr>
                          
                          
                          <td><img src="<?php echo site_base_url();?>uploads/banner/<?php echo $val['image']?>" alt="No image" class="dn_im"></td>
                       
                          <td> 
						  <div class="image_name_edit_1">
								  <a href="edit_banner_offer/<?php echo $val['id']?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
							   </div>
							  
						  </td>
					  <?php }?>
					  
					  
					 	</tbody>
                    </table> 
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
		  // alert();
			$("#password").change(function (e) {
				//alert('okkkk');
			 var email='<?php echo $user_email;?>';
			 var password=$("#password").val();
			//var email='uttam';
			var datastring='email='+email+'&password='+password;  
			 //alert(datastring);
			 $.ajax({
				type: "POST",
				url: "<?php echo base_url(); ?>admin_main/chn_password_new",
				data: datastring,
				 beforeSend: function() {     
                  $("#wait_msg").html('please wait.....');
                  },
				success: function(data) 
				{
					//alert(data);
					if(data==1)
					{    $("#wait_msg").hide();
						 $("#new_password").prop('disabled',false);
						 $("#confirm_password").prop('disabled',false);
						 $("#new_password").focus();
						 $("#error_password").fadeOut();
						 document.getElementById("invalid_oldpassword").value=1;
		
					}
					else
					{						
						//alert('Invalid password');
						$("#error_password").html('Invalid old Password');
						
						$("#wait_msg").hide();
						return false;
					}
					//console.log(data);					
				}										
			});
		 
        });
		
			 $("#change_pass").click(function (e) {
				// alert()
			 var email='<?php echo $user_email;?>';
			 var password=$("#password").val();
			 var new_password=$("#new_password").val();
			 var confirm_password=$("#confirm_password").val();
			 var set_password_data=$("#invalid_oldpassword").val();
			 
			 //alert(confirm_password);
			//var email='uttam';
			var datastring='email='+email+'&password='+password+'&new_password='+new_password; 
			if(set_password_data==0)
			{
				$("#error_password").html('Invalid old Password')
				$("#password").focus();
				return false;
			}
			if(password=='')
			{
				$("#error_password").hide();
			    $("#error_password").html('Please enter password')
				$("#password").focus();
				return false;
				
			}
			if(new_password=='')
			{  $("#error_password").hide();
			  $("#error_new_password").html('Please enter new password')
				$("#new_password").focus();
				return false;
				
			}
			//alert(confirm_password);
			if(confirm_password=='')
			{  $("#error_new_password").hide();
			   $("#error_confirm_password").html('Please Confirm password')				
				$("#confirm_password").focus();
				return false;
			}
			if(new_password!=confirm_password)
			{
				$("#error_confirm_password").html('Password miss match')					
				$("#confirm_password").focus();
				return false;
			}
			
			else
			{				
			 //alert(datastring);
				 $.ajax({
					type: "POST",
					url: "<?php echo base_url(); ?>admin_main/set_newpassword",
					data: datastring,
					beforeSend: function() {     
                       $("#chng_wait").html('please wait.....');
                    },
					success: function(data) 
					{
						if(data==1)
						{   $("#chng_wait").hide();
					        $("#error_confirm_password").html('Password has been changed successfully')
							
						}
						//console.log(data);					
					}										
				});
			}
		 
        });
			 
});
		  
	</script>
  