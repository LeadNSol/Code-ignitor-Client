
<div class="right_col" role="main">        
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
      
                <div class="x_panel">
                  <div class="x_title">
                    <h2>User Order list</h2>
                    <div class="clearfix"></div>
                  </div>
          
           <?php
            if(isset($flash_message)){
               if($flash_message == TRUE)
              {
             ?>
             
              <div class="alert alert-success">
              <a class="close" data-dismiss="alert">×</a>
              <strong>Well done!</strong>  User Updated Sucessfully successfully.
              </div>
                <?php }else { ?>
                    <div class="alert alert-danger">
                    <a class="close" data-dismiss="alert">×</a>
                    <strong>Oops!</strong> Please Try Again...
                    </div>     
                 <?php } } ?> 
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-buttons" class="table table-striped table-bordered c_clg">
                      <thead>
                        <tr>                      
                          <th class="c_clg">User Name</th>
                          <th class="c_clg">Email</th>
                          <th class="c_clg">Phone Number</th>
                           <th class="c_clg">Question</th>
                              <th class="c_clg">Message</th>
                            
                        </tr>
                      </thead>
                      <tbody>
            <?php 
            foreach($results as $key=>$value)
            {
            
            ?>
                          <td><?php echo $value['first_name']; ?></td>
                          <td><?php echo $value['email']; ?></td>
                           <td><?php echo $value['phone']; ?></td>
                          <td><?php echo $value['question']; ?></td>
                           <td><?php echo $value['message']; ?></td>
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
       
        <!-- /page content -->

        <!-- footer content -->
       