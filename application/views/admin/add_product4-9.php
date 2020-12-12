<?php 
//echo"<pre>";
//print_r($category);exit;
?>     
	 <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col change_ps_w_ord" role="main">        
         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add <small>Category</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
				  
				   <?php
						if(isset($flash_message)){
						   if($flash_message == TRUE)
							{
						 ?>
						 
						  <div class="alert alert-success">
							<a class="close" data-dismiss="alert">×</a>
							<strong>Well done!</strong>  Social Media updated successfully.
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
					$attributes = array('class' => 'form-horizontal form-label-left','id'=>'addproduct');					
					echo  form_open_multipart('add_product/', $attributes);
					?>
                    
					     <div class="form-group profile_ed_f_rm">
							 <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Category <span class="required">*</span>
							</label>
							<?php //print_r($main_category);?>
							<div class="col-md-9 col-sm-9 col-xs-12">
								  <select class="form-control col-md-7 col-xs-12" name="main_category" required="required" id="main_category">
								  <option value="">Select</option>			  
								  <?php 	  
								  foreach($category as $key=>$val){?>
									<option value="<?php echo $val['main_cat_id'] ?>"><?php echo $val['name'] ?></option>
								  <?php }?>
								  </select>
								  <span class="error_cl" id="category_id">ddedddeeede</span>
								 
							</div>
				       </div>
					   
					   
					  <!--  <div class="form-group profile_ed_f_rm">
						 <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Brand<span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						      <select class="form-control col-md-7 col-xs-12" name="type_brand" id="">
							  <option value="" >Select Brand</option>
							  <option value="Philips">Philips</option>
							  <option value="GVS Oxygen">GVS Oxygen</option>
							  <option value="SWASTIK">SWASTIK</option>
							  <option value="GVS Oxygen">ResMed</option>
							  <option value="Respironics">Respironics</option>
							  <option value="BMC">BMC</option>
							  </select>
						</div>
				       </div> -->
					   
					   <div class="form-group profile_ed_f_rm">
						 <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Type<span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						      <select class="form-control col-md-7 col-xs-12" name="type_sale" id="type_sale">
							  <option value="" >Select type</option>
							  <option value="sale">Sale</option>
							  <option value="rent">Rent</option>
							  <option value="both">Both</option>
							  </select>
						</div>
				       </div>
						<div class="form-group profile_ed_f_rm">
							 <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Product Name <span class="required">*</span>
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								 <input type="text" id="product_name" name="product_name" required="required" class="form-control col-md-7 col-xs-12" value="">
							</div>
				       </div>
					 <div style="display:none" id="sale_div">
						<div class="form-group profile_ed_f_rm" >
							 <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name"> Sale Price <span class="required">*</span>
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								 <input type="text" id="sale_price" name="sale_price" class="form-control col-md-7 col-xs-12" value="">
							</div>
							
							</div>
							
							
							<div class="form-group profile_ed_f_rm">
							 <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name"> Offer Price <span class="required">*</span>
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								 <input type="text" id="offer_price" name="offer_price"  class="form-control col-md-7 col-xs-12" value="">
							</div>
				       </div>
				       </div>	
					     <div id="rentprice_div" style="display:none">
						   <div class="form-group profile_ed_f_rm">
								 <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name"> Rent Price (Per Day) <span class="required">*</span>
								</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									 <input type="text" id="rent_price_days" name="rent_price_days"  class="form-control col-md-7 col-xs-12" value="">
								</div>
						   </div>
						  
							<div class="form-group profile_ed_f_rm">
								 <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name"> Rent Price(Per Month) <span class="required">*</span>
								</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									 <input type="text" id="rent_month" name="rent_month"  class="form-control col-md-7 col-xs-12" value="">
								</div>
						   </div>
					   </div>
					   
					   
					    <div class="form-group profile_ed_f_rm">
							 <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Video Url
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								 <input type="text" id="video_url" name="video_url"  class="form-control col-md-7 col-xs-12" value="">
							</div>
				       </div>
					   
					   <div class="form-group profile_ed_f_rm">
							 <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Items<span class="required">*</span>
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								 <input type="text" id="items" name="items"  class="form-control col-md-7 col-xs-12" value="">
							</div>
				       </div>
					   
						<div class="form-group profile_ed_f_rm">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Product Description<span class="required">*</span>
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							      <textarea rows="3" cols="50" class="form-control col-md-7 ckeditor" id="description" name="description"></textarea>
							</div>
                      </div>
					  
					  <div class="form-group profile_ed_f_rm">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Product details<span class="required">*</span>
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							      <textarea rows="3" cols="50" class="form-control col-md-7 ckeditor" id="details" name="details"></textarea>
							</div>
                      </div>
					  <div class="form-group profile_ed_f_rm">
						<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Select Multiple Image <span class="required">*</span>
						</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
                           <input type="file" name="files" id="files" multiple required="required" class="form-control col-md-7 col-xs-12" value="" />
						   
						</div>
				       </div> 
					   
					   <div class="form-group profile_ed_f_rm">
					    <div style="clear:both"></div>
					   	
					    <div class="col-md-12" align="right">
						 <br />
                         <div id="uploaded_images"></div>
				  
                   		</div>
                        </div>						
					   
	                    <div class="ln_solid"></div>
                      <div class="form-group profile_ed_f_rm">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 save_pr_v">
                          <input type="button" class="btn btn-success sve_bot" value="Save" id="add_productnow">
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
	
	//alert();
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
	
	$("#add_productnow").click(function(){
		
		//alert("okkk");
		var main_category = $("#main_category").val();
		var type_sale = $("#type_sale").val();
		var product_name = $("#product_name").val();
		var sale_price = $("#sale_price").val();
		var rent_price_days = $("#rent_price_days").val();
		var rent_month = $("#rent_month").val();
		var offer_price = $("#offer_price").val();
		var items = $("#items").val();
		var description = $("#description").val();
		var site_image = $("#site_image").val();
		
		if(main_category=='')
		{
			//alert("Please Select Category");
			$("#main_category").focus();
			return false;
		}
		else if(type_sale=='')
		{
			alert("Please Select Type");
			return false;
		}
		else if(product_name=='')
		{
			alert("Please Enter  Product Name");
			return false;
		}
		else if(type_sale=='')
		{
			alert("Please Select Type");
			return false;
		}
		else{
			$("#addproduct").submit();
		}
	
	});
	
	
});
</script>

<script>
$(document).ready(function(){
	//alert();
 $('#files').change(function(){
  var files = $('#files')[0].files;
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
   }
  }
  if(error == '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>Upload_multiple/upload",
    method:"POST",
    data:form_data,
    contentType:false,
    cache:false,
    processData:false,
    beforeSend:function()
    {
     $('#uploaded_images').html("<label class='text-success'>Uploading...</label>");
    },
    success:function(data)
    {
		//alert(data)
     $('#uploaded_images').html(data);
     $('#files').val('');
    }
   })
  }
  else
  {
   alert(error);
  }
 });
});
</script>


 