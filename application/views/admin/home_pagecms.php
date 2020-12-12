<?php
//echo"<pre>";
 //print_r($home_welocme);
 
 ?>
<div class="right_col" role="main">        
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
			
                <div class="x_panel">
                  <div class="x_title">
                    <h2>HOME PAGE CMS</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-buttons1" class="table table-striped table-bordered c_clg">
                      <thead>
                        <tr>                      
                          <th class="c_clg">Title</th>
                          <th class="c_clg">Description</th>
						   <th class="c_clg">image</th>
						  <th class="c_clg">Action</th>
                          
                        </tr>
                      </thead>
                      <tbody>
					   <?php 
					 for($i=0;$i<=4;$i++)
					  {
					 
					  ?>
					    <tr id="row">
							<td><?php echo $home_welocme[$i]['title']?></td>
							<td style="width:500px"><?php echo $home_welocme[$i]['des']?></td>			
						    <td><img src="<?php echo site_base_url()?>uploads/offer_img/<?php echo $home_welocme[$i]['image'];?>" height="100px"width="150px"></td>						 
							
                   <?php
						if($home_welocme[$i]['id']==1)
						{
						?>
						<td><a href="<?php echo base_url()?>edit_welcome/<?php echo $home_welocme[$i]['id']?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
						  <?php
						}
						else
						{
						?>
							<td><a href="<?php echo base_url()?>edit_welcome1/<?php echo $home_welocme[$i]['id']?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
					<?php
					}
				   ?>
				    </tr>
				   <?php }?>
					 </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>
         <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
			
                <div class="x_panel">
                  <div class="x_title">
                    <h2>SERVICE PAGE CMS</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-buttons1" class="table table-striped table-bordered c_clg">
                      <thead>
                        <tr>                      
                          <th class="c_clg">Title</th>
                          <th class="c_clg">Description</th>
						   <th class="c_clg">image</th>
						  <th class="c_clg">Action</th>
                          
                        </tr>
                      </thead>
                      <tbody>
					  
					    <tr id="row">
							<td><?php echo $home_welocme[5]['title']?></td>
							<td style="width:500px"><?php echo $home_welocme[5]['des']?></td>			
						    <td><img src="<?php echo site_base_url()?>uploads/offer_img/<?php echo $home_welocme[5]['image'];?>" height="100px"width="150px"></td>						 
							
                  
						<td><a href="<?php echo base_url()?>edit_welcome1/<?php echo $home_welocme[5]['id']?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
						
				    </tr>
				
					 </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div> 
        
		<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
			
                <div class="x_panel">
                  <div class="x_title">
                    <h2>TESTDRIVE PAGE CMS</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-buttons1" class="table table-striped table-bordered c_clg">
                      <thead>
                        <tr>                      
                          <th class="c_clg">Title</th>
                          <th class="c_clg">Description</th>
						   <th class="c_clg">image</th>
						  <th class="c_clg">Action</th>
                          
                        </tr>
                      </thead>
                      <tbody>
					  
					    <tr id="row">
							<td><?php echo $home_welocme[6]['title']?></td>
							<td style="width:500px"><?php echo $home_welocme[6]['des']?></td>			
						    <td><img src="<?php echo site_base_url()?>uploads/offer_img/<?php echo $home_welocme[6]['image'];?>" height="100px"width="150px"></td>						 
							
                  
						<td><a href="<?php echo base_url()?>edit_welcome1/<?php echo $home_welocme[6]['id']?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
						
				    </tr>
				
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
       