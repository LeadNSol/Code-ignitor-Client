<?php
//echo"<pre>";
//print_r($offer_list);
 
 ?>
<div class="right_col" role="main">        
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
			
                <div class="x_panel">
                  <div class="x_title">
                    <h2>VEHCILE EXCHNAGE</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="list_offer" class="table table-striped table-bordered c_clg">
                      <thead>
                        <tr>                      
                          <th class="c_clg">Name</th>
                          <th class="c_clg">Email ID</th>
						    <th class="c_clg">Mobile</th>
						    <th class="c_clg">City</th>
						    <th class="c_clg">State</th>
						    <th class="c_clg">current_vechile</th>
						    <th class="c_clg">Kilometer</th>
						  
                         <th class="c_clg">Action</th>
                        </tr>
                      </thead>
                      <tbody>
					 <?php foreach($data as $key=>$val){
					 ?> 
					
                          <tr id="row">
                          <td><?php echo $val['fill_name'];?></td>
						   <td><?php echo $val['email_id'];?></td>
                          <td><?php echo $val['mobile'];?></td>
                          <td><?php echo $val['city'];?></td>
                          <td><?php echo $val['state'];?></td>
                          <td><?php echo $val['current_vechile'];?></td>
                          <td><?php echo $val['kilometer'];?></td>
						   
                          <td>
						   <div class="Action">
							
							<a href="<?php echo base_url()?>del_excahnge/<?php echo $val['excahnge_id'] ?>"   onClick=" return confirm('Are You Sure to Delete Item?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
							
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
  <script>
  $(document).ready(function(){
    $('#list_offer').DataTable();
});
  </script>
        <!-- /page content -->

        <!-- footer content -->
       