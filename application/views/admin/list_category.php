
<div class="right_col" role="main">        
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
			
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Category list</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-buttons" class="table table-striped table-bordered c_clg">
                      <thead>
                        <tr> 
                          <th class="c_clg">#</th>    
                          <th class="c_clg">Name</th>
                         <!-- <th class="c_clg">Packege Name</th>-->
                         <th style="width:223px;text-align: center;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php 
					  $i=1;
					  foreach($results as $key=>$value)
					  {
					  
					  ?>
					      <td><?php echo $i; ?></td>
                          <td><?php echo $value['name']; ?></td>
                          <!--<td><?php //echo $value['pack_name']; ?></td>-->
                          <td>
						   <div class="Action">
						    <a href="<?php echo base_url()?>edit_class/<?php echo $value['id']; ?>"><span class="Action_icon_1"><i class="fa fa-pencil" aria-hidden="true"></i></span></a>
							<a href="<?=site_url("")?>delete_class/<?php echo $value['id']?>"  onClick=" return confirm('Are You Sure to Delete order?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
						   </div>
						   </td>      
                  </tr>
					  <?php $i++; }?>
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
       