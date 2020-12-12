    <?php 
   $id=$this->uri->segment(2);
	//echo"<pre>";
//	print_r($get_cateory);
		//print_r($main_category);exit;
	?>
	<!-- /top navigation -->
        <!-- page content -->
		<style>
		.img-thumbnail{
	height:250px!important;
}
		</style>
        <div class="right_col change_ps_w_ord" role="main">        
         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Update <small>Product</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                   <div class="u_p_l_a_img_d">
					<?php 	
                    $user_id=1;				   
					$attributes = array('class' => 'form-horizontal');					
					echo  form_open_multipart('edit_appointment/'.$id, $attributes);
					?>
					
						
						<div class="form-group profile_ed_f_rm">
							 <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Doctors Name <span class="required">*</span>
							</label>
							<?php //print_r($main_category);?>
							<div class="col-md-9 col-sm-9 col-xs-12">
								  <select class="form-control col-md-7 col-xs-12" name="doc_name" required="required" id="doc_name">
								  <option value="">Select</option>			  
								  <?php 	  
								  foreach($doc_name as $key=>$val){?>
									<option value="<?php echo $val['id'] ?>" <?php if($val['id']==$doc_name[0]['id']){echo 'selected';;} ?>><?php echo $val['name'] ?></option>
								  <?php }?>
								  </select>
								  
								 
							</div>
				       </div>
						
                        
						 
						 <div class="form-group profile_ed_f_rm">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name"> Name
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							  <input type="text"  name="name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo @$get_cateory[0]['name']?>">
							</div>
						  </div>
						 
						  
						<div class="form-group profile_ed_f_rm" >
							 <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name"> Phone <span class="required">*</span>
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								 <input type="text" id="sale_price" name="phone" class="form-control col-md-7 col-xs-12" value="<?php echo @$get_cateory[0]['phone']?>">
							</div>
							
							</div>
							
							
							<div class="form-group profile_ed_f_rm">
							 <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name"> Date <span class="required">*</span>
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								 <input type="text" id="date" name="date"  class="form-control col-md-7 col-xs-12" value="<?php echo @$get_cateory[0]['date']?>">
							</div>
				       </div>
				       <div class="form-group profile_ed_f_rm">
							 <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Comment <span class="required">*</span>
							</label>
							
							
							 <div class="col-md-9 col-sm-9 col-xs-12">
                           <textarea  name="comment" required="required" class="form-control col-md-7 col-xs-12" ><?php echo @$get_cateory[0]['comment']?></textarea>
                        </div>
				       </div>
				       </div>
						
</div>
                     <div class="uplod_d">
						<input type="submit" value="submit" name="submit" class="uplod"/>
					</div>
                    <?php echo form_close(); ?>
					
						
						
                  </div>
                </div>
              </div>
            </div>
          
        </div>
        <!-- /page content -->

        <!-- footer content -->
  
<script>
function upadte_image(imageid,pid)
{
	
	//alert(imageid);
	//alert(pid);
	
	 var files = $('#image_product'+imageid)[0].files;
  var error = '';
  var form_data = new FormData();
  for(var count = 0; count<files.length; count++)
  {
   var name = files[count].name;
   var extension = name.split('.').pop().toLowerCase();
   if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
   {
    error += "Invalid " + count + " Image File"
   }
   else
   {
    form_data.append("files[]", files[count]);
	//alert(form_data);
	form_data.append("ID", imageid);
	form_data.append("PID", pid);
   }
  }
  if(error == '')
  {
	  
   $.ajax({
    url:"<?php echo base_url(); ?>update_imagee",
    method:"POST",
    data:form_data,
    contentType:false,
    cache:false,
    processData:false,
    beforeSend:function()
    {
     $('#uploaded_images_loader').show();
	 $("#submit_form").hide();
    },
    success:function(data)
    {
		//alert(data)
	  $('#uploaded_images_loader').hide();
	   $("#show_all").html(data);
	    // window.location=" ";
      //$('#uploaded_images').html(data);
      //$('#files').val('');
	  //$("#submit_form").show();
    }
   })
  }
  else
  {
   alert(error);
  }
}

$(document).ready(function(){
	
	var gggg ="<?php echo $get_cateory[0]['type']?>";
	
	//alert(gggg);
	if(gggg=='sale')
		{
			//alert();
			$("#sale_div").show();
			$("#rentprice_div").hide();
			
		}
		else if(gggg=='rent'){
			$("#sale_div").hide();
			$("#rentprice_div").show();
		}
		else
		{
			$("#sale_div").show();
			$("#rentprice_div").show();
			
		}
		
		
		$("#type_sale").change(function(){
		if($(this).val()=='sale')
		{
			//alert();
			$("#sale_div").show();
			$("#rentprice_div").hide();
			
		}
		else if($(this).val()=='rent'){
			$("#sale_div").hide();
			$("#rentprice_div").show();
		}
		else
		{
			$("#sale_div").show();
			$("#rentprice_div").show();
			
		}
	
		
		//alert();
	});
	


});
</script>


  