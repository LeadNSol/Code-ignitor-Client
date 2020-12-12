	
	<?php
	//$this->load->model('apps_model');
	$examcat=$this->product_module->list_exam();	
	?>
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
                    
					
					<div class="form-group profile_ed_f_rm">
					<label class="control-label col-md-3 col-sm-3 col-xs-12 view_le_nme" for="first-name">Select Exam Category <span class="required">*</span>
					</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
						   <select name="type" id="examcat_id" onchange=examcat() class="form-control col-md-7" >
                  <option value="">Select Exam</option>
                  <?php foreach($examcat as $key=>$val){?>
                  <option value="<?php echo $val['id'];?>" ><?php echo $val['eaxm_name'];?></option>
                  <?php }?>									
						   </select>
						</div>						
          </div>
          <br />
          <br />
          <br />					
					<div id="subject"></div>
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
function examcat(){
var id =$('#examcat_id').val();
//alert(id);
  if(id != '')
  {
       $.ajax({
        url:"<?php echo base_url(); ?>fetch_exambyid",
        method:"POST",
        data:{id:id},
        success:function(data)
        {
            //alert(data);
         $('#subject').html(data);
        }
       });
  }else
  {
   $('#examcat_id').html('<option value="">Select Exam</option>');
  }
	
}	

</script>

 