<?php
//echo"<pre>";
// print_r($results);
 
 ?>
<div class="right_col" role="main">        
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
			
                <div class="x_panel">
                  <div class="x_title">
                    <h2>User list</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-buttons1" class="table table-striped table-bordered c_clg">
                      <thead>
                        <tr>                      
                          <th class="c_clg">User Name</th>
                          <th class="c_clg">First Name</th>
						  <th class="c_clg">Last Name</th>
                          <th class="c_clg">Email Id</th>
						   <th class="c_clg">Fitnes Type</th>
						   <th class="c_clg">Status</th>
                          <th style="width:223px;text-align: center;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php 
					  foreach($results as $key=>$value)
					  {
					  
					  ?>
                        <tr id="row<?php echo $value['id']?>">
                          <td><?php echo $value['username']; ?></td>
                          <td><?php echo $value['first_name']; ?></td>
                          <td><?php echo $value['last_name']; ?></td>
                          <td><?php echo $value['email']; ?></td>
                          <td><?php echo $value['fitness_type']; ?></td>
                          <td>						  
						  <?php 						  
						   if($value['status']=='Active')
						   {
							   ?>
							   
							  <i class="fa fa-check act_s" aria-hidden="true"></i>
						<?php 	  
						   }
                          else
                          {
							  ?>
							  
							<i class="fa fa-times dec_s" aria-hidden="true"></i>
						<?php	  
						  }	
						  ?>						  
						  </td>
                          <td>
						   <div class="Action">
						    <a href="<?php echo base_url()?>edit_member/<?php echo $value['id']; ?>"> <span class="Action_icon_1"><i class="fa fa-pencil" aria-hidden="true"></i></span></a>
						     <span class="Action_icon_2"><a href="javascript:void();" data-toggle="modal" data-target="#myModal" onclick="delete_user('<?php echo $value['id'];?>')"><i class="fa fa-trash-o" aria-hidden="true"></i></a></span>
						     <span class="Action_icon_3">
							 <?php 
							  if($value['status']=='Active')
							  {
							 ?>
								<button type="button" class="btn btn-danger approved_b">Deactive</button>
							  <?php }else{?>
								<button type="button" class="btn btn-success approved_b">Active</button>
							  <?php }?>
							 </span>
						     
						   
						   </div>
						  </td>
                        
                        </tr>
					  <?php }?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>
          
        </div>
          
        </div>
		
		
		
		 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md" style="width:450px;">
    <div class="modal-content modl_cntnt">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
            <h4 class="modal-title">Are you sure you want to delete this Item? </h4>
        </div>
			<!--<div class="modal-body mb_b">
			</div>-->
	  <div class="modal-footer" style="margin-top:0;">
	  <input type="hidden" id="de_userid">
          <button type="button" class="btn btn-default ok_board_pop" id="delete_setuser">Yes</button>
          <button type="button" class="btn btn-default ok_board_pop" data-dismiss="modal">No</button>
         
		</div>
       
      </div>
    </div>
  </div>
        <!-- /page content -->

        <!-- footer content -->
       