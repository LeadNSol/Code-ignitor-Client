
<div class="right_col" role="main">        
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
      
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Subscription List</h2>
                    <div class="clearfix"></div>
                  </div>
          
           <?php
            if(isset($flash_message)){
               if($flash_message == TRUE)
              {
             ?>
             
              <div class="alert alert-success">
              <a class="close" data-dismiss="alert">×</a>
              <strong>Well done!</strong>  Item Updated Sucessfully.
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
                    
                    <table id="datatable-buttons" class="display table table-striped table-bordered c_clg dom-jQuery-events">
                      <thead>
                        <tr>                      
                          <th class="c_clg">Exam Name</th>
                          <th class="c_clg">User Name</th>
                          <th class="c_clg">Order Id</th>
						  <th class="c_clg">Price</th>
						  <th class="c_clg">Start Date</th>
                           <th class="c_clg">End Date</th>
                         <th style="width:100px;text-align: center;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
            <?php 
            foreach($results as $key=>$value){?>          
                        <tr>
                          <td><?php echo $value['eaxm_name']; ?></td>
                          <td><?php echo $value['first_name'].$value['last_name']; ?></td>
                          <td><?php echo $value['order_id']; ?></td>
                          <td><?php echo $value['amount']; ?></td>
                          <td><?php echo $value['start_date']; ?></td>
                          <td><?php echo $value['end_date']; ?></td>
                <td>
               <div class="Action">
                <!-- <a href="<?php echo base_url()?>edit_exam/<?php echo $value['id']; ?>"><span class="Action_icon_1"><i class="fa fa-pencil" aria-hidden="true"></i></span></a>-->
              <a href="<?=site_url("")?>delete_exam_subscription/<?php echo $value['ex_subs_id']?>"  onClick=" return confirm('Are You Sure to Delete Item?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
       
        <!-- /page content -->

        <!-- footer content -->
       