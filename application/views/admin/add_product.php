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
								  <span class="error_cl" id="category_id"></span>
							</div>
				       </div>



               <div class="form-group profile_ed_f_rm" style="display:none" id="subcategorydiv">
               <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Sub Category <span class="required">*</span>
               </label>

               <div class="col-md-9 col-sm-9 col-xs-12" >
                  <select class="form-control col-md-7 col-xs-12" name="submain_category" required="required" id="submain_category">
                           <option value="">Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                  </select>
                  <span class="error_cl" id="category_id"></span>
               </div>
               </div>
               <div class="form-group profile_ed_f_rm"  id="priductcategorydiv" style="display:none">
               <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Product Category <span class="required">*</span>
               </label>

               <div class="col-md-9 col-sm-9 col-xs-12" >
                  <select class="form-control col-md-7 col-xs-12" name="product_category"  id="product_category">
                           <option value="">Select</option>

                  </select>
                  <span class="error_cl" id="category_id"></span>
               </div>
               </div>


               <div class="row"  id="sizedivshow" style="display: none">
                 <div class="col-md-8 center_div">

                    <div class="col-md-12">
                     <span class="size_text">Size</span>
                      <div class="col-md-12">
                        <div class="col-md-1"><label>36</label> <input type="checkbox" value="36" name="size_1"></div>
                        <div class="col-md-1"><label>38</label> <input type="checkbox" value="38" name="size_2"></div>
                        <div class="col-md-1"><label>40</label> <input type="checkbox" value="40" name="size_3"></div>
                        <div class="col-md-1"><label>42</label> <input type="checkbox" value="42" name="size_4"></div>
                        <div class="col-md-1"><label>44</label> <input type="checkbox" value="44" name="size_5"></div>
                        <div class="col-md-1"><label>46</label> <input type="checkbox" value="46" name="size_6"></div>
                        <div class="col-md-1"><label>48</label> <input type="checkbox" value="48" name="size_7"></div>
                        <div class="col-md-1"><label>50</label> <input type="checkbox" value="50" name="size_8"></div>
                      </div>
                    </div>
                    <div class="col-md-12">

                      <div class="col-md-4">
                       <span class="size_text">Color</span>
                      </div>
                      <div class="col-md-8">
                        <input type="color" name="product_color_1" id="product_color_1">
                        
                        
                        
						<input type="color" name="product_color_2" id="product_color_2">
						<input type="color" name="product_color_3" id="product_color_3">
						<input type="color" name="product_color_4" id="product_color_4">
						<input type="color" name="product_color_5" id="product_color_5">
						<input type="color" name="product_color_s6" id="product_color_6">
						
                      </div>
                    </div>
                 </div>

               </div>




						<div class="form-group profile_ed_f_rm">
							 <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Product Name <span class="required">*</span>
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								 <input type="text" id="product_name" name="product_name" required="required" class="form-control col-md-7 col-xs-12" value="">
							</div>
				       </div>
					 <div  id="sale_div">
						<div class="form-group profile_ed_f_rm" >
							 <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Price <span class="required">*</span>
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								 <input type="text" id="sale_price" name="sale_price" class="form-control col-md-7 col-xs-12" value="">
							</div>

							</div>
                        	<div class="form-group profile_ed_f_rm">
							 <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Time <span class="required">*</span>
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								 <input type="text" id="datetime" name="datetime" required="required" class="form-control col-md-7 col-xs-12" value="">
							</div>
				             </div>

							<div class="form-group profile_ed_f_rm">
							 <label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">  Our Price <span class="required">*</span>
							</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								 <input type="text" id="offer_price" name="offer_price"  class="form-control col-md-7 col-xs-12" value="">
							</div>
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
  							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Shipping & Return<span class="required">*</span>
  							</label>
  							<div class="col-md-9 col-sm-9 col-xs-12">
  							      <textarea rows="3" cols="50" class="form-control col-md-7 " id="shipping_return" name="shipping_return"></textarea>
  							</div>
            </div>

                      <div class="form-group profile_ed_f_rm">
             							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">important Note:<span class="required">*</span>
             							</label>
             							<div class="col-md-9 col-sm-9 col-xs-12">
             							      <textarea rows="3" cols="50" class="form-control col-md-7 " id="important_note" name="important_note"></textarea>
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
                         <div id="uploaded_images_loader" style="display:none"><img height="80px"src="<?php echo site_base_url()?>ico/loading.gif"></div>
						 <div id="uploaded_images"></div>

                   		</div>
                        </div>

                      <div id="treas_price"  style="display:none">
                      
                      
                            <div class="form-group profile_ed_f_rm">
             							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">MATERIALS<span class="required">*</span>
             							</label>
             							<div class="col-md-9 col-sm-9 col-xs-12">
             							       <input type="text" id="metarial" name="metarial"  class="form-control col-md-7 col-xs-12" value="">
             							</div>
                      </div>
                       <div class="form-group profile_ed_f_rm">
             							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">HARDWARE<span class="required">*</span>
             							</label>
             							<div class="col-md-9 col-sm-9 col-xs-12">
             							     <input type="text" id="hardware" name="hardware"  class="form-control col-md-7 col-xs-12" value="">
             							</div>
                      </div>
                       <div class="form-group profile_ed_f_rm">
             							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">LABOR<span class="required">*</span>
             							</label>
             							<div class="col-md-9 col-sm-9 col-xs-12">
             							     <input type="text" id="labor" name="labor"  class="form-control col-md-7 col-xs-12" value="">
             							</div>
                      </div>
                       <div class="form-group profile_ed_f_rm">
             							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">DUTIES<span class="required">*</span>
             							</label>
             							<div class="col-md-9 col-sm-9 col-xs-12">
             							      <input type="text" id="duties" name="duties"  class="form-control col-md-7 col-xs-12" value="">
             							</div>
                      </div>
                       <div class="form-group profile_ed_f_rm">
             							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">TRANSPORT<span class="required">*</span>
             							</label>
             							<div class="col-md-9 col-sm-9 col-xs-12">
             							     <input type="text" id="transport" name="transport"  class="form-control col-md-7 col-xs-12" value="">
             							</div>
                      </div>
                       <div class="form-group profile_ed_f_rm">
             							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">TRUE COST<span class="required">*</span>
             							</label>
             							<div class="col-md-9 col-sm-9 col-xs-12">
             							     <input type="text" id="truec" name="truec"  class="form-control col-md-7 col-xs-12" value="">
             							</div>
                      </div>
                       <div class="form-group profile_ed_f_rm">
             							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">EVERLANE<span class="required">*</span>
             							</label>
             							<div class="col-md-9 col-sm-9 col-xs-12">
             							     <input type="text" id="everlane" name="everlane"  class="form-control col-md-7 col-xs-12" value="">
             							</div>
                      </div>
                      <div class="form-group profile_ed_f_rm">
             							<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">TRADITIONAL RETAIL<span class="required">*</span>
             							</label>
             							<div class="col-md-9 col-sm-9 col-xs-12">
             							     <input type="text" id="traditional" name="traditional"  class="form-control col-md-7 col-xs-12" value="">
             							</div>
                      </div>
                      
                      </div>
                      
                      
                      
	                    <div class="ln_solid"></div>
                      <div class="form-group profile_ed_f_rm" id="submit_form" >
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
$("#product_category").change(function(){

//  alert();
    $("#sizedivshow").show();

});
$("#submain_category").change(function(){


  //alert("product show");
  var gender= $(this).val();

//  alert(gender);
$("#priductcategorydiv").show();
var dataString='gender='+gender;
 $.ajax({
       type: "POST",
       url: "<?php echo base_url(); ?>productcategory",
       data: dataString,
       success: function(data)
       {
         //alert(data);
            //$("#brandid").html(data)
            $("#product_category").html(data);
       }
       });




});

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
     $('#uploaded_images_loader').show();
	 $("#submit_form").hide();
    },
    success:function(data)
    {
		//alert(data)
	  $('#uploaded_images_loader').hide();
      $('#uploaded_images').html(data);
      $('#files').val('');
	  $("#submit_form").show();
    }
   })
  }
  else
  {
   alert(error);
  }


 });


$("#main_category").change(function(){


  var main_category = $(this).val();
  if(main_category=='7')
  {
    //alert('okkkk');
    $("#subcategorydiv").show();
     $("#treas_price").show();




  }
  else{
      $("#subcategorydiv").hide();
       $("#treas_price").hide();
  }
  //salert(main_category);
 var dataString='main_category='+main_category;
  $.ajax({
  			type: "POST",
  			url: "<?php echo base_url(); ?>brandcategory",
  			data: dataString,
  			success: function(data)
  			{
          // alert(data);
  					 $("#brandid").html(data)
  			}
  			});

});


});
</script>
