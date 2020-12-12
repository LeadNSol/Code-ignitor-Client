
<div class="right_col" role="main">        
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
      
                <div class="x_panel">
                  <div class="x_title">
                    <h2>User list</h2>
                    <div class="clearfix"></div>
                  </div>          
           <?php
            if(isset($flash_message)){
               if($flash_message == TRUE)
              {
             ?>
             
              <div class="alert alert-success">
              <a class="close" data-dismiss="alert">×</a>
              <strong>Well done!</strong>  Package Subscribe  Sucessfully.
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
                          <th class="c_clg">Name</th>
                          <th class="c_clg">Email</th>
                          <!--<th class="c_clg">Subscribe Package</th>-->
                          <th class="c_clg">Phone</th>
                          <th class="c_clg">Subscription</th>
                        </tr>
                      </thead>
                      <tbody>
            <?php 
            foreach($results as $key=>$value)
            {
            //print_r($results);
            ?>
          <input type="hidden" value="<?php echo $value['u_id']; ?>" id="u_id">
                          <td><?php echo $value['first_name']; ?></td>
                          <td><?php echo $value['email']; ?></td>
                           <td><?php echo $value['phone']; ?></td>
                            <td>

 <button type="button" class="btn btn-success" onclick="window.location.href='<?php echo base_url()?>add_exam_subs_details/<?php echo $value['u_id']; ?>'">Add </button>
 <!--<button type="button" class="btn btn-danger"  onclick="window.location.href='<?php echo base_url()?>delete_subscription/<?php echo $value['u_id']; ?>'">Delete </button>-->         
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
  $( document ).ready(function() {
  function reserve_button(id)
  {
$.ajax
    ({ 
      type: "POST",
        url: "<?php echo base_url(); ?>updateuser",
        data: {u_id:id},
        success: function(result)
        {
           alert(result);
           location.reload();
        }
    });
    }
  });
</script>