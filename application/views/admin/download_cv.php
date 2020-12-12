<?php
//echo"<pre>";
//print_r($offer_list);

 
 
 ?>
<div class="right_col" role="main">        
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
			
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Offers list</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-buttons1" class="table table-striped table-bordered c_clg">
                      <thead>
                        <tr>                      
                          <th class="c_clg">Post Name</th>
                          <th class="c_clg">Candidate Name</th>
						    <th class="c_clg">Download CV</th>
						  
                        
                        </tr>
                      </thead>
                      <tbody>
					 <?php foreach($career_list as $key=>$val){?> 
                          <tr id="row">
						   <td>
						 <?php echo $val['name'];?>
						  </td>
                          <td>
						  <ol type="1">
						 <?php foreach($apply_job as $key1=>$val1){
						 
						 
						 if($val['id']==$val1['apply_post'])
						 {
						
						 
						  ?>
						   <li><?php echo $val1['name']; ?> </li>
						   <?php
						 }
						
						
						 
						 ?> 
						  
						 
						   <?php }?>
						  </ol>
						  </td>
                         
						   <td>
						   
						  <ol type="1">
						 <?php foreach($apply_job as $key1=>$val1){
						 
						 
						 if($val['id']==$val1['apply_post'])
						 {
						
						 
						  ?>
						   <li>

								<a  class="btn btn-primary" href="<?php echo site_base_url()?>uploads/CV/<?php echo $val1['cv']; ?>" download="<?php echo $val1['name']; ?>"> Download CV</a>
						   </li>
						   <?php
						 }
						
						
						 
						 ?> 
						  
						 
						   <?php }?>
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
       