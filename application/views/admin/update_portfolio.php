<?php 
$this->load->model('module');
$admin_details=$this->module->get_admindata(); 
$user_email=$admin_details[0]['email'];
//echo"<pre>";
//print_r($portfolio);exit;


?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col change_ps_w_ord" role="main">        
         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Update<small>Feedback</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    
               <table id="list_portfoloio" class="table table-striped table-bordered c_clg">
                      <thead>
                        <tr>                      
                          <th class="c_clg">Name</th>
                        
						   <th class="c_clg">Address</th>
						    <th class="c_clg">Comment</th>
							  <th class="c_clg">Image</th>  
							  <th class="c_clg">Show in site</th>
						               
                          <th style="width:223px;text-align: center;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php 
					  foreach($portfolio as $key=>$val)
					  {
					  
					  ?>
                        <tr>
                          
                          <td><?php echo $val['name']?></td>
                        
							<td><?php echo $val['address']?></td>
							<td><?php echo $val['comment']?></td>
							
							  <td><img src="<?php echo site_base_url();?>uploads/gallery/<?php echo $val['img']?>" alt="No image" class="dn_im"></td>
							  <td> <select id="show_issite" onchange="site_show(this.value,'<?php echo $val['id']?>')"> 
							 <option value="yes" <?php if($val['show_ste']=='yes'){echo 'selected';} ?>>YES</option>
							  <option value="no" <?php if($val['show_ste']=='no'){echo 'selected';} ?>>NO</option>
							        </select>
							  </td>
                          <td> 
						  <div class="image_name_edit_1">
								  <a href="edit_portfolio/<?php echo $val['id']?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
							   </div>
							   <div class="image_name_edit_1">
							          <a href="admin_main/del_portfolio/<?php echo $val['id']?>" onClick=" return confirm('Are You Sure to Delete Item?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
 
	 function site_show(str,id)
	  {
		// var show_site=$(this).val();
		// alert(str);
		 //alert(id);
		 $.ajax({
				 type: "POST",
				 url: "<?php echo base_url()?>update_feedback",
				 data:{show_site:str,id:id},
				success: function(response) 
				 {	
					//alert(response);	
					//$("#model_group").html(response);					
				 }
				
			});
		  
	  }
	   $(document).ready(function(){
    $('#list_portfoloio').DataTable();
});
  </script>
  